const path = require("path");

module.exports = {
  mode: "production",
  entry: {
    friendica: "./view/js/friendica.js",
  },
  output: {
    filename: "[name].min.js",
    path: path.resolve(__dirname, "view/asset/js"),
    clean: true,
  },
};
