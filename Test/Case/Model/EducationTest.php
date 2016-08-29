<?php
App::uses('Education', 'Model');

/**
 * Education Test Case
 *
 */
class EducationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.education',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Education = ClassRegistry::init('Education');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Education);

		parent::tearDown();
	}

}
