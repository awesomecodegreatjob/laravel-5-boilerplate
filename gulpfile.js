var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        //.phpUnit()

        // Copy needed files from /node directories to /public directory.
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts/font-awesome')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap')
        .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/vendor')
        .copy('node_modules/foundation-sites/dist/foundation.min.js', 'public/js/vendor')

        .sass([ // Process front-end stylesheets
                'frontend/main.scss'
            ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
                'frontend/main.css'
            ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
                'plugins.js',
                'frontend/main.js'
            ], 'public/js/frontend.js')

        .sass([ // Process back-end stylesheets
            'backend/main.scss',
            'backend/skin.scss',
            'backend/plugin/toastr/toastr.scss'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
                'backend/main.css'
            ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
                'plugins.js',
                'backend/main.js',
                'backend/plugin/toastr/toastr.min.js',
                'backend/custom.js'
            ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"])

        .browserSync({
            proxy: 'account.dev'
        });
});
