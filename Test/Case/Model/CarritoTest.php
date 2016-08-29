<?php
App::uses('Carrito', 'Model');

/**
 * Carrito Test Case
 *
 */
class CarritoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.carrito',
		'app.user',
		'app.venta',
		'app.producto',
		'app.categoria',
		'app.carritos_producto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Carrito = ClassRegistry::init('Carrito');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Carrito);

		parent::tearDown();
	}

}
