module.exports = {
  entry:'./index.js',//Need to bundle files
  output:{
    filename:"bundle.js"
  },
    module:{
    loaders:[
      {test:/\.css$/,loader:"style!css-loader"},
      {
        test: /\.js[x]?$/,
        exclude: /node_modules/,
        loader: 'babel-loader?presets[]=es2015'
      },      
      {
        test: /\.less$/,
        loader: "style!css!less"
      },
      {
        test: /\.vue$/, // a regex for matching all files that end in `.vue`
        loader: "vue"   // loader to use for matched files
      }	

    ]
  }
	
}
