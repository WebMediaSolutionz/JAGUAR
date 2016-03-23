var gulp = require( 'gulp' ),
	uglify = require( 'gulp-uglify' );

// Scripts Task
// Uglifies
gulp.task( 'scripts', function () {
	// minifying my javascript
	gulp.src( 'javascript/uncompressed/*.js' )
		.pipe( uglify() )
		.pipe( gulp.dest( 'javascript/compressed' ) );

	// minifying javascript libraries
	gulp.src( 'javascript/uncompressed/lib/*.js' )
		.pipe( uglify() )
		.pipe( gulp.dest( 'javascript/compressed/lib' ) );
});

gulp.task( 'default', [ 'scripts' ]);