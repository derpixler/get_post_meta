<?php # -*- coding: utf-8 -*-

namespace PostMeta\Test\Helper;

use
	Brain,
	PHPUnit_Framework_TestCase;

/**
 * Class MonkeyTestCase
 *
 * Sets up the Brain\Monkey package to mock WP core components
 *
 * @package WpNonceKit\Test\Helper
 */
class MonkeyTestCase extends PHPUnit_Framework_TestCase {

	public function setUp() {

		Brain\Monkey::setUp();
		Brain\Monkey::setUpWP();
	}

	public function tearDown() {

		Brain\Monkey::tearDown();
		Brain\Monkey::tearDownWP();
	}
}