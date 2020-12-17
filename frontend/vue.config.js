module.exports = {
    devServer: {
        proxy: {
            '/api/cidomo': {
                target: 'http://api.localhost/'
            }
        }
    },
    indexPath: process.env.NODE_ENV === 'production' ? '../app/Views/index.php':'index.html',
    outputDir: '../public/',
}