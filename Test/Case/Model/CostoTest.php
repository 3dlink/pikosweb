<?php
App::uses('Costo', 'Model');

/**
 * Costo Test Case
 *
 */
class CostoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.costo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Costo = ClassRegistry::init('Costo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Costo);

		parent::tearDown();
	}

}
