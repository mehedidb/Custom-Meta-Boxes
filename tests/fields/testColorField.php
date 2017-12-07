<?php
/**
 * Tests for the color field type.
 *
 * @since 1.1.0
 *
 * @package WordPress
 * @subpackage Custom Meta Boxes
 */

namespace HMCMB\Tests;

use CMB_Color_Picker;

/**
 * Class ColorFieldTestCase
 *
 * @group fields
 */
class ColorFieldTestCase extends TestFieldCase {
	public function setUp() {
		parent::setUp();

		$this->instance = new CMB_Color_Picker( 'CMB_Color_Picker', 'Field', [] );
	}
}
