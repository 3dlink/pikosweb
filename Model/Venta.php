<?php
App::uses('AppModel', 'Model');
/**
 * Venta Model
 *
 * @property Carrito $Carrito
 */
class Venta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Carrito' => array(
			'className' => 'Carrito',
			'foreignKey' => 'carrito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
