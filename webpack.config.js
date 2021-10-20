// Main source: https://carrieforde.com/webpack-wordpress/
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
// const CopyPlugin = require("copy-webpack-plugin");
const PrettierPlugin = require("prettier-webpack-plugin");
const ip = require('internal-ip');
const internalIp = ip.v4.sync();


module.exports = {
    context: __dirname,
    entry: {
        three: './dev/threejs/main.js',
        frontend: ['./dev/js/main.js', './dev/styles/__main.scss'],
    },
    output: {
        path: path.resolve(__dirname, 'build'),
        filename: 'js/[name]-bundle.js'
    },
    mode: 'development',
    devtool: 'source-map',
    module: {
        rules: [
            // {
            //     // Don't forget to provide an ESLINT config
            //     // Currently the following is used: eslint-config-airbnb-base  
            //     // Source: https://www.npmjs.com/package/eslint-config-airbnb-base
            //     enforce: 'pre',
            //     test: /\.m?js$/,
            //     exclude: /node_modules/,
            //     loader: 'eslint-loader',
            //     options: {
            //         fix: true,
            //     },
            // },
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }, 
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
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                use: [
                  {
                    loader: 'file-loader',
                    options: {
                        outputPath: 'images-bundled/',
                        name: '[name].[ext]',
                    }
                  },
                ],
                // When using file-loader to stop Asset Module from processing 
                // your assets twice use: 'javascript/auto'
                // Source: https://webpack.js.org/guides/asset-modules/
                type: 'javascript/auto',
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                use: [
                  {
                    loader: 'file-loader',
                    options: {
                        outputPath: 'fonts/',
                        name: '[name].[ext]',
                    }
                  },
                ],
                type: 'javascript/auto',
            },
        ]
    },
    plugins: [
        new BrowserSyncPlugin({
            host: internalIp,
            files: '**/*.php',
            proxy: 'http://padova.local/'
        }),
        // To extract css into a separate file from the webpack bundle:
        new MiniCssExtractPlugin({filename: 'css/[name].css'}),
        // To copy images that are only referenced in php, and copy font 
        // properties like license to the production folder aswell
        // new CopyPlugin({
        //     patterns: [
        //         { from: './dev/fonts', to: "fonts/"},
        //         { from: "./dev/images", to: "images-bundled/" },
        //         { from: "./dev/models", to: "models/" },
        //     ],
        // }),
        new PrettierPlugin({
            printWidth: 80, 
            tabWidth: 2, 
            useTabs: false, 
            semi: true, 
            encoding: 'utf-8', 
            extensions: [ ".js", ".ts" ],
        }),
    ],
    optimization: {
        usedExports: true,
    },
};