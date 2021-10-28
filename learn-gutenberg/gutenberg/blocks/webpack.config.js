const path              =   require( 'path' );
const webpack           =   require( 'webpack' );
const MiniCssExtractPlugin  =   require( 'mini-css-extract-plugin' );

// Extract CSS for Gutenberg Editor
const editor_css_plugin =   new MiniCssExtractPlugin({
    filename:               'blocks-[name].css'
});

// Install modules and dependencies:
// npm i classnames@2.2.6 css-loader@2.1.1 mini-css-extract-plugin@0.6.0 node-sass@4.12.0 raw-loader@2.0.0 sass-loader@7.1.0 --save-dev
// Node.js ver. 10.15.1
// Other dependencies:
//     "@babel/core": "^7.0.0",
//     "@babel/plugin-transform-react-jsx": "^7.2.0",
//     "@wordpress/babel-preset-default": "^3.0.1",
//     "babel-loader": "^8.0.4",
//     "webpack": "^4.26.1",
//     "webpack-cli": "^3.1.2"

module.exports          =   {
    entry:                  './app/index.js',
    output: {
        path:               path.resolve( __dirname, 'dist' ),
        filename:           'bundle.js',
    },
    mode:                   'development',
    watch:                  true,
    devtool:                'cheap-eval-source-map',
    module: {
        rules: [
            {
                test:       /\.js$/,
                exclude:    /(node_modules)/,
                use:        'babel-loader',
            },
            {
                test:           /\.(sa|sc|c)ss$/,
                use:            [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            }
        ]
    },
    plugins: [
        editor_css_plugin
    ]
};
