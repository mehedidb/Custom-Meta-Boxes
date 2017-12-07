<?php
/**
 * Tests for the text field type.
 *
 * @since 1.1.0
 *
 * @package WordPress
 * @subpackage Custom Meta Boxes
 */

namespace HMCMB\Tests;

use CMB_Text_Field;

/**
 * Class TextFieldTestCase
 *
 * @group fields
 */
class TextFieldTestCase extends TestFieldCase {
	public function setUp() {
		parent::setUp();

		$this->instance = new CMB_Text_Field( 'CMB_Text_Field', 'Field', [] );
	}
}
