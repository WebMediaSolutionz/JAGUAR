var gulp = require( 'gulp' ),
	uglify = require( 'gulp-uglify' );

gulp.task( 'default', function () {

	// minifying my javascript
	gulp.src( 'javascript/uncompressed/*.js' )
		.pipe( uglify() )
		.pipe( gulp.dest( 'javascript/compressed' ) );

	// minifying javascript libraries
	gulp.src( 'javascript/uncompressed/lib/*.js' )
		.pipe( uglify() )
		.pipe( gulp.dest( 'javascript/compressed/lib' ) );
});