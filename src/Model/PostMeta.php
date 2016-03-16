<?php # -*- coding: utf-8 -*-

namespace PostMeta\Model;

/**
 * Class PostMeta
 *
 * @package PostMeta\Model
 */
class PostMeta {

	/**
	 * PostMeta constructor.
	 */
	public function __construct() {

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
			return ( is_string( $pm ) || is_int( $pm ) ) ? $v = $pm : $v = ( array_key_exists( $mk . $m, $pm ) ? $pm[$mk . $m][$m] : $pm[$m] );
		};
		
		$subtitle = $_meta( 'subtitle', $post->ID );
		$profile = $_meta( 'profile', $post->ID );

		print_r( $subtitle, $profile );

	}

}
