module.exports = function(grunt) {

    grunt.initConfig({
        jshint: {
            files: ['Gruntfile.js', 'assets/js/typedHomePage.js', 'assets/js/typedPage.js', 'assets/js/main.js'],
            options: {
                globals: {
                    jQuery: true
                }
            }
        },
        sass: { // Task
            dist: { // Target
                options: { // Target options
                    style: 'expanded'
                },
                files: { // Dictionary of files
                    'assets/css/main.css': 'assets/scss/main.scss' // 'destination': 'source'
                }
            }
        },
        uglify: {
            options: {
                mangle: {
                    reserved: ['jQuery']
                }
            },
            my_target: {
                files: {
                    'assets/js/main.min.js': ['assets/js/main.js'],
                    'assets/js/typedHomePage.min.js': ['assets/js/typedHomePage.js'],
                    'assets/js/typedPage.min.js': ['assets/js/typedPage.js'],


                }
            }
        },
        postcss: {
            options: {
                map: {
                    inline: false, // save all sourcemaps as separate files...
                    annotation: 'assets/css/maps/' // ...to the specified directory
                },

                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer')({ browsers: 'last 2 versions' }), // add vendor prefixes
                ]
            },
            dist: {
                src: 'assets/css/main.css'
            }
        },
        watch: {
            scss: {
                files: ['assets/scss/*.scss'],
                tasks: ['sass']
            },
            scripts: {
                files: ['assets/js/type-index.js', 'assets/js/main.js'],
                tasks: ['jshint', 'uglify']

            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');




    grunt.registerTask('build', ['postcss']);
    grunt.registerTask('default', ['watch']);
};