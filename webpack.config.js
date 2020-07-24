const path = require('path');

module.exports = {
  entry: './src/app.js',
  output: {
    path: path.join(__dirname, 'dist/js'),
    filename: 'body-docs.bundle.min.js'
  },
  module: {
    rules: [
        {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: 'babel-loader',
        
        }
    ],
  },
  mode: "production"
};