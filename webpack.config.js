const Encore = require('@symfony/webpack-encore');

Encore
    // Directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // Public path used by the web server to access the output path
    .setPublicPath('/build')

    // Only needed for CDN or sub-directory deploys
    //.setManifestKeyPrefix('build/')

    // Entry for the main app
    .addEntry('app', './assets/app.js')

    // Enable Stimulus bridge (used in Symfony UX)
    .enableStimulusBridge('./assets/controllers.json')

    // Enable Sass/SCSS support
    .enableSassLoader()

    // Enable PostCSS loader (optional)
    //.enablePostCssLoader()

    // Enable source maps during development
    .enableSourceMaps(!Encore.isProduction())

    // Enable hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // Enable jQuery auto-provision
    .autoProvidejQuery()

    // Clean output before build
    .cleanupOutputBeforeBuild()
;

module.exports = Encore.getWebpackConfig();
