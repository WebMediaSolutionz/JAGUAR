var gulp = require( 'gulp' ),
	uglify = require( 'gulp-uglify' ),
	sass = require( 'gulp-ruby-sass' ),
	plumber = require( 'gulp-plumber' );

// Scripts Task
// Uglifies
gulp.task( 'scripts', function () {
	// minifying my javascript
	gulp.src( 'javascript/uncompressed/**/*.js' )
		.pipe( plumber() )
		.pipe( uglify() )
		.pipe( gulp.dest( 'javascript/compressed' ) );
});

// Styles Task
gulp.task( 'styles', function () {
	// gulp.src( 'sass/**/*.scss' )
	// 	.pipe( plumber() )
	// 	.pipe( sass( {
	// 		style: 'compressed'
	// 	} ) )
	// 	.pipe( gulp.dest( 'css/' ) );

	console.info( 'compiling sass files into css' );
});

// Watch Task
gulp.task( 'watch', function () {
	gulp.watch( 'javascript/uncompressed/**/*.js', [ 'scripts' ] );
	gulp.watch( 'sass/**/*.scss', [ 'styles' ] );
});

gulp.task( 'default', [ 'scripts', 'styles', 'watch' ]);