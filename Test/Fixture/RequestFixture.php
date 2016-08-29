<?php
/**
 * RequestFixture
 *
 */
class RequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'route_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'factura_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'peso' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'gramos'),
		'volumen' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'cm'),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_vencimiento' => array('type' => 'date', 'null' => false, 'default' => null),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'user_id' => 1,
			'route_id' => 1,
			'factura_id' => 1,
			'peso' => 1,
			'volumen' => 1,
			'estado' => 1,
			'fecha_vencimiento' => '2015-03-26',
			'created' => '2015-03-26',
			'modified' => '2015-03-26'
		),
	);

}
