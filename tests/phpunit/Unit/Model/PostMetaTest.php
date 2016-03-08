<?php # -*- coding: utf-8 -*-

namespace PostMeta\Test\Unit\Model;

use Brain;
use Mockery;
use PostMeta\Model;
use PostMeta\Test\Helper;

/**
 * Class PostMetaTest
 *
 * @package PostMeta\Test\Unit\Model
 */
class PostMetaTest extends Helper\MonkeyTestCase {

	/**
	 * @dataProvider default_test_data
	 */
	public function test_get_post_meta( $mk, $MetaSubKey, $postID, $Return ) {

		$_meta = function( $m, $pid ) use( $mk, $Return ) {
			$pm = $Return;
			( is_string( $pm ) || is_int( $pm ) ) ? $v = $pm : $v = ( array_key_exists( $mk . $m, $pm ) ? $pm[$mk . $m][$m] : $pm[$m] );
			return ( $v ) ? $v : false;
		};


	}


	/**
	 * @return array
	 */
	public function default_test_data() {

		$data = [ ];

		# 1. Testrun
		$data[ 'test_1' ] = [
			'meta_',
			'special',
			22,
			[ 'meta_special' => [ 'special' => '1' ] ]
		];

		# 2. Testrun
		$data[ 'test_2' ] = [
			'other_meta_',
			'foo',
			23,
			[ 'foo' => 'special' ]
		];

		# 3. Testrun
		$data[ 'test_3' ] = [
			'foo_meta_',
			'baz',
			33,
			'string'
		];

		# 4. Testrun
		$data[ 'test_4' ] = [
			'int_meta_',
			'baz',
			33,
			42
		];

		# 3. Testrun
		$data[ 'test_4' ] = [
			'int_meta_',
			'baz',
			33,
			FALSE
		];

		return $data;
	}

}
