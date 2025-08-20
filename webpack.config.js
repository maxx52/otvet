const { resolve } = require('path');
const NodePolyfillPlugin = require('node-polyfill-webpack-plugin');

module.exports = {
    entry: './src/main.js',
    output: {
        path: resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            }
        ]
    },
    plugins: [
        new NodePolyfillPlugin()
    ]
};