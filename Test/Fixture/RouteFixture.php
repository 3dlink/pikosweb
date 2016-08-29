<?php
/**
 * RouteFixture
 *
 */
class RouteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'origen' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'destino' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'costo' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'tiempo_de_entrega' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'horas'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'origen' => 'Lorem ipsum dolor sit amet',
			'destino' => 'Lorem ipsum dolor sit amet',
			'costo' => 1,
			'tiempo_de_entrega' => 1
		),
	);

}
