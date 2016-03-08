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
		 * Query the postmeta for seminar
		 *
		 * @param string $m the seminar_meta_ subkey like seminar_meta_profile.
		 * @param int $pid  the post id.
		 *
		 * @return string meta value
		 */
		$mk = 'seminar_meta_';

		$_meta = function( $m, $pid ) use( $mk ) {
			$pm = get_post_meta( $pid, $mk, TRUE);
			( is_string( $pm ) || is_int( $pm ) ) ? $v = $pm : $v = ( array_key_exists( $mk . $m, $pm ) ? $pm[$mk . $m][$m] : $pm[$m] );
		};

		$subtitle = $_meta( 'subtitle', $post->ID );
		$profile = $_meta( 'profile', $post->ID );

		print_r( $subtitle, $profile );

	}

}