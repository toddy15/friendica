<?php

if(! function_exists("string_plural_select_ar")) {
function string_plural_select_ar($n){
	$n = intval($n);
	if ($n==0) { return 0; } else if ($n==1) { return 1; } else if ($n==2) { return 2; } else if ($n%100>=3 && $n%100<=10) { return 3; } else if ($n%100>=11 && $n%100<=99) { return 4; } else  { return 5; }
}}
$a->strings['Access denied.'] = 'رُفض الوصول.';
$a->strings['User not found.'] = 'لم يُعثر على المستخدم.';
$a->strings['Access to this profile has been restricted.'] = 'قُيِّد الوصول لهذا الملف الشخصي.';
$a->strings['Events'] = 'الأحداث';
$a->strings['View'] = 'اعرض';
$a->strings['Previous'] = 'السابق';
$a->strings['Next'] = 'التالي';
$a->strings['today'] = 'اليوم';
$a->strings['month'] = 'شهر';
$a->strings['week'] = 'أسبوع';
$a->strings['day'] = 'يوم';
$a->strings['list'] = 'قائمة';
$a->strings['User not found'] = 'لم يُعثر على المستخدم';
$a->strings['This calendar format is not supported'] = 'تنسيق هذا التقويم غير مدعوم';
$a->strings['No exportable data found'] = 'لم يُعثر على بيانات قابلة للتصدير';
$a->strings['calendar'] = 'تقويم';
$a->strings['Public access denied.'] = 'رُفض الوصول العلني.';
$a->strings['The requested item doesn\'t exist or has been deleted.'] = 'العنصر غير موجود أو حُذف.';
$a->strings['The feed for this item is unavailable.'] = 'تغذية هذا العنصر غير متوفرة.';
$a->strings['Permission denied.'] = 'رُفض الإذن.';
$a->strings['Item not found'] = 'لم يُعثر على العنصر';
$a->strings['Edit post'] = 'عدّل المشاركة';
$a->strings['Save'] = 'احفظ';
$a->strings['Loading...'] = 'يحمل...';
$a->strings['Upload photo'] = 'ارفع صورة';
$a->strings['upload photo'] = 'ارفع صورة';
$a->strings['Attach file'] = 'أرفق ملفًا';
$a->strings['attach file'] = 'أرفق ملفًا';
$a->strings['Insert web link'] = 'أدرج رابط ويب';
$a->strings['web link'] = 'رابط ويب';
$a->strings['Insert video link'] = 'أدرج رابط فيديو';
$a->strings['video link'] = 'رابط فيديو';
$a->strings['Insert audio link'] = 'إدراج رابط ملف صوتي';
$a->strings['audio link'] = 'رابط ملف صوتي';
$a->strings['Set your location'] = 'عيّن موقعك';
$a->strings['set location'] = 'عين الموقع';
$a->strings['Clear browser location'] = 'امسح موقع المتصفح';
$a->strings['clear location'] = 'امسح الموقع';
$a->strings['Please wait'] = 'يرجى الانتظار';
$a->strings['Permission settings'] = 'إعدادات الأذونات';
$a->strings['CC: email addresses'] = 'أرسله إلى عناوين البريد الإلكتروني';
$a->strings['Public post'] = 'مشاركة علنية';
$a->strings['Set title'] = 'عين العنوان';
$a->strings['Categories (comma-separated list)'] = 'الفئات (قائمة مفصولة بفاصلة)';
$a->strings['Example: bob@example.com, mary@example.com'] = 'مثل: bob@example.com, mary@example.com';
$a->strings['Preview'] = 'معاينة';
$a->strings['Cancel'] = 'ألغ';
$a->strings['Bold'] = 'عريض';
$a->strings['Italic'] = 'مائل';
$a->strings['Underline'] = 'تحته خط';
$a->strings['Quote'] = 'اقتبس';
$a->strings['Code'] = 'شفرة';
$a->strings['Link'] = 'رابط';
$a->strings['Link or Media'] = 'رابط أو وسائط';
$a->strings['Message'] = 'الرسالة';
$a->strings['Browser'] = 'المتصفح';
$a->strings['Permissions'] = 'الأُذونات';
$a->strings['Open Compose page'] = 'افتح صفحة الإنشاء';
$a->strings['Event can not end before it has started.'] = 'لا يمكن أن ينتهي الحدث قبل أن يبدأ.';
$a->strings['Event title and start time are required.'] = 'عنوان الحدث و وقت بدئه إلزاميان.';
$a->strings['Create New Event'] = 'أنشئ حدثاً جديدًا';
$a->strings['Event details'] = 'تفاصيل الحدث';
$a->strings['Starting date and Title are required.'] = 'تاريخ البدء والعنوان إلزاميان.';
$a->strings['Event Starts:'] = 'يبدأ الحدث في:';
$a->strings['Required'] = 'إلزامي';
$a->strings['Finish date/time is not known or not relevant'] = 'وقت\تاريخ الانتهاء مجهول أو ليس له صلة';
$a->strings['Event Finishes:'] = 'ينتهي الحدث في:';
$a->strings['Description:'] = 'الوصف:';
$a->strings['Location:'] = 'الموقع:';
$a->strings['Title:'] = 'العنوان:';
$a->strings['Share this event'] = 'شارك هذا الحدث';
$a->strings['Submit'] = 'أرسل';
$a->strings['Basic'] = 'أساسي';
$a->strings['Advanced'] = 'متقدم';
$a->strings['Failed to remove event'] = 'فشلت إزالة الحدث';
$a->strings['Photos'] = 'الصور';
$a->strings['Upload'] = 'ارفع';
$a->strings['Files'] = 'الملفات';
$a->strings['Submit Request'] = 'أرسل الطلب';
$a->strings['You already added this contact.'] = 'أضفت هذا المتراسل سلفًا.';
$a->strings['The network type couldn\'t be detected. Contact can\'t be added.'] = 'تعذر اكتشاف نوع الشبكة. لا يمكن إضافة المتراسل.';
$a->strings['Diaspora support isn\'t enabled. Contact can\'t be added.'] = 'دعم دياسبورا غير مفعل. لا يمكن إضافة المتراسل.';
$a->strings['OStatus support is disabled. Contact can\'t be added.'] = 'دعم OStatus غير مفعل. لا يمكن إضافة المتراسل.';
$a->strings['Connect/Follow'] = 'اقترن\تابع';
$a->strings['Please answer the following:'] = 'من فضلك أجب على ما يلي:';
$a->strings['Your Identity Address:'] = 'عنوان معرّفك:';
$a->strings['Profile URL'] = 'رابط الملف الشخصي';
$a->strings['Tags:'] = 'الوسوم:';
$a->strings['%s knows you'] = '%s يعرفك';
$a->strings['Add a personal note:'] = 'أضف ملاحظة شخصية:';
$a->strings['Status Messages and Posts'] = 'مشاركات ورسائل الحالة';
$a->strings['The contact could not be added.'] = 'تعذر إضافة المتراسل.';
$a->strings['Unable to locate original post.'] = 'تعذر إيجاد المشاركة الأصلية.';
$a->strings['Empty post discarded.'] = 'رُفضت المشاركة الفارغة.';
$a->strings['Post updated.'] = 'حُدثت المشاركة.';
$a->strings['Item wasn\'t stored.'] = 'لم يخزن العنصر.';
$a->strings['Item couldn\'t be fetched.'] = 'تعذر جلب العنصر.';
$a->strings['Item not found.'] = 'لم يُعثر على العنصر.';
$a->strings['No valid account found.'] = 'لم يُعثر على حساب صالح.';
$a->strings['Password reset request issued. Check your email.'] = 'تم تقديم طلب إعادة تعيين كلمه المرور. تحقق من بريدك الإلكتروني.';
$a->strings['
		Dear %1$s,
			A request was recently received at "%2$s" to reset your account
		password. In order to confirm this request, please select the verification link
		below or paste it into your web browser address bar.

		If you did NOT request this change, please DO NOT follow the link
		provided and ignore and/or delete this email, the request will expire shortly.

		Your password will not be changed unless we can verify that you
		issued this request.'] = '
		عزيزي %1$s،
			استلمنا مؤخرًا طلبًا لاستعادة كلمة المرور على "%2$s".
		لتأكيد هذا الطلب، يرجى النقر على رابط التحقق
		أدناه أو لصقه في شريط عناوين متصفح الويب الخاص بك.

		إذا لم تطلب هذا التغيير، الرجاء عدم اتباع الرابط
		وتجاهل و/أو حذف هذا البريد الإلكتروني، الطلب سينتهي قريبا.

		لن يتم تغيير كلمة المرور الخاصة بك ما لم نتمكن من التحقق من
		هويتك.';
$a->strings['
		Follow this link soon to verify your identity:

		%1$s

		You will then receive a follow-up message containing the new password.
		You may change that password from your account settings page after logging in.

		The login details are as follows:

		Site Location:	%2$s
		Login Name:	%3$s'] = '
		اتبع هذا الرابط للتحقق من هويتك:

				%1$s

		سوف تتلقى رسالة متابعة تحتوي على كلمة المرور الجديدة.
	 يمكنك تغيير كلمة المرور من صفحة إعدادات الحساب بعد الولوج.

		تفاصيل الولوج هي:

		الموقع:	%2$s
		اسم الولوج:	%3$s';
$a->strings['Password reset requested at %s'] = 'طُلب إعادة تعيين كلمة المرور على %s';
$a->strings['Request could not be verified. (You may have previously submitted it.) Password reset failed.'] = 'تعذر التحقق من الطلب (ربما تكون قد أرسلته مسبقاً). فشلت إعادة تعيين كلمة المرور.';
$a->strings['Request has expired, please make a new one.'] = 'انتهت صلاحيته، أرسل طلب واحد جديد.';
$a->strings['Forgot your Password?'] = 'نسيت كلمة المرور؟';
$a->strings['Enter your email address and submit to have your password reset. Then check your email for further instructions.'] = 'أدخل عنوان بريدك الإلكتروني وأرسله من أجل إعادة تعيين كلمة المرور. بعد ذلك تحقق من بريدك الإلكتروني لمزيد من التعليمات.';
$a->strings['Nickname or Email: '] = 'اللقب أو البريد الإلكتروني: ';
$a->strings['Reset'] = 'أعد التعيين';
$a->strings['Password Reset'] = 'إعادة تعيين كلمة المرور';
$a->strings['Your password has been reset as requested.'] = 'أُعيد تعيين كلمة المرور بناء على طلبك.';
$a->strings['Your new password is'] = 'كلمة مرورك الجديدة هي';
$a->strings['Save or copy your new password - and then'] = 'احفظ أو انسخ كلمة المرور الجديدة - ثم';
$a->strings['click here to login'] = 'أنقر هنا للولوج';
$a->strings['Your password may be changed from the <em>Settings</em> page after successful login.'] = 'يمكنك تغيير كلمة المرور من <em>الإعدادات</em> بعد ولوجك بنجاح.';
$a->strings['Your password has been reset.'] = 'أُعيد تعيين كلمة المرور.';
$a->strings['
			Dear %1$s,
				Your password has been changed as requested. Please retain this
			information for your records (or change your password immediately to
			something that you will remember).
		'] = '
			عزيزي %1$s،
				غُيّرت كلمة المرور بناء على طلبك. يرجى الاحتفاظ بهذه
			المعلومات (أو تغيير كلمة المرور الخاصة بك على الفور).
				';
$a->strings['
			Your login details are as follows:

			Site Location:	%1$s
			Login Name:	%2$s
			Password:	%3$s

			You may change that password from your account settings page after logging in.
		'] = '
			تفاصيل الولوج كالتالي:

			الموقع:	%1$s
			اسم المستخدم:	%2$s
			كلمة المرور:	%3$s

			يمكنك تغيير كلمة المرور من صفحة إعدادات الحساب.
			';
$a->strings['Your password has been changed at %s'] = 'غُيرت كلمة المرور على %s';
$a->strings['No keywords to match. Please add keywords to your profile.'] = 'لا توجد كلمات مفتاحية لمطابقتها. من فضلك أضف كلمات مفتاحية إلى ملفك الشخصي.';
$a->strings['No matches'] = 'لا تطابق';
$a->strings['Profile Match'] = 'الملفات الشخصية المطابقة';
$a->strings['New Message'] = 'رسالة جديدة';
$a->strings['No recipient selected.'] = 'لم تختر متلقيا.';
$a->strings['Unable to locate contact information.'] = 'تعذر العثور على معلومات المتراسل.';
$a->strings['Message could not be sent.'] = 'تعذر إرسال الرسالة.';
$a->strings['Message collection failure.'] = 'فشل استرجاع الرسائل.';
$a->strings['Discard'] = 'ارفض';
$a->strings['Messages'] = 'الرسائل';
$a->strings['Conversation not found.'] = 'لم يُعثر على المُحادثة.';
$a->strings['Message was not deleted.'] = 'لم تحذف الرسالة.';
$a->strings['Conversation was not removed.'] = 'لم تُزل المحادثة.';
$a->strings['Please enter a link URL:'] = 'يرجى إدخال الرابط:';
$a->strings['Send Private Message'] = 'أرسل رسالة خاصة';
$a->strings['To:'] = 'إلى:';
$a->strings['Subject:'] = 'الموضوع:';
$a->strings['Your message:'] = 'رسالتك:';
$a->strings['No messages.'] = 'لا رسائل.';
$a->strings['Message not available.'] = 'الرّسالة غير متوفّرة.';
$a->strings['Delete message'] = 'احذف الرسالة';
$a->strings['D, d M Y - g:i A'] = 'D, d M Y - g:i A';
$a->strings['Delete conversation'] = 'احذف المحادثة';
$a->strings['No secure communications available. You <strong>may</strong> be able to respond from the sender\'s profile page.'] = 'لا يتوافر اتصال آمن. <strong>قد</strong> تستطيع الرد من خلال صفحة الملف الشخصي للمرسل.';
$a->strings['Send Reply'] = 'أرسل ردًا';
$a->strings['Unknown sender - %s'] = 'المرسل مجهول - %s';
$a->strings['You and %s'] = 'أنت و %s';
$a->strings['%s and You'] = '%s وأنت';
$a->strings['%d message'] = [
	0 => 'لا رسائل %d',
	1 => 'رسالة واحدة %d',
	2 => 'رسالتان %d',
	3 => '%d رسائل',
	4 => '%d رسالة',
	5 => '%d رسالة',
];
$a->strings['Personal Notes'] = 'ملاحظات شخصية';
$a->strings['Personal notes are visible only by yourself.'] = 'الملاحظات الشخصية مرئية لك فقط.';
$a->strings['Subscribing to contacts'] = 'يشترك في متراسلين';
$a->strings['No contact provided.'] = 'لم يُقدم متراسلين.';
$a->strings['Couldn\'t fetch information for contact.'] = 'تعذر جلب معلومات المتراسل.';
$a->strings['Couldn\'t fetch friends for contact.'] = 'تعذر جلب أصدقاء المتراسل.';
$a->strings['Couldn\'t fetch following contacts.'] = 'تعذر جلب متابِعي المتراسل.';
$a->strings['Couldn\'t fetch remote profile.'] = 'تعذر جلب الملف الشخصي البعيد.';
$a->strings['Unsupported network'] = 'شبكة غير مدعومة';
$a->strings['Done'] = 'تم';
$a->strings['success'] = 'نجح';
$a->strings['failed'] = 'فشل';
$a->strings['ignored'] = 'متجاهل';
$a->strings['Keep this window open until done.'] = 'أبق هذه النافذة مفتوحة حتى ينتهي.';
$a->strings['Photo Albums'] = 'ألبومات الصور';
$a->strings['Recent Photos'] = 'الصور الأخيرة';
$a->strings['Upload New Photos'] = 'ارفع صور جديدة';
$a->strings['everybody'] = 'الجميع';
$a->strings['Contact information unavailable'] = 'معلومات المتراسل غير متوفرة';
$a->strings['Album not found.'] = 'لم يُعثر على الألبوم.';
$a->strings['Album successfully deleted'] = 'حُذف الألبوم بنجاح';
$a->strings['Album was empty.'] = 'ألبوم فارغ.';
$a->strings['Failed to delete the photo.'] = 'فشل حذف الصفحة.';
$a->strings['a photo'] = 'صورة';
$a->strings['%1$s was tagged in %2$s by %3$s'] = 'ذكر %3$s %1$s في %2$s';
$a->strings['Image exceeds size limit of %s'] = 'تجاوزت الصورة الحد الأقصى للحجم وهو %s';
$a->strings['Image upload didn\'t complete, please try again'] = 'لم يكتمل رفع الصورة، من فضلك أعد المحاولة';
$a->strings['Image file is missing'] = 'ملف الصورة مفقود';
$a->strings['Server can\'t accept new file upload at this time, please contact your administrator'] = 'الخادم لا يقبل رفع ملفات جديدة، يرجى التواصل مع مدير الموقع';
$a->strings['Image file is empty.'] = 'ملف الصورة فارغ.';
$a->strings['Unable to process image.'] = 'تعذرت معالجة الصورة.';
$a->strings['Image upload failed.'] = 'فشل رفع الصورة.';
$a->strings['No photos selected'] = 'لم تختر صورًا';
$a->strings['Access to this item is restricted.'] = 'الوصول إلى هذا العنصر مقيد.';
$a->strings['Upload Photos'] = 'ارفع صورًا';
$a->strings['New album name: '] = 'اسم الألبوم الجديد: ';
$a->strings['or select existing album:'] = 'أو اختر ألبومًا موجودًا:';
$a->strings['Do not show a status post for this upload'] = 'لا تظهر مشاركة حالة لهذا الملف المرفوع';
$a->strings['Do you really want to delete this photo album and all its photos?'] = 'أتريد حذف هذا الألبوم وكافة محتوياته؟';
$a->strings['Delete Album'] = 'احذف الألبوم';
$a->strings['Edit Album'] = 'عدّل الألبوم';
$a->strings['Drop Album'] = 'احذف الألبوم';
$a->strings['Show Newest First'] = 'اعرض الأحدث أولًا';
$a->strings['Show Oldest First'] = 'اعرض الأقدم أولًا';
$a->strings['View Photo'] = 'اعرض الصور';
$a->strings['Permission denied. Access to this item may be restricted.'] = 'رُفض الإذن. قد يكون الوصول إلى هذا العنصر مقيدا.';
$a->strings['Photo not available'] = 'الصورة غير متوفرة';
$a->strings['Do you really want to delete this photo?'] = 'أتريد حذف هذه الصورة؟';
$a->strings['Delete Photo'] = 'احذف الصورة';
$a->strings['View photo'] = 'اعرض الصورة';
$a->strings['Edit photo'] = 'عدّل الصورة';
$a->strings['Delete photo'] = 'احذف الصورة';
$a->strings['Use as profile photo'] = 'استخدامها كصورة الملف الشخصي';
$a->strings['Private Photo'] = 'صور خاصة';
$a->strings['View Full Size'] = 'اعرض بالحجم الكامل';
$a->strings['Tags: '] = 'الوسوم: ';
$a->strings['[Select tags to remove]'] = '[اختر وسومًا لإزالتها]';
$a->strings['New album name'] = 'اسم الألبوم الجديد';
$a->strings['Caption'] = 'وصف الصورة';
$a->strings['Add a Tag'] = 'أضف وسمًا';
$a->strings['Example: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping'] = 'مثال: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping';
$a->strings['Do not rotate'] = 'لا تُدر';
$a->strings['Rotate CW (right)'] = 'أدر باتجاه عقارب الساعة';
$a->strings['Rotate CCW (left)'] = 'أدر عكس اتجاه عقارب الساعة';
$a->strings['This is you'] = 'هذا أنت';
$a->strings['Comment'] = 'علِّق';
$a->strings['Select'] = 'اختر';
$a->strings['Delete'] = 'احذف';
$a->strings['Like'] = 'أعجبني';
$a->strings['I like this (toggle)'] = 'أعجبني (بدِّل)';
$a->strings['Dislike'] = 'لم يعجبني';
$a->strings['I don\'t like this (toggle)'] = 'لم يعجبني (بدِّل)';
$a->strings['Map'] = 'خريطة';
$a->strings['View Album'] = 'اعرض الألبوم';
$a->strings['{0} wants to be your friend'] = '{0} يريد أن يكون صديقك';
$a->strings['{0} requested registration'] = '{0} طلبَ التسجيل';
$a->strings['{0} and %d others requested registration'] = '{0} و %d أخرون يطلبون التسجيل';
$a->strings['Bad Request.'] = 'طلب خاطئ.';
$a->strings['Contact not found.'] = 'لم يُعثر على المتراسل.';
$a->strings['[Friendica System Notify]'] = '[تنبيه نظام فرنديكا]';
$a->strings['User deleted their account'] = 'حذف المستخدم حسابه';
$a->strings['On your Friendica node an user deleted their account. Please ensure that their data is removed from the backups.'] = 'حذف مستخدم حسابه على عقدة فرَندِكا خاصتك. من فضلك تأكد أن بياناتهم أُزيلت من النسخ الاحتياطية.';
$a->strings['The user id is %d'] = 'معرف المستخدم هو %d';
$a->strings['Remove My Account'] = 'أزل حسابي';
$a->strings['This will completely remove your account. Once this has been done it is not recoverable.'] = 'سيزال حسابك نهائيًا. لا مجال لتراجع عند انتهائه.';
$a->strings['Please enter your password for verification:'] = 'يرجى إدخال كلمة المرور للتأكيد:';
$a->strings['Resubscribing to OStatus contacts'] = 'يعيد الاشتراك في متراسلي OStatus';
$a->strings['Error'] = [
	0 => 'لا أخطاء',
	1 => 'خطأ',
	2 => 'خطآن',
	3 => 'أخطاء',
	4 => 'خطأً',
	5 => 'خطأٍ',
];
$a->strings['Failed to connect with email account using the settings provided.'] = 'فشل الاتصال بحساب البريد الإلكتروني باستخدام الإعدادات المقدمة.';
$a->strings['Contact CSV file upload error'] = 'خطأ أثناء رفع ملف CSV';
$a->strings['Importing Contacts done'] = 'أُستورد المتراسلون';
$a->strings['Relocate message has been send to your contacts'] = 'أُرسلت رسالة تنبيه بانتقالك إلى متراسليك';
$a->strings['Passwords do not match.'] = 'كلمتا المرور غير متطابقتين.';
$a->strings['Password update failed. Please try again.'] = 'فشل تحديث كلمة المرور. من فضلك أعد المحاولة.';
$a->strings['Password changed.'] = 'غُيّرت كلمة المرور.';
$a->strings['Password unchanged.'] = 'لم تُغير كلمة المرور.';
$a->strings['Please use a shorter name.'] = 'يرجى استخدام اسم أقصر.';
$a->strings['Name too short.'] = 'الاسم قصير جداً.';
$a->strings['Wrong Password.'] = 'كلمة المرور خاطئة.';
$a->strings['Invalid email.'] = 'البريد الإلكتروني غير صالح.';
$a->strings['Cannot change to that email.'] = 'لا يمكن التغيير إلى هذا البريد الإلكتروني.';
$a->strings['Settings were not updated.'] = 'لم تُحدث الإعدادات.';
$a->strings['Connected Apps'] = 'التطبيقات المتصلة';
$a->strings['Name'] = 'الاسم';
$a->strings['Home Page'] = 'الصفحة الرئيسية';
$a->strings['Created'] = 'أُنشئ';
$a->strings['Remove authorization'] = 'أزل التخويل';
$a->strings['Save Settings'] = 'احفظ الإعدادات';
$a->strings['Addon Settings'] = 'إعدادات الإضافة';
$a->strings['No Addon settings configured'] = 'لم تضبط إعدادات الإضافة';
$a->strings['Additional Features'] = 'ميزات إضافية';
$a->strings['Diaspora (Socialhome, Hubzilla)'] = 'دياسبورا (سوشل-هوم، هوب-زيلا)';
$a->strings['enabled'] = 'مفعل';
$a->strings['disabled'] = 'معطل';
$a->strings['Built-in support for %s connectivity is %s'] = 'دعم مدمج لـ %s باتصال %s';
$a->strings['OStatus (GNU Social)'] = 'OStatus (غنو سوشل)';
$a->strings['Email access is disabled on this site.'] = 'الوصول إلى البريد الإلكتروني معطل في هذا الموقع.';
$a->strings['None'] = 'لا شيء';
$a->strings['Social Networks'] = 'الشبكات الاجتماعية';
$a->strings['General Social Media Settings'] = 'الإعدادات العامة لشبكات التواصل الاجتماعي';
$a->strings['Followed content scope'] = 'حيز المحتوى المتابَع';
$a->strings['Only conversations my follows started'] = 'المحادثات التي بدأها متابَعي فقط';
$a->strings['Conversations my follows started or commented on (default)'] = 'المحادثات التي بدأها متابَعي أو علقوا عليها (الافتراضي)';
$a->strings['Any conversation my follows interacted with, including likes'] = 'أي محادثة تفاعل معها متابَعي';
$a->strings['Enable Content Warning'] = 'فعّل التحذير من المحتوى';
$a->strings['Users on networks like Mastodon or Pleroma are able to set a content warning field which collapse their post by default. This enables the automatic collapsing instead of setting the content warning as the post title. Doesn\'t affect any other content filtering you eventually set up.'] = 'يمكن لمستخدمي شبكات مثل ماستدون أو بليروما تعيين حقل التحذير من المحتوى الذي يطوي مشاركتهم افتراضيا. هذا يفعل الطي التلقائي بدلًا من تعيين التحذير من المحتوى كعنوان للمشاركة. هذا لا يؤثر على أي ترشيح محتوى قمت بإعداده.';
$a->strings['Enable intelligent shortening'] = 'فعّل الاختصار الذكي';
$a->strings['Normally the system tries to find the best link to add to shortened posts. If disabled, every shortened post will always point to the original friendica post.'] = 'يعثر الاختصار الذكي على الرابط الأنسب في المشاركات المختصرة. عند تعطيله سيشير الرابط إلى منشور فرنديكا الأصلي.';
$a->strings['Enable simple text shortening'] = 'فعّل اختصار النصوص';
$a->strings['Attach the link title'] = 'أرفق عنوان الرابط';
$a->strings['When activated, the title of the attached link will be added as a title on posts to Diaspora. This is mostly helpful with "remote-self" contacts that share feed content.'] = 'عند تفعيله سيتم إرفاق عنوان الصفحة بمنشور دياسبورا. هذا مفيد بشكل أساسي مع المتراسلين "الذاتيين" الذين يشاركون تغذيات Rss / Atom.';
$a->strings['Your legacy ActivityPub/GNU Social account'] = 'حساب GNU Social\ActivityPub القديم';
$a->strings['If you enter your old account name from an ActivityPub based system or your GNU Social/Statusnet account name here (in the format user@domain.tld), your contacts will be added automatically. The field will be emptied when done.'] = 'إذا قمت بإدخال اسم حساب ActivityPub/GNU Social/Statusnet القديم هنا (بنسق user@domain.tld)، سيضاف المتراسلون في هذا الحساب تلقائيا. سيصفر الحقل عند الانتهاء.';
$a->strings['Repair OStatus subscriptions'] = 'أصلح اشتراكات OStatus';
$a->strings['Email/Mailbox Setup'] = 'إعداد بريد الكتروني/صندوق بريد';
$a->strings['If you wish to communicate with email contacts using this service (optional), please specify how to connect to your mailbox.'] = 'إذا كنت ترغب في التواصل مع متراسلي البريد الإلكتروني باستخدام هذه الخدمة (اختيارية)، من فضلك حدد كيفية الاتصال بصندوق بريدك.';
$a->strings['Last successful email check:'] = 'آخر تحقق ناجح للبريد الإلكتروني:';
$a->strings['IMAP server name:'] = 'اسم خادم IMAP:';
$a->strings['IMAP port:'] = 'منفذ IMAP:';
$a->strings['Security:'] = 'الحماية:';
$a->strings['Email login name:'] = 'اسم الولوج للبريد الإلكتروني:';
$a->strings['Email password:'] = 'كلمة مرور البريد الإلكتروني:';
$a->strings['Reply-to address:'] = 'الرد على عنوان:';
$a->strings['Send public posts to all email contacts:'] = 'أرسل المشاركات العلنية لجميع متراسلي البريد الإلكتروني:';
$a->strings['Action after import:'] = 'الإجراء بعد الاستيراد:';
$a->strings['Mark as seen'] = 'علّمه كمُشاهَد';
$a->strings['Move to folder'] = 'انقل إلى مجلد';
$a->strings['Move to folder:'] = 'انقل إلى المجلد:';
$a->strings['Unable to find your profile. Please contact your admin.'] = 'تعذر العثور على ملفك الشخصي. من فضلك اتصال بالمدير.';
$a->strings['Account Types'] = 'أنواع الحسابات';
$a->strings['Personal Page Subtypes'] = 'الأنواع الفرعية للصفحة الشخصية';
$a->strings['Community Forum Subtypes'] = 'الأنواع الفرعية للمنتدى المجتمعي';
$a->strings['Personal Page'] = 'صفحة شخصية';
$a->strings['Account for a personal profile.'] = 'حساب ملف شخصي خاص.';
$a->strings['Organisation Page'] = 'صفحة منظمة';
$a->strings['Account for an organisation that automatically approves contact requests as "Followers".'] = 'حساب المنظمة يوافق تلقائياً على طلبات المراسلة "كمتابعين".';
$a->strings['News Page'] = 'صفحة إخبارية';
$a->strings['Account for a news reflector that automatically approves contact requests as "Followers".'] = 'حساب إخباري يوافق تلقائياً على طلبات المراسلة "كمتابعين".';
$a->strings['Community Forum'] = 'منتدى مجتمعي';
$a->strings['Account for community discussions.'] = 'حساب مناقشات مجتمعية.';
$a->strings['Normal Account Page'] = 'صفحة حساب عادي';
$a->strings['Account for a regular personal profile that requires manual approval of "Friends" and "Followers".'] = 'حساب ملف شخصي عادي يتطلب الموافقة اليدوية على "الأصدقاء" و "المتابعين".';
$a->strings['Soapbox Page'] = 'صفحة سياسي';
$a->strings['Account for a public profile that automatically approves contact requests as "Followers".'] = 'حساب شخصي علني يوافق تلقائياً على طلبات المراسلة "كمتابعين".';
$a->strings['Public Forum'] = 'منتدى عمومي';
$a->strings['Automatically approves all contact requests.'] = 'يوافق تلقائياً على جميع طلبات المراسلة.';
$a->strings['Automatic Friend Page'] = 'صفحة اشترك تلقائي';
$a->strings['Account for a popular profile that automatically approves contact requests as "Friends".'] = 'حساب ملف شخصي لمشهور يوافق تلقائياً على طلبات المراسلة كـ"أصدقاء".';
$a->strings['Private Forum [Experimental]'] = 'منتدى خاص [تجريبي]';
$a->strings['Requires manual approval of contact requests.'] = 'يتطلب الموافقة اليدوية على طلبات المراسلة.';
$a->strings['OpenID:'] = 'OpenID:';
$a->strings['(Optional) Allow this OpenID to login to this account.'] = '(اختياري) اسمح لمعرف OpenID بالولوج إلى هذا الحساب.';
$a->strings['Publish your profile in your local site directory?'] = 'أتريد نشر ملفك الشخصي في الدليل المحلي للموقع؟';
$a->strings['Your profile will be published in this node\'s <a href="%s">local directory</a>. Your profile details may be publicly visible depending on the system settings.'] = 'سينشر ملفك الشخصي في <a href="%s"> الدليل المحلي</a> لهذه العقدة. تعتمد خصوصية معلوماتك على إعدادات النظام.';
$a->strings['Your profile will also be published in the global friendica directories (e.g. <a href="%s">%s</a>).'] = 'سينشر ملفك الشخصي كذلك في الأدلة العالمية لفرَندِيكا (مثال <a href="%s">%s</a>).';
$a->strings['Your Identity Address is <strong>\'%s\'</strong> or \'%s\'.'] = 'عنوان معرفك هو <strong>\'%s\'</strong> أو \'%s\'.';
$a->strings['Account Settings'] = 'إعدادات الحساب';
$a->strings['Password Settings'] = 'إعدادات كلمة المرور';
$a->strings['New Password:'] = 'كلمة المرور الجديدة:';
$a->strings['Allowed characters are a-z, A-Z, 0-9 and special characters except white spaces, accentuated letters and colon (:).'] = 'المحارف المسموح بها هي a-z، A-Z، 0-9 والأحرف الخاصة باستثناء المساحات، الأحرف المنبورة ونقطتي التفسير (:).';
$a->strings['Confirm:'] = 'التأكيد:';
$a->strings['Leave password fields blank unless changing'] = 'اترك حقول كلمة المرور فارغة ما لم ترد تغييرها';
$a->strings['Current Password:'] = 'كلمة المرور الحالية:';
$a->strings['Your current password to confirm the changes'] = 'اكتب كلمة المرور الحالية لتأكيد التغييرات';
$a->strings['Password:'] = 'كلمة المرور:';
$a->strings['Your current password to confirm the changes of the email address'] = 'اكتب كلمة المرور الحالية لتأكيد تغيير بريدك الإلكتروني';
$a->strings['Delete OpenID URL'] = 'احذف معرف OpenID';
$a->strings['Basic Settings'] = 'الإعدادات الأساسيّة';
$a->strings['Full Name:'] = 'الاسم الكامل:';
$a->strings['Email Address:'] = 'البريد الإلكتروني:';
$a->strings['Your Timezone:'] = 'المنطقة الزمنية:';
$a->strings['Your Language:'] = 'لغتك:';
$a->strings['Set the language we use to show you friendica interface and to send you emails'] = 'عيّن لغة واجهة فرَندِيكا ورسائل البريد الإلكتروني';
$a->strings['Default Post Location:'] = 'موقع النشر الافتراضي:';
$a->strings['Use Browser Location:'] = 'استخدم موقع المتصفح:';
$a->strings['Security and Privacy Settings'] = 'إعدادات الأمان والخصوصية';
$a->strings['Maximum Friend Requests/Day:'] = 'حدُ طلبات الصداقة لليوم الواحد:';
$a->strings['(to prevent spam abuse)'] = '(لمنع الرسائل المزعجة)';
$a->strings['Allow your profile to be searchable globally?'] = 'أتريد السماح لملفك الشخصي بالظهور في نتائج البحث العالمي؟';
$a->strings['Activate this setting if you want others to easily find and follow you. Your profile will be searchable on remote systems. This setting also determines whether Friendica will inform search engines that your profile should be indexed or not.'] = 'فعّل هذا الإعداد إن أردت أن يُعثر عليك بسهولة. سيتمكن المستخدمون في المواقع البعيد من العثور عليك، وأيضا سيسمح بظهور ملفك الشخصي في محركات البحث.';
$a->strings['Hide your contact/friend list from viewers of your profile?'] = 'أتريد إخفاء قائمة المتراسلين/الأصدقاء عن متصفحي ملفك الشخصي؟';
$a->strings['A list of your contacts is displayed on your profile page. Activate this option to disable the display of your contact list.'] = 'عادة تُعرض قائمة المتراسلين على صفحة ملفك الشخصي. إن قمت بتفعيل هذا الخيار ستخفى القائمة.';
$a->strings['Hide your profile details from anonymous viewers?'] = 'اخف معلومات ملفك الشخص عن المتصفحين المجهولين؟';
$a->strings['Anonymous visitors will only see your profile picture, your display name and the nickname you are using on your profile page. Your public posts and replies will still be accessible by other means.'] = 'سيرى الزوار المجهولون صورة ملفك الشخصي واسمك العلني ولقبك فقط. لكن ستبقى مشاركتك العامة وردودك متاحة عبر وسائل أخرى.';
$a->strings['Make public posts unlisted'] = 'لا تدرج المشاركات العلنية';
$a->strings['Your public posts will not appear on the community pages or in search results, nor be sent to relay servers. However they can still appear on public feeds on remote servers.'] = 'لن تظهر مشاركتك العلنية على صفحات المجتمع أو في نتائج البحث لهذا الموقع، ولن يتم إرسالها إلى خوادم الترحيل. غير أنها ستبقى تظهر في التغذيات العمومية للخوادم البعيدة.';
$a->strings['Make all posted pictures accessible'] = 'أتح كل الصور المنشورة';
$a->strings['This option makes every posted picture accessible via the direct link. This is a workaround for the problem that most other networks can\'t handle permissions on pictures. Non public pictures still won\'t be visible for the public on your photo albums though.'] = 'يسمح هذا الخيار بالوصول للصورة المنشورة عبر رابط مباشر. هذا حل لمعظم الشبكات التي لا يمكنها التعامل مع الأذونات. صورك غير العلنية ستبقى مخفية.';
$a->strings['Allow friends to post to your profile page?'] = 'أتسمح لأصدقائك بالنشر في صفحة ملفك الشخصي؟';
$a->strings['Your contacts may write posts on your profile wall. These posts will be distributed to your contacts'] = 'يمكن للمتراسلين كتابة مشاركات على حائط ملفك الشخصي. ستكون هذه المشركات مرئية لكل المتراسلين';
$a->strings['Allow friends to tag your posts?'] = 'أتسمح لأصدقائك بوسم مشاركاتك؟';
$a->strings['Your contacts can add additional tags to your posts.'] = 'يمكن لأصدقائك إضافة وسوم لمشاركاتك.';
$a->strings['Permit unknown people to send you private mail?'] = 'أتسمح لأشخاص مجهولين بإرسال بريد خاص لك؟';
$a->strings['Friendica network users may send you private messages even if they are not in your contact list.'] = 'يمكن لمستخدمي شبكة فرَندِكا إرسال رسائل خاصة لك حتى إن لم يكونوا في قائمة المتراسلين.';
$a->strings['Maximum private messages per day from unknown people:'] = 'حد الرسائل اليومي المستلمة من مجهولين:';
$a->strings['Default Post Permissions'] = 'أذونات النشر الافتراضية';
$a->strings['Expiration settings'] = 'إعدادات انتهاء الصلاحية';
$a->strings['Automatically expire posts after this many days:'] = 'أنه صَلاحِيَة المشاركات تلقائياً بعد هذا العدد من الأيام:';
$a->strings['If empty, posts will not expire. Expired posts will be deleted'] = 'إذا كان فارغاً، لن تنتهي صلاحية المشاركات. وإلا بعد المهلة ستحذف المشاركات المنتهية صلاحيتها';
$a->strings['Expire posts'] = 'أنه صَلاحِيَة المشاركات';
$a->strings['When activated, posts and comments will be expired.'] = 'عند تفعيله، ستنهى صلاحية المشاركات والتعليقات.';
$a->strings['Expire personal notes'] = 'أنه صَلاحِيَة الملاحظات الشخصية';
$a->strings['When activated, the personal notes on your profile page will be expired.'] = 'عند تفعيله، ستنهى صلاحية الملاحظات الشخصية على صفحة ملفك الشخصي.';
$a->strings['Expire starred posts'] = 'أنتهي صلاحية المشاركات المفضلة';
$a->strings['Starring posts keeps them from being expired. That behaviour is overwritten by this setting.'] = 'تفضيل مشاركة تقيها من انتهاء الصلاحية. هذا السلوك يُتجاوز من خلال هذا الإعداد.';
$a->strings['Expire photos'] = 'أنه صَلاحِيَة الصور';
$a->strings['When activated, photos will be expired.'] = 'عند تفعيله، ستنهى صلاحية الصور.';
$a->strings['Only expire posts by others'] = 'أنه صَلاحِيَة مشاركات الآخرين فقط';
$a->strings['When activated, your own posts never expire. Then the settings above are only valid for posts you received.'] = 'عند تفعيله، لا نهاية لصلاحية مشاركاتك. ثم تكون الإعدادات أعلاه صالحة فقط للمشاركات التي استلمتها.';
$a->strings['Notification Settings'] = 'إعدادات التنبيهات';
$a->strings['Send a notification email when:'] = 'أرسل تنبيها للبريدي الإلكتروني عند:';
$a->strings['You receive an introduction'] = 'تلقي تقديم';
$a->strings['Your introductions are confirmed'] = 'أُكدت تقديماتك';
$a->strings['Someone writes on your profile wall'] = 'يكتب شخص ما على جدار ملفك الشخصي';
$a->strings['Someone writes a followup comment'] = 'شخص ما يعلق على ما نشرت';
$a->strings['You receive a private message'] = 'تلقي رسالة خاصة';
$a->strings['You receive a friend suggestion'] = 'تلقي اقتراح صداقة';
$a->strings['You are tagged in a post'] = 'ذُكرتَ في مشاركة';
$a->strings['Create a desktop notification when:'] = 'أنشئ تنبيه سطح المكتب عند:';
$a->strings['Someone liked your content'] = 'أُعجب شخص بمحتواك';
$a->strings['Someone shared your content'] = 'شارك شخص محتواك';
$a->strings['Activate desktop notifications'] = 'نشّط تنبيهات سطح المكتب';
$a->strings['Show desktop popup on new notifications'] = 'أظهر منبثقات للتنبيهات الجديدة';
$a->strings['Text-only notification emails'] = 'رسائل تنبيه نصية فقط';
$a->strings['Send text only notification emails, without the html part'] = 'أرسل بريد التنبيه كنص فقط، دون وسوم html';
$a->strings['Show detailled notifications'] = 'اعرض تنبيهات مفصلة';
$a->strings['Per default, notifications are condensed to a single notification per item. When enabled every notification is displayed.'] = 'افتراضيًا ، يعرض أحدث تنبيه فقط لكل محادثة. عند تفعيله ستعرض جميع التنبيهات.';
$a->strings['Show notifications of ignored contacts'] = 'أظهر تنبيهات للمتراسلين المتجاهلين';
$a->strings['You don\'t see posts from ignored contacts. But you still see their comments. This setting controls if you want to still receive regular notifications that are caused by ignored contacts or not.'] = 'أنت لا ترى مشاركات المتراسلين المتجاهلين. لكن لا يزال بإمكانك رؤية تعليقاتهم. هذا الإعداد يتحكم إذا كنت ترغب في الاستمرار في تلقي تنبيهات سببها المتراسلون المتجاهلون.';
$a->strings['Advanced Account/Page Type Settings'] = 'الإعدادات المتقدمة للحساب/للصفحة';
$a->strings['Change the behaviour of this account for special situations'] = 'غيّر سلوك هذا الحساب للحالات الخاصة';
$a->strings['Import Contacts'] = 'استيراد متراسلين';
$a->strings['Upload a CSV file that contains the handle of your followed accounts in the first column you exported from the old account.'] = 'ارفع ملف CSV معرفات المتراسلين لحسابك القديم، معرفات المتابَعين تكون في العمود الأول.';
$a->strings['Upload File'] = 'ارفع ملفًا';
$a->strings['Relocate'] = 'الانتقال';
$a->strings['If you have moved this profile from another server, and some of your contacts don\'t receive your updates, try pushing this button.'] = 'إذا كنت قد نقلت هذا الملف الشخصي من خادم آخر، وبعض المتراسلين لا يتلقون تحديثاتك، أنقر هذا الزر.';
$a->strings['Resend relocate message to contacts'] = 'أعد إرسال رسالة الانتقال للمتراسلين';
$a->strings['No suggestions available. If this is a new site, please try again in 24 hours.'] = 'لا توجد اقتراحات متاحة. إذا كان هذا الموقع جديد، من فضلك أعد المحاولة في غضون 24 ساعة.';
$a->strings['Friend Suggestions'] = 'اقتراحات الأصدقاء';
$a->strings['photo'] = 'صورة';
$a->strings['status'] = 'حالة';
$a->strings['%1$s tagged %2$s\'s %3$s with %4$s'] = '%1$s وسم %3$s %2$s بـ %4$s';
$a->strings['Remove Item Tag'] = 'أزل وسم العنصر';
$a->strings['Select a tag to remove: '] = 'اختر الوسم لإزالته: ';
$a->strings['Remove'] = 'أزل';
$a->strings['User imports on closed servers can only be done by an administrator.'] = 'يمكن للمدراء فقط استيراد المستخدمين في الخوادم المغلقة.';
$a->strings['This site has exceeded the number of allowed daily account registrations. Please try again tomorrow.'] = 'تجاوز هذا الموقع عدد التسجيلات اليومية المسموح بها. من فضلك حاول غدا.';
$a->strings['Import'] = 'استورد';
$a->strings['Move account'] = 'أنقل الحساب';
$a->strings['You can import an account from another Friendica server.'] = 'يمكنك استيراد حساب من خادم فرَندِكا آخر.';
$a->strings['You need to export your account from the old server and upload it here. We will recreate your old account here with all your contacts. We will try also to inform your friends that you moved here.'] = 'تحتاج إلى تصدير حسابك من الخادم القديم ورفعه هنا. سوف نقوم بإعادة إنشاء حسابك القديم هنا مع إضافة كل المتراسلين. سوف نحاول أيضًا إبلاغهم أنك انتقلت إلى هنا.';
$a->strings['This feature is experimental. We can\'t import contacts from the OStatus network (GNU Social/Statusnet) or from Diaspora'] = 'هذه الميزة تجريبية. لا يمكن استيراد متراسلين من شبكة OStatus (GNU Social/Statusnet) أو من شبكة دياسبورا';
$a->strings['Account file'] = 'ملف الحساب';
$a->strings['To export your account, go to "Settings->Export your personal data" and select "Export account"'] = 'لتصدير حسابك، انتقل إلى "إعدادات-> تصدير بياناتك الشخصية" واختر "صدر الحساب"';
$a->strings['You aren\'t following this contact.'] = 'أنت لا تتابع هذا المتراسل.';
$a->strings['Unfollowing is currently not supported by your network.'] = 'شبكتك لا تدعم إلغاء المتابعة حاليا.';
$a->strings['Disconnect/Unfollow'] = 'ألغ الاقتران/المتابعة';
$a->strings['Contact was successfully unfollowed'] = 'نجح إلغاء متابعة المتراسل';
$a->strings['Unable to unfollow this contact, please contact your administrator'] = 'يتعذر إلغاء متابعة هذا المتراسل، يرجى الاتصال بمدير الموقع';
$a->strings['Invalid request.'] = 'طلب غير صالح.';
$a->strings['Sorry, maybe your upload is bigger than the PHP configuration allows'] = 'عذراً، ربّما يكون الرفع أكبر من ما يسمح به ضبط PHP';
$a->strings['Or - did you try to upload an empty file?'] = 'أو - هل حاولت تحميل ملف فارغ؟';
$a->strings['File exceeds size limit of %s'] = 'تجاوز الملف الحد الأقصى للحجم وهو %s';
$a->strings['File upload failed.'] = 'فشل رفع الملف.';
$a->strings['Wall Photos'] = 'صور الحائط';
$a->strings['Number of daily wall messages for %s exceeded. Message failed.'] = 'تجاوزت عدد رسائل الحائط اليومية وهو %s. فشل إرسال الرسالة.';
$a->strings['Unable to check your home location.'] = 'تعذر التحقق من موقع منزلك.';
$a->strings['No recipient.'] = 'بدون متلقٍ.';
$a->strings['If you wish for %s to respond, please check that the privacy settings on your site allow private mail from unknown senders.'] = 'إذا أردت تلقي رد من %s. تحقق أن إعدادات الخصوصية لموقعك تسمح بتلقي رسائل بريد من مصادر مجهولة.';
$a->strings['No system theme config value set.'] = 'لم تُضبط سمة النظام.';
$a->strings['Apologies but the website is unavailable at the moment.'] = 'نعتذر هذا الموقع غير متاح حاليا.';
$a->strings['Delete this item?'] = 'أتريد حذف العنصر؟';
$a->strings['Block this author? They won\'t be able to follow you nor see your public posts, and you won\'t be able to see their posts and their notifications.'] = 'أتريد حظر هذا المتراسل؟ لن يتمكن من متابعتك أو رؤية مشاركاتك العلنية، ولن تكون قادراً على رؤية مشاركاتهم واستلام تنبيهات منهم.';
$a->strings['toggle mobile'] = 'بدّل واجهة الهاتف';
$a->strings['Method not allowed for this module. Allowed method(s): %s'] = 'هذه الطريقة غير مسموح بها لهذه الوحدة. الطرق المسموح بها: %s';
$a->strings['Page not found.'] = 'لم يُعثر على الصفحة.';
$a->strings['You must be logged in to use addons. '] = 'يجب عليك الولوج لاستخدام الإضافات. ';
$a->strings['The form security token was not correct. This probably happened because the form has been opened for too long (>3 hours) before submitting it.'] = 'رمز الأمان للنموذج غير صحيح. ربما لأن النموذج فُتح لفترة طويلة (أكثر من 3 ساعات) قبل تقديمه.';
$a->strings['All contacts'] = 'كل المتراسلين';
$a->strings['Followers'] = 'متابِعون';
$a->strings['Following'] = 'متابَعون';
$a->strings['Mutual friends'] = 'أصدقاء مشتركون';
$a->strings['Common'] = 'الشائع';
$a->strings['Addon not found'] = 'لم يُعثر على الإضافة';
$a->strings['Addon already enabled'] = 'الإضافة مفعلة سلفًا';
$a->strings['Addon already disabled'] = 'الإضافة معطلة سلفًا';
$a->strings['Could not find any unarchived contact entry for this URL (%s)'] = 'تعذر العثور على مُدخل غير مؤرشف للمتراسل ذو الرابط (%s)';
$a->strings['The contact entries have been archived'] = 'أُرشفت مُدخلات المتراسل';
$a->strings['Could not find any contact entry for this URL (%s)'] = 'تعذر العثور على متراسل يقود اليه هذا الرابط (%s)';
$a->strings['The contact has been blocked from the node'] = 'حُجب المتراسل من هذه العقدة';
$a->strings['Post update version number has been set to %s.'] = 'عُين رقم إصدار تحديث المشاركة إلى %s.';
$a->strings['Check for pending update actions.'] = 'تحقق من إجراءات التحديث المعلقة.';
$a->strings['Done.'] = 'تم.';
$a->strings['Execute pending post updates.'] = 'نفذ التحديثات المعلقة للمشاركة.';
$a->strings['All pending post updates are done.'] = 'تمت كل تحديثات المعلقة للمشاركة.';
$a->strings['Enter user nickname: '] = 'أدخل لقب المستخدم: ';
$a->strings['Enter new password: '] = 'أدخل كلمة مرور جديدة: ';
$a->strings['Enter user name: '] = 'أدخل اسم المستخدم: ';
$a->strings['Enter user email address: '] = 'أدخل عنوان البريد الإلكتروني: ';
$a->strings['Enter a language (optional): '] = 'أدخل اللغة (اختياري): ';
$a->strings['User is not pending.'] = 'المستخدم ليس معلقا.';
$a->strings['User has already been marked for deletion.'] = 'عُلِّم المستخدم للحذف مسبقا.';
$a->strings['Type "yes" to delete %s'] = 'اكتب "yes" لحذف %s';
$a->strings['Deletion aborted.'] = 'أُلغي الحذف.';
$a->strings['Enter category: '] = 'أدخل الفئة: ';
$a->strings['Enter key: '] = 'أدخل المفتاح: ';
$a->strings['Enter value: '] = 'أدخل القيمة: ';
$a->strings['newer'] = 'الأحدث';
$a->strings['older'] = 'الأقدم';
$a->strings['Frequently'] = 'غالبا';
$a->strings['Hourly'] = 'كل ساعة';
$a->strings['Twice daily'] = 'مرتين يوميا';
$a->strings['Daily'] = 'يوميا';
$a->strings['Weekly'] = 'أسبوعيًا';
$a->strings['Monthly'] = 'شهرياً';
$a->strings['DFRN'] = 'DFRN';
$a->strings['OStatus'] = 'OStatus';
$a->strings['RSS/Atom'] = 'RSS/Atom';
$a->strings['Email'] = 'البريد الإلكتروني';
$a->strings['Diaspora'] = 'دياسبورا';
$a->strings['Zot!'] = 'زوت!';
$a->strings['LinkedIn'] = 'لينكد إن';
$a->strings['XMPP/IM'] = 'XMPP/IM';
$a->strings['MySpace'] = 'ماي سبيس';
$a->strings['Google+'] = 'غوغل+';
$a->strings['pump.io'] = 'pump.io';
$a->strings['Twitter'] = 'تويتر';
$a->strings['Discourse'] = 'دسکورس';
$a->strings['Diaspora Connector'] = 'موصل دياسبورا';
$a->strings['GNU Social Connector'] = 'موصل غنو سوشل';
$a->strings['ActivityPub'] = 'ActivityPub';
$a->strings['%s (via %s)'] = '%s (عبر %s)';
$a->strings['%s likes this.'] = 'أعجبَ %s.';
$a->strings['%s doesn\'t like this.'] = 'لم يعجب %s.';
$a->strings['%s attends.'] = 'يحضره %s.';
$a->strings['%s doesn\'t attend.'] = 'لن يحضره %s.';
$a->strings['%s attends maybe.'] = 'قد يحضره %s.';
$a->strings['%s reshared this.'] = 'أعاد %s نشره.';
$a->strings['and'] = 'و';
$a->strings['and %d other people'] = 'و %d أشخاص آخرين';
$a->strings['<span  %1$s>%2$d people</span> like this'] = 'أعجب <span  %1$s>%2$d شخص </span>';
$a->strings['%s like this.'] = 'أعجب %s.';
$a->strings['<span  %1$s>%2$d people</span> don\'t like this'] = 'لم يعجب <span  %1$s>%2$d شخص </span>';
$a->strings['%s don\'t like this.'] = 'لم يعجب %s.';
$a->strings['<span  %1$s>%2$d people</span> attend'] = 'سيحضره <span  %1$s>%2$d شخص</span>';
$a->strings['%s attend.'] = 'سيحضره %s.';
$a->strings['<span  %1$s>%2$d people</span> don\'t attend'] = 'لن يحضره <span  %1$s>%2$d شخص</span>';
$a->strings['%s don\'t attend.'] = 'لن يحضره %s.';
$a->strings['<span  %1$s>%2$d people</span> attend maybe'] = 'قد يحضره <span  %1$s>%2$d شخصا</span>';
$a->strings['%s attend maybe.'] = 'قد يحضره %s.';
$a->strings['<span  %1$s>%2$d people</span> reshared this'] = 'أعاد نشره <span  %1$s>%2$d شخص</span>';
$a->strings['Visible to <strong>everybody</strong>'] = 'مرئي <strong>للجميع</strong>';
$a->strings['Please enter a image/video/audio/webpage URL:'] = 'رجاء أدخل رابط صورة/فيديو/صوت/صفحة ويب:';
$a->strings['Tag term:'] = 'مصطلح الوسم:';
$a->strings['Save to Folder:'] = 'احفظ في مجلد:';
$a->strings['Where are you right now?'] = 'أين أنت حاليا؟';
$a->strings['Delete item(s)?'] = 'أتريد حذف العناصر؟';
$a->strings['New Post'] = 'مشاركة جديدة';
$a->strings['Share'] = 'شارك';
$a->strings['Image'] = 'صورة';
$a->strings['Video'] = 'فيديو';
$a->strings['Scheduled at'] = 'بُرمِج في';
$a->strings['View %s\'s profile @ %s'] = 'اعرض ملف %s الشخصي @ %s';
$a->strings['Categories:'] = 'الفئات:';
$a->strings['Filed under:'] = 'مصنف كـ:';
$a->strings['%s from %s'] = '%s من %s';
$a->strings['View in context'] = 'اعرضه في السياق';
$a->strings['remove'] = 'أزل';
$a->strings['Delete Selected Items'] = 'أزل العناصر المختارة';
$a->strings['You had been addressed (%s).'] = 'ذُكرت (%s).';
$a->strings['You are following %s.'] = 'تتابع %s.';
$a->strings['Tagged'] = 'موسوم';
$a->strings['Reshared'] = 'أُعيد نشره';
$a->strings['Reshared by %s <%s>'] = 'أعاد نشره %s <%s>';
$a->strings['%s is participating in this thread.'] = '%s مشترك في هذا النقاش.';
$a->strings['Stored'] = 'مُخزن';
$a->strings['Global'] = 'عالمي';
$a->strings['Relayed'] = 'منقول';
$a->strings['Relayed by %s <%s>'] = 'نقله %s <%s>';
$a->strings['Fetched'] = 'جُلب';
$a->strings['Fetched because of %s <%s>'] = 'جُلب بسبب %s <%s>';
$a->strings['General Features'] = 'الميّزات العامة';
$a->strings['Photo Location'] = 'موقع الصورة';
$a->strings['Photo metadata is normally stripped. This extracts the location (if present) prior to stripping metadata and links it to a map.'] = 'عادة ما تتم إزالة البيانات الوصفية للصور. هذا يجعل من الممكن حفظ الموقع (قبل إزالة البيانات) ووضع الصورة على الخريطة.';
$a->strings['Trending Tags'] = 'الوسوم الشائعة';
$a->strings['Show a community page widget with a list of the most popular tags in recent public posts.'] = 'أظهر ودجة صفحة المجتمع تحوي قائمة الوسوم الشائعة في المشاركات العلنية الأخيرة.';
$a->strings['Post Composition Features'] = 'ميّزات إنشاء المشاركة';
$a->strings['Auto-mention Forums'] = 'ذكر المنتديات تلقائيا';
$a->strings['Explicit Mentions'] = 'ذِكر صريح';
$a->strings['Add explicit mentions to comment box for manual control over who gets mentioned in replies.'] = 'يضيف الذِكر الصريح في صندوق التعليق مما يسمح بالتحكم اليدوي بالذِكر في التعليقات.';
$a->strings['Post/Comment Tools'] = 'أدوات النشر\التعليق';
$a->strings['Post Categories'] = 'فئات المشاركة';
$a->strings['Add categories to your posts'] = 'أضف فئات لمشاركاتك';
$a->strings['Advanced Profile Settings'] = 'إعدادات الحساب الشخصي المُتقدّمة';
$a->strings['List Forums'] = 'اسرد المنتديات';
$a->strings['Show visitors public community forums at the Advanced Profile Page'] = 'إظهار منتديات المجتمعية للزوار على صفحة الملف الشخصي المتقدمة';
$a->strings['Tag Cloud'] = 'سحابة الوسوم';
$a->strings['Provide a personal tag cloud on your profile page'] = 'إظهار سحابة وسوم في صفحة ملفك الشخصي';
$a->strings['Display Membership Date'] = 'اعرض عُمر العضوية';
$a->strings['Display membership date in profile'] = 'اعرض عُمر العضوية في الملف الشخصي';
$a->strings['Forums'] = 'المنتديات';
$a->strings['External link to forum'] = 'رابط خارجي للمنتدى';
$a->strings['show less'] = 'اعرض أقلّ';
$a->strings['show more'] = 'اعرض المزيد';
$a->strings['%1$s poked %2$s'] = '%1$s لكز%2$s';
$a->strings['event'] = 'حدث';
$a->strings['Follow Thread'] = 'تابع المناقشة';
$a->strings['View Status'] = 'اعرض الحالة';
$a->strings['View Profile'] = 'اعرض الملف الشخصي';
$a->strings['View Photos'] = 'اعرض الصور';
$a->strings['Network Posts'] = 'مشاركات الشبكة';
$a->strings['View Contact'] = 'اعرض المتراسل';
$a->strings['Send PM'] = 'أرسل رسالة خاصة';
$a->strings['Block'] = 'احجب';
$a->strings['Ignore'] = 'تجاهل';
$a->strings['Languages'] = 'اللغات';
$a->strings['Poke'] = 'ألكز';
$a->strings['Nothing new here'] = 'لا جديد هنا';
$a->strings['Go back'] = 'عُد';
$a->strings['Clear notifications'] = 'امسح التنبيهات';
$a->strings['@name, !forum, #tags, content'] = '@مستخدم، !منتدى، #وسم، محتوى';
$a->strings['Logout'] = 'خروج';
$a->strings['End this session'] = 'أنه هذه الجلسة';
$a->strings['Login'] = 'لِج';
$a->strings['Sign in'] = 'لِج';
$a->strings['Status'] = 'الحالة';
$a->strings['Your posts and conversations'] = 'مشاركاتك ومحادثاتك';
$a->strings['Profile'] = 'الملف شخصي';
$a->strings['Your profile page'] = 'صفحة ملفك الشخصي';
$a->strings['Your photos'] = 'صورك';
$a->strings['Media'] = 'الوسائط';
$a->strings['Your postings with media'] = 'مشاركاتك التي تحوي وسائط';
$a->strings['Your events'] = 'أحداثك';
$a->strings['Personal notes'] = 'الملاحظات الشخصية';
$a->strings['Your personal notes'] = 'ملاحظاتك الشخصية';
$a->strings['Home'] = 'الرئيسية';
$a->strings['Register'] = 'سجل';
$a->strings['Create an account'] = 'أنشئ حسابا';
$a->strings['Help'] = 'المساعدة';
$a->strings['Help and documentation'] = 'المساعدة والوثائق';
$a->strings['Apps'] = 'التطبيقات';
$a->strings['Addon applications, utilities, games'] = 'إضافات، أدوات، ألعاب';
$a->strings['Search'] = 'ابحث';
$a->strings['Search site content'] = 'ابحث في محتوى الموقع';
$a->strings['Full Text'] = 'النص الكامل';
$a->strings['Tags'] = 'الوسوم';
$a->strings['Contacts'] = 'المتراسلون';
$a->strings['Community'] = 'المجتمع';
$a->strings['Conversations on this and other servers'] = 'محادثات في هذا الخادم وخوادم أخرى';
$a->strings['Events and Calendar'] = 'الأحداث والتقويم';
$a->strings['Directory'] = 'الدليل';
$a->strings['People directory'] = 'دليل الأشخاص';
$a->strings['Information'] = 'معلومات';
$a->strings['Information about this friendica instance'] = 'معلومات حول هذا المثيل';
$a->strings['Terms of Service'] = 'شروط الخدمة';
$a->strings['Terms of Service of this Friendica instance'] = 'شروط الخدمة لهذا المثيل';
$a->strings['Network'] = 'الشبكة';
$a->strings['Conversations from your friends'] = 'محادثات أصدقائك';
$a->strings['Introductions'] = 'المقدمات';
$a->strings['Friend Requests'] = 'طلبات الصداقة';
$a->strings['Notifications'] = 'التنبيهات';
$a->strings['See all notifications'] = 'الاطّلاع على جميع التنبيهات';
$a->strings['Mark all system notifications as seen'] = 'علّم كل تنبيهات النظام كمقروءة';
$a->strings['Private mail'] = 'بريد خاص';
$a->strings['Inbox'] = 'صندوق الوارد';
$a->strings['Outbox'] = 'صندوق الصادر';
$a->strings['Accounts'] = 'الحسابات';
$a->strings['Manage other pages'] = 'إدارة الصفحات الأخرى';
$a->strings['Settings'] = 'الإعدادات';
$a->strings['Account settings'] = 'إعدادات الحساب';
$a->strings['Manage/edit friends and contacts'] = 'أدر/عدّل الأصدقاء والمتراسلين';
$a->strings['Admin'] = 'مدير';
$a->strings['Site setup and configuration'] = 'إعداد الموقع وتكوينه';
$a->strings['Navigation'] = 'تصفح';
$a->strings['Site map'] = 'خريطة الموقع';
$a->strings['Embedding disabled'] = 'التضمين معطل';
$a->strings['Embedded content'] = 'محتوى مضمن';
$a->strings['first'] = 'الأول';
$a->strings['prev'] = 'السابق';
$a->strings['next'] = 'التالي';
$a->strings['last'] = 'الأخير';
$a->strings['Image/photo'] = 'صورة';
$a->strings['<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s'] = '<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s';
$a->strings['Link to source'] = 'رابط المصدر';
$a->strings['Click to open/close'] = 'أنقر للفتح/للإغلاق';
$a->strings['$1 wrote:'] = 'كتب $1:';
$a->strings['Encrypted content'] = 'محتوى مشفر';
$a->strings['Invalid source protocol'] = 'ميفاق المصدر غير صالح';
$a->strings['Invalid link protocol'] = 'ميفاق الرابط غير صالح';
$a->strings['Loading more entries...'] = 'يحمل مزيدًا من المدخلات...';
$a->strings['The end'] = 'النهاية';
$a->strings['Follow'] = 'تابع';
$a->strings['Add New Contact'] = 'أضف متراسلًا جديدًا';
$a->strings['Enter address or web location'] = 'أدخل العنوان أو الرابط';
$a->strings['Example: bob@example.com, http://example.com/barbara'] = 'مثل: bob@example.com, http://example.com/barbara';
$a->strings['Connect'] = 'اتصل';
$a->strings['%d invitation available'] = [
	0 => 'لا توجد دعوة متاحة %d',
	1 => 'دعوة %d متاحة',
	2 => 'دعوتان %d متاحتان',
	3 => '%d دعوات متاحة',
	4 => '%d دعوة متاحة',
	5 => '%d دعوة متاحة',
];
$a->strings['Find People'] = 'ابحث عن أشخاص';
$a->strings['Enter name or interest'] = 'أدخل اسما أو اهتماما';
$a->strings['Examples: Robert Morgenstein, Fishing'] = 'مثال: أحمد علي، الصيد';
$a->strings['Find'] = 'ابحث';
$a->strings['Similar Interests'] = 'اهتمامات مشتركة';
$a->strings['Random Profile'] = 'ملف شخصي عشوائي';
$a->strings['Invite Friends'] = 'دعوة أصدقاء';
$a->strings['Global Directory'] = 'الدليل العالمي';
$a->strings['Local Directory'] = 'الدليل المحلي';
$a->strings['Groups'] = 'المجموعات';
$a->strings['Everyone'] = 'الجميع';
$a->strings['Relationships'] = 'العلاقات';
$a->strings['All Contacts'] = 'كل المتراسلين';
$a->strings['Protocols'] = 'الموافيق';
$a->strings['All Protocols'] = 'كل الموافيق';
$a->strings['Saved Folders'] = 'المجلدات المحفوظة';
$a->strings['Everything'] = 'كلّ شيء';
$a->strings['Categories'] = 'الفئات';
$a->strings['%d contact in common'] = [
	0 => 'لا متراسلين مشتركين %d',
	1 => 'متراسل %d مشترك',
	2 => 'متراسلان %d مشتركان',
	3 => '%d متراسلين مشتركين',
	4 => '%d متراسلًا مشتركًا',
	5 => '%d متراسل مشترك',
];
$a->strings['Archives'] = 'الأرشيفات';
$a->strings['Persons'] = 'الأشخاص';
$a->strings['Organisations'] = 'المنظّمات';
$a->strings['News'] = 'الأخبار';
$a->strings['All'] = 'الكل';
$a->strings['Export'] = 'صدّر';
$a->strings['Export calendar as ical'] = 'صدّر الرزنامة كملف ical';
$a->strings['Export calendar as csv'] = 'صدّر الرزنامة كملف csv';
$a->strings['No contacts'] = 'لا متراسلين';
$a->strings['%d Contact'] = [
	0 => 'لا متراسلين %d',
	1 => 'متراسل %d',
	2 => 'متراسلان %d',
	3 => '%d متراسلين',
	4 => '%d متراسلا',
	5 => '%d متراسل',
];
$a->strings['View Contacts'] = 'اعرض المتراسلين';
$a->strings['Remove term'] = 'أزل العنصر';
$a->strings['Saved Searches'] = 'عمليات البحث المحفوظة';
$a->strings['Trending Tags (last %d hour)'] = [
	0 => 'الوسوم الشائعة (أقل من ساعة %d)',
	1 => 'الوسوم الشائعة (آخر ساعة %d)',
	2 => 'الوسوم الشائعة (آخر ساعتين %d)',
	3 => 'الوسوم الشائعة (آخر %d ساعات)',
	4 => 'الوسوم الشائعة (آخر %d ساعة)',
	5 => 'الوسوم الشائعة (آخر %d ساعة)',
];
$a->strings['More Trending Tags'] = 'المزيد من الوسوم الشائعة';
$a->strings['XMPP:'] = 'XMPP:';
$a->strings['Matrix:'] = 'مايتركس:';
$a->strings['Network:'] = 'الشبكة:';
$a->strings['Unfollow'] = 'ألغِ المتابعة';
$a->strings['Yourself'] = 'أنت';
$a->strings['Mutuals'] = 'المشتركة';
$a->strings['Post to Email'] = 'أنشر عبر البريد الإلكتروني';
$a->strings['Public'] = 'علني';
$a->strings['This content will be shown to all your followers and can be seen in the community pages and by anyone with its link.'] = 'سيتم عرض هذا المحتوى لكل متابِعيك ويمكن مشاهدته في صفحات المجتمع ومن قبل أي شخص عبر رابطه.';
$a->strings['Limited/Private'] = 'محدود/خاص';
$a->strings['This content will be shown only to the people in the first box, to the exception of the people mentioned in the second box. It won\'t appear anywhere public.'] = 'سيكون هذا المحتوى مرئيًا فقط من قبل المجموعات والمتراسلين المدرجين في الحقل الأول ، وتستثنى المجموعات والمتراسلون المدرجون في الحقل الثاني. لن يكون هذا المحتوى مرئيا للعامة.';
$a->strings['Show to:'] = 'اعرضه لـ:';
$a->strings['Except to:'] = 'استثني:';
$a->strings['Connectors'] = 'الموصّلات';
$a->strings['The database configuration file "config/local.config.php" could not be written. Please use the enclosed text to create a configuration file in your web server root.'] = 'تعذر كتابة ملف تكوين قاعدة البيانات "config/local.config.php". رجاء استخدم النص المرفق لإنشاء ملف تكوين في المجلد الجذر للخادم.';
$a->strings['You may need to import the file "database.sql" manually using phpmyadmin or mysql.'] = 'استورد ملف "database.sql" يدويا باستخدام phpmyadmin أو mysql.';
$a->strings['Please see the file "doc/INSTALL.md".'] = 'يرجى مراجعة ملف "doc/INSTALL.md".';
$a->strings['PHP executable path'] = 'مسار الملف التنفيذي لـ PHP';
$a->strings['Enter full path to php executable. You can leave this blank to continue the installation.'] = 'أدخل المسار الكامل للملف التتفيذي لـ php. يمكنك تركه فارغًا لمتابعة التثبيت.';
$a->strings['Command line PHP'] = 'سطر أوامر PHP';
$a->strings['PHP executable is not the php cli binary (could be cgi-fgci version)'] = 'ملف PHP التنفيذي ليس ملفًا ثنائيًا (قد يكون إصدار cgi-fcgi)';
$a->strings['Found PHP version: '] = 'اصدار PHP: ';
$a->strings['PHP cli binary'] = 'الملف الثنائي لـ PHP';
$a->strings['The command line version of PHP on your system does not have "register_argc_argv" enabled.'] = 'إصدار سطر أوامر PHP المثبت على النظام ليس مفعلًا فيه "register_argc_argv".';
$a->strings['This is required for message delivery to work.'] = 'هذا مطلوب لإيصال الرسائل.';
$a->strings['If running under Windows, please see "http://www.php.net/manual/en/openssl.installation.php".'] = 'إذا كنت تستعمل ويندوز راجع "http://www.php.net/manual/en/openssl.installation.php".';
$a->strings['Generate encryption keys'] = 'ولّد مفاتيح التشفير';
$a->strings['Error: Apache webserver mod-rewrite module is required but not installed.'] = 'خطأ: وحدة mod-rewrite لخادم أباتشي مطلوبة لكنها لم تثبت.';
$a->strings['Apache mod_rewrite module'] = 'وحدة Apache mod_rewrite';
$a->strings['iconv PHP module'] = 'وحدة iconv PHP';
$a->strings['Error: iconv PHP module required but not installed.'] = 'خطأ: وحدة iconv PHP مطلوبة ولكنها غير مثبتة.';
$a->strings['POSIX PHP module'] = 'وحدة POSIX PHP';
$a->strings['Error: POSIX PHP module required but not installed.'] = 'خطأ: وحدة POSIX PHP مطلوبة ولكنها غير مثبتة.';
$a->strings['Program execution functions'] = 'مهام تنفيذ البرنامج';
$a->strings['JSON PHP module'] = 'وحدة JSON PHP';
$a->strings['Error: JSON PHP module required but not installed.'] = 'خطأ: وحدة JSON PHP مطلوبة ولكنها غير مثبتة.';
$a->strings['File Information PHP module'] = 'وحدة PHP fileinfo';
$a->strings['Error: File Information PHP module required but not installed.'] = 'خطأ: وحدة PHP fileinfo مطلوبة ولكنها غير مثبتة.';
$a->strings['The web installer needs to be able to create a file called "local.config.php" in the "config" folder of your web server and it is unable to do so.'] = 'مثبِت الويب غير قادر على إنشاء ملف "local.config.php" في مجلد "config" التابع للخادم.';
$a->strings['This is most often a permission setting, as the web server may not be able to write files in your folder - even if you can.'] = 'في أغلب الأحيان تكون مشكلة إذن. قد لا يتمكن خادم الويب من الكتابة في دليلك - على الرغم من أنك تستطيع ذلك.';
$a->strings['At the end of this procedure, we will give you a text to save in a file named local.config.php in your Friendica "config" folder.'] = 'عند نهاية التثبيت سنزودك بمحتويات لملف "local.config.php" لتنشئه يدويًا في الدليل الفرعي "config" في دليل خادم فرنديكا.';
$a->strings['You can alternatively skip this procedure and perform a manual installation. Please see the file "doc/INSTALL.md" for instructions.'] = 'يمكنك أيضًا تخطي هذه الخطوة وإجراء تثبيت يدوي. للقيام بذلك يرجى مراجعة ملف "doc/INSTALL.md".';
$a->strings['config/local.config.php is writable'] = 'ملف "config/local.config.php" قابل للكتابة';
$a->strings['Friendica uses the Smarty3 template engine to render its web views. Smarty3 compiles templates to PHP to speed up rendering.'] = 'يستخدم فرنديكا محرك القوالب Smarty3 لتصيير عرض الويب. يقوم Smarty3 ببناء القوالب كـ PHP لتسريع عملية التصيير.';
$a->strings['In order to store these compiled templates, the web server needs to have write access to the directory view/smarty3/ under the Friendica top level folder.'] = 'لتتمكن من تخزين هذه النماذج المترجمة ، يجب أن يكون لخادم الإنترنت أذون الكتابة في دليل view/smarty3/ ضمن المجلد الجذر لفرنديكا.';
$a->strings['view/smarty3 is writable'] = 'ملف "view/smarty3" قابل للكتابة';
$a->strings['In some circumstances (like running inside containers), you can skip this error.'] = 'في بعض المواقف (مثل تشغيله من حاوية) يمكنك تجاهل هذا الخطأ.';
$a->strings['Error message from Curl when fetching'] = 'رسالة خطأ من Curl أثناء الجلب';
$a->strings['Url rewrite is working'] = 'إعادة كتابة الرابط تعمل';
$a->strings['It is highly encouraged to use Friendica only over a secure connection as sensitive information like passwords will be transmitted.'] = 'نوصي بشدة باستخدام فرنديكا عبر اتصال آمن فقط حيث سيتم تبادل معلومات حساسة مثل كلمات المرور.';
$a->strings['Please ensure that the connection to the server is secure.'] = 'يرجى التأكد من أن الاتصال بالخادم آمن.';
$a->strings['ImageMagick supports GIF'] = 'ImageMagick يدعم GIF';
$a->strings['Database already in use.'] = 'قاعدة البيانات قيد الاستخدام.';
$a->strings['Could not connect to database.'] = 'يتعذر الاتصال بقاعدة البيانات.';
$a->strings['Monday'] = 'الإثنين';
$a->strings['Tuesday'] = 'الثلاثاء';
$a->strings['Wednesday'] = 'الأربعاء';
$a->strings['Thursday'] = 'الخميس';
$a->strings['Friday'] = 'الجمعة';
$a->strings['Saturday'] = 'السبت';
$a->strings['Sunday'] = 'الأحد';
$a->strings['January'] = 'جانفي';
$a->strings['February'] = 'فيفري';
$a->strings['March'] = 'مارس';
$a->strings['April'] = 'أفريل';
$a->strings['May'] = 'ماي';
$a->strings['June'] = 'جوان';
$a->strings['July'] = 'جويلية';
$a->strings['August'] = 'أوت';
$a->strings['September'] = 'سبتمبر';
$a->strings['October'] = 'أكتوبر';
$a->strings['November'] = 'نوفمبر';
$a->strings['December'] = 'ديسمبر';
$a->strings['Mon'] = 'إث';
$a->strings['Tue'] = 'ثلا';
$a->strings['Wed'] = 'أر';
$a->strings['Thu'] = 'خم';
$a->strings['Fri'] = 'جم';
$a->strings['Sat'] = 'سب';
$a->strings['Sun'] = 'أح';
$a->strings['Jan'] = 'جا';
$a->strings['Feb'] = 'في';
$a->strings['Mar'] = 'مارس';
$a->strings['Apr'] = 'أف';
$a->strings['Jun'] = 'جو';
$a->strings['Jul'] = 'جوي';
$a->strings['Aug'] = 'أو';
$a->strings['Sep'] = 'سب';
$a->strings['Oct'] = 'أك';
$a->strings['Nov'] = 'نو';
$a->strings['Dec'] = 'دي';
$a->strings['poke'] = 'ألكز';
$a->strings['poked'] = 'لُكز';
$a->strings['prod'] = 'انخس';
$a->strings['prodded'] = 'نُخِس';
$a->strings['slap'] = 'اصفع';
$a->strings['slapped'] = 'صُفع';
$a->strings['Friendica can\'t display this page at the moment, please contact the administrator.'] = 'لا يمكن لفرَندِيكا عرض هذه الصفحة حاليا، رجاء اتصل بالمدير.';
$a->strings['template engine cannot be registered without a name.'] = 'لا يمكن تسجيل محرك القوالب بدون اسم.';
$a->strings['template engine is not registered!'] = 'لم يسجل محرك القوالب!';
$a->strings['Storage base path'] = 'المسار الأساسي للتخزين';
$a->strings['Folder where uploaded files are saved. For maximum security, This should be a path outside web server folder tree'] = 'المجلد حيث تحفظ الملفات المرفوعة. لأقصى قدر من الأمان، يجب أن يكون هذا المسار خارج شجرة مجلد الخادم';
$a->strings['Enter a valid existing folder'] = 'أدخل مجلد موجود وصالح';
$a->strings['Updates from version %s are not supported. Please update at least to version 2021.01 and wait until the postupdate finished version 1383.'] = 'التحديثات التلقائية غير مدعومة من الإصدار %s. يرجى التحديث يدويًا إلى الإصدار 2021.01 وانتظر تحديث البيانات للوصول إلى الإصدار 1383.';
$a->strings['Updates from postupdate version %s are not supported. Please update at least to version 2021.01 and wait until the postupdate finished version 1383.'] = 'التحديث التلقائي للبيانات من الإصدار %s غير مدعوم. يرجى التحديث يدويًا إلى الإصدار 2021.01 وانتظر تحديث البيانات للوصول إلى الإصدار 1383.';
$a->strings['%s: executing pre update %d'] = '%s: ينفذ التحديث الاستباقي %d';
$a->strings['%s: executing post update %d'] = '%s: ينفذ تحديث البيانات %d';
$a->strings['Update %s failed. See error logs.'] = 'فشل تحديث %s. راجع سجلات الأخطاء.';
$a->strings['
				The friendica developers released update %s recently,
				but when I tried to install it, something went terribly wrong.
				This needs to be fixed soon and I can\'t do it alone. Please contact a
				friendica developer if you can not help me on your own. My database might be invalid.'] = '
			مطورو فرَندِكا أصدروا التحديث %s مؤخرا،
			ولكن حدث خطأ أثناء تثبيته
			وهذا يحتاج إلى إصلاح ، ولا يمكنني فعل ذلك بمفردي. يرجى التواصل مع مطور
			 فرَندِكا إذا لم تتمكن من مساعدتي بمفردك. قد تكون قاعدة البيانات غير صالحة.';
$a->strings['The error message is\n[pre]%s[/pre]'] = 'رسالة الخطأ\n[pre]%s[/pre]';
$a->strings['[Friendica Notify] Database update'] = '[تنبيهات فرنديكا] تحديث قاعدة البيانات';
$a->strings['
					The friendica database was successfully updated from %s to %s.'] = '
					حُدثت قاعدة البيانات بنجاح من الإصدار %s إلى %s.';
$a->strings['Error decoding account file'] = 'خطأ أثناء فك ترميز ملف الحساب';
$a->strings['Error! No version data in file! This is not a Friendica account file?'] = 'خطأ! لا توجد بيانات إصدار في الملف! هذا ليس ملف شخصي لفرنديكا؟';
$a->strings['User \'%s\' already exists on this server!'] = 'المستخدم \'%s\' موجود سلفًا على هذا الخادم!';
$a->strings['User creation error'] = 'خطأ أثناء إنشاء المستخدم';
$a->strings['%d contact not imported'] = [
	0 => 'لم يُستورد أي متراسل %d',
	1 => 'لم يستورد متراسل واحد %d',
	2 => 'لم يستورد متراسلان %d',
	3 => 'لم يستورد %d متراسلين',
	4 => 'لم يستورد %d متراسلًا',
	5 => 'لم يستورد %d متراسل',
];
$a->strings['User profile creation error'] = 'خطأ أثناء إنشاء الملف الشخصي للمستخدم';
$a->strings['Done. You can now login with your username and password'] = 'تم. يمكنك الآن الولوج باستخدام اسم المستخدم وكلمة المرور';
$a->strings['The database version had been set to %s.'] = 'عُين إصدار قاعدة البيانات إلى %s.';
$a->strings['The post update is at version %d, it has to be at %d to safely drop the tables.'] = 'تحديث البيانات هو إصدار %d، لكن يجب أن يكون إصدار %d لتتمكن من حذف الجداول بأمان.';
$a->strings['No unused tables found.'] = 'لم يُعثر على جداول غير مستعملة.';
$a->strings['These tables are not used for friendica and will be deleted when you execute "dbstructure drop -e":'] = 'فرنديكا لا تستخدم هذه الجداول يمكنك حذفها بتنفيذ "dbstructure drop -e":';
$a->strings['There are no tables on MyISAM or InnoDB with the Antelope file format.'] = 'لا توجد جداول في MyISAM أو InnoDB بتنسيق ملف Antelope.';
$a->strings['
Error %d occurred during database update:
%s
'] = '
حدث الخطأ %d أثناء تحديث قاعدة البيانات:
%s
';
$a->strings['Errors encountered performing database changes: '] = 'حدثت أخطاء أثناء تحديث قاعدة البيانات: ';
$a->strings['Another database update is currently running.'] = 'تحديث آخر لقاعدة البيانات جارٍ.';
$a->strings['%s: Database update'] = '%s: تحديث قاعدة البيانات';
$a->strings['%s: updating %s table.'] = '%s يحدث جدول %s.';
$a->strings['Record not found'] = 'لم يُعثر على التسجيل';
$a->strings['Unprocessable Entity'] = 'كيان غير قابل للمعالجة';
$a->strings['Unauthorized'] = 'لم يخوّل';
$a->strings['Token is not authorized with a valid user or is missing a required scope'] = 'لم يُخول الرمز عبر مستخدم صالح أو يفتقر إلى حيّزٍ مطلوب';
$a->strings['Internal Server Error'] = 'خطأ داخلي في الخادم';
$a->strings['Legacy module file not found: %s'] = 'لم يُعثر على ملف الوحدة القديم: %s';
$a->strings['UnFollow'] = 'ألغِ المتابعة';
$a->strings['Approve'] = 'موافق';
$a->strings['Organisation'] = 'منظّمة';
$a->strings['Forum'] = 'منتدى';
$a->strings['Disallowed profile URL.'] = 'رابط الملف الشخصي غير المسموح.';
$a->strings['Blocked domain'] = 'نطاق محجوب';
$a->strings['Connect URL missing.'] = 'رابط الاتصال مفقود.';
$a->strings['The contact could not be added. Please check the relevant network credentials in your Settings -> Social Networks page.'] = 'تعذر إضافة المتراسل. تحقق من بيانات اعتماد الشبكة المستهدفة في الإعدادات -> صفحة الشبكات الاجتماعية.';
$a->strings['The profile address specified does not provide adequate information.'] = 'عنوان الملف الشخصي لا يوفر معلومات كافية.';
$a->strings['No compatible communication protocols or feeds were discovered.'] = 'لم تكتشف أي موافيق اتصال أو تغذيات متوافقة.';
$a->strings['An author or name was not found.'] = 'لم يُعثر على الكاتب أو اسمه.';
$a->strings['No browser URL could be matched to this address.'] = 'لا يوجد رابط يطابق هذا العنوان.';
$a->strings['Unable to match @-style Identity Address with a known protocol or email contact.'] = 'غير قادر على مطابقة عنوان المعرف "@" بميفاق معروف أو متراسل بريد إلكتروني.';
$a->strings['Use mailto: in front of address to force email check.'] = 'استخدم mailto: أمام العنوان للتعرّف عليه كبريد إلكتروني.';
$a->strings['The profile address specified belongs to a network which has been disabled on this site.'] = 'عنوان الملف الشخصي تابع لشبكة محجوبة في هذا الموقع.';
$a->strings['Limited profile. This person will be unable to receive direct/personal notifications from you.'] = 'ملف شخصي محدود. لن يتمكن هذا الشخص من تلقي تنبيهات مباشرة/شخصية.';
$a->strings['Unable to retrieve contact information.'] = 'تعذر جلب معلومات المتراسل.';
$a->strings['Starts:'] = 'يبدأ:';
$a->strings['Finishes:'] = 'ينتهي:';
$a->strings['all-day'] = 'طوال اليوم';
$a->strings['Sept'] = 'سبتمبر';
$a->strings['No events to display'] = 'لا توجد أحداث لعرضها';
$a->strings['Edit event'] = 'عدّل الحدث';
$a->strings['Duplicate event'] = 'ضاعف الحدث';
$a->strings['Delete event'] = 'احذف الحدث';
$a->strings['l F d, Y \@ g:i A'] = 'l F d, Y \@ g:i A';
$a->strings['Show map'] = 'أظهر الخريطة';
$a->strings['Hide map'] = 'اخف الخريطة';
$a->strings['%s\'s birthday'] = 'عيد ميلاد %s';
$a->strings['Happy Birthday %s'] = '%s عيد ميلاد سعيد';
$a->strings['A deleted group with this name was revived. Existing item permissions <strong>may</strong> apply to this group and any future members. If this is not what you intended, please create another group with a different name.'] = 'تم إحياء مجموعة محذوفة بهذا الاسم. أذونات العنصر الموجودة سبقًا <strong>قد</strong> تنطبق على هذه المجموعة وأي أعضاء في المستقبل. إذا حصل هذا، يرجى إنشاء مجموعة أخرى باسم مختلف.';
$a->strings['Default privacy group for new contacts'] = 'المجموعة الافتراضية للمتراسلين الجدد';
$a->strings['Everybody'] = 'الجميع';
$a->strings['edit'] = 'عدّل';
$a->strings['add'] = 'أضف';
$a->strings['Edit group'] = 'عدّل المجموعة';
$a->strings['Contacts not in any group'] = 'متراسلون لا ينتمون لأي مجموعة';
$a->strings['Create a new group'] = 'أنشئ مجموعة جديدة';
$a->strings['Group Name: '] = 'اسم المجموعة: ';
$a->strings['Edit groups'] = 'عدّل المجموعات';
$a->strings['Detected languages in this post:\n%s'] = 'اللغات المكتشفة في هذه المشاركة:\n%s';
$a->strings['activity'] = 'النشاط';
$a->strings['comment'] = 'تعليق';
$a->strings['post'] = 'مشاركة';
$a->strings['Content warning: %s'] = 'تحذير من المحتوى: %s';
$a->strings['bytes'] = 'بايت';
$a->strings['View on separate page'] = 'اعرضه في صفحة منفصلة';
$a->strings['[no subject]'] = '[بدون موضوع]';
$a->strings['Edit profile'] = 'عدّل الملف الشخصي';
$a->strings['Change profile photo'] = 'غير صورة الملف الشخصي';
$a->strings['Homepage:'] = 'الصفحة رئيسية:';
$a->strings['About:'] = 'حول:';
$a->strings['Atom feed'] = 'تغذية Atom';
$a->strings['F d'] = 'F d';
$a->strings['[today]'] = '[اليوم]';
$a->strings['Birthday Reminders'] = 'التذكير أبعياد الميلاد';
$a->strings['Birthdays this week:'] = 'أعياد ميلاد لهذا الأسبوع:';
$a->strings['g A l F d'] = 'g A l F d';
$a->strings['[No description]'] = '[بدون وصف]';
$a->strings['Event Reminders'] = 'التذكير بالأحداث';
$a->strings['Upcoming events the next 7 days:'] = 'أحداث لهذا الأسبوع:';
$a->strings['OpenWebAuth: %1$s welcomes %2$s'] = 'OpenWebAuth: %1$s يرحب بـ %2$s';
$a->strings['Hometown:'] = 'المدينة:';
$a->strings['Marital Status:'] = 'الحالة الاجتماعية:';
$a->strings['With:'] = 'مع:';
$a->strings['Since:'] = 'منذ:';
$a->strings['Sexual Preference:'] = 'التفضيل الجنسي:';
$a->strings['Political Views:'] = 'الآراء السياسية:';
$a->strings['Religious Views:'] = 'الآراء الدينية:';
$a->strings['Likes:'] = 'أعجبني:';
$a->strings['Dislikes:'] = 'لم يعجبني:';
$a->strings['Title/Description:'] = 'العنوان/الوصف:';
$a->strings['Summary'] = 'موجز';
$a->strings['Musical interests'] = 'الموسيقى المفضلة';
$a->strings['Books, literature'] = 'الكتب والأدب';
$a->strings['Television'] = 'العروض التلفزيونة';
$a->strings['Film/dance/culture/entertainment'] = 'أفلام/رقص/ثقافة/ترفيه';
$a->strings['Hobbies/Interests'] = 'الهوايات/الاهتمامات';
$a->strings['Love/romance'] = 'الحب/الرومانسية';
$a->strings['Work/employment'] = 'العمل/التوظيف';
$a->strings['School/education'] = 'المدرسة/التعليم';
$a->strings['Contact information and Social Networks'] = 'معلومات الاتصال وحسابات الشبكات الاجتماعية';
$a->strings['SERIOUS ERROR: Generation of security keys failed.'] = 'خطأ قاتل: فشل توليد مفاتيح الأمان.';
$a->strings['Login failed'] = 'فشل الولوج';
$a->strings['Not enough information to authenticate'] = 'لا توجد معلومات كافية للاستيثاق';
$a->strings['Password can\'t be empty'] = 'لا يمكن أن تكون كلمة المرور فارغة';
$a->strings['Empty passwords are not allowed.'] = 'لا يسمح بكلمات مرور فارغة.';
$a->strings['The new password has been exposed in a public data dump, please choose another.'] = 'كلمة المرور الجديدة جزء من تسريب بيانات علني ، يرجى اختيار كلمة مرور مختلفة.';
$a->strings['The password can\'t contain accentuated letters, white spaces or colons (:)'] = 'لا يمكن أن تحتوي كلمة المرور على أحرف منبورة أو مسافات أو نقطتي تفسير (:)';
$a->strings['Passwords do not match. Password unchanged.'] = 'كلمتا المرور غير متطابقتين. لم تغيَّر كلمة المرور.';
$a->strings['An invitation is required.'] = 'الدعوة إلزامية.';
$a->strings['Invitation could not be verified.'] = 'تعذر التحقق من الدعوة.';
$a->strings['Invalid OpenID url'] = 'رابط OpenID عير صالح';
$a->strings['We encountered a problem while logging in with the OpenID you provided. Please check the correct spelling of the ID.'] = 'واجهنا مشكلة أثناء الولوج باستخدام OpenID. يرجى التحقق من صحة المعرف.';
$a->strings['The error message was:'] = 'رسالة الخطأ:';
$a->strings['Please enter the required information.'] = 'رجاءً أدخل المعلومات المطلوبة.';
$a->strings['Username should be at least %s character.'] = [
	0 => 'يجب أن لا يقل اسم المستخدم عن %s محرف.',
	1 => 'يجب أن لا يقل اسم المستخدم عن محرف %s.',
	2 => 'يجب أن لا يقل اسم المستخدم عن محرفين %s.',
	3 => 'يجب أن لا يقل اسم المستخدم عن %s محارف.',
	4 => 'يجب أن لا يقل اسم المستخدم عن %s محرف.',
	5 => 'يجب أن لا يقل اسم المستخدم عن %s محرف.',
];
$a->strings['Username should be at most %s character.'] = [
	0 => 'يجب أن لا يزيد اسم المستخدم عن %s محرف.',
	1 => 'يجب أن لا يزيد اسم المستخدم عن محرف %s.',
	2 => 'يجب أن لا يزيد اسم المستخدم عن محرفين %s.',
	3 => 'يجب أن لا يزيد اسم المستخدم عن %s محارف.',
	4 => 'يجب أن لا يزيد اسم المستخدم عن %s محرف.',
	5 => 'يجب أن لا يزيد اسم المستخدم عن %s محرف.',
];
$a->strings['That doesn\'t appear to be your full (First Last) name.'] = 'لا يبدو أن هذا اسمك الكامل.';
$a->strings['Your email domain is not among those allowed on this site.'] = 'نطاق بريدك الإلكتروني غير مسموح به على هذا الموقع.';
$a->strings['Not a valid email address.'] = 'عنوان البريد الإلكتروني غير صالح.';
$a->strings['The nickname was blocked from registration by the nodes admin.'] = 'هذا اللقب محظور من قبل مدير العقدة.';
$a->strings['Cannot use that email.'] = 'لا يمكن استخدام هذا البريد الإلكتروني.';
$a->strings['Your nickname can only contain a-z, 0-9 and _.'] = 'يجب أن يتكون اللقب من المحارف a-z، 0-9، _.';
$a->strings['Nickname is already registered. Please choose another.'] = 'هذا اللقب محجوز. اختر لقبًا آخر.';
$a->strings['An error occurred during registration. Please try again.'] = 'حدث خطأ أثناء التسجيل، رجاء حاول مرة أخرى.';
$a->strings['An error occurred creating your default profile. Please try again.'] = 'حدث خطأ أثناء إنشاء الملف الشخصي الافتراضي، رجاء حاول مرة أخرى.';
$a->strings['Friends'] = 'الأصدقاء';
$a->strings['An error occurred creating your default contact group. Please try again.'] = 'حدث خطأ أثناء إنشاء مجموعة المتراسلين الافتراضية، رجاء حاول مرة أخرى.';
$a->strings['Profile Photos'] = 'صور الملف الشخصي';
$a->strings['
		Dear %1$s,
			the administrator of %2$s has set up an account for you.'] = '
		عزيزي %1$s،
			أنشأ مدير %2$s حساب لك.';
$a->strings['
		The login details are as follows:

		Site Location:	%1$s
		Login Name:		%2$s
		Password:		%3$s

		You may change your password from your account "Settings" page after logging
		in.

		Please take a few moments to review the other account settings on that page.

		You may also wish to add some basic information to your default profile
		(on the "Profiles" page) so that other people can easily find you.

		We recommend setting your full name, adding a profile photo,
		adding some profile "keywords" (very useful in making new friends) - and
		perhaps what country you live in; if you do not wish to be more specific
		than that.

		We fully respect your right to privacy, and none of these items are necessary.
		If you are new and do not know anybody here, they may help
		you to make some new and interesting friends.

		If you ever want to delete your account, you can do so at %1$s/removeme

		Thank you and welcome to %4$s.'] = '
		تفاصيل تسجيل الولوج هي كالتالي:

		الموقع:	%1$s
		اسم المستخدم:		%2$s
		كلمة المرور:	%3$s

		يمكنك تغيير كلمة المرور من صفحة إعدادات الحساب.

		يرجى أخذ بضع لحظات لمراجعة الإعدادات الأخرى في تلك الصفحة.

		قد ترغب أيضًا في إضافة بعض المعلومات الأساسية إلى صفحة ملفك الشخصية الافتراضي
		(من صفحة "الملفات الشخصية") حتى يتمكن الآخرون من العثور عليك بسهولة.

		نحن نوصي بوضع اسمك الكامل، إضافة لصورة،
		وإضافة بعض الكلمات المفتاحية (مفيدة جدا في تكوين صداقات) - و
		ربما البلد الذي تعيش فيه.

		نحن نحترم حقك في الخصوصية احتراما كاملا، ولا ضرورة لأي مما سبق.
		إذا كنت جديداً ولا تعرف أي شخص هنا، فقد تساعدك هذه المعلومات على تكوين صداقات مثيرة للاهتمام.

		إذا كنت ترغب في حذف حسابك، يمكنك فعل ذلك في %1$s/removeme

		شكرا لك ومرحبًا بك في %4$s.';
$a->strings['Registration details for %s'] = 'تفاصيل التسجيل لـ %s';
$a->strings['
			Dear %1$s,
				Thank you for registering at %2$s. Your account is pending for approval by the administrator.

			Your login details are as follows:

			Site Location:	%3$s
			Login Name:		%4$s
			Password:		%5$s
		'] = '
			عزيزي %1$s،
				شكرا لك على التسجيل في %2$s. حسابك معلق حتى يوافق عليه المدير.

			تفاصيل الولوج هي كالتالي:

			الموقع:	%3$s
			اسم المستخدم:		%4$s
			كلمة المرور:		%5$s
				';
$a->strings['Registration at %s'] = 'التسجيل في %s';
$a->strings['
				Dear %1$s,
				Thank you for registering at %2$s. Your account has been created.
			'] = '
				 عزيزي %1$s،
				شكرا لك على التسجيل في %2$s. نجح إنشاء حسابك.
				';
$a->strings['
			The login details are as follows:

			Site Location:	%3$s
			Login Name:		%1$s
			Password:		%5$s

			You may change your password from your account "Settings" page after logging
			in.

			Please take a few moments to review the other account settings on that page.

			You may also wish to add some basic information to your default profile
			(on the "Profiles" page) so that other people can easily find you.

			We recommend setting your full name, adding a profile photo,
			adding some profile "keywords" (very useful in making new friends) - and
			perhaps what country you live in; if you do not wish to be more specific
			than that.

			We fully respect your right to privacy, and none of these items are necessary.
			If you are new and do not know anybody here, they may help
			you to make some new and interesting friends.

			If you ever want to delete your account, you can do so at %3$s/removeme

			Thank you and welcome to %2$s.'] = '
		تفاصيل تسجيل الولوج هي كالتالي:

		الموقع:	%3$s
		اسم المستخدم:		%1$s
		كلمة المرور:	%5$s

		يمكنك تغيير كلمة المرور من صفحة إعدادات الحساب.

		يرجى أخذ بضع لحظات لمراجعة الإعدادات الأخرى في تلك الصفحة.

		قد ترغب أيضًا في إضافة بعض المعلومات الأساسية إلى صفحة ملفك الشخصية الافتراضي
		(من صفحة "الملفات الشخصية") حتى يتمكن الآخرون من العثور عليك بسهولة.

		نحن نوصي بوضع اسمك الكامل، إضافة لصورة،
		وإضافة بعض الكلمات المفتاحية (مفيدة جدا في تكوين صداقات) - و
		ربما البلد الذي تعيش فيه.

		نحن نحترم حقك في الخصوصية احتراما كاملا، ولا ضرورة لأي مما سبق.
		إذا كنت جديداً ولا تعرف أي شخص هنا، فقد تساعدك هذه المعلومات على تكوين صداقات مثيرة للاهتمام.

		إذا كنت ترغب في حذف حسابك، يمكنك فعل ذلك في %3$s/removeme

		شكرا لك ومرحبًا بك في %2$s.';
$a->strings['Addon not found.'] = 'لم يُعثر على الإضافة.';
$a->strings['Addon %s disabled.'] = 'الإضافة %s معطلة.';
$a->strings['Addon %s enabled.'] = 'الإضافة %s مفعلة.';
$a->strings['Disable'] = 'عطّل';
$a->strings['Enable'] = 'فعّل';
$a->strings['Administration'] = 'إدارة';
$a->strings['Addons'] = 'الإضافات';
$a->strings['Toggle'] = 'بدّل';
$a->strings['Author: '] = 'الكاتب: ';
$a->strings['Maintainer: '] = 'المصين: ';
$a->strings['Addons reloaded'] = 'أُعيد تحميل الإضافة';
$a->strings['Addon %s failed to install.'] = 'فشل تثبيت إضافة %s.';
$a->strings['Reload active addons'] = 'أعد تحميل الإضافات النشطة';
$a->strings['There are currently no addons available on your node. You can find the official addon repository at %1$s and might find other interesting addons in the open addon registry at %2$s'] = 'لا توجد حاليا أي إضافات متاحة في عقدتك. يمكنك العثور على مستودع الإضافات الرسمي في %1$s وقد تجد إضافات أخرى مثيرة للاهتمام في سجل الإضافات المفتوحة في %2$s';
$a->strings['List of all users'] = 'قائمة المستخدمين';
$a->strings['Active'] = 'نشط';
$a->strings['List of active accounts'] = 'قائمة الحسابات النشطة';
$a->strings['Pending'] = 'معلق';
$a->strings['List of pending registrations'] = 'قائمة التسجيلات المعلقة';
$a->strings['Blocked'] = 'محجوب';
$a->strings['List of blocked users'] = 'قائمة المستخدمين المحجوبين';
$a->strings['Deleted'] = 'حُذف';
$a->strings['List of pending user deletions'] = 'قائمة الحذف المعلق للمستخدمين';
$a->strings['Private Forum'] = 'منتدى خاص';
$a->strings['Relay'] = 'مُرحِل';
$a->strings['%s contact unblocked'] = [
	0 => 'لم يُرفع الحجب عن مستخدم %s',
	1 => 'رُفع الحجب عن مستخدم %s',
	2 => 'رُفع الحجب عن مستخدمَين %s',
	3 => 'رُفع الحجب عن %s مستخدمين',
	4 => 'رُفع الحجب عن %s مستخدمًا',
	5 => 'رُفع الحجب عن %s مستخدم',
];
$a->strings['Remote Contact Blocklist'] = 'قائمة المتراسلين البِعاد المحظورين';
$a->strings['This page allows you to prevent any message from a remote contact to reach your node.'] = 'هذه الصفحة تمنع رسائل المستخدمين البِعاد من الوصول لعقدتك.';
$a->strings['Block Remote Contact'] = 'احجب مستخدمًا بعيدًا';
$a->strings['select all'] = 'اختر الكل';
$a->strings['select none'] = 'ألغ الاختيار';
$a->strings['Unblock'] = 'ارفع الحجب';
$a->strings['No remote contact is blocked from this node.'] = 'لم يُحجب متراسل بعيد من هذه العقدة.';
$a->strings['Blocked Remote Contacts'] = 'المستخدمون البِعاد المحجبون';
$a->strings['Block New Remote Contact'] = 'احجب مستخدمًا بعيدًا';
$a->strings['Photo'] = 'صورة';
$a->strings['Reason'] = 'السبب';
$a->strings['%s total blocked contact'] = [
	0 => 'لم يحجب أي متراسل %s',
	1 => 'متراسل%s محجوب',
	2 => 'متراسلان %s محجوبان',
	3 => '%s متراسلين محجوبين',
	4 => '%s متراسلًا محجوبًا',
	5 => '%s متراسل محجوب',
];
$a->strings['URL of the remote contact to block.'] = 'عنوان المتراسل البعيد المراد حجبه.';
$a->strings['Also purge contact'] = 'امسح المتراسل أيضًا';
$a->strings['Removes all content related to this contact from the node. Keeps the contact record. This action cannot be undone.'] = 'يزيل جميع المحتويات المتعلقة بهذا المتراسل من العقدة. ويحتفظ بسجل للمتراسل. لا يمكن التراجع عن هذا الإجراء.';
$a->strings['Block Reason'] = 'سبب الحجب';
$a->strings['Server domain pattern added to the blocklist.'] = 'أُضيفت صيغة النطاق لقائمة الحجب.';
$a->strings['← Return to the list'] = '→رجوع للقائمة';
$a->strings['Block A New Server Domain Pattern'] = 'احجب صيغة نطاق جديدة';
$a->strings['<p>The server domain pattern syntax is case-insensitive shell wildcard, comprising the following special characters:</p>
<ul>
	<li><code>*</code>: Any number of characters</li>
	<li><code>?</code>: Any single character</li>
</ul>'] = '<p>تنسيق صيّغ النطاق غير حساس لحالة الأحرف ويستخدم محارف بَدلِ الصدفة، بما في ذلك المحارف التالية: </p>
<ul>
	<li><code>*</code>: أي عدد من المحارف</li>
	<li><code>?</code>: محرف واحد</li>
</ul>';
$a->strings['Check pattern'] = 'تحقق من الصيغة';
$a->strings['Matching known servers'] = 'يطابق الخوادم المعروفة';
$a->strings['Server Name'] = 'اسم الخادم';
$a->strings['Server Domain'] = 'نطاق الخادم';
$a->strings['Known Contacts'] = 'المتراسلون المعروفون';
$a->strings['%d known server'] = [
	0 => 'لا توجد خوادم معروفة %d',
	1 => 'خادم %d معروف',
	2 => 'خادمان %d معروفان',
	3 => '%d خوادم معروفة',
	4 => '%d خادمًا معروفًا',
	5 => '%d خادمٍ معروفٍ',
];
$a->strings['Add pattern to the blocklist'] = 'أضف المرشِّح لقائمة الحجب';
$a->strings['Server Domain Pattern'] = 'صيغة النطاق';
$a->strings['The domain pattern of the new server to add to the blocklist. Do not include the protocol.'] = 'صيغة النطاق المراد إضافتها إلى قائمة الحجب. لا تُضمّن الميفاق.';
$a->strings['Purge server'] = 'امسح الخادم';
$a->strings['Block reason'] = 'سبب الحجب';
$a->strings['The reason why you blocked this server domain pattern. This reason will be shown publicly in the server information page.'] = 'سبب حجب صيغة نطاق الخادم. سوف يظهر علنًا في صفحة معلومات الخادم.';
$a->strings['Blocked server domain pattern'] = 'صيّغ النطاقات المحجوبة';
$a->strings['Reason for the block'] = 'سبب الحجب';
$a->strings['Delete server domain pattern'] = 'احذف صيغة النطاق';
$a->strings['Check to delete this entry from the blocklist'] = 'أشّر لحذف المدخل من قائمة الحجب';
$a->strings['Server Domain Pattern Blocklist'] = 'قائمة الحجب لصيّغ النطاق';
$a->strings['This page can be used to define a blocklist of server domain patterns from the federated network that are not allowed to interact with your node. For each domain pattern you should also provide the reason why you block it.'] = 'يمكن استخدام هذه الصفحة لتعريف صيّغ النطاقات لححب الخوادم من الشبكة الموحدة لمنع تفاعلها مع عقدتك. لكل صيغة نطاق يجب عليك تقديم سبب الحجب.';
$a->strings['The list of blocked server domain patterns will be made publically available on the <a href="/friendica">/friendica</a> page so that your users and people investigating communication problems can find the reason easily.'] = 'ستتاح قائمة صيّغ النطاقات الخادم المحجوبة في صفحة <a href="/friendica">/friendica</a> بحيث يمكن للمستخدمين التحقق من الخوادم اذا واجهوا مشكلة في الاتصال بها.';
$a->strings['Add new entry to the blocklist'] = 'أضف مُدخلًا جديد إلى القائمة الحجب';
$a->strings['Save changes to the blocklist'] = 'احفظ التغييرات في قائمة الحجب';
$a->strings['Current Entries in the Blocklist'] = 'المدخلات الموجودة في قائمة الحجب';
$a->strings['Delete entry from the blocklist'] = 'أزل مدخلًا من قائمة الحجب';
$a->strings['Delete entry from the blocklist?'] = 'أتريد إزالة المدخل من قائمة الحجب؟';
$a->strings['Update has been marked successful'] = 'تُحقق من صحة التحديث وعلّم كـ"ناجح"';
$a->strings['Database structure update %s was successfully applied.'] = 'نجح تطبيق التحديث بنية قاعدة البيانات %s.';
$a->strings['Executing of database structure update %s failed with error: %s'] = 'فشل تنفيذ تحديث بنية قاعدة البيانات %s مع رمز الخطأ: %s';
$a->strings['Executing %s failed with error: %s'] = 'فشل تنفيذ %s مع رمز الخطأ: %s';
$a->strings['Update %s was successfully applied.'] = 'نجح تنفيذ التحديث %s.';
$a->strings['Update %s did not return a status. Unknown if it succeeded.'] = 'لم يُعد أي رمز حالة للتحديث %s. تتعذر معرفة حالة التحديث.';
$a->strings['There was no additional update function %s that needed to be called.'] = 'لا توجد وظيفة تحديث إضافية %s يلزم استدعاؤها.';
$a->strings['No failed updates.'] = 'لم تفشل أي تحديثات.';
$a->strings['Check database structure'] = 'تحقق من بنية قاعدة البيانات';
$a->strings['Failed Updates'] = 'التحديثات الفاشلة';
$a->strings['This does not include updates prior to 1139, which did not return a status.'] = 'هذا لا يشمل الإصدارات السابقة لـ 1139، التي لم تُرجع تفاصيل.';
$a->strings['Mark success (if update was manually applied)'] = 'ضع علامة النجاح (إذا حدثته يدوياً)';
$a->strings['Attempt to execute this update step automatically'] = 'حاول تنفيذ الخطوة تلقائيًا';
$a->strings['Lock feature %s'] = 'أقفل ميزة %s';
$a->strings['Manage Additional Features'] = 'إدارة الميّزات الإضافية';
$a->strings['Other'] = 'أخرى';
$a->strings['unknown'] = 'مجهول';
$a->strings['%s total systems'] = '%s نظام';
$a->strings['%s active users last month'] = '%s مستخدم نشط في آخر شهر';
$a->strings['%s active users last six month'] = '%s مستخدم نشط في آخر ستة أشهر';
$a->strings['%s registered users'] = '%s مستخدم مسجل';
$a->strings['%s local posts'] = '%s مشاركة محلية';
$a->strings['%s posts per user'] = '%s مشاركة لكل مستخدم';
$a->strings['%s users per system'] = '%s مستخدم لكل نظام';
$a->strings['This page offers you some numbers to the known part of the federated social network your Friendica node is part of. These numbers are not complete but only reflect the part of the network your node is aware of.'] = 'تقدم لك هذه الصفحة بعض الإحصائيات للجزء المعروف من الشبكة الاجتماعية الموحدة المتصلة بعقدتك. هذه الإحصائيات ليست كاملة ولكنها تتضمن المواقع المعروفة لعقدتك من الشبكة.';
$a->strings['Federation Statistics'] = 'إحصائيات الشبكة الموحدة';
$a->strings['Item marked for deletion.'] = 'سيُحذف العنصر.';
$a->strings['Delete Item'] = 'احذف عنصر';
$a->strings['Delete this Item'] = 'احذف العنصر';
$a->strings['On this page you can delete an item from your node. If the item is a top level posting, the entire thread will be deleted.'] = 'في هذه الصفحة يمكنك حذف عنصر من عقدتك. إذا كان العنصر هو المشاركة الأصلية، سيحذف النقاش بأكمله.';
$a->strings['You need to know the GUID of the item. You can find it e.g. by looking at the display URL. The last part of http://example.com/display/123456 is the GUID, here 123456.'] = 'يجب أن تعرف GUID الخاص بالعنصر. يمكنك العثور عليه عن طريق اختيار العنصر ثم قراءة عنوان الرابط. الجزء الأخير من الرابط هو GUID. مثال: http://example.com/display/123456 حيث GUID هو 123456.';
$a->strings['Item Source'] = 'مصدر العنصر';
$a->strings['Item Id'] = 'معرّف العنصر';
$a->strings['Item URI'] = 'رابط العنصر';
$a->strings['Terms'] = 'الشروط';
$a->strings['Tag'] = 'وسم';
$a->strings['Type'] = 'نوع';
$a->strings['Term'] = 'مصطلح';
$a->strings['URL'] = 'رابط';
$a->strings['Mention'] = 'ذكر';
$a->strings['Implicit Mention'] = 'ذِكر صريح';
$a->strings['Source'] = 'المصدر';
$a->strings['The logfile \'%s\' is not writable. No logging possible'] = 'ملف السجل \'\'%s\' غير قابل للكتابة. لا يمكن كتابة السجلات';
$a->strings['PHP log currently enabled.'] = 'كتابة سجلات PHP مفعلة.';
$a->strings['PHP log currently disabled.'] = 'كتابة سجلات PHP معطلة.';
$a->strings['Logs'] = 'سجلات';
$a->strings['Clear'] = 'امحُ';
$a->strings['Enable Debugging'] = 'فعّل التنقيح';
$a->strings['Log file'] = 'ملف السجل';
$a->strings['Must be writable by web server. Relative to your Friendica top-level directory.'] = 'إذن الكتابة للخادم في مجلد جذر فرنديكا مطلوب.';
$a->strings['Log level'] = 'مستوى التسجيل';
$a->strings['PHP logging'] = 'كتابة سجلات PHP';
$a->strings['To temporarily enable logging of PHP errors and warnings you can prepend the following to the index.php file of your installation. The filename set in the \'error_log\' line is relative to the friendica top-level directory and must be writeable by the web server. The option \'1\' for \'log_errors\' and \'display_errors\' is to enable these options, set to \'0\' to disable them.'] = 'لتفعيل تسجيل أخطاء وتحذيرات PHP أدرج الأسطر التالية في بداية ملف index.php في مجلد فرنديكا. اسم الملف المحدد في سطر \'error_log\' متعلق بمجلد تثبيت فرنديكا ويجب أن يكون لدى خادم الويب إذن الكتابة فيه. يأخذ التكوينان \'log_errors\' و \'display_errors\' القيمة \'1\' لتفعيلهما أو \'0\' لتعطيلهما.';
$a->strings['Error trying to open <strong>%1$s</strong> log file.<br/>Check to see if file %1$s exist and is readable.'] = 'حدث خطأ أثناء فتح ملف السجل <strong>%1$s</strong>.<br/> تحقق مما إذا كان الملف %1$s موجودا وله أذونات القراءة.';
$a->strings['Couldn\'t open <strong>%1$s</strong> log file.<br/>Check to see if file %1$s is readable.'] = 'يتعذر فتح ملف السجل <strong>%1$s</strong>.<br/> تحقق مما إذا كان الملف %1$s مُنح أذونات القراءة.';
$a->strings['View Logs'] = 'اعرض السجلات';
$a->strings['Search in logs'] = 'ابحث في السجل';
$a->strings['Show all'] = 'اعرض الكل';
$a->strings['Date'] = 'التّاريخ';
$a->strings['Level'] = 'المستوى';
$a->strings['Context'] = 'السياق';
$a->strings['ALL'] = 'الكل';
$a->strings['View details'] = 'اعرض التفاصيل';
$a->strings['Click to view details'] = 'انقر لعرض التفاصيل';
$a->strings['Data'] = 'البيانات';
$a->strings['File'] = 'الملف';
$a->strings['Line'] = 'السطر';
$a->strings['Function'] = 'الدالة';
$a->strings['Process ID'] = 'مُعرّف العملية';
$a->strings['Close'] = 'أغلق';
$a->strings['Inspect Deferred Worker Queue'] = 'فحص طابور المهام المؤجلة';
$a->strings['This page lists the deferred worker jobs. This are jobs that couldn\'t be executed at the first time.'] = 'تسرد هذه الصفحة العمليات المؤجلة. هذه العمليات لا يمكن تنفيذها لأول مرة.';
$a->strings['Inspect Worker Queue'] = 'فحص طابور المهام';
$a->strings['This page lists the currently queued worker jobs. These jobs are handled by the worker cronjob you\'ve set up during install.'] = 'تسرد هذه الصفحة العمليات المتواجدة في الطابور حاليا. هذه العمليات تديرها المهام التي أعددتها أثناء التثبيت.';
$a->strings['ID'] = 'المعرف';
$a->strings['Command'] = 'أمر';
$a->strings['Job Parameters'] = 'معطيات العملية';
$a->strings['Priority'] = 'الأولوية';
$a->strings['Can not parse base url. Must have at least <scheme>://<domain>'] = 'يتعذر تحليل الرابط الأساسي. يجب أن يكون <scheme>://<domain>';
$a->strings['Relocation started. Could take a while to complete.'] = 'بدأ النقل. قد يستغرق بعض الوقت.';
$a->strings['No special theme for mobile devices'] = 'لا توجد سمة مخصصة للهاتف';
$a->strings['%s - (Experimental)'] = '%s - (اختباري)';
$a->strings['No community page for local users'] = 'لا توجد صفحة مجتمع للمستخدمين المحليين';
$a->strings['No community page'] = 'لا توجد صفحة مجتمع';
$a->strings['Public postings from users of this site'] = 'المشاركات العلنية لمستخدمي هذا الموقع';
$a->strings['Public postings from the federated network'] = 'المشاركات العلنية من الشبكة الموحدة';
$a->strings['Public postings from local users and the federated network'] = 'المشركات العلنية من الشبكة الموحدة والشبكة المحلية';
$a->strings['Multi user instance'] = 'مثيل متعدد المستخدمين';
$a->strings['Closed'] = 'مغلق';
$a->strings['Requires approval'] = 'تتطلب الحصول على موافقة';
$a->strings['Open'] = 'افتح';
$a->strings['Force all links to use SSL'] = 'فرض استخدام الروابط ل SSL';
$a->strings['Don\'t check'] = 'لا تتحقق';
$a->strings['check the stable version'] = 'تحقق من الإصدار المستقر';
$a->strings['check the development version'] = 'تحقق من الإصدار التطويري';
$a->strings['none'] = 'لا شيﺀ';
$a->strings['Local contacts'] = 'المُتراسِلون المحليون';
$a->strings['Interactors'] = 'المتفاعلون';
$a->strings['Site'] = 'موقع';
$a->strings['General Information'] = 'معلومات عامة';
$a->strings['Republish users to directory'] = 'أعد نشر المستخدمين في الدليل';
$a->strings['Registration'] = 'التسجيل';
$a->strings['File upload'] = 'رفع الملف';
$a->strings['Policies'] = 'السياسات';
$a->strings['Auto Discovered Contact Directory'] = 'دليل المتراسلين المكتشفين تلقائيًا';
$a->strings['Performance'] = 'الأداء';
$a->strings['Worker'] = 'مهمة';
$a->strings['Message Relay'] = 'ترحيل الرسالة';
$a->strings['The system is not subscribed to any relays at the moment.'] = 'هذا الخادم ليس مشترك في أي مرحلات حاليًا.';
$a->strings['The system is currently subscribed to the following relays:'] = 'هذا الخادم مشترك حاليًا في المرحلات التالية:';
$a->strings['Relocate Instance'] = 'انقل المثيل';
$a->strings['<strong>Warning!</strong> Advanced function. Could make this server unreachable.'] = '<strong>تحذير!</strong> وظيفة متقدمة. يمكن أن تجعل هذا الخادم غير قابل للوصول.';
$a->strings['Site name'] = 'اسم الموقع';
$a->strings['Sender Email'] = 'بريد المرسل';
$a->strings['The email address your server shall use to send notification emails from.'] = 'عنوان البريد الإلكتروني الذي سيستخدمه الخادم لإرسال رسائل التنبيه.';
$a->strings['Name of the system actor'] = 'اسم حساب النظام';
$a->strings['Name of the internal system account that is used to perform ActivityPub requests. This must be an unused username. If set, this can\'t be changed again.'] = 'اسم حساب النظام الداخلي المستخدم لتنفيذ طلبات ActivityPub. يجب أن لا يكون هذا الاسم محجوز. إذا عُين لا يمكن تغييره.';
$a->strings['Banner/Logo'] = 'اللافتة/الشعار';
$a->strings['Email Banner/Logo'] = 'شعار\لافتة البريد الإلكتروني';
$a->strings['Shortcut icon'] = 'أيقونة الاختصار';
$a->strings['Link to an icon that will be used for browsers.'] = 'رابط إلى أيقونة سيتم استخدامها للمتصفحات.';
$a->strings['Touch icon'] = 'أيقونة الأجهزة اللمسية';
$a->strings['Link to an icon that will be used for tablets and mobiles.'] = 'رابط إلى أيقونة سيتم استخدامها للأجهزة اللوحية والهواتف.';
$a->strings['Additional Info'] = 'معلومات إضافية';
$a->strings['For public servers: you can add additional information here that will be listed at %s/servers.'] = 'للخوادم العامة: يمكنك إضافة معلومات إضافية لتدرج في %s/servers.';
$a->strings['System language'] = 'لغة النظام';
$a->strings['System theme'] = 'سمة النظام';
$a->strings['Default system theme - may be over-ridden by user profiles - <a href="/admin/themes" id="cnftheme">Change default theme settings</a>'] = 'مظهر الموقع الافتراضي يختلف بناءً على الملف الشخصي الذي تمت زيارته - <a href="/admin/themes" id="cnftheme"> غيّر إعدادات السمة الافتراضية</a>';
$a->strings['Mobile system theme'] = 'سمة الهاتف';
$a->strings['Theme for mobile devices'] = 'سمة للأجهزة المحمولة';
$a->strings['SSL link policy'] = 'سياسة روابط SSL';
$a->strings['Determines whether generated links should be forced to use SSL'] = 'يحدد ما إذا كان ينبغي إجبار الروابط المولدة على استخدام SSL';
$a->strings['Force SSL'] = 'فرض SSL';
$a->strings['Force all Non-SSL requests to SSL - Attention: on some systems it could lead to endless loops.'] = 'أعد توجيه جميع الطلبات غير المشفرة إلى طلبات SSL. تحذير: في بعض الأنظمة يمكن أن يؤدي هذا إلى حلقات إعادة توجيه لا نهائية.';
$a->strings['Show help entry from navigation menu'] = 'أظهر المساعدة في قائمة التصفح';
$a->strings['Displays the menu entry for the Help pages from the navigation menu. It is always accessible by calling /help directly.'] = 'إظهار المساعدة في قائمة التصفح. تظل المساعدة قابلة للوصول من خلال الانتقال إلى /help مباشرة.';
$a->strings['Single user instance'] = 'مثيل لمستخدم وحيد';
$a->strings['Make this instance multi-user or single-user for the named user'] = 'اجعل هذا المثيل إما لمستخدم واحد أولعدّة مستخدمين';
$a->strings['Maximum image size'] = 'الحجم الأقصى للصورة';
$a->strings['Maximum size in bytes of uploaded images. Default is 0, which means no limits.'] = 'حد حجم الصورة المرفوعة بالبايت. الافتراضي هو 0 والذي يعني حجمًا غير محدود.';
$a->strings['Maximum image length'] = 'الطول الأقصى للصورة';
$a->strings['Maximum length in pixels of the longest side of uploaded images. Default is -1, which means no limits.'] = 'حد حجم الصورة المرفوعة بالبيكسل. الافتراضي هو 1- والذي يعني حجمًا غير محدود.';
$a->strings['JPEG image quality'] = 'جودة صور JPEG';
$a->strings['Uploaded JPEGS will be saved at this quality setting [0-100]. Default is 100, which is full quality.'] = 'سيتم حفظ ملفات JPEG المرفوعة بنسبة جودة [0-100]. القيمة الافتراضية هي 100 وهي جودة الأصلية للملف.';
$a->strings['Register policy'] = 'سياسات التسجيل';
$a->strings['Maximum Daily Registrations'] = 'الحد اليومي للتسجيل';
$a->strings['If registration is permitted above, this sets the maximum number of new user registrations to accept per day.  If register is set to closed, this setting has no effect.'] = 'إذا كان التسجيل مسموحا، فإن هذا يحدُّ عدد التسجيلات الجديدة  لليوم الواحد. إذا أُغلق التسجيل هذا الإعداد ليس له أي تأثير.';
$a->strings['Register text'] = 'نص صفحة التسجيل';
$a->strings['Will be displayed prominently on the registration page. You can use BBCode here.'] = 'ستعرض في صفحة التسجيل. يمكنك استخدام BBCode.';
$a->strings['Forbidden Nicknames'] = 'الألقاب المحظورة';
$a->strings['Accounts abandoned after x days'] = 'الحسابات المهجورة بعد x يوم';
$a->strings['Will not waste system resources polling external sites for abandonded accounts. Enter 0 for no time limit.'] = 'من أجل صونِ موارد النظام سنوقف الاستطلاع عن الحسابات المهجورة من المواقع البعيدة. ضع 0 لإيقاف هذه الوظيفة.';
$a->strings['Allowed friend domains'] = 'النطاقات المسموحة';
$a->strings['Comma separated list of domains which are allowed to establish friendships with this site. Wildcards are accepted. Empty to allow any domains'] = 'قائمة مفصولة بفواصل للنطاقات المصرح لها بالتفاعل مع مستخدمي هذا الموقع. علامة "*" مقبولة. اتركه فارغا للسماح لجميع النطاقات';
$a->strings['Allowed email domains'] = 'نطاقات البريد الإلكتروني المسموحة';
$a->strings['Comma separated list of domains which are allowed in email addresses for registrations to this site. Wildcards are accepted. Empty to allow any domains'] = 'قائمة مفصولة بفواصل للنطاقات البريد الإلكتروني المسموح بالتسجيل بها في هذا الموقع. علامة "*" مقبولة. اتركه فارغا للسماح لجميع النطاقات';
$a->strings['Trusted third-party domains'] = 'نطاقات الخارجية الموثوق بها';
$a->strings['Comma separated list of domains from which content is allowed to be embedded in posts like with OEmbed. All sub-domains of the listed domains are allowed as well.'] = 'قائمة مفصولة بفواصل من النطاقات التي يُسمح بتضمين محتواها في المشاركات مثل OEmbed. يُسمح أيضًا بجميع النطاقات الفرعية التابعة لها.';
$a->strings['Block public'] = 'احجب المشاركات العلنية';
$a->strings['Check to block public access to all otherwise public personal pages on this site unless you are currently logged in.'] = 'أشر لمنع الزوار من الوصول إلى كل الصفحات باستثناء الصفحات الشخصية العلنية.';
$a->strings['Force publish'] = 'افرض النشر';
$a->strings['Check to force all profiles on this site to be listed in the site directory.'] = 'أشر لفرض إدراج جميع الملفات الشخصية في دليل الموقع.';
$a->strings['Enabling this may violate privacy laws like the GDPR'] = 'تفعيله قد ينتهك قوانين حماية الخصوصية مثل GDPR';
$a->strings['Global directory URL'] = 'رابط الدليل العالمي';
$a->strings['URL to the global directory. If this is not set, the global directory is completely unavailable to the application.'] = 'رابط الدليل العالمي. إذا لم يتم تعريف هذا الحقل ، فلن يكون الدليل العام متاحًا.';
$a->strings['Private posts by default for new users'] = 'جعل المشاركات خاصة للمستخدمين الجدد افتراضيًا';
$a->strings['Set default post permissions for all new members to the default privacy group rather than public.'] = 'تعيين أذونات النشر الافتراضية لجميع الأعضاء الجدد إلى خاصة بدل العلنية.';
$a->strings['Don\'t include post content in email notifications'] = 'لا تضمن محتويات المشاركات في تنبيهات البريد الإلكتروني';
$a->strings['Don\'t include the content of a post/comment/private message/etc. in the email notifications that are sent out from this site, as a privacy measure.'] = 'لا تضمن محتوى المشركات/التعليقات/الرسائل الخاصة/إلخ في تنبيهات البريد الإلكتروني المرسلة من هذا الموقع، كتدبير لحماية الخصوصية.';
$a->strings['Disallow public access to addons listed in the apps menu.'] = 'لا تسمح بالوصول العلني للإضافات المدرجة في قائمة التطبيقات.';
$a->strings['Checking this box will restrict addons listed in the apps menu to members only.'] = 'تأشير هذا الخِيار سيجعل الوصول إلى الإضافات في قائمة التطبيقات للأعضاء فقط.';
$a->strings['Don\'t embed private images in posts'] = 'لا تضمن الصور الخاصة في المشاركات';
$a->strings['Don\'t replace locally-hosted private photos in posts with an embedded copy of the image. This means that contacts who receive posts containing private photos will have to authenticate and load each image, which may take a while.'] = 'لا تستبدل الصور الخاصة المستضافة محليًا في المشاركات بنسخة مضمنة ، لأن هذا يعني أن المتراسلين الذين يتلقون المشاركات التي تحوي تلك الصور ستحتاج إلى مصادقة لرؤية كل صورة ، ما قد يستغرق بعض الوقت.';
$a->strings['Explicit Content'] = 'محتوى حساس';
$a->strings['Set this to announce that your node is used mostly for explicit content that might not be suited for minors. This information will be published in the node information and might be used, e.g. by the global directory, to filter your node from listings of nodes to join. Additionally a note about this will be shown at the user registration page.'] = 'عيّن هذا الخيار للإعلان عن أن عقدتك تحتوي محتوى حساس قد لا يكون مناسباً للقصر. وسوف تنشر هذه المعلومات في معلومات العقدة وصفحة التسجيل، ويستخدم هذا الخيار في الدليل العالمي، فأثناء استعراض هذه العقدة في الدليل ستظهر لهم هذه المعلومة.';
$a->strings['Proxify external content'] = 'توجيه المحتوى الخارجي عبر الوكيل';
$a->strings['Route external content via the proxy functionality. This is used for example for some OEmbed accesses and in some other rare cases.'] = 'توجيه المحتوى الخارجي عن طريق وميل. يستخدم هذا على سبيل المثال وصول OEmbed وفي بعض الحالات النادرة الأخرى.';
$a->strings['Locally store the avatar pictures of the contacts. This uses a lot of storage space but it increases the performance.'] = 'خزن الصور الرمزية محليًا. يحجز مساحة كبير ولكنه يزيد الأداء.';
$a->strings['Allow Users to set remote_self'] = 'اسمح للمستخدمين بتعيين remote_self';
$a->strings['With checking this, every user is allowed to mark every contact as a remote_self in the repair contact dialog. Setting this flag on a contact causes mirroring every posting of that contact in the users stream.'] = 'يتيح تأشير هذا المربع للميتخدمين تعريف مل المتراسلين علئ أنهم remote_self في مربع حوار اصلاح المتراسلين. سيؤدي تنشيط هذه الميزة على متراسل إلى نسخ جميع منشوراته في دفق المستخدم.';
$a->strings['Enable multiple registrations'] = 'فعّل تعدد التسجيل';
$a->strings['Enable users to register additional accounts for use as pages.'] = 'يمكن المستخدمين من تسجيل حسابات إضافية لتستخدم كصفحات.';
$a->strings['Enable OpenID'] = 'فعّل OpenID';
$a->strings['Enable OpenID support for registration and logins.'] = 'فعّل دعم OpenID للتسجيل والولوج.';
$a->strings['Enable Fullname check'] = 'افرض استخدام الأسماء الكاملة';
$a->strings['Enable check to only allow users to register with a space between the first name and the last name in their full name.'] = 'يفرض على المستخدمين تضمين مسافة واحدة في اسم المستخدم الخاص بهم بين الاسم الأول والاسم الأخير.';
$a->strings['Community pages for visitors'] = 'عرض صفحة المجتمع للزوار';
$a->strings['Which community pages should be available for visitors. Local users always see both pages.'] = 'صفحات المجتمع المتاحة للزوار. المستخدمون المحليون يمكنهم مشاهدة كلا النوعين.';
$a->strings['Posts per user on community page'] = 'حد المشاركات لكل مستخدم في صفحة المجتمع';
$a->strings['The maximum number of posts per user on the community page. (Not valid for "Global Community")'] = 'الحد الأقصى لعدد المشاركات لكل مستخدم في صفحة المجتمع المحلي';
$a->strings['Enable Mail support'] = 'فعّل دعم البريد الإلكتروني';
$a->strings['Proxy user'] = 'مستخدم الوكيل';
$a->strings['Proxy URL'] = 'رابط الوكيل';
$a->strings['Network timeout'] = 'انتهت مهلة الاتصال بالشبكة';
$a->strings['Value is in seconds. Set to 0 for unlimited (not recommended).'] = 'القيمة بالثواني. تعيينها لـ 0 يعني مهلة غير محدودة (غير مستحسن).';
$a->strings['Minimal Memory'] = 'الحد الأدنى للذاكرة';
$a->strings['Minimal free memory in MB for the worker. Needs access to /proc/meminfo - default 0 (deactivated).'] = 'الحد الأدنى لذاكرة الحرة للمهمة بالميغابايت. تحتاج إذن الوصول إلى /proc/meminfo - الافتراضي 0 (معطل).';
$a->strings['Periodically optimize tables'] = 'تحسين الجداول بصفة دورية';
$a->strings['Periodically optimize tables like the cache and the workerqueue'] = 'حسن بانتظام بعض جداول قاعدة البيانات المستخدمة على نطاق واسع مثل ذاكرة التخزين المؤقت أو الأقفال أو الجلسة أو طابور المهام';
$a->strings['Discover followers/followings from contacts'] = 'اكتشف قائمة متابِعي/متابَعي متراسليك';
$a->strings['If enabled, contacts are checked for their followers and following contacts.'] = 'اذا فُعل سيقوم هذا الخادم بتجميع قائمة متابِعي ومتابَعي متراسليك.';
$a->strings['None - deactivated'] = 'لا شيء - معطل';
$a->strings['Local contacts - contacts of our local contacts are discovered for their followers/followings.'] = 'المتراسلون المحليون - متراسلوا مستخدمي هذا الخادم.';
$a->strings['Interactors - contacts of our local contacts and contacts who interacted on locally visible postings are discovered for their followers/followings.'] = 'المتفاعلون: متراسلو مستخدمي هذا الخادم والمتراسلون الذين تفاعلوا مع المشاركات المحلية لهذا الخادم.';
$a->strings['Synchronize the contacts with the directory server'] = 'زامن المتراسلين مع خادم الدليل';
$a->strings['if enabled, the system will check periodically for new contacts on the defined directory server.'] = 'إذا فُعل سيقوم النظام بالتحقق دوريا للبحث عن متراسلين جدد على خادم الدليل المحدد.';
$a->strings['Days between requery'] = 'المهلة بالأيام بين الطلبات';
$a->strings['Discover contacts from other servers'] = 'اكتشف متراسلين من خوادم أخرى';
$a->strings['Periodically query other servers for contacts. The system queries Friendica, Mastodon and Hubzilla servers.'] = 'يجلب دوريا متراسلين من خوادم أخرى. يُطبّق على خوادم فرنديكا وماستدون وهوبزيلا.';
$a->strings['Search the local directory'] = 'ابحث في الدليل المحلي';
$a->strings['Search the local directory instead of the global directory. When searching locally, every search will be executed on the global directory in the background. This improves the search results when the search is repeated.'] = 'يبحث في الدليل المحلي بدلاً من الدليل العالمي. عند إجراء بحث محلي ، يجرى نفس البحث في الدليل العالمي في الخلفية. هذا يحسن نتائج البحث إذا تكررت.';
$a->strings['Publish server information'] = 'انشر معلومات الخادم';
$a->strings['If enabled, general server and usage data will be published. The data contains the name and version of the server, number of users with public profiles, number of posts and the activated protocols and connectors. See <a href="http://the-federation.info/">the-federation.info</a> for details.'] = 'إذا فعل ستنشر البيانات العامة للخادم وبيانات استخدامه. تحتوي هذه البيانات على اسم وإصدار الخادم ، وعدد المستخدمين الذين لهم ملف شخصي علني، وعدد المنشورات وقائمة الموصّلات والموافيق النشطة. راجع <a href="http://the-federation.info/">federation.info</a> للحصول على التفاصيل.';
$a->strings['Check upstream version'] = 'تحقق من الاصدار المنبعي';
$a->strings['Suppress Tags'] = 'اخف الوسوم';
$a->strings['Suppress showing a list of hashtags at the end of the posting.'] = 'اخف قائمة الوسوم من أسفل المشاركة.';
$a->strings['Clean database'] = 'امسح قاعدة البيانات';
$a->strings['Remove old remote items, orphaned database records and old content from some other helper tables.'] = 'يزيل العناصر البعيدة القديمة والسجلات اليتيمة والمحتوى القديم من بعض الجداول المساعدة.';
$a->strings['Lifespan of remote items'] = 'عمر العناصر البعيدة';
$a->strings['When the database cleanup is enabled, this defines the days after which remote items will be deleted. Own items, and marked or filed items are always kept. 0 disables this behaviour.'] = 'إذا كان تنظيف قاعدة البيانات مفعلًا ، فإن هذه القيمة تمثل المهلة بالأيام لحذف العناصر البعيدة. يتم دائمًا الاحتفاظ بالعناصر المحلية والمفضلة والمؤرشفة. أدخل 0 لتعطيله.';
$a->strings['Maximum numbers of comments per post'] = 'حد عدد التعليقات لكل مشاركة';
$a->strings['How much comments should be shown for each post? Default value is 100.'] = 'عدد التعليقات التي تعرض لكل مشاركة؟ القيمة الافتراضية هي 100.';
$a->strings['Maximum numbers of comments per post on the display page'] = 'الحد الأقصى لعدد التعليقات لكل محادثة في صفحة العرض (/display)';
$a->strings['How many comments should be shown on the single view for each post? Default value is 1000.'] = 'عدد التعليقات المعروضة في سياق المشاركة، القيمة الافتراضية هي 1000.';
$a->strings['Temp path'] = 'مسار التخزين المؤقت';
$a->strings['If you have a restricted system where the webserver can\'t access the system temp path, enter another path here.'] = 'إذا كان نظامك مقيد حيث لا يستطيع خادم الويب الوصول إلى مسار مجلد التخزين المؤقت (temp)، أدخل مسار آخر هنا.';
$a->strings['Only search in tags'] = 'ابحث في الوسوم فقط';
$a->strings['On large systems the text search can slow down the system extremely.'] = 'في النّظم الكبيرة، يمكن أن يؤدي البحث عن النصوص إلى إبطاء النظام.';
$a->strings['New base url'] = 'رابط أساسي جديد';
$a->strings['Maximum number of parallel workers'] = 'الحد الأقصى لعدد المهام';
$a->strings['Can be "all" or "tags". "all" means that every public post should be received. "tags" means that only posts with selected tags should be received.'] = 'إما أن يكون "الكل" أو "الوسوم". يعني "الكل" وُجوب تلقي كل المشاركات العلنية. تعني "الوسوم" وجوب تلقي المشاركات ذات الوسوم المحددة فقط.';
$a->strings['Disabled'] = 'معطّل';
$a->strings['all'] = 'الكل';
$a->strings['tags'] = 'الوسوم';
$a->strings['Server tags'] = 'وسوم الخادم';
$a->strings['Deny Server tags'] = 'الوسوم المرفوضة';
$a->strings['Comma separated list of tags that are rejected.'] = 'قائمة بالوسوم المرفوضة مفصول بفاصلة.';
$a->strings['Allow user tags'] = 'اسمح بوسوم المستخدمين';
$a->strings['Start Relocation'] = 'ابدأ النقل';
$a->strings['Storage backend, %s is invalid.'] = 'قرص التخزين %s غير صالح.';
$a->strings['Storage backend %s error: %s'] = 'قرص التخزين %s خطأ: %s';
$a->strings['Invalid storage backend setting value.'] = 'قيمة الإعداد غير صالحة.';
$a->strings['Current Storage Backend'] = 'قرص التخزين الحالي';
$a->strings['Storage Configuration'] = 'إعدادات التخزين';
$a->strings['Storage'] = 'مساحة التخزين';
$a->strings['Save & Reload'] = 'احفظ وأعد التحميل';
$a->strings['Your DB still runs with MyISAM tables. You should change the engine type to InnoDB. As Friendica will use InnoDB only features in the future, you should change this! See <a href="%s">here</a> for a guide that may be helpful converting the table engines. You may also use the command <tt>php bin/console.php dbstructure toinnodb</tt> of your Friendica installation for an automatic conversion.<br />'] = 'تستخدم قاعدة البيانات جداول MYISAM. يجب عليك تغيير المحرك إلى InnoDB حيث أنه من المخطط أن يستخدم فرنديكا ميزات منوطة بـ InnoDB في المستقبل.راجع <a href="%s"> هذا الدليل </a> لتحديث قاعدة البيانات الخاصة بك. يمكنك أيضًا تشغيل الأمر <tt>php bin/console.php dbstructure toinnodb</tt> في دليل الجذر لفرنديكا للتحويل التلقائي.<br />';
$a->strings['Your DB still runs with InnoDB tables in the Antelope file format. You should change the file format to Barracuda. Friendica is using features that are not provided by the Antelope format. See <a href="%s">here</a> for a guide that may be helpful converting the table engines. You may also use the command <tt>php bin/console.php dbstructure toinnodb</tt> of your Friendica installation for an automatic conversion.<br />'] = 'تستخدم قاعدة البيانات جداول InnoDB بتنسيق Antelope. يجب عليك تغيير التنسيق إلى Barracuda حيث أن فرنديكا يستخدم ميزات منوطة بتنسيق Barracuda راجع <a href="%s">هذا الدليل</a> لتحديث قاعدة البيانات. يمكنك أيضًا تشغيل الأمر <tt>php bin/console.php dbstructure toinnodb</tt> في دليل الجذر لفرنديكا للتحويل التلقائي.<br />';
$a->strings['There is a new version of Friendica available for download. Your current version is %1$s, upstream version is %2$s'] = 'يتوفر إصدار جديد لفرنديكا. الإصدار الحالي هو %1$s والإصدار الجديد هو %2$s';
$a->strings['The database update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear.'] = 'فشل تحديث قاعدة البيانات. رجاءً شغّل أمر "php bin/console.php dbstructure update" من سطر الأوامر وألق نظرة على الأخطاء التي قد تظهر.';
$a->strings['The last update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear. (Some of the errors are possibly inside the logfile.)'] = 'فشل آخر تحديث لقاعدة البيانات. رجاءً شغّل أمر "php bin/console.php dbstructure update" من سطر الأوامر وألق نظرة على الأخطاء التي قد تظهر. (قد تجد بعض الأخطاء في ملف السجل)';
$a->strings['The worker was never executed. Please check your database structure!'] = 'لم يتم تنفيذ المهمة أبداً. يرجى التحقق من بنية قاعدة البيانات!';
$a->strings['The last worker execution was on %s UTC. This is older than one hour. Please check your crontab settings.'] = 'تنفيذ آخر مهمة كان على %s UTC. هذا أقدم من ساعة. يرجى التحقق من إعدادات crontab.';
$a->strings['The logfile \'%s\' is not usable. No logging possible (error: \'%s\')'] = 'لا يمكن استخدام ملف السجل \'\'%s\'. لا يمكن كتابة السجلات (خطأ: \'%s\')';
$a->strings['The debug logfile \'%s\' is not usable. No logging possible (error: \'%s\')'] = 'لا يمكن استخدام ملف السجل الخاص بالتنقيح \'%s\'. لا يمكن كتابة السجلات (خطأ: \'%s\')';
$a->strings['Normal Account'] = 'حساب عادي';
$a->strings['Public Forum Account'] = 'حساب منتدى عمومي';
$a->strings['Blog Account'] = 'حساب مدونة';
$a->strings['Private Forum Account'] = 'حساب منتدى خاص';
$a->strings['Message queues'] = 'طوابير الرسائل';
$a->strings['Server Settings'] = 'إعدادات الخادم';
$a->strings['Registered users'] = 'الأعضاء المسجلون';
$a->strings['Pending registrations'] = 'التسجيلات المعلقة';
$a->strings['Version'] = 'الإصدار';
$a->strings['Active addons'] = 'الإضافات النشطة';
$a->strings['Theme %s disabled.'] = 'سمة %s معطلة.';
$a->strings['Theme %s successfully enabled.'] = 'فُعّلت سمة %s بنجاح.';
$a->strings['Theme %s failed to install.'] = 'فشل تثبيت سمة %s.';
$a->strings['Screenshot'] = 'لقطة شاشة';
$a->strings['Themes'] = 'السمات';
$a->strings['Unknown theme.'] = 'سمة مجهولة.';
$a->strings['Themes reloaded'] = 'أُعيد تحميل السمة';
$a->strings['Reload active themes'] = 'أعد تحميل السمة النشطة';
$a->strings['No themes found on the system. They should be placed in %1$s'] = 'لم يُعثر على أي سمات في النظام. يجب أن توضع في %1$s';
$a->strings['[Experimental]'] = '[تجريبي]';
$a->strings['[Unsupported]'] = '[غير مدعوم]';
$a->strings['Display Terms of Service'] = 'أظهر شروط الخدمة';
$a->strings['Enable the Terms of Service page. If this is enabled a link to the terms will be added to the registration form and the general information page.'] = 'فعّل صفحة شروط الخدمة. إذا فُعّل هذا الرابط، سيضاف رابط صفحة شروط الخدمة إلى صفحة التسجيل وصفحة المعلومات العامة.';
$a->strings['Display Privacy Statement'] = 'اعرض بيان الخصوصية';
$a->strings['Privacy Statement Preview'] = 'اعرض بيان الخصوصية';
$a->strings['The Terms of Service'] = 'شروط الخدمة';
$a->strings['Enter the Terms of Service for your node here. You can use BBCode. Headers of sections should be [h2] and below.'] = 'أدخل شروط الخدمة لعقدتك هنا. يمكنك استخدام BBCode. يجب أن تكون عناوين الأقسام [h2] أو أدناه.';
$a->strings['%s user blocked'] = [
	0 => 'لم يحجب أي مستخدم %s',
	1 => 'حُجب مستخدم واحد %s',
	2 => 'حُجب مستخدم واحد %s',
	3 => 'حُجب %s مستخدمين',
	4 => 'حُجب %s مستخدما',
	5 => 'حُجب %s مستخدم',
];
$a->strings['You can\'t remove yourself'] = 'لا يمكنك إزالة نفسك';
$a->strings['%s user deleted'] = [
	0 => 'لا مستخدمين محذوفين %s',
	1 => 'مستخدم محذوف %s',
	2 => 'مستخدمان %s محذوفان',
	3 => '%s مستخدمين محذوفين',
	4 => '%s مستخدمًا محذوفًا',
	5 => '%s مستخدم محذوف',
];
$a->strings['User "%s" deleted'] = 'حذف المستخدم "%s"';
$a->strings['User "%s" blocked'] = 'حُجب المستخدم "%s"';
$a->strings['Register date'] = 'تاريخ التسجيل';
$a->strings['Last login'] = 'آخر ولوج';
$a->strings['Last public item'] = 'آخر عنصر منشور';
$a->strings['Active Accounts'] = 'الحسابات النشطة';
$a->strings['User blocked'] = 'المستخدم محجوب';
$a->strings['Site admin'] = 'مدير الموقع';
$a->strings['Account expired'] = 'انتهت صلاحية الحساب';
$a->strings['Create a new user'] = 'أنشئ مستخدمًا جديدًا';
$a->strings['Selected users will be deleted!\n\nEverything these users had posted on this site will be permanently deleted!\n\nAre you sure?'] = 'سيُحذف المستخدمون المحددون!\n\nكل ما نشره هؤلاء على هذا الموقع سيُحذف نهائيًا!\n\nهل أنت متأكد؟';
$a->strings['The user {0} will be deleted!\n\nEverything this user has posted on this site will be permanently deleted!\n\nAre you sure?'] = 'سيُحذف المستخدم {0}!\n\nكل ما نشره على هذا الموقع سيُحذف نهائيًا!\n\nهل أنت متأكد؟';
$a->strings['%s user unblocked'] = [
	0 => 'لم يُرفع الحجب عن أي مستخدم %s',
	1 => 'رُفع الحجب عن مستخدم واحد %s',
	2 => 'رُفع الحجب عن مستخدمين %s',
	3 => 'رُفع الحجب عن %s مستخدمين',
	4 => 'رُفع الحجب عن %s مستخدما',
	5 => 'رُفع الحجب عن %s مستخدم',
];
$a->strings['User "%s" unblocked'] = 'رُفع الحجب عن المستخدم "%s"';
$a->strings['Blocked Users'] = 'المستخدمون المحجوبون';
$a->strings['New User'] = 'مستخدم جديد';
$a->strings['Add User'] = 'أضف مستخدم';
$a->strings['Name of the new user.'] = 'اسم المستخدم الجديد.';
$a->strings['Nickname'] = 'اللقب';
$a->strings['Nickname of the new user.'] = 'لقب المستخدم الجديد.';
$a->strings['Email address of the new user.'] = 'عنوان البريد الإلكتروني للمستخدم للجديد.';
$a->strings['Users awaiting permanent deletion'] = 'مستخدمون في انتظار الحذف الدائم';
$a->strings['Permanent deletion'] = 'حذف نهائي';
$a->strings['Users'] = 'المستخدمون';
$a->strings['User waiting for permanent deletion'] = 'مستخدم ينتظر الحذف الكلي لحسابه';
$a->strings['%s registration revoked'] = [
	0 => 'لم يجهض أي تسجيل %s',
	1 => 'أجهض تسجيل %s',
	2 => 'أجهض تسجيلان %s',
	3 => 'أجهظت %s تسجيلات',
	4 => 'أجهض %s تسجيلًا',
	5 => 'أجهض %s تسجيل',
];
$a->strings['Account approved.'] = 'قُبل الحساب.';
$a->strings['Registration revoked'] = 'أجهض التسجيل';
$a->strings['User registrations awaiting review'] = 'تسجيلات تنتظر المعاينة';
$a->strings['Request date'] = 'تاريخ الطلب';
$a->strings['No registrations.'] = 'لا توجد تسجيلات.';
$a->strings['Note from the user'] = 'ملاحظة من المستخدم';
$a->strings['Deny'] = 'رفض';
$a->strings['Missing parameters'] = 'معطيات مفقودة';
$a->strings['Posts from %s can\'t be shared'] = 'لا تمكن مشاركة مشاركات %s';
$a->strings['Posts from %s can\'t be unshared'] = 'لا يمكن إلغاء مشاركة مشاركات %s';
$a->strings['Contact not found'] = 'لم يُعثر على المتراسل';
$a->strings['No installed applications.'] = 'تطبيقات غير مثبتة.';
$a->strings['Applications'] = 'التطبيقات';
$a->strings['Item was not found.'] = 'لم يُعثر على العنصر.';
$a->strings['Please login to continue.'] = 'يرجى الولوج للمتابعة.';
$a->strings['You don\'t have access to administration pages.'] = 'ليس لديك حق النفاذ لصفحات الإدارة.';
$a->strings['Overview'] = 'نظرة عامّة';
$a->strings['Configuration'] = 'الضبط';
$a->strings['Additional features'] = 'ميزات إضافية';
$a->strings['Database'] = 'قاعدة بيانات';
$a->strings['DB updates'] = 'تحديثات قاعدة البيانات';
$a->strings['Inspect Deferred Workers'] = 'فحص المهام المؤجلة';
$a->strings['Inspect worker Queue'] = 'فحص طابور المهام';
$a->strings['Tools'] = 'أدوات';
$a->strings['Contact Blocklist'] = 'قائمة المتراسلين المحظورين';
$a->strings['Server Blocklist'] = 'قائمة الخوادم المحظورة';
$a->strings['Diagnostics'] = 'التشخيصات';
$a->strings['PHP Info'] = 'معلومات الـPHP';
$a->strings['check webfinger'] = 'تحقق من بصمة الويب';
$a->strings['ActivityPub Conversion'] = 'محادثة عبر ActivityPub';
$a->strings['Addon Features'] = 'ميزات الإضافة';
$a->strings['User registrations waiting for confirmation'] = 'مستخدم ينتظر الموافقة على طلب تسجيله';
$a->strings['Too Many Requests'] = 'طلبات كثيرة';
$a->strings['Daily posting limit of %d post reached. The post was rejected.'] = [
	0 => 'رُفضت المشاركة. حدك اليومي معدوم %d.',
	1 => 'رُفضت المشاركة. تجاوزت الحد اليومي وهو مشاركة %d.',
	2 => 'رُفضت المشاركة. تجاوزت الحد اليومي وهو مشاركتان %d.',
	3 => 'رُفضت المشاركة. تجاوزت الحد اليومي وهو %d مشاركات.',
	4 => 'رُفضت المشاركة. تجاوزت الحد اليومي وهو %d مشاركة.',
	5 => 'رُفضت المشاركة. تجاوزت الحد اليومي وهو %d مشاركة.',
];
$a->strings['Weekly posting limit of %d post reached. The post was rejected.'] = [
	0 => 'رُفضت المشاركة. تجاوزت الحد الأسبوعي وهو معدوم %d.',
	1 => 'رُفضت المشاركة. تجاوزت الحد الأسبوعي وهو مشاركة %d.',
	2 => 'رُفضت المشاركة. تجاوزت الحد الأسبوعي وهو مشاركتان %d.',
	3 => 'رُفضت المشاركة. تجاوزت الحد الأسبوعي وهو %d مشاركات.',
	4 => 'رُفضت المشاركة. تجاوزت الحد الأسبوعي وهو %d مشاركة.',
	5 => 'رُفضت المشاركة. تجاوزت الحد الأسبوعي وهو %d مشاركة.',
];
$a->strings['Monthly posting limit of %d post reached. The post was rejected.'] = 'رُفضت المشاركة. تجاوزت الحد الشهري وهو %d مشاركة.';
$a->strings['Profile Details'] = 'تفاصيل الملف الشخصي';
$a->strings['Only You Can See This'] = 'فقط أنت من يمكنه رؤية هذا';
$a->strings['Scheduled Posts'] = 'المشاركات المبرمجة';
$a->strings['Posts that are scheduled for publishing'] = 'المشاركات المقرر نشرها';
$a->strings['Tips for New Members'] = 'تلميحات للأعضاء الجدد';
$a->strings['People Search - %s'] = 'البحث عن أشخاص - %s';
$a->strings['Forum Search - %s'] = 'البحث عن منتديات - %s';
$a->strings['Account'] = 'الحساب';
$a->strings['Two-factor authentication'] = 'الاستيثاق بعاملَيْن';
$a->strings['Display'] = 'العرض';
$a->strings['Manage Accounts'] = 'إدارة الحسابات';
$a->strings['Connected apps'] = 'التطبيقات المتصلة';
$a->strings['Export personal data'] = 'تصدير البيانات الشخصية';
$a->strings['Remove account'] = 'أزل الحساب';
$a->strings['This page is missing a url parameter.'] = 'هذه الصفحة تفتقد معطى للرابط.';
$a->strings['The post was created'] = 'أُنشأت المشاركة';
$a->strings['%d contact edited.'] = [
	0 => 'لم يحُرر أي متراسل %d.',
	1 => 'حُرر متراسل واحد %d.',
	2 => 'حُرر متراسلان %d.',
	3 => 'حُرر %d متراسلين.',
	4 => 'حُرر %d متراسلا.',
	5 => 'حُرر %d متراسل.',
];
$a->strings['Show all contacts'] = 'أظهِر كل المتراسلين';
$a->strings['Only show pending contacts'] = 'أظهِر المتراسلين المعلقين';
$a->strings['Only show blocked contacts'] = 'أظهِر المتراسلين المحجوبين فقط';
$a->strings['Ignored'] = 'مُتجاهَل';
$a->strings['Only show ignored contacts'] = 'أظهِر المتراسلين المتجاهلين فقط';
$a->strings['Archived'] = 'مؤرشف';
$a->strings['Only show archived contacts'] = 'أظهِر المتراسلين المؤرشفين فقط';
$a->strings['Hidden'] = '‮مخفي';
$a->strings['Only show hidden contacts'] = 'أظهِر المتراسلين المخفيين فقط';
$a->strings['Organize your contact groups'] = 'نظّم مجموعات متراسليك';
$a->strings['Search your contacts'] = 'ابحث في متراسليك';
$a->strings['Results for: %s'] = 'نتائج: %s';
$a->strings['Update'] = 'حدّث';
$a->strings['Unignore'] = 'ألغي التجاهل';
$a->strings['Batch Actions'] = 'إجراءات متعددة';
$a->strings['Conversations started by this contact'] = 'بدأ هذا المتراسل للمحادثة';
$a->strings['Posts and Comments'] = 'التعليقات والمشاركات';
$a->strings['Posts containing media objects'] = 'مشاركات تحوي وسائط';
$a->strings['View all known contacts'] = 'أظهِر كل المتراسلين المعروفين';
$a->strings['Advanced Contact Settings'] = 'إعدادات المتراسلين المُتقدّمة';
$a->strings['Mutual Friendship'] = 'صداقة متبادلة';
$a->strings['is a fan of yours'] = 'أحد معجبيك';
$a->strings['you are a fan of'] = 'أنت معجب';
$a->strings['Pending outgoing contact request'] = 'طلب تراسل صادر معلق';
$a->strings['Pending incoming contact request'] = 'طلب تراسل وارد معلق';
$a->strings['Visit %s\'s profile [%s]'] = 'زر ملف %s الشخصي [%s]';
$a->strings['Contact update failed.'] = 'فشل تحديث المتراسل.';
$a->strings['Return to contact editor'] = 'عُد لمحرر المتراسلين';
$a->strings['Account Nickname'] = 'لقب الحساب';
$a->strings['Account URL'] = 'رابط الحساب';
$a->strings['Poll/Feed URL'] = 'رابط استطلاع/تغذية';
$a->strings['New photo from this URL'] = 'صورة من هذا الرابط';
$a->strings['Invalid contact.'] = 'متراسل غير صالح.';
$a->strings['No known contacts.'] = 'لا يوجد متراسل معروف.';
$a->strings['No common contacts.'] = 'لا متراسلين مشترَكين.';
$a->strings['Follower (%s)'] = [
	0 => 'لا متابِعين (%s)',
	1 => 'متابِع واحد (%s)',
	2 => 'متابِعان (%s)',
	3 => '%s متابِعين',
	4 => '%s متابِعا',
	5 => '%s متابِع',
];
$a->strings['Following (%s)'] = [
	0 => 'لا متابَعين (%s)',
	1 => 'متابَع واحد (%s)',
	2 => 'متابَعان (%s)',
	3 => '%s متابَعين',
	4 => '%s متابَعا',
	5 => '%s متابَع',
];
$a->strings['Mutual friend (%s)'] = [
	0 => 'لا أصدقاء مشتركين (%s)',
	1 => 'صديق مشترك واحد (%s)',
	2 => 'صديقان مشتركان (%s)',
	3 => '%s أصدقاء مشتركين',
	4 => '%s صديقا مشتركا',
	5 => '%s صديق مشترك',
];
$a->strings['These contacts both follow and are followed by <strong>%s</strong>.'] = 'هؤلاء المتراسلون يتابعون <strong>%s</strong> وهو يتابعهم.';
$a->strings['Common contact (%s)'] = [
	0 => 'لا متراسلين مشتركين (%s)',
	1 => 'متراسل مشترك واحد (%s)',
	2 => 'متراسلان مشتركان (%s)',
	3 => '%s متراسلين مشتركين',
	4 => '%s متراسلا مشتركا',
	5 => '%s متراسل مشترك',
];
$a->strings['Both <strong>%s</strong> and yourself have publicly interacted with these contacts (follow, comment or likes on public posts).'] = 'أنت و <strong>%s</strong> تفاعلتم مع نفس المتراسلين (متابعة، تعليق، إعجاب بمشاركة).';
$a->strings['Contact (%s)'] = [
	0 => 'لا متراسلين (%s)',
	1 => 'متراسل واحد (%s)',
	2 => 'متراسلان (%s)',
	3 => '%s متراسلين',
	4 => '%s متراسلا',
	5 => '%s متراسل',
];
$a->strings['You must be logged in to use this module.'] = 'يجب عليك الولوج لاستخدام هذه الوحدة.';
$a->strings['Choose what you wish to do to recipient'] = 'اختر ما تريد فعله للمتلقي';
$a->strings['Make this post private'] = 'اجعل هذه المشاركة خاصة';
$a->strings['Failed to update contact record.'] = 'فشل تحديث سجل التراسل.';
$a->strings['Contact has been unblocked'] = 'رُفع الحجب عن المتراسل';
$a->strings['Contact has been blocked'] = 'حُجب المتراسل';
$a->strings['Contact has been unignored'] = 'ألغي تجاهل المتراسل';
$a->strings['Contact has been ignored'] = 'تُجوهل المتراسل';
$a->strings['You are mutual friends with %s'] = 'أنتما صديقان مشتركان لـ %s';
$a->strings['You are sharing with %s'] = 'أنت تشارك مع %s';
$a->strings['%s is sharing with you'] = '%s يشارك معك';
$a->strings['Private communications are not available for this contact.'] = 'المراسلات الخاصة غير متوفرة لهذا المتراسل.';
$a->strings['Never'] = 'أبدا';
$a->strings['(Update was not successful)'] = '(لم ينجح التحديث)';
$a->strings['(Update was successful)'] = '(حُدث بنجاح)';
$a->strings['Suggest friends'] = 'اقترح أصدقاء';
$a->strings['Network type: %s'] = 'نوع الشبكة: %s';
$a->strings['Communications lost with this contact!'] = 'فُقد التواصل مع هذا المتراسل!';
$a->strings['Fetch further information for feeds'] = 'اجلب مزيدًا من المعلومات للتغذيات';
$a->strings['Fetch information'] = 'اجلب معلومات';
$a->strings['Fetch keywords'] = 'اجلب كلمات مفتاحية';
$a->strings['Fetch information and keywords'] = 'اجلب معلومات وكلمات مفتاحية';
$a->strings['Native reshare'] = 'إعادة النشر الأصلية';
$a->strings['Contact Information / Notes'] = 'ملاحظات / معلومات المتراسل';
$a->strings['Contact Settings'] = 'إعدادات المتراسل';
$a->strings['Contact'] = 'متراسل';
$a->strings['Their personal note'] = 'ملاحظتهم الشخصية';
$a->strings['Edit contact notes'] = 'عدّل ملاحظات المتراسل';
$a->strings['Block/Unblock contact'] = 'احجب/ ارفع الحجب عن متراسل';
$a->strings['Ignore contact'] = 'تجاهل المتراسل';
$a->strings['View conversations'] = 'اعرض المحادثات';
$a->strings['Last update:'] = 'آخر تحديث:';
$a->strings['Update public posts'] = 'حدّث المشاركات العلنية';
$a->strings['Update now'] = 'حدّث الآن';
$a->strings['Currently blocked'] = 'محجوب حاليا';
$a->strings['Currently ignored'] = 'متجاهَل حاليا';
$a->strings['Currently archived'] = 'مُؤرشف حاليا';
$a->strings['Awaiting connection acknowledge'] = 'ينتظر قبول الاتصال';
$a->strings['Hide this contact from others'] = 'اخف هذا المتراسل عن الآخرين';
$a->strings['Replies/likes to your public posts <strong>may</strong> still be visible'] = '<strong>قد</strong> تبقى الإعجابات/الردود على مشاركاتك مرئية';
$a->strings['Notification for new posts'] = 'تنبيه للمشاركات الجديدة';
$a->strings['Send a notification of every new post of this contact'] = 'أرسل تنبيها عند نشر هذا المتراسل لمشاركات الجديدة';
$a->strings['Keyword Deny List'] = 'قائمة الكلمات المفتاحية المرفوضة';
$a->strings['Comma separated list of keywords that should not be converted to hashtags, when "Fetch information and keywords" is selected'] = 'قائمة بالكلمات المفتاحية مفصولة بفواصل والتي لا تخول الى وسوم عند اختيار "اجلب المعلومات والكلمات المفتاحية"';
$a->strings['Actions'] = 'الإجراءات';
$a->strings['Mark this contact as remote_self, this will cause friendica to repost new entries from this contact.'] = 'علّم هذا المتراسل على أنه remote_self ، سيقوم فرنديكا بإعادة نشر المدخلات الجديدة لهذا المتراسل.';
$a->strings['Refetch contact data'] = 'أعد جلب بيانات المتراسل';
$a->strings['Toggle Blocked status'] = 'بدّل حالة الحجب';
$a->strings['Toggle Ignored status'] = 'بدّل حالة التجاهل';
$a->strings['Revoke Follow'] = 'أبطل المتابعة';
$a->strings['Revoke the follow from this contact'] = 'أبطل المتابعة من هذا المتراسل';
$a->strings['Unknown contact.'] = 'متراسل مجهول.';
$a->strings['Contact is deleted.'] = 'حُذف المتراسل.';
$a->strings['Contact is being deleted.'] = 'المتراسل يحذف.';
$a->strings['Follow was successfully revoked.'] = 'نجح إبطال المتابعة.';
$a->strings['Do you really want to revoke this contact\'s follow? This cannot be undone and they will have to manually follow you back again.'] = 'هل تريد إلغاء متابعة هذا المتراسل لك؟ لا يمكن التراجع عن هذا الإجراء وسيتحتم عليهم متابعتك يدوياً.';
$a->strings['Yes'] = 'نعم';
$a->strings['Local Community'] = 'المجتمع المحلي';
$a->strings['Posts from local users on this server'] = 'مشاركات مستخدمي هذا الخادم';
$a->strings['Global Community'] = 'المجتمع العالمي';
$a->strings['Posts from users of the whole federated network'] = 'مشركات من الشبكة الموحدة';
$a->strings['Own Contacts'] = 'مشاركات متراسليك';
$a->strings['Include'] = 'تضمين';
$a->strings['Hide'] = 'اخف';
$a->strings['No results.'] = 'لا نتائج.';
$a->strings['This community stream shows all public posts received by this node. They may not reflect the opinions of this node’s users.'] = 'يسرد هذا الدفق المجتمعي كافة المحادثات العامة التي يتلقاها الخادم. هذا لا يمثل الآراء الشخصية للمستخدمين المحليين.';
$a->strings['Not available.'] = 'غير متاح.';
$a->strings['No such group'] = 'لا توجد مثل هذه المجموعة';
$a->strings['Group: %s'] = 'المجموعة: %s';
$a->strings['Latest Activity'] = 'آخر نشاط';
$a->strings['Sort by latest activity'] = 'رتب حسب آخر نشاط';
$a->strings['Latest Posts'] = 'آخر المشاركات';
$a->strings['Sort by post received date'] = 'رتب حسب تاريخ استلام المشاركة';
$a->strings['Personal'] = 'نشاطي';
$a->strings['Posts that mention or involve you'] = 'المشاركات التي تذكرك أو تتعلق بك';
$a->strings['Starred'] = 'المفضلة';
$a->strings['Favourite Posts'] = 'المشاركات المفضلة';
$a->strings['Credits'] = 'إشادات';
$a->strings['Friendica is a community project, that would not be possible without the help of many people. Here is a list of those who have contributed to the code or the translation of Friendica. Thank you all!'] = 'فرَندِكا هي مشروع مجتمعي، لم يكن ممكنا بدون مساعدة العديد من الناس. إليك قائمة بأولئك الذين ساهموا في الشفرة البرمجية أو في الترجمة. شكرا لكم جميعا!';
$a->strings['Formatted'] = 'مهيأ';
$a->strings['Activity'] = 'النشاط';
$a->strings['Object data'] = 'بيانات الكائن';
$a->strings['Result Item'] = 'النتيجة';
$a->strings['Source activity'] = 'نشاط المصدر';
$a->strings['Source input'] = 'الدخل المصدري';
$a->strings['BBCode::toPlaintext'] = 'BBCode::toPlaintext';
$a->strings['BBCode::convert (raw HTML)'] = 'BBCode::convert (raw HTML)';
$a->strings['BBCode::convert'] = 'BBCode::convert';
$a->strings['BBCode::convert => HTML::toBBCode'] = 'BBCode::convert => HTML::toBBCode';
$a->strings['BBCode::toMarkdown'] = 'BBCode::toMarkdown';
$a->strings['BBCode::toMarkdown => Markdown::convert (raw HTML)'] = 'BBCode::toMarkdown => Markdown::convert (raw HTML)';
$a->strings['BBCode::toMarkdown => Markdown::convert'] = 'BBCode::toMarkdown => Markdown::convert';
$a->strings['BBCode::toMarkdown => Markdown::toBBCode'] = 'BBCode::toMarkdown => Markdown::toBBCode';
$a->strings['BBCode::toMarkdown =>  Markdown::convert => HTML::toBBCode'] = 'BBCode::toMarkdown =>  Markdown::convert => HTML::toBBCode';
$a->strings['Item Body'] = 'جسد العنصر';
$a->strings['Item Tags'] = 'وسوم العنصر';
$a->strings['PageInfo::appendToBody'] = 'PageInfo::appendToBody';
$a->strings['PageInfo::appendToBody => BBCode::convert (raw HTML)'] = 'PageInfo::appendToBody => BBCode::convert (raw HTML)';
$a->strings['PageInfo::appendToBody => BBCode::convert'] = 'PageInfo::appendToBody => BBCode::convert';
$a->strings['Markdown::convert (raw HTML)'] = 'Markdown::convert (raw HTML)';
$a->strings['Markdown::convert'] = 'Markdown::convert';
$a->strings['Markdown::toBBCode'] = 'Markdown::toBBCode';
$a->strings['Raw HTML input'] = 'دخل HTML الخام';
$a->strings['HTML Input'] = 'دخْل HTML';
$a->strings['HTML::toBBCode'] = 'HTML::toBBCode';
$a->strings['HTML::toBBCode => BBCode::convert'] = 'HTML::toBBCode => BBCode::convert';
$a->strings['HTML::toBBCode => BBCode::convert (raw HTML)'] = 'HTML::toBBCode => BBCode::convert (raw HTML)';
$a->strings['HTML::toBBCode => BBCode::toPlaintext'] = 'HTML::toBBCode => BBCode::toPlaintext';
$a->strings['HTML::toMarkdown'] = 'HTML::toMarkdown';
$a->strings['HTML::toPlaintext'] = 'HTML::toPlaintext';
$a->strings['HTML::toPlaintext (compact)'] = 'HTML::toPlaintext (compact)';
$a->strings['Decoded post'] = 'مشاركة مفكوكة الترميز';
$a->strings['Post converted'] = 'حُولت المشاركة';
$a->strings['Twitter addon is absent from the addon/ folder.'] = 'إضافة تويتر غير موجودة في مجلد addon.';
$a->strings['Source text'] = 'النص المصدري';
$a->strings['BBCode'] = 'BBCode';
$a->strings['Markdown'] = 'ماركداون';
$a->strings['HTML'] = 'HTML';
$a->strings['You must be logged in to use this module'] = 'يجب عليك الولوج لاستخدام هذه الوحدة';
$a->strings['Source URL'] = 'الرابط المصدري';
$a->strings['Time Conversion'] = 'تحويل الوقت';
$a->strings['Friendica provides this service for sharing events with other networks and friends in unknown timezones.'] = 'توفر فرَندِكا هذه الخدمة لمشاركة الأحداث مع الشبكات الأخرى والأصدقاء في المناطق الزمنية غير المعروفة.';
$a->strings['UTC time: %s'] = 'التوقيت العالمي الموحد: %s';
$a->strings['Current timezone: %s'] = 'المنطقة الزمنية الحالية: %s';
$a->strings['Converted localtime: %s'] = 'الوقت المحلي المحوّل: %s';
$a->strings['Please select your timezone:'] = 'رجاء اختر منطقتك الزمنية:';
$a->strings['Output'] = 'الخَرْج';
$a->strings['Lookup address'] = 'عنوان المسح';
$a->strings['Lookup address:'] = 'عنوان المسح:';
$a->strings['Switch between your accounts'] = 'بدّل الحساب';
$a->strings['Manage your accounts'] = 'إدارة حسابك';
$a->strings['Toggle between different identities or community/group pages which share your account details or which you have been granted "manage" permissions'] = 'تنقل بين مختلف الهويات أو الصفحات (المجموعات / المجتمعات) التي تملكها أو التي خوّل لك إدارتها';
$a->strings['No entries (some entries may be hidden).'] = 'لا توجد مدخلات (قد تكون بعض المدخلات مخفية).';
$a->strings['Find on this site'] = 'ابحث في هذا الموقع';
$a->strings['Results for:'] = 'نتائج:';
$a->strings['Site Directory'] = 'دليل الموقع';
$a->strings['Item was not removed'] = 'لم يُزل العنصر';
$a->strings['Item was not deleted'] = 'لم يُحذف العنصر';
$a->strings['- select -'] = '- اختر -';
$a->strings['Suggested contact not found.'] = 'المتراسل المقترح غير موجود.';
$a->strings['Friend suggestion sent.'] = 'أُرسل إقتراح الصداقة.';
$a->strings['Suggest Friends'] = 'اقترح أصدقاء';
$a->strings['Suggest a friend for %s'] = 'أقترح أصدقاء لـ %s';
$a->strings['Installed addons/apps:'] = 'التطبيقات/الإضافات المثبتة:';
$a->strings['No installed addons/apps'] = 'لم تُثبت أي تطبيقات/إضافات';
$a->strings['Read about the <a href="%1$s/tos">Terms of Service</a> of this node.'] = 'اقرأ عن <a href="%1$s/tos">شروط الخدمة</a> لهذه العقدة.';
$a->strings['On this server the following remote servers are blocked.'] = 'الخوادم البعيدة المحجوبة عن هذا الموقع.';
$a->strings['This is Friendica, version %s that is running at the web location %s. The database version is %s, the post update version is %s.'] = 'هذا فرانديكا إصدار %s يعمل على موقع %s. إصدار قاعدة البيانات هو %s، وإصدار تحديث البيانات هو %s.';
$a->strings['Please visit <a href="https://friendi.ca">Friendi.ca</a> to learn more about the Friendica project.'] = 'رجاء زر <a href="https://friendi.ca">Friendi.ca</a> لمعرفة المزيد عن مشروع فرَندِكا.';
$a->strings['Bug reports and issues: please visit'] = 'لبلاغات العلل والمشاكل: زر';
$a->strings['the bugtracker at github'] = 'متعقب العلل على غيت-هب';
$a->strings['Suggestions, praise, etc. - please email "info" at "friendi - dot - ca'] = 'للاقتراحات، أو الإشادة ، إلخ.- رجاءً راسل "info" at "friendi - dot - ca';
$a->strings['Could not create group.'] = 'تعذّر إنشاء المجموعة.';
$a->strings['Group not found.'] = 'لم يُعثر على المجموعة.';
$a->strings['Group name was not changed.'] = 'لم يُغير اسم المجموعة.';
$a->strings['Unknown group.'] = 'مجموعة مجهولة.';
$a->strings['Unable to add the contact to the group.'] = 'تعذرت إضافة المتراسل إلى المجموعة.';
$a->strings['Contact successfully added to group.'] = 'أُضيف المتراسل الى المجموعة بنجاح.';
$a->strings['Unable to remove the contact from the group.'] = 'تعذرت إزالة المتراسل من المجموعة.';
$a->strings['Contact successfully removed from group.'] = 'أُزيل المتراسل من المجموعة بنجاح.';
$a->strings['Bad request.'] = 'طلب خاطئ.';
$a->strings['Save Group'] = 'احفظ المجموعة';
$a->strings['Filter'] = 'رشّح';
$a->strings['Create a group of contacts/friends.'] = 'أنشئ مجموعة من المتراسلين/الأصدقاء.';
$a->strings['Unable to remove group.'] = 'تعذر حذف المجموعة.';
$a->strings['Delete Group'] = 'احذف المجموعة';
$a->strings['Edit Group Name'] = 'عدّل اسم المجموعة';
$a->strings['Members'] = 'الأعضاء';
$a->strings['Group is empty'] = 'المجموعة فارغة';
$a->strings['Remove contact from group'] = 'احذف المتراسل من المجموعة';
$a->strings['Click on a contact to add or remove.'] = 'أنقر على المتراسل لإضافته أو حذفه.';
$a->strings['Add contact to group'] = 'أضف المتراسل لمجموعة';
$a->strings['No profile'] = 'لا ملفًا شخصيًا';
$a->strings['Method Not Allowed.'] = 'الطريقة غير مسموح بها.';
$a->strings['Help:'] = 'مساعدة:';
$a->strings['Welcome to %s'] = 'مرحبًا بك في %s';
$a->strings['Friendica Communications Server - Setup'] = 'خادم شبكة فرنديكا - تثبيت';
$a->strings['System check'] = 'التحقق من النظام';
$a->strings['Requirement not satisfied'] = 'لم يستوف المتطلبات';
$a->strings['Optional requirement not satisfied'] = 'لم يستوف المتطلبات الاختيارية';
$a->strings['OK'] = 'موافق';
$a->strings['Check again'] = 'تحقق مجددا';
$a->strings['Base settings'] = 'الإعدادات الأساسية';
$a->strings['Host name'] = 'أسم المضيف';
$a->strings['Overwrite this field in case the determinated hostname isn\'t right, otherweise leave it as is.'] = 'استبدل هذا الحقل في حالة عدم صحة اسم المضيف المحدد، وإلا تركه كما هو.';
$a->strings['Base path to installation'] = 'المسار الأساسي للتثبيت';
$a->strings['If the system cannot detect the correct path to your installation, enter the correct path here. This setting should only be set if you are using a restricted system and symbolic links to your webroot.'] = 'إذا لم يتمكن النظام من اكتشاف مسار التثبيت ، أدخل المسار الصحيح هنا. يجب استخدام هذا الإعداد فقط إذا كان لديك وصول مقيد إلى نظامك وتستخدم رابط ليّن إلى دليل الخادم.';
$a->strings['Sub path of the URL'] = 'المسار الفرعي للرابط';
$a->strings['Database connection'] = 'اتصال قاعدة البيانات';
$a->strings['In order to install Friendica we need to know how to connect to your database.'] = 'لتثبيت فرنديكا، نحتاج إلى معرفة كيفية الاتصال بقاعدة البيانات.';
$a->strings['Please contact your hosting provider or site administrator if you have questions about these settings.'] = 'يرجى الاتصال بموفر الاستضافة أو مدير الموقع إذا كان لديك أسئلة حول هذه الإعدادات.';
$a->strings['The database you specify below should already exist. If it does not, please create it before continuing.'] = 'قاعدة البيانات التي ستحددها أدناه يجب أن تكون موجودة سلفًا. إذا لم تكن موجودة، أنشئها قبل المتابعة.';
$a->strings['Database Server Name'] = 'اسم خادم قاعدة البيانات';
$a->strings['Database Login Name'] = 'اسم الولوج لقاعد البيانات';
$a->strings['Database Login Password'] = 'كلمة سرّ قاعدة البيانات';
$a->strings['For security reasons the password must not be empty'] = 'لأسباب أمنية يجب ألا تكون كلمة المرور فارغة';
$a->strings['Database Name'] = 'اسم قاعدة البيانات';
$a->strings['Please select a default timezone for your website'] = 'رجاء حدد اللغة الافتراضية لموقعك';
$a->strings['Site settings'] = 'إعدادت الموقع';
$a->strings['Site administrator email address'] = 'البريد الالكتروني للمدير الموقع';
$a->strings['Your account email address must match this in order to use the web admin panel.'] = 'يجب أن يتطابق عنوان بريدك الإلكتروني مع هذا من أجل استخدام لوحة الإدارة.';
$a->strings['System Language:'] = 'لغة النظام:';
$a->strings['Set the default language for your Friendica installation interface and to send emails.'] = 'عيّن اللغة الافتراضية لواجهة تثبيت فرَندِكا ورسائل البريد الإلكتروني.';
$a->strings['Your Friendica site database has been installed.'] = 'ثُبتت قاعدة بيانات فرنديكا.';
$a->strings['Installation finished'] = 'انتهى التثبيت';
$a->strings['<h1>What next</h1>'] = '<h1>ما التالي</h1>';
$a->strings['Go to your new Friendica node <a href="%s/register">registration page</a> and register as new user. Remember to use the same email you have entered as administrator email. This will allow you to enter the site admin panel.'] = 'انتقل إلى <a href="%s/register">صفحة التسجيل</a> وسجل كمستخدم جديد. تذكر أن تستخدم نفس البريد الإلكتروني الذي أدخلته للمدير. هذا سيسمح لك بالدخول إلى لوحة الإدارة.';
$a->strings['Total invitation limit exceeded.'] = 'تجاوزت حد عدد الدعوات.';
$a->strings['%s : Not a valid email address.'] = '%s : عناوين بريد الكتروني غير صالحة.';
$a->strings['Please join us on Friendica'] = 'انضم إلينا في فرَندِكا';
$a->strings['Invitation limit exceeded. Please contact your site administrator.'] = 'تجاوزت عدد الدعوات. رجاء اتصال بمدير الموقع.';
$a->strings['%s : Message delivery failed.'] = '%s : فشل توصيل الرسالة.';
$a->strings['%d message sent.'] = [
	0 => 'لم ترسل رسالة %d.',
	1 => 'أُرسلت رسالة واحدة %d.',
	2 => 'أُرسلت رسالتان %d.',
	3 => 'أُرسلت %d رسائل.',
	4 => 'أُرسلت %d رسالة.',
	5 => 'أُرسلت %d رسالة.',
];
$a->strings['You have no more invitations available'] = 'لم تتبقى لديك أي دعوة';
$a->strings['Visit %s for a list of public sites that you can join. Friendica members on other sites can all connect with each other, as well as with members of many other social networks.'] = 'زر %s للحصول على قائمة المواقع العمومية التي يمكنك الانضمام إليها. يمكن لجميع أعضاء مواقع شبكة فرَندِكا الوصول لبعضهم البعض، وكذلك مع عديد من الشبكات الاجتماعية الأخرى.';
$a->strings['To accept this invitation, please visit and register at %s or any other public Friendica website.'] = 'لقبول هذه الدعوة، من فضلك زر وسجل في %s أو في أي موقع فرَندِكا آخر.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks. See %s for a list of alternate Friendica sites you can join.'] = 'مواقع فرَندِكا كلها متصلة لإنشاء شبكة اجتماعية ضخمة تدعم الخصوصية يملكها ويسيطر عليها أعضاؤها. يمكنهم أيضا التواصل مع العديد من الشبكات الاجتماعية الأخرى. راجع %s للحصول على قائمة مواقع فرَندِكا بديلة.';
$a->strings['To accept this invitation, please visit and register at %s.'] = 'لقبول هذه الدعوة، من فضلك زر وسجل في %s.';
$a->strings['Send invitations'] = 'أرسل دعوات';
$a->strings['Enter email addresses, one per line:'] = 'أدخل عناوين البريد الإلكتروني ،واحد في كل سطر:';
$a->strings['For more information about the Friendica project and why we feel it is important, please visit http://friendi.ca'] = 'للحصول على مزيد من المعلومات عن مشروع فرَندِكا ولماذا نرى أنه مهم، من فضلك زر http://friendi.ca';
$a->strings['Compose new personal note'] = 'أنشئ ملاحظة شخصية جديدة';
$a->strings['Compose new post'] = 'أنشئ مشاركة جديدة';
$a->strings['Visibility'] = 'الظّهور';
$a->strings['Clear the location'] = 'امسح الموقع الجغرافي';
$a->strings['Location services are unavailable on your device'] = 'خدمات الموقع الجغرافي غير متاحة على جهازك';
$a->strings['Unable to follow this item.'] = 'تتعذر متابعة هذا العنصر.';
$a->strings['System down for maintenance'] = 'النظام مغلق للصيانة';
$a->strings['This Friendica node is currently in maintenance mode, either automatically because it is self-updating or manually by the node administrator. This condition should be temporary, please come back in a few minutes.'] = 'هذه العقدة في وضع الصيانة حاليًا، وهذا إما تلقائيا بسبب التحديث أو يدويا من قبل مدير العقدة. يرجى العودة في غضون بضع دقائق.';
$a->strings['A Decentralized Social Network'] = 'شبكة اجتماعية لامركزية';
$a->strings['Show Ignored Requests'] = 'اظهر الطلبات المتجاهلة';
$a->strings['Hide Ignored Requests'] = 'اخف الطلبات المتجاهلة';
$a->strings['Notification type:'] = 'نوع التنبيه:';
$a->strings['Suggested by:'] = 'اقترحه:';
$a->strings['Claims to be known to you: '] = 'يدعي أنّه يعرفك: ';
$a->strings['No'] = 'لا';
$a->strings['Accepting %s as a friend allows %s to subscribe to your posts, and you will also receive updates from them in your news feed.'] = 'يسمح قَبُول %s كصديق لـ%s بالاشتراك في منشوراتك ، وستتلقى تحديثاتهم في تلقيمات الأخبار.';
$a->strings['Accepting %s as a subscriber allows them to subscribe to your posts, but you will not receive updates from them in your news feed.'] = 'يسمح قَبُول %s كمشترك له بالاشتراك في منشوراتك، لكن لن تتلقى تحديثاتهم في تلقيمات الأخبار.';
$a->strings['Friend'] = 'صديق';
$a->strings['Subscriber'] = 'مشترك';
$a->strings['No introductions.'] = 'لا توجد تقديمات.';
$a->strings['No more %s notifications.'] = 'لا مزيد من تنبيهات %s.';
$a->strings['You must be logged in to show this page.'] = 'يجب أن تلج لتصل لهذه الصفحة.';
$a->strings['Network Notifications'] = 'تنبيهات الشبكة';
$a->strings['System Notifications'] = 'تنبيهات النظام';
$a->strings['Personal Notifications'] = 'تنبيهات شخصية';
$a->strings['Home Notifications'] = 'تنبيهات الصفحة الرئيسية';
$a->strings['Show unread'] = 'اعرض غير المقروءة';
$a->strings['Authorize application connection'] = 'خول لهذا التطبيق الاتصال';
$a->strings['Do you want to authorize this application to access your posts and contacts, and/or create new posts for you?'] = 'هل تخول لهذا التطبيق الوصول إلى مشاركاتك ومتراسليك، و/أو إنشاء مشاركات جديدة باسمك؟';
$a->strings['Unsupported or missing response type'] = 'نوع الاستجابة غير مدعومة أو مفقودة';
$a->strings['Incomplete request data'] = 'بيانات الطلب غير كاملة';
$a->strings['Please copy the following authentication code into your application and close this window: %s'] = 'الرجاء نسخ رمز الاستيثاق إلى التطبيق وإغلاق هذه النافذة: %s';
$a->strings['Wrong type "%s", expected one of: %s'] = 'نوع خاطئ "%s" ، يُتوقع أن يكون: %s';
$a->strings['Remote privacy information not available.'] = 'معلومات الخصوصية غير متوفرة.';
$a->strings['Visible to:'] = 'مرئي لـ:';
$a->strings['Followers (%s)'] = 'متابِعون (%s)';
$a->strings['<b>To:</b> %s<br>'] = '<b>إلى:</b> %s<br>';
$a->strings['<b>CC:</b> %s<br>'] = '<b>ووجه إلى:</b>%s<br>';
$a->strings['The Photo is not available.'] = 'الصورة غير متوفرة.';
$a->strings['The Photo with id %s is not available.'] = 'الصورة ذات المعرف %s غير متوفّرة.';
$a->strings['Invalid photo with id %s.'] = 'الصورة ذات المعرف %s غير صالحة.';
$a->strings['No contacts.'] = 'لا متراسلين.';
$a->strings['Profile not found.'] = 'لم يُعثر على الملف الشخصي.';
$a->strings['You\'re currently viewing your profile as <b>%s</b> <a href="%s" class="btn btn-sm pull-right">Cancel</a>'] = 'أنت حاليا تستعرض ملفك الشخصي كـ <b>%s</b><a href="%s" class="btn btn-sm pull-right"> ألغ</a>';
$a->strings['Member since:'] = 'عضو منذ:';
$a->strings['j F, Y'] = 'j F, Y';
$a->strings['j F'] = 'j F';
$a->strings['Birthday:'] = 'تاريخ الميلاد:';
$a->strings['Age: '] = 'العمر: ';
$a->strings['%d year old'] = [
	0 => '%d سنة',
	1 => 'سنة واحدة %d',
	2 => 'سنتان %d',
	3 => '%d سنوات',
	4 => '%d سنة',
	5 => '%d سنة',
];
$a->strings['Forums:'] = 'المنتديات:';
$a->strings['View profile as:'] = 'اعرض الملف الشخصي ك:';
$a->strings['View as'] = 'اعرض ك';
$a->strings['%s\'s timeline'] = 'الخط الزمني لـ %s';
$a->strings['%s\'s posts'] = 'مشاركات %s';
$a->strings['%s\'s comments'] = 'تعليقات %s';
$a->strings['Scheduled'] = 'مُبرمج';
$a->strings['Content'] = 'المحتوى';
$a->strings['Remove post'] = 'أزل المشاركة';
$a->strings['Only parent users can create additional accounts.'] = 'فقط المستخدمون الأولياء من يمكنهم إنشاء حسابات إضافية.';
$a->strings['If you are not familiar with OpenID, please leave that field blank and fill in the rest of the items.'] = 'إذا كنت لا تعرف أو لا تريد استخدام OpenID، رجاء اترك هذا الحقل فارغاً واملأ بقية العناصر.';
$a->strings['Your OpenID (optional): '] = 'معرف OpenID (خياري): ';
$a->strings['Include your profile in member directory?'] = 'أتريد نشر ملفك الشخصي في الدليل؟';
$a->strings['Note for the admin'] = 'ملاحظة للمدير';
$a->strings['Leave a message for the admin, why you want to join this node'] = 'اترك رسالة للمدير، تحوي سبب رغبتك الانضمام إلى هذه العقدة';
$a->strings['Membership on this site is by invitation only.'] = 'العضوية في هذا الموقع عن طريق دعوة فقط.';
$a->strings['Your invitation code: '] = 'رمز الدعوة: ';
$a->strings['Your Full Name (e.g. Joe Smith, real or real-looking): '] = 'اسمك الكامل (على سبيل المثال جو سميث): ';
$a->strings['Please repeat your e-mail address:'] = 'رجاء أعد إدخال عنوان بريدك الإلكتروني:';
$a->strings['Choose a nickname: '] = 'اختر لقبًا: ';
$a->strings['Import your profile to this friendica instance'] = 'استورد ملفك الشخصي لهذا المثيل';
$a->strings['Parent Password:'] = 'كلمة المرور الولي:';
$a->strings['Please enter the password of the parent account to legitimize your request.'] = 'يرجى إدخال كلمة مرور الولي للمصادقة على طلبك.';
$a->strings['Password doesn\'t match.'] = 'كلمتا المرور غير متطابقتين.';
$a->strings['Please enter your password.'] = 'رجاء أدخل كلمة المرور.';
$a->strings['You have entered too much information.'] = 'أدخلت معلومات كثيرة.';
$a->strings['The additional account was created.'] = 'أُنشئ الحساب الإضافي.';
$a->strings['Registration successful. Please check your email for further instructions.'] = 'سجلت بنجاح. راجع بريدك الإلكتروني لمزيد من التعليمات.';
$a->strings['Registration successful.'] = 'سجلتَ بنجاح.';
$a->strings['You have to leave a request note for the admin.'] = 'اترك طلب للمدير.';
$a->strings['Your registration is pending approval by the site owner.'] = 'في انتظار موافقة مالك الموقع لقبول تسجيلك.';
$a->strings['Profile unavailable.'] = 'الملف الشخصي غير متوفر.';
$a->strings['The provided profile link doesn\'t seem to be valid'] = 'يبدو أنّ رابط الملف الشخصي غير صالح';
$a->strings['Friend/Connection Request'] = 'طلب صداقة/اقتران';
$a->strings['If you are not yet a member of the free social web, <a href="%s">follow this link to find a public Friendica node and join us today</a>.'] = 'إن لم تكن عضواً في شبكة اجتماعية حرة، <a href="%s">اتبع هذا الرابط للعثور على عقدة عمومية لفرَندِكا وانضم إلينا اليوم</a>.';
$a->strings['Only logged in users are permitted to perform a search.'] = 'يمكن فقط للمستخدمين المسجلين البحث في الموقع.';
$a->strings['Only one search per minute is permitted for not logged in users.'] = 'يسمح ببحث واحد فقط في كل دقيقة للزوار.';
$a->strings['Items tagged with: %s'] = 'عناصر موسمة بـ: %s';
$a->strings['Search term was not saved.'] = 'لم يُحفظ مصطلح البحث.';
$a->strings['Search term already saved.'] = 'حُفظ مصطلح البحث سلفًا.';
$a->strings['Search term was not removed.'] = 'لم يُزل مصطلح البحث.';
$a->strings['Create a New Account'] = 'أنشئ حسابًا جديدًا';
$a->strings['Your OpenID: '] = 'معرف OpenID: ';
$a->strings['Please enter your username and password to add the OpenID to your existing account.'] = 'رجاء أدخل كلمة المرور واسم المستخدم لإضافة معرف OpenID لحسابك.';
$a->strings['Or login using OpenID: '] = 'أو لج باستخدام معرف OpenID: ';
$a->strings['Password: '] = 'كلمة المرور: ';
$a->strings['Remember me'] = 'تذكرني';
$a->strings['Forgot your password?'] = 'أنسيت كلمة المرور؟';
$a->strings['Website Terms of Service'] = 'شروط الخدمة للموقع';
$a->strings['terms of service'] = 'شروط الخدمة';
$a->strings['Website Privacy Policy'] = 'سياسة الخصوصية للموقع';
$a->strings['privacy policy'] = 'سياسة الخصوصية';
$a->strings['Logged out.'] = 'خرجت.';
$a->strings['OpenID protocol error. No ID returned'] = 'خطأ في ميفاق OpenID. لم يعد أي معرف';
$a->strings['Account not found. Please login to your existing account to add the OpenID to it.'] = 'لم يُعثر على الحساب. رجاء لج إلى حسابك الحالي لإضافة معرف OpenID إليه.';
$a->strings['Account not found. Please register a new account or login to your existing account to add the OpenID to it.'] = 'لم يُعثر على الحساب. رجاء سجل حساب جديد أو لج إلى حسابك الحالي لإضافة معرف OpenID إليه.';
$a->strings['Remaining recovery codes: %d'] = 'رموز الاستعادة المتبقية: %d';
$a->strings['Invalid code, please retry.'] = 'رمز غير صالح، من فضلك أعد المحاولة.';
$a->strings['Two-factor recovery'] = 'الاستيثاق بعاملين';
$a->strings['Don’t have your phone? <a href="%s">Enter a two-factor recovery code</a>'] = 'لا تحمل هاتفك؟ <a href="%s">أدخل رمز الاستعادة للاستيثاق بعاملين</a>';
$a->strings['Please enter a recovery code'] = 'رجاء أدخل رمز الاستعادة';
$a->strings['Submit recovery code and complete login'] = 'أرسل رمز الاستعادة لتكمل الولوج';
$a->strings['<p>Open the two-factor authentication app on your device to get an authentication code and verify your identity.</p>'] = '<p>افتح تطبيق الاستيثاق بعاملين على جهازك للحصول على رمز الاستيثاق والتحقق من هويتك.</p>';
$a->strings['Please enter a code from your authentication app'] = 'يرجى إدخال رمز من تطبيق الاستيثاق';
$a->strings['This is my two-factor authenticator app device'] = 'هذا هو جهاز الذي استخدمه للاستيثاق بعاملين';
$a->strings['Verify code and complete login'] = 'تحقق من الرمز وأكمل الولوج';
$a->strings['Delegation successfully granted.'] = 'منح التفويض بنجاح.';
$a->strings['Parent user not found, unavailable or password doesn\'t match.'] = 'لم يُعثر على الولي أو هو غير متوفر أو كلمة مرور غير صحيحة.';
$a->strings['Delegation successfully revoked.'] = 'نجح إبطال التفويض.';
$a->strings['Delegate user not found.'] = 'لم يُعثر على المندوب.';
$a->strings['No parent user'] = 'لا يوجد وليٌ';
$a->strings['Parent User'] = 'الوليٌ';
$a->strings['Additional Accounts'] = 'الحسابات الإضافية';
$a->strings['Register additional accounts that are automatically connected to your existing account so you can manage them from this account.'] = 'سجل حسابات إضافية مرتبطة تلقائيا بحسابك الحالي ويمكنك إدارتها عبر هذا الحساب.';
$a->strings['Register an additional account'] = 'سجل حساب إضافي';
$a->strings['Parent users have total control about this account, including the account settings. Please double check whom you give this access.'] = 'المستخدمون الأولياء لديهم سيطرة كاملة على هذا الحساب، بما في ذلك إعدادات الحساب. الرجاء الحذر عند إعطاء صلاحية الوصول إليه.';
$a->strings['Delegates'] = 'المندوبون';
$a->strings['Delegates are able to manage all aspects of this account/page except for basic account settings. Please do not delegate your personal account to anybody that you do not trust completely.'] = 'يستطيع المندوبون إدارة جميع جوانب هذا الحساب/الصفحة باستثناء إعدادات الحساب الأساسية. يرجى عدم تفويض حسابك الشخصي لأي شخص لا تثق به.';
$a->strings['Existing Page Delegates'] = 'مندوبو الصفحة الحاليون';
$a->strings['Potential Delegates'] = 'المندوبون المحتملون';
$a->strings['Add'] = 'أضف';
$a->strings['No entries.'] = 'لا مدخلات.';
$a->strings['The theme you chose isn\'t available.'] = 'السمة التي اخترتها غير متوفرة.';
$a->strings['%s - (Unsupported)'] = '%s - (غير مدعوم)';
$a->strings['Display Settings'] = 'إعدادات العرض';
$a->strings['General Theme Settings'] = 'الإعدادات العامة للسمة';
$a->strings['Custom Theme Settings'] = 'الإعدادات المخصصة للسمة';
$a->strings['Content Settings'] = 'إعدادات المحتوى';
$a->strings['Theme settings'] = 'إعدادات السمة';
$a->strings['Calendar'] = 'التقويم';
$a->strings['Display Theme:'] = 'سمة العرض:';
$a->strings['Mobile Theme:'] = 'سمة الهاتف:';
$a->strings['Number of items to display per page:'] = 'عدد العناصر التي سيتم عرضها في كل صفحة:';
$a->strings['Maximum of 100 items'] = 'الحد الأقصى هو 100 عنصر';
$a->strings['Number of items to display per page when viewed from mobile device:'] = 'عدد العناصر التي سيتم عرضها في كل صفحة في وضع الهاتف:';
$a->strings['Update browser every xx seconds'] = 'حدّث المتصفح كل xx ثانية';
$a->strings['Minimum of 10 seconds. Enter -1 to disable it.'] = 'الحد الأدنى هو 10 ثواني. أدخل -1 لتعطيله.';
$a->strings['Auto update may add new posts at the top of the post stream pages, which can affect the scroll position and perturb normal reading if it happens anywhere else the top of the page.'] = 'يمكن أن يضيف التحديث التلقائي للتغذية محتوى جديدًا إلى أعلى القائمة ، مما قد يؤثر على تمرير الصفحة ويعيق القراءة إذا تم القيام به في أي مكان آخر غير الجزء العلوي من الصفحة.';
$a->strings['Infinite scroll'] = 'التمرير اللانهائي';
$a->strings['Automatic fetch new items when reaching the page end.'] = 'يجلب عناصر جديدة تلقائياً عند الوصول إلى نهاية الصفحة.';
$a->strings['Display the Dislike feature'] = 'اعرض ميزة "لم يعجبني"';
$a->strings['Display the Dislike button and dislike reactions on posts and comments.'] = 'يعرض زر لم يعجبني والتفاعلات السلبية في المشاركات والتعليقات.';
$a->strings['Display the resharer'] = 'اعرض صاحب إعادة النشر';
$a->strings['Display the first resharer as icon and text on a reshared item.'] = 'اعرض صورة صاحب المشاركة الأصلية كأيقونة بالإضافة إلى نص على المشاركة.';
$a->strings['Stay local'] = 'ابقى في الخادم المحلي';
$a->strings['Don\'t go to a remote system when following a contact link.'] = 'لا يذهب إلى نظام بعيد عند اتباع رابط متراسل.';
$a->strings['Beginning of week:'] = 'بداية الأسبوع:';
$a->strings['Profile Name is required.'] = 'اسم الملف الشخصي مطلوب.';
$a->strings['Profile couldn\'t be updated.'] = 'تعذر تحديث الملف الشخصي.';
$a->strings['Label:'] = 'التسمية:';
$a->strings['Value:'] = 'القيمة:';
$a->strings['Field Permissions'] = 'أذونات الحقل';
$a->strings['(click to open/close)'] = '(أنقر للفتح/للإغلاق)';
$a->strings['Add a new profile field'] = 'أضف حقلًا جديدًا للملف الشخصي';
$a->strings['Profile Actions'] = 'إجراءات الملف الشخصي';
$a->strings['Edit Profile Details'] = 'عدّل تفاصيل الملف الشخصي';
$a->strings['Change Profile Photo'] = 'غيّر صورة الملف الشخصي';
$a->strings['Profile picture'] = 'صورة الملف الشخصي';
$a->strings['Location'] = 'الموقع';
$a->strings['Miscellaneous'] = 'متنوّع';
$a->strings['Custom Profile Fields'] = 'حقول مخصصة للملف الشخصي';
$a->strings['Upload Profile Photo'] = 'ارفع صورة الملف الشخصي';
$a->strings['Display name:'] = 'الاسم العلني:';
$a->strings['Street Address:'] = 'عنوان الشارع:';
$a->strings['Locality/City:'] = 'المدينة:';
$a->strings['Region/State:'] = 'الولاية:';
$a->strings['Postal/Zip Code:'] = 'الرمز البريدي:';
$a->strings['Country:'] = 'الدّولة:';
$a->strings['XMPP (Jabber) address:'] = 'عنوان XMPP (Jabber):';
$a->strings['The XMPP address will be published so that people can follow you there.'] = 'سيتم نشر عنوان XMPP حتى يتمكن الناس من متابعتك هناك.';
$a->strings['Matrix (Element) address:'] = 'عنوان مايتركس:';
$a->strings['The Matrix address will be published so that people can follow you there.'] = 'سيتم نشر عنوان مايتركس حتى يتمكن الناس من متابعتك هناك.';
$a->strings['Homepage URL:'] = 'رابط الصفحة الرئيسية:';
$a->strings['Public Keywords:'] = 'الكلمات المفتاحية العلنية:';
$a->strings['(Used for suggesting potential friends, can be seen by others)'] = '(يستخدم لاقتراح أصدقاء، يمكن للآخرين رؤيتهم)';
$a->strings['Private Keywords:'] = 'الكلمات المفتاحية الخاصة:';
$a->strings['(Used for searching profiles, never shown to others)'] = '(يستخدم للبحث عن ملفات الشخصية، لا يظهر للآخرين)';
$a->strings['<p>Custom fields appear on <a href="%s">your profile page</a>.</p>
				<p>You can use BBCodes in the field values.</p>
				<p>Reorder by dragging the field title.</p>
				<p>Empty the label field to remove a custom field.</p>
				<p>Non-public fields can only be seen by the selected Friendica contacts or the Friendica contacts in the selected groups.</p>'] = '<p>الحقول المخصصة تظهر في <a href="%s">صفحة ملفك الشخصي</a>.</p>
				<p>يمكنك استخدام رموز BBCCode في حقول القيم.</p>
				<p>أعد الترتيب بسحب عنوان الحقل.</p>
				<p>أفرغ حقل التسمية لإزالة الحقل مخصص.</p>
				<p>لن يتمكن إلاّ المتراسلين المختارين والمجموعات المختارة من رؤية الحقول غير العلنية.</p>';
$a->strings['Image size reduction [%s] failed.'] = 'فشل تقليص حجم الصورة [%s].';
$a->strings['Shift-reload the page or clear browser cache if the new photo does not display immediately.'] = 'إذا لم تظهر الصورة الجديدة أعد تحميل الصفحة مع الضغط على مفتاح Shift، أو امسح ذاكرة التخزين المؤقت للمتصفح.';
$a->strings['Unable to process image'] = 'تعذرت معالجة الصورة';
$a->strings['Photo not found.'] = 'لم يُعثر على الصورة.';
$a->strings['Profile picture successfully updated.'] = 'نجح تحديث صورة الملف الشخصي.';
$a->strings['Crop Image'] = 'قص الصورة';
$a->strings['Please adjust the image cropping for optimum viewing.'] = 'اضبط قص الصور للحصول على أفضل عرض ممكن.';
$a->strings['Use Image As Is'] = 'استخدم الصورة كما هي';
$a->strings['Missing uploaded image.'] = 'الصورة المرفوعة مفقودة.';
$a->strings['Profile Picture Settings'] = 'إعدادات الصورة الشخصية';
$a->strings['Current Profile Picture'] = 'الصورة الشخصية الحالية';
$a->strings['Upload Profile Picture'] = 'ارفع صورة للملف الشخصي';
$a->strings['Upload Picture:'] = 'ارفع صورة:';
$a->strings['or'] = 'أو';
$a->strings['skip this step'] = 'تخطى هذه الخطوة';
$a->strings['select a photo from your photo albums'] = 'اختر صورة من ألبومك';
$a->strings['Please enter your password to access this page.'] = 'يرجى إدخال كلمة المرور للوصول إلى هذه الصفحة.';
$a->strings['New app-specific password generated.'] = 'أُنشئت كلمة مرور جديدة خاصة بالتطبيق بنجاح.';
$a->strings['Description'] = 'الوصف';
$a->strings['Last Used'] = 'آخر استخدام';
$a->strings['Revoke'] = 'أبطل';
$a->strings['Revoke All'] = 'أبطل الكل';
$a->strings['Generate'] = 'ولّد';
$a->strings['Two-factor authentication successfully disabled.'] = 'عُطل الاستيثاق بعاملين.';
$a->strings['Wrong Password'] = 'كلمة مرور خاطئة';
$a->strings['<p>Use an application on a mobile device to get two-factor authentication codes when prompted on login.</p>'] = '<p>استخدام تطبيق هاتف للحصول على رموز الاستيثاق بعاملين عند الولوج.</p>';
$a->strings['Authenticator app'] = 'تطبيق الاستيثاق';
$a->strings['Configured'] = 'مضبوط';
$a->strings['Not Configured'] = 'غير مضبوط';
$a->strings['<p>You haven\'t finished configuring your authenticator app.</p>'] = '<p>لم تنته من ضبط تطبيق الاستيثاق</p>';
$a->strings['<p>Your authenticator app is correctly configured.</p>'] = '<p>ضُبط تطبيق الاستيثاق.</p>';
$a->strings['Recovery codes'] = 'رموز الاستعادة';
$a->strings['Remaining valid codes'] = 'رموز الاستعادة المتبقية';
$a->strings['Current password:'] = 'كلمة المرور الحالية:';
$a->strings['You need to provide your current password to change two-factor authentication settings.'] = 'أدخل كلمة المرور لتغيير إعدادات الاستيثاق بعاملين.';
$a->strings['Enable two-factor authentication'] = 'فعّل الاستيثاق بعاملين';
$a->strings['Disable two-factor authentication'] = 'عطّل الاستيثاق بعاملين';
$a->strings['Show recovery codes'] = 'أظهر رموز الاستعادة';
$a->strings['Finish app configuration'] = 'أنه ضبط التطبيق';
$a->strings['New recovery codes successfully generated.'] = 'نجح توليد رموز الاستعادة.';
$a->strings['<p>Recovery codes can be used to access your account in the event you lose access to your device and cannot receive two-factor authentication codes.</p><p><strong>Put these in a safe spot!</strong> If you lose your device and don’t have the recovery codes you will lose access to your account.</p>'] = '<p>يمكن استخدام رموز الاستعادة للوصول إلى حسابك في حال فقدت الوصول إلى جهازك ولا يمكن أن تتلقى رموز الاستيثاق بعاملين.</p><p><strong>احتفظ بها في مكان آمن!</strong> إذا فقدت جهازك ولم يكن لديك رموز الاستعادة فستفقد الوصول إلى حسابك.</p>';
$a->strings['Generate new recovery codes'] = 'ولّد رموز الاستعادة';
$a->strings['Next: Verification'] = 'التالي: التحقق';
$a->strings['Device'] = 'الجهاز';
$a->strings['OS'] = 'نظام التشغيل';
$a->strings['Trusted'] = 'موثوق';
$a->strings['Last Use'] = 'آخر استخدام';
$a->strings['Remove All'] = 'أزل الكل';
$a->strings['Two-factor authentication successfully activated.'] = 'فُعّل الاستيثاق بعاملين.';
$a->strings['<p>Or you can submit the authentication settings manually:</p>
<dl>
	<dt>Issuer</dt>
	<dd>%s</dd>
	<dt>Account Name</dt>
	<dd>%s</dd>
	<dt>Secret Key</dt>
	<dd>%s</dd>
	<dt>Type</dt>
	<dd>Time-based</dd>
	<dt>Number of digits</dt>
	<dd>6</dd>
	<dt>Hashing algorithm</dt>
	<dd>SHA-1</dd>
</dl>'] = '<p>أو يمكنك إرسال إعدادات الاستيثاق يدوياً:</p>
<dl>
	<dt>المصدر</dt>
	<dd>%s</dd>
	<dt>اسم الحساب</dt>
	<dd>%s</dd>
	<dt>المفتاح السري</dt>
	<dd>%s</dd>
	<dt>النوع</dt>
	<dd>مبني الوقت</dd>
	<dt>عدد الأرقام</dt>
	<dd>6</dd>
	<dt>خوارزمية التجزئة</dt>
	<dd>SHA-1</dd>
</dl>';
$a->strings['Two-factor code verification'] = 'رمز التحقق للاستيثاق بعاملَيْن';
$a->strings['Verify code and enable two-factor authentication'] = 'تحقق من الرمز و فعّل الاستيثاق بعاملين';
$a->strings['Export account'] = 'صدّر الحساب';
$a->strings['Export your account info and contacts. Use this to make a backup of your account and/or to move it to another server.'] = 'صدّر معلومات حسابك ومتراسليك. استخدمه لإنشاء نسخة احتياطية من حسابك أو لنقله إلى خادم آخر.';
$a->strings['Export all'] = 'صدّر الكل';
$a->strings['Export your account info, contacts and all your items as json. Could be a very big file, and could take a lot of time. Use this to make a full backup of your account (photos are not exported)'] = 'صدّر معلومات حسابك ومتراسليك وجميع العناصر الخاصة بك كملف json. قد يستغرق وقتًا طويلًا وينتج عنه ملف كبير. استخدمه لإنشاء نسخة احتياطية كاملة من حسابك (الصور غير مضمنة)';
$a->strings['Export Contacts to CSV'] = 'صدّر المتراسلين الى ملف CSV';
$a->strings['Export the list of the accounts you are following as CSV file. Compatible to e.g. Mastodon.'] = 'صدّر قائمة الحسابات المتابَعة إلى ملف csv. هذا الملف متوافق مع ماستدون.';
$a->strings['Privacy Statement'] = 'بيان الخصوصية';
$a->strings['Welcome to Friendica'] = 'مرحبا بك في فرَندِكا';
$a->strings['We would like to offer some tips and links to help make your experience enjoyable. Click any item to visit the relevant page. A link to this page will be visible from your home page for two weeks after your initial registration and then will quietly disappear.'] = 'نود أن نقدم بعض النصائح والروابط للمساعدة في جعل تجربتك ممتعة. انقر فوق أي عنصر لزيارة الصفحة ذات الصلة. رابط لهذه الصفحة سيكون مرئيًا في الصفحة الرئيسية لمدة أسبوعين بعد تاريخ تسجيلك.';
$a->strings['Getting Started'] = 'بدء الاستخدام';
$a->strings['Friendica Walk-Through'] = 'جولة في فرَندِكا';
$a->strings['Go to Your Settings'] = 'انتقل إلى إعداداتك';
$a->strings['On your <em>Settings</em> page -  change your initial password. Also make a note of your Identity Address. This looks just like an email address - and will be useful in making friends on the free social web.'] = 'على صفحة <em>الإعدادات</em> - قم بتغيير كلمة المرور الأولية. ولا تنسى حفظ عنوان معرفك. يبدو كعنوان بريد إلكتروني - ليتسنى صنع صداقات على مختلف الشبكات الاجتماعية الحرة.';
$a->strings['Upload a profile photo if you have not done so already. Studies have shown that people with real photos of themselves are ten times more likely to make friends than people who do not.'] = 'ارفع صورة لملفك الشخصي إذا لم تقم بذلك. تظهر الدراسات أن احتمال صنع صداقات للناس الذين يستخدمون صورهم الحقيقية هو أكثر بعشر مرات من الناس الذي لا يفعلون.';
$a->strings['Edit Your Profile'] = 'عدّل ملفك الشخصي';
$a->strings['Edit your <strong>default</strong> profile to your liking. Review the settings for hiding your list of friends and hiding the profile from unknown visitors.'] = 'عدّل ملفك الشخصي <strong>الافتراضي</strong> كيفما تحب. و راجع الإعدادات لإخفاء قائمة أصدقائك وملفك الشخصي عن الزوار.';
$a->strings['Profile Keywords'] = 'الكلمات المفتاحية للملف الشخصي';
$a->strings['Set some public keywords for your profile which describe your interests. We may be able to find other people with similar interests and suggest friendships.'] = 'عيّن بعض الكلمات المفتاحية العامة لملفك الشخصي التي تصف اهتماماتك. قد نتمكن من العثور على أشخاص آخرين ذوي اهتمامات مماثلة لنقترح عليك مصادقتهم.';
$a->strings['Connecting'] = 'يتصل';
$a->strings['Importing Emails'] = 'يستورد البرائد الالكترونية';
$a->strings['Go to Your Contacts Page'] = 'انتقل الى صفحة المتراسلين';
$a->strings['Your Contacts page is your gateway to managing friendships and connecting with friends on other networks. Typically you enter their address or site URL in the <em>Add New Contact</em> dialog.'] = 'في صفحة المتراسلين يمكنك إدارة وإضافة متراسلين. يمكنك إدخال المعرّف أو رابط الصفحة الشخصية في نموذج <em>أضف متراسلًا جديدا</em>.';
$a->strings['Go to Your Site\'s Directory'] = 'انتقل إلى دليل موقعك';
$a->strings['The Directory page lets you find other people in this network or other federated sites. Look for a <em>Connect</em> or <em>Follow</em> link on their profile page. Provide your own Identity Address if requested.'] = 'تتيح لك صفحة الدليل العثور على أشخاص آخرين في هذه الشبكة أو عبر الشبكة الموحدة. ابحث عن رابط <em>اتصل</em> أو <em>تابع</em> في صفحة ملفهم الشخصي. قدم عنوان معرفك إذا طلب منك.';
$a->strings['Finding New People'] = 'إيجاد أشخاص جدد';
$a->strings['On the side panel of the Contacts page are several tools to find new friends. We can match people by interest, look up people by name or interest, and provide suggestions based on network relationships. On a brand new site, friend suggestions will usually begin to be populated within 24 hours.'] = 'في الشريط الجانبي لصفحة المتراسلين يمكنك للعثور على عدة طرق للعثور على أصدقاء جدد. يمكننا مطابقة الأشخاص بناءً على اهتماماتهم، والبحث عن الأصدقاء بالاسم أو الاهتمام، وتقديم اقتراحات بناءً على هيكلية الشبكة. على موقع جديد تمامًا، يجب أن تبدأ اقتراحات الاشتراك في الظهور بعد 24 ساعة.';
$a->strings['Group Your Contacts'] = 'نظّم متراسليك في مجموعات';
$a->strings['Once you have made some friends, organize them into private conversation groups from the sidebar of your Contacts page and then you can interact with each group privately on your Network page.'] = 'بمجرد حصولك على عدد من الأصدقاء ،نظمهم في مجموعات محادثة خاصة من الشريط الجانبي لصفحة المتراسلين. بهذا يمكنك التفاعل مع كل مجموعة على حدى من خلال صفحة الشبكة.';
$a->strings['Why Aren\'t My Posts Public?'] = 'لماذا لا تنشر مشاركاتي للعموم؟';
$a->strings['Friendica respects your privacy. By default, your posts will only show up to people you\'ve added as friends. For more information, see the help section from the link above.'] = 'فرَندِكا تحترم خصوصيتك. ولهذا افتراضيا ستظهر مشاركاتك لأصدقائك فقط. للمزيد من المعلومات راجع قسم المساعدة عبر الرابط أعلاه.';
$a->strings['Getting Help'] = 'الحصول على مساعدة';
$a->strings['Go to the Help Section'] = 'انتقل إلى القسم المساعدة';
$a->strings['Our <strong>help</strong> pages may be consulted for detail on other program features and resources.'] = 'يمكنك الاطلاع على صفحات <strong>المساعدة</strong> للحصول على تفاصيل حول ميزات البرامج الأخرى ومصادرها.';
$a->strings['%s liked %s\'s post'] = 'أُعجب %s بمشاركة %s';
$a->strings['%s disliked %s\'s post'] = 'لم يُعجب %s بمشاركة %s';
$a->strings['%s is attending %s\'s event'] = 'يحضر %s حدث %s';
$a->strings['%s is not attending %s\'s event'] = 'لن يحضر %s حدث %s';
$a->strings['%s may attending %s\'s event'] = 'قد يحضر %s حدث %s';
$a->strings['%s is now friends with %s'] = 'أصبح %s صديقا ل %s';
$a->strings['%s commented on %s\'s post'] = 'علق %s على مشاركة %s';
$a->strings['%s created a new post'] = 'أنشأ %s مشاركة جديدة';
$a->strings['Friend Suggestion'] = 'اقتراح صديق';
$a->strings['Friend/Connect Request'] = 'طلب صداقة/اقتران';
$a->strings['New Follower'] = 'متابِع جديد';
$a->strings['%1$s wants to follow you'] = '%1$s يريد متابعتك';
$a->strings['%1$s had started following you'] = '%1$s يتابعك';
$a->strings['%1$s liked your comment %2$s'] = 'أعجب %1$s بتعليقك %2$s';
$a->strings['%1$s liked your post %2$s'] = 'أعجب %1$s بمشاركتك %2$s';
$a->strings['%1$s disliked your comment %2$s'] = 'لم يعجب %1$s تعليقك %2$s';
$a->strings['%1$s disliked your post %2$s'] = 'لم يعجب %1$s مشاركتك %2$s';
$a->strings['%1$s shared your comment %2$s'] = 'شارك %1$s تعليقك %2$s';
$a->strings['%1$s shared your post %2$s'] = 'شارك %1$s مشاركتك %2$s';
$a->strings['%1$s shared the post %2$s from %3$s'] = 'شارك %1$s المشاركة %2$s من %3$s';
$a->strings['%1$s shared a post from %3$s'] = 'شارك %1$s مشاركة %3$s';
$a->strings['%1$s shared the post %2$s'] = 'شارك %1$s المشاركة %2$s';
$a->strings['%1$s shared a post'] = 'شارك %1$s مشاركة';
$a->strings['%1$s tagged you on %2$s'] = 'ذكرك %1$s في %2$s';
$a->strings['%1$s replied to you on %2$s'] = 'رد %1$s عليك في %2$s';
$a->strings['%1$s commented in your thread %2$s'] = 'علق %1$s على نقاشك %2$s';
$a->strings['%1$s commented on your comment %2$s'] = 'علق %1$s على تعليقك %2$s';
$a->strings['%1$s commented in their thread %2$s'] = 'علق %1$s على نقاشه %2$s';
$a->strings['%1$s commented in their thread'] = 'علق %1$s على نقاشه';
$a->strings['%1$s commented in the thread %2$s from %3$s'] = 'علق %1$s على المحدثة %2$s من %3$s';
$a->strings['%1$s commented in the thread from %3$s'] = 'علق %1$s على نقاش %3$s';
$a->strings['%1$s commented on your thread %2$s'] = 'علق %1$s على نقاشك %2$s';
$a->strings['[Friendica:Notify]'] = '[فرنديكا: تنبيه]';
$a->strings['%s New mail received at %s'] = 'أُستلم %s بريد جديد على %s';
$a->strings['%1$s sent you a new private message at %2$s.'] = 'أرسل %1$s لك رسالة خاصة على %2$s.';
$a->strings['a private message'] = 'رسالة خاصة';
$a->strings['%1$s sent you %2$s.'] = 'أرسل %1$s لك %2$s.';
$a->strings['Please visit %s to view and/or reply to your private messages.'] = 'من فضلك زر %s لعرض و/أو الرد على الرسائل الخاصة.';
$a->strings['%1$s commented on %2$s\'s %3$s %4$s'] = 'علق %1$s على %3$s %2$s %4$s';
$a->strings['%1$s commented on your %2$s %3$s'] = 'علق %1$s على %2$s تخصك %3$s';
$a->strings['%1$s commented on their %2$s %3$s'] = 'علق %1$s على %2$s له %3$s';
$a->strings['%1$s Comment to conversation #%2$d by %3$s'] = 'علق %1$s على محادثة %3$s #%2$d';
$a->strings['%s commented on an item/conversation you have been following.'] = 'علق %s على محادثة/عنصر تتابعه.';
$a->strings['Please visit %s to view and/or reply to the conversation.'] = 'من فضلك زر %s لعرض و/أو الرد على المحادثة.';
$a->strings['%s %s posted to your profile wall'] = 'نشر %s%s على حائط ملفك الشخصي';
$a->strings['%1$s posted to your profile wall at %2$s'] = 'نشر %1$s على حائط ملفك الشخصي على %2$s';
$a->strings['%1$s posted to [url=%2$s]your wall[/url]'] = 'نشر %1$s على [url=%2$s]حائطك[/url]';
$a->strings['%1$s %2$s poked you'] = 'لكزك %1$s %2$s';
$a->strings['%1$s poked you at %2$s'] = 'لكزك %1$s على %2$s';
$a->strings['%1$s [url=%2$s]poked you[/url].'] = '[url=%2$s]لكزك[/url] %1$s.';
$a->strings['%s Introduction received'] = 'تلقيت تقديما من %s';
$a->strings['You\'ve received an introduction from \'%1$s\' at %2$s'] = 'تلقيت تقديما من \'%1$s\' على %2$s';
$a->strings['You\'ve received [url=%1$s]an introduction[/url] from %2$s.'] = 'تلقيت [url=%1$s]تقديما[/url] من %2$s.';
$a->strings['You may visit their profile at %s'] = 'يمكنك زيارة ملفهم الشخصي على %s';
$a->strings['Please visit %s to approve or reject the introduction.'] = 'من فضلك زر %s لقبول أو رفض التقديم.';
$a->strings['%s A new person is sharing with you'] = '%s شخص جديد يشارك معك';
$a->strings['%1$s is sharing with you at %2$s'] = 'يشارك %1$s معك على %2$s';
$a->strings['%s You have a new follower'] = 'لديك متابِع جديد %s';
$a->strings['You have a new follower at %2$s : %1$s'] = 'لديك متابِع جديد على %2$s : %1$s';
$a->strings['%s Friend suggestion received'] = 'تلقيت إقتراح صديق %s';
$a->strings['You\'ve received a friend suggestion from \'%1$s\' at %2$s'] = 'تلقيت اقتراح صديق من \'%1$s\' على %2$s';
$a->strings['You\'ve received [url=%1$s]a friend suggestion[/url] for %2$s from %3$s.'] = 'اقترح عليك %3$s [url=%1$s] مصادقة %2$s[/url].';
$a->strings['Name:'] = 'الاسم:';
$a->strings['Photo:'] = 'الصورة:';
$a->strings['Please visit %s to approve or reject the suggestion.'] = 'من فضلك زر %s لقبول  أو رفض الاقتراح.';
$a->strings['%s Connection accepted'] = 'قُبِل الاقتران %s';
$a->strings['\'%1$s\' has accepted your connection request at %2$s'] = 'قبِل \'%1$s\' طلب الاقتران على %2$s';
$a->strings['%2$s has accepted your [url=%1$s]connection request[/url].'] = 'قبِل %2$s [url=%1$s]طلب الاقتران[/url].';
$a->strings['You are now mutual friends and may exchange status updates, photos, and email without restriction.'] = 'أصبحتما صديقين من كلا الطرفين ويمكنكما تبادل تحديثات الحالة، والصور، والبريد دون قيود.';
$a->strings['Please visit %s if you wish to make any changes to this relationship.'] = 'من فضلك زر %s إن أردت تغيير هذه العلاقة.';
$a->strings['\'%1$s\' has chosen to accept you a fan, which restricts some forms of communication - such as private messaging and some profile interactions. If this is a celebrity or community page, these settings were applied automatically.'] = 'قبِلك \'%1$s\' كمعجب، هذا يحدُّ من أشكال التواصل بينكما مثل الرسائل الخاصة وبعض التفاعلات. يتم هذا تلقائيا اذا كانت صفحة مشهور أو مجتمع.';
$a->strings['\'%1$s\' may choose to extend this into a two-way or more permissive relationship in the future.'] = 'قد يختار \'%1$s\' توسيعها إلى علاقة ذات اتجاهين أو أكثر في المستقبل.';
$a->strings['Please visit %s  if you wish to make any changes to this relationship.'] = 'من فضلك زر %s إن أردت تغيير هذه العلاقة.';
$a->strings['registration request'] = 'طلب تسجيل';
$a->strings['You\'ve received a registration request from \'%1$s\' at %2$s'] = 'تلقيت طلب تسجيل من \'%1$s\' على %2$s';
$a->strings['You\'ve received a [url=%1$s]registration request[/url] from %2$s.'] = 'تلقيت [url=%1$s]طلب تسجيل[/url] من %2$s.';
$a->strings['Full Name:	%s
Site Location:	%s
Login Name:	%s (%s)'] = 'الاسم الكامل:	%s
الموقع:	%s
اسم الولوج:	%s (%s)';
$a->strings['Please visit %s to approve or reject the request.'] = 'من فضلك زر %s لقبول أو رفض الطلب.';
$a->strings['%s %s tagged you'] = 'ذكرك %s%s';
$a->strings['%s %s shared a new post'] = 'شارك %s%s مشاركة جديدة';
$a->strings['This message was sent to you by %s, a member of the Friendica social network.'] = 'أرسل %s لك هذه الرسالة، وهو عضو في شبكة فرنديكا.';
$a->strings['You may visit them online at %s'] = 'يمكنك زيارتهم عبر %s';
$a->strings['Please contact the sender by replying to this post if you do not wish to receive these messages.'] = 'رجاء اتصل بالمرسل بالرد على هذا المشاركة إذا كنت لا ترغب في تلقي هذه الرسائل.';
$a->strings['%s posted an update.'] = 'نشر %s تحديثاً.';
$a->strings['Private Message'] = 'رسالة خاصة';
$a->strings['This entry was edited'] = 'عدّل المدخل';
$a->strings['Edit'] = 'تعديل';
$a->strings['Pinned item'] = 'عنصر مثبت';
$a->strings['Delete globally'] = 'احذفه عالميًا';
$a->strings['Remove locally'] = 'أزله محليًا';
$a->strings['Block %s'] = 'احجب %s';
$a->strings['Save to folder'] = 'احفظ في مجلد';
$a->strings['I will attend'] = 'سأحضره';
$a->strings['I will not attend'] = 'لن أحضره';
$a->strings['I might attend'] = 'قد أحضره';
$a->strings['Ignore thread'] = 'تجاهل النقاش';
$a->strings['Unignore thread'] = 'ألغ تجاهل النقاش';
$a->strings['Toggle ignore status'] = 'بدّل حالة التجاهل';
$a->strings['Add star'] = 'أضف للمفضلة';
$a->strings['Remove star'] = 'أزل من المفضلة';
$a->strings['Toggle star status'] = 'بدِّل حالة التفضيل';
$a->strings['Pin'] = 'ثبّت';
$a->strings['Unpin'] = 'ألغ التثبيت';
$a->strings['Toggle pin status'] = 'بدِّل حالة التثبيت';
$a->strings['Pinned'] = 'مُثَبَت';
$a->strings['Add tag'] = 'أضف وسما';
$a->strings['Quote share this'] = 'اقتبس وشارك';
$a->strings['Quote Share'] = 'اقتبس وشارك';
$a->strings['Reshare this'] = 'أعاد نشر هذا';
$a->strings['Reshare'] = 'أعد نشره';
$a->strings['Cancel your Reshare'] = 'ألغ إعادة النشر';
$a->strings['Unshare'] = 'ألغ المشاركة';
$a->strings['%s (Received %s)'] = '%s (استلم %s)';
$a->strings['Comment this item on your system'] = 'علّق على هذا العنصر على خادمك';
$a->strings['Remote comment'] = 'تعليق بعيد';
$a->strings['to'] = 'إلى';
$a->strings['via'] = 'عبر';
$a->strings['Wall-to-Wall'] = 'حائط لحائط';
$a->strings['via Wall-To-Wall:'] = 'عير حائط لحائط';
$a->strings['Reply to %s'] = 'رد على %s';
$a->strings['More'] = 'المزيد';
$a->strings['Notifier task is pending'] = 'مهمة التنبيه معلقة';
$a->strings['Delivery to remote servers is pending'] = 'التسليم للخوادم البعيدة معلق';
$a->strings['Delivery to remote servers is underway'] = 'التسليم إلى الخوادم البعيدة جار';
$a->strings['Delivery to remote servers is mostly done'] = 'التسليم إلى الخوادم البعيدة يكاد يكتمل';
$a->strings['Delivery to remote servers is done'] = 'التسليم للخوادم البعيدة اكتمل';
$a->strings['%d comment'] = [
	0 => 'لا تعليق %d',
	1 => 'تعليق واحد %d',
	2 => 'تعليقان %d',
	3 => '%d تعليقات',
	4 => '%d تعليقا',
	5 => '%d تعليق',
];
$a->strings['Show more'] = 'اعرض المزيد';
$a->strings['Show fewer'] = 'اعرض أقل';
$a->strings['%s is now following %s.'] = '%s يتابع %s.';
$a->strings['following'] = 'يتابع';
$a->strings['%s stopped following %s.'] = '%s توقف عن متابعة %s.';
$a->strings['stopped following'] = 'توقف عن متابعة';
$a->strings['The folder view/smarty3/ must be writable by webserver.'] = 'يجب ان يكون المسار view/smarty3 قابل للتعديل من قبل الخادم.';
$a->strings['Login failed.'] = 'فشل الولوج.';
$a->strings['Login failed. Please check your credentials.'] = 'فشل الولوج. من فضلك تحقق من بيانات الاعتماد.';
$a->strings['Welcome %s'] = 'مرحباً %s';
$a->strings['Please upload a profile photo.'] = 'من فضلك ارفع صورة لملفك الشخصي.';
$a->strings['Friendica Notification'] = 'تنبيهات فرنديكا';
$a->strings['%1$s, %2$s Administrator'] = '%1$s، مدير %2$s';
$a->strings['%s Administrator'] = 'مدير %s';
$a->strings['thanks'] = 'الشكر';
$a->strings['YYYY-MM-DD or MM-DD'] = 'YYYY-MM-DD أو MM-DD';
$a->strings['Time zone: <strong>%s</strong> <a href="%s">Change in Settings</a>'] = 'المنطقة الزمنية: <strong>%s</strong><a href="%s">غيرها من الإعدادات</a>';
$a->strings['never'] = 'أبدًا';
$a->strings['less than a second ago'] = 'منذ أقل من ثانية';
$a->strings['year'] = 'سنة';
$a->strings['years'] = 'سنوات';
$a->strings['months'] = 'أشهر';
$a->strings['weeks'] = 'أسابيع';
$a->strings['days'] = 'أيام';
$a->strings['hour'] = 'ساعة';
$a->strings['hours'] = 'ساعات';
$a->strings['minute'] = 'دقيقة';
$a->strings['minutes'] = 'دقائق';
$a->strings['second'] = 'ثانية';
$a->strings['seconds'] = 'ثوان';
$a->strings['in %1$d %2$s'] = 'في %1$d %2$s';
$a->strings['%1$d %2$s ago'] = 'منذ %1$d %2$s';
$a->strings['(no subject)'] = '(بدون موضوع)';
$a->strings['Notification from Friendica'] = 'تنبيهات من فرنديكا';
$a->strings['Empty Post'] = 'مشاركة فارغة';
$a->strings['default'] = 'افتراضي';
$a->strings['greenzero'] = 'greenzero';
$a->strings['purplezero'] = 'purplezero';
$a->strings['easterbunny'] = 'easterbunny';
$a->strings['darkzero'] = 'darkzero';
$a->strings['comix'] = 'comix';
$a->strings['slackr'] = 'slackr';
$a->strings['Variations'] = 'تغيرات';
$a->strings['Light (Accented)'] = 'فاتح (ذو طابع لوني)';
$a->strings['Dark (Accented)'] = 'داكن (ذو طابع لوني)';
$a->strings['Black (Accented)'] = 'أسود (ذو طابع لوني)';
$a->strings['Note'] = 'ملاحظة';
$a->strings['Check image permissions if all users are allowed to see the image'] = 'تحقق من أذونات الصورة إذا كان مسموح للجميع مشاهدتها';
$a->strings['Custom'] = 'مخصص';
$a->strings['Legacy'] = 'أثري';
$a->strings['Accented'] = 'ذو طابع لوني';
$a->strings['Select color scheme'] = 'اختر مخططات اللون';
$a->strings['Select scheme accent'] = 'اختر مخططات الطابع اللوني';
$a->strings['Blue'] = 'أزرق';
$a->strings['Red'] = 'أحمر';
$a->strings['Purple'] = 'بنفسجي';
$a->strings['Green'] = 'أخضر';
$a->strings['Pink'] = 'وردي';
$a->strings['Copy or paste schemestring'] = 'انسخ أو ألصق سلسلة المخططات';
$a->strings['You can copy this string to share your theme with others. Pasting here applies the schemestring'] = 'يمكنك نسخ سلسلة المخططات لمشاركة سمتك مع الآخرين. بلصقها ستطبق سلسلة المخططات';
$a->strings['Navigation bar background color'] = 'لون خلفية شريط التصفح';
$a->strings['Navigation bar icon color '] = 'لون أيقونة شريط التصفح ';
$a->strings['Link color'] = 'لون الروابط';
$a->strings['Set the background color'] = 'لون الخلفية';
$a->strings['Content background opacity'] = 'شفافية خلفية المحتوى';
$a->strings['Set the background image'] = 'صورة للخلفية';
$a->strings['Background image style'] = 'نمط صورة الخلفية';
$a->strings['Login page background image'] = 'صورة لخلفية صفحة الولوج';
$a->strings['Login page background color'] = 'لون خلفية صفحة الولوج';
$a->strings['Leave background image and color empty for theme defaults'] = 'اترك صورة الخلفية ولونها فارغين لتطبيق الإعدادات الافتراضية للسمة';
$a->strings['Top Banner'] = 'اللافتة العلوية';
$a->strings['Resize image to the width of the screen and show background color below on long pages.'] = 'غير حجم الصورة لتناسب عُرض الشاشة وأملأ الفراغ الناتج عن الصفحات الطويلة بلون الخلفية.';
$a->strings['Full screen'] = 'املأ الشاشة';
$a->strings['Resize image to fill entire screen, clipping either the right or the bottom.'] = 'غير حجم الصورة لملأ الشاشة. قص الحافة اليمنى أو السفلية.';
$a->strings['Single row mosaic'] = 'فسيفساء صف واحد';
$a->strings['Resize image to repeat it on a single row, either vertical or horizontal.'] = 'غيّر حجم صورة لتكرارها في صف واحد، عموديا أو أفقيا.';
$a->strings['Mosaic'] = 'فسيفساء';
$a->strings['Repeat image to fill the screen.'] = 'كرر صورة لملأ الشاشة.';
$a->strings['Skip to main content'] = 'تخطى للمحتوى الرئيسي';
$a->strings['Back to top'] = 'عُد لأعلى';
$a->strings['Guest'] = 'ضيف';
$a->strings['Visitor'] = 'زائر';
$a->strings['Alignment'] = 'محاذاة';
$a->strings['Left'] = 'يسار';
$a->strings['Center'] = 'وسط';
$a->strings['Color scheme'] = 'مخططات اللَّون';
$a->strings['Posts font size'] = 'حجم خط المشاركة';
$a->strings['Textareas font size'] = 'حجم خط مساحة النص';
$a->strings['Comma separated list of helper forums'] = 'قائمة مقسمة بفاصلة لمنتديات الدعم';
$a->strings['don\'t show'] = 'لا تعرض';
$a->strings['show'] = 'اعرض';
$a->strings['Set style'] = 'عيّن أسلوبًا';
$a->strings['Community Pages'] = 'صفحات المجتمع';
$a->strings['Community Profiles'] = 'الملفات الشخصية المجتمعية';
$a->strings['Help or @NewHere ?'] = 'تحتاج لمساعدة أو أنت جديد هنا NewHete@؟';
$a->strings['Connect Services'] = 'اتصل بخدمات';
$a->strings['Find Friends'] = 'اعثر على أصدقاء';
$a->strings['Last users'] = 'آخر المستخدمين';
$a->strings['Quick Start'] = 'ابدأ بسرعة';
