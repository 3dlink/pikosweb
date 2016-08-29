<?php
App::uses('Cdda', 'Model');

/**
 * Cdda Test Case
 *
 */
class CddaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cdda'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cdda = ClassRegistry::init('Cdda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cdda);

		parent::tearDown();
	}

}
