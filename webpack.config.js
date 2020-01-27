const path = require("path");

module.exports = {
  mode: "production",
  entry: ["./src/js/main.js", "./src/sass/main.scss"],

  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "[name].bundle.js"
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"]
          }
        }
      },
      {
        test: /\.css$/,
        use: ["style-loader", "css-loader"]
      },
      {
        test: /\.scss$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].bundle.css"
            }
          },
          {
            loader: "extract-loader",
            options: {
              sourceMap: true
            }
          },
          {
            loader: "css-loader"
          },
          {
            loader: "postcss-loader"
          },
          {
            loader: "sass-loader"
          }
        ]
      }
    ]
  }
};
