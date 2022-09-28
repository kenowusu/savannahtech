const path = require('path');


/********* require plugins ****/
const MiniCssExtractPlugin = require("mini-css-extract-plugin");



module.exports = {
    entry:'./src/index.js',
    mode:"development",
    watch:true,
    output:{
      filename:'[name].js',
      path: path.resolve(__dirname,"assets") 
        },
    plugins: [
      new MiniCssExtractPlugin({
        filename:'./sass/[name].css'
      })
    ],

    module: {
      rules: [
        {
          test: /\.s[ac]ss$/i,
          use: [
 
            MiniCssExtractPlugin.loader,
            // Translates CSS into CommonJS
            "css-loader",
            // Compiles Sass to CSS
            "sass-loader",

            
          ],
          
        },
      ],

     

      
    },
  };