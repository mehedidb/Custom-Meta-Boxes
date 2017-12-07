<?php
/**
 * Tests for the URL field type.
 *
 * @since 1.1.0
 *
 * @package WordPress
 * @subpackage Custom Meta Boxes
 */

namespace HMCMB\Tests;

use CMB_URL_Field;

/**
 * Class URLFieldTestCase
 *
 * @group fields
 */
class URLFieldTestCase extends TestFieldCase {
	public function setUp() {
		parent::setUp();

		$this->instance = new CMB_URL_Field( 'CMB_URL_Field', 'Field', [] );
	}
}
