const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
    module: {
        rules: [
            {
                test: /\.html$/i,
                loader: 'html-loader',
                include: [
                    path.resolve(__dirname, "html"),
                ],
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: 'asset/resource',
                include: [
                    path.resolve(__dirname, "img"),
                ],
            },
            {
                test: /\.css$/i,
                type: 'asset/resource',
                include: [
                    path.resolve(__dirname, "css"),
                ],
            },
        ],
    },
    plugins: [
        new HtmlWebpackPlugin({
            filename: 'index.html',
            template: 'html/index.html',
        }),
        new HtmlWebpackPlugin({
            filename: 'news.html',
            template: 'html/news.html',
        }),
        new HtmlWebpackPlugin({
            filename: 'download.html',
            template: 'html/download.html',
        }),
        new HtmlWebpackPlugin({
            filename: 'team.html',
            template: 'html/team.html',
        }),
        new HtmlWebpackPlugin({
            filename: 'donate.html',
            template: 'html/donate.html',
        }),
    ],
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist'),
        clean: true,
    },
};
