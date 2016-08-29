<?php
/**
 * CddaFixture
 *
 */
class CddaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cdda';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'A.v1.q2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'A.v1.q3' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q4' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q5' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'A.v1.q6' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q7' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q8' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'A.v1.q9' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q10' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q11' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q12' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q13' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q14' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q15' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q16' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q17' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q18' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q19' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'A.v1.q20' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'systematic' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'spontaneous' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dms_internal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dms_external' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'motivation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indecisiveness' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'biliefs' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'process' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'self' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'occupations' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'conflict_internal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'conflict_external' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vision' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'A.v1.q2' => 'Lorem ipsum dolor sit amet',
			'A.v1.q3' => 1,
			'A.v1.q4' => 1,
			'A.v1.q5' => 1,
			'A.v1.q6' => 1,
			'A.v1.q7' => 1,
			'A.v1.q8' => 1,
			'A.v1.q9' => 1,
			'A.v1.q10' => 1,
			'A.v1.q11' => 1,
			'A.v1.q12' => 1,
			'A.v1.q13' => 1,
			'A.v1.q14' => 1,
			'A.v1.q15' => 1,
			'A.v1.q16' => 1,
			'A.v1.q17' => 1,
			'A.v1.q18' => 1,
			'A.v1.q19' => 1,
			'A.v1.q20' => 1,
			'systematic' => 'Lorem ipsum dolor sit amet',
			'spontaneous' => 'Lorem ipsum dolor sit amet',
			'dms_internal' => 'Lorem ipsum dolor sit amet',
			'dms_external' => 'Lorem ipsum dolor sit amet',
			'motivation' => 'Lorem ipsum dolor sit amet',
			'indecisiveness' => 'Lorem ipsum dolor sit amet',
			'biliefs' => 'Lorem ipsum dolor sit amet',
			'process' => 'Lorem ipsum dolor sit amet',
			'self' => 'Lorem ipsum dolor sit amet',
			'occupations' => 'Lorem ipsum dolor sit amet',
			'conflict_internal' => 'Lorem ipsum dolor sit amet',
			'conflict_external' => 'Lorem ipsum dolor sit amet',
			'vision' => 'Lorem ipsum dolor sit amet'
		),
	);

}
