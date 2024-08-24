<?php

// Copyright (C) 2010-2024, the Friendica project
// SPDX-FileCopyrightText: 2010-2024 the Friendica project
//
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace Friendica\Worker;

use DOMDocument;
use Friendica\Content\Text\HTML;
use Friendica\Core\Logger;
use Friendica\DI;
use Friendica\Model\Profile;
use Friendica\Model\User;
use Friendica\Network\HTTPClient\Client\HttpClientAccept;
use Friendica\Network\HTTPClient\Client\HttpClientOptions;
use Friendica\Network\HTTPClient\Client\HttpClientRequest;
use GuzzleHttp\Psr7\Uri;

/* This class is used to verify the homepage link of a user profile.
 * To do so, we look for rel="me" links in the given homepage, if one
 * of them points to the Friendica profile of the user, a verification
 * mark is added to the link.
 *
 * To reverse the process, if a homepage link is given, it is displayed
 * with the rel="me" attribute as well, so that 3rd party tools can
 * verify the connection between the two pages.
 *
 * This task will be performed by the worker on a daily basis _and_ every
 * time the user changes their homepage link. In the first case the priority
 * of the task is set to LOW, with the second case it is MEDIUM.
 *
 * rel-me microformat docs https://microformats.org/wiki/rel-me
 */
class CheckRelMeProfileLink
{
	/* Checks the homepage of a profile for a rel-me link back to the user profile
	 *
	 * @param $uid (int) the UID of the user
	 */
	public static function execute(int $uid)
	{
		Logger::notice('Verifying the homepage', ['uid' => $uid]);
		Profile::update(['homepage_verified' => false], $uid);

		$owner = User::getOwnerDataById($uid);
		if (empty($owner['homepage'])) {
			Logger::notice('The user has no homepage link.', ['uid' => $uid]);
			return;
		}

		$xrd_timeout = DI::config()->get('system', 'xrd_timeout');
		$curlResult  = DI::httpClient()->get($owner['homepage'], HttpClientAccept::HTML, [HttpClientOptions::TIMEOUT => $xrd_timeout, HttpClientOptions::REQUEST => HttpClientRequest::CONTACTVERIFIER]);
		if (!$curlResult->isSuccess()) {
			Logger::notice('Could not cURL the homepage URL', ['owner homepage' => $owner['homepage']]);
			return;
		}

		$content = $curlResult->getBodyString();
		if (!$content) {
			Logger::notice('Empty body of the fetched homepage link). Cannot verify the relation to profile of UID %s.', ['uid' => $uid, 'owner homepage' => $owner['homepage']]);
			return;
		}

		$doc = new DOMDocument();
		if (!@$doc->loadHTML($content)) {
			Logger::notice('Could not parse the content');
			return;
		}

		if (HTML::checkRelMeLink($doc, new Uri($owner['url']))) {
			Profile::update(['homepage_verified' => true], $uid);
			Logger::notice('Homepage URL verified', ['uid' => $uid, 'owner homepage' => $owner['homepage']]);
		} else {
			Logger::notice('Homepage URL could not be verified', ['uid' => $uid, 'owner homepage' => $owner['homepage']]);
		}
	}
}
