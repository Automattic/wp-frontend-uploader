<?php

/**
 * Base unit test class for Frontend Uploader
 */
class FrontendUploader_TestCase extends WP_UnitTestCase {
	public function setUp() {
		parent::setUp();

		global $frontend_uploader;
		$this->_fu = $frontend_uploader;
	}
}
