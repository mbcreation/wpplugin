module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
        options: {
          paths: ["src/less"]
        },
        files: {
          "src/css/style.css": "src/less/style.less",
          "src/css/ie.css": "src/less/ie.less",
        }
      }
    },
    watch: {
      styles: {
        files: 'src/less/*.less', // tous les fichiers Sass de n'importe quel dossier
        tasks: ['less:development']
      }
    }
  })

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['development', 'watch']) // Oui, je conseille de toujours compiler une fois avant de lancer watch.
  grunt.registerTask('development', ['less:development'])
}