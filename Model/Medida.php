<?php
App::uses('AppModel', 'Model');
/**
 * Medida Model
 *
 * @property Categoria $Categoria
 */
class Medida extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'medida';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
