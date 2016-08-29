<?php
/**
 * ArticleFixture
 *
 */
class ArticleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'excerpt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'premium' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'main_img' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'square_img' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'tags' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
		'categories_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'resource_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish2_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'excerpt' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'premium' => 1,
			'main_img' => 'Lorem ipsum dolor sit amet',
			'square_img' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-02-13 20:52:53',
			'modified' => '2015-02-13 20:52:53',
			'tags' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'categories_id' => 1,
			'resource_id' => 1
		),
	);

}
