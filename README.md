#Load WordPress PostMeta with a closure method

You can use this directly in your WordPress theme.
```
	/**
	 * Query the postmeta for a metagroup
	 *
	 * @param string $m is subkey like profile | contact or else.
	 * @param int $pid the post id.
	 *
	 * @return string meta value
	 */
	$mk = 'seminar_meta_';
	$pid = $post->ID;

	$_meta = function( $m ) use( $mk, $pid ) {
		$pm = get_post_meta( $pid, $mk . $m, TRUE);
		( is_string( $pm ) || is_int( $pm ) ) ? $v = $pm : $v = ( array_key_exists( $mk . $m, $pm ) ? $pm[$mk . $m][$m] : $pm[$m] );
		return ( $v ) ? $v : false;
	};
		
	$subtitle = $_meta( 'subtitle' );
	$profile = $_meta( 'profile' );
```
