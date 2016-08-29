<?php
App::uses('Subcategoria', 'Model');

/**
 * Subcategoria Test Case
 *
 */
class SubcategoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subcategoria',
		'app.categoria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subcategoria = ClassRegistry::init('Subcategoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcategoria);

		parent::tearDown();
	}

}
