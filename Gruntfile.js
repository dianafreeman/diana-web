module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      files: ['Gruntfile.js', 'js/type-index.js', 'js/main.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },
   sass: {                              // Task
    dist: {                            // Target
      options: {                       // Target options
        style: 'expanded'
      },
      files: {                         // Dictionary of files
        'css/main.css': 'scss/main.scss'      // 'destination': 'source'
      }
    }
  },
  connect: {
    server: {
      options: {
        port: 9000,
        base: '.',
        hostname: 'localhost',
        protocol: 'http',
        livereload: true,
        debounceDelay: 3000,
        open: true,
      }
    }
  },
  watch: {
   scss: {
    files: ['scss/*.scss'],
    tasks: ['sass'],
    options: { livereload: true }
  }, 
  scripts:{
    files:['js/type-index.js','js/main.js'],
    tasks: ['jshint']

  }
} 

});

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');

  grunt.registerTask('lint', ['jshint']);
  grunt.registerTask('default', ['watch']);
};