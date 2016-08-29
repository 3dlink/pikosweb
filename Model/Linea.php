<?php
App::uses('AppModel', 'Model');
/**
 * linea Model
 *
 * @property Categoria $Categoria
 */
class Linea extends AppModel {

/**
 * Display field
 *
 * @var string
 */


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Subcategoria' => array(
			'className' => 'Subcategoria',
			'foreignKey' => 'subcategoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	public $hasMany = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'linea_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
