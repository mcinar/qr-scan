module.exports = function(grunt) {

	// 1. All configuration goes here 
	grunt.initConfig({
		
		pkg: grunt.file.readJSON('package.json'),
		
		sass: {
			options: {
				style: 'compressed'
			},
			dist: {
				files: {
					'assets/css/modules/build/defaults.min.css': 'assets/css/modules/dev/defaults.sass',
				}
			}
		},
		watch: {
			css: {
					files: 'assets/css/modules/**/*.sass',
					tasks: ['sass']
			},
			options: {
					spawn: false,
			}
		}

	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.file.defaultEncoding = 'utf8';
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');

	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['watch']);

};