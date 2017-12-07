<?php
/**
 * Tests for the title field type.
 *
 * @since 1.1.0
 *
 * @package WordPress
 * @subpackage Custom Meta Boxes
 */

namespace HMCMB\Tests;

use CMB_Title;

/**
 * Class TitleFieldTestCase
 *
 * @group fields
 */
class TitleFieldTestCase extends TestFieldCase {
	public function setUp() {
		parent::setUp();

		$this->instance = new CMB_Title( 'CMB_Title', 'Field', [] );
	}
}
