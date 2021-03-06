module.exports = function(grunt) {
	'use strict';
	var gruntConfig = {
		pkg: grunt.file.readJSON('package.json'),
		min: {
			dist: {
				src: ['telas/js/scripts.js'],
				dest: 'js/scripts.js'
			}
		},
        cssmin: {
            dist: {
                src: ['telas/css/style.css', 'telas/css/colorbox.css', 'telas/css/validationEngine.jquery.css'],
                dest: 'css/style.css'
            }
        },
        htmlcompressor: {
		    compile: {
		    	files: {
		        	'index.php': 'telas/index.php',
		        	'resposta.php': 'telas/resposta.php',
		        	'analytics.php': 'telas/analytics.php',
		        	'aside.php': 'telas/aside.php',
		        	'empresa.php': 'telas/empresa.php',
		        	'footer.php': 'telas/footer.php',
		        	'header.php': 'telas/header.php',
		        	'produtos.php': 'telas/produtos.php',
		        	'tanques-de-coleta.php': 'telas/tanques-de-coleta.php',
		        	'tanques-semi-reboque.php': 'telas/tanques-semi-reboque.php',
		        	'tanques-vanderleia.php': 'telas/tanques-vanderleia.php',
		        	'tanques-julieta.php': 'telas/tanques-julieta.php',
		        	'tanques-bitrem.php': 'telas/tanques-bitrem.php',
		        	'tanques-personalizados.php': 'telas/tanques-personalizados.php',
		        	'acessorios.php': 'telas/acessorios.php',
		        	'servicos.php': 'telas/servicos.php',
		        	'clientes.php': 'telas/clientes.php',
		        	'contato.php': 'telas/contato.php',
		        	'resposta-contato.php': 'telas/resposta-contato.php'
		      	}
		    }
		},
		imagemin: {                         
		    dynamic: { 
		      files: [{
		        expand: true,
		        cwd: 'telas/img/', 
		        src: ['**/*.{png,jpg,gif}'], 
		        dest: 'img/' 
		      }]
		    }
		  },
		rsync: {
			dist: {
				src: './telas/',
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