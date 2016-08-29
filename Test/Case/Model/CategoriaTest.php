<?php
App::uses('Categoria', 'Model');

/**
 * Categoria Test Case
 *
 */
class CategoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoria',
		'app.producto',
		'app.carrito',
		'app.user',
		'app.user_group',
		'app.estado',
		'app.login_token',
		'app.venta',
		'app.carritos_producto',
		'app.subcategoria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categoria = ClassRegistry::init('Categoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categoria);

		parent::tearDown();
	}

}
