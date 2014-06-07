module.exports = function(grunt) {
	'use strict';
	var gruntConfig = {
		pkg: grunt.file.readJSON('package.json'),
		min: {
			dist: {
				src: ['src/assets/js/scripts.js', 'src/assets/js/jquery.mask.js', 'src/assets/js/jquery.validationEngine-pt.js', 'src/assets/js/jquery.validationEngine.js'],
				dest: 'src/assets/js/app.js'
			}
		},
        cssmin: {
            dist: {
                src: ['src/assets/css/style.css', 'src/assets/css/validationEngine.jquery.css'],
                dest: 'src/assets/css/style.min.css'
            }
        },
        htmlcompressor: {
		    compile: {
		    	files: {
		        	'index.php': 'telas/index.php',
		        	'resposta.php': 'telas/resposta.php',
		        	'analytics.php': 'telas/analytics.php'
		      	}
		    }
		},
		rsync: {
			dist: {
				src: './src/',
				dest: './dist',
				recursive: true,
				syncDest: true,
				exclude: ['main.*', 'less']
			}
            // uncomment and config
			// deploy: {
			// 	src: './dist/',
			// 	dest: '/public_html/inox',
			// 	host: 'mrawebc@mraweb.com.br',
			// 	recursive: true,
			// 	syncDest: true
			// }
		}
	};
	grunt.initConfig(gruntConfig);

	var keys = Object.keys(gruntConfig);
	var tasks = [];

	for(var i = 1, l = keys.length; i < l; i++) {
		tasks.push(keys[i]);
	}

	grunt.loadNpmTasks('grunt-yui-compressor');
	grunt.loadNpmTasks('grunt-rsync');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-htmlcompressor');
    // uncomment for use less
	// grunt.loadNpmTasks('grunt-contrib-less');
	grunt.registerTask('default', tasks);
};