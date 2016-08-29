<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 * @property Categoria $Categoria
 * @property Carrito $Carrito
 */
class Producto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Subcategoria' => array(
			'className' => 'Subcategoria',
			'foreignKey' => 'subcategoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Linea' => array(
			'className' => 'Linea',
			'foreignKey' => 'linea_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	public $hasMany = array(
		'Medida' => array(
			'className' => 'Medida',
			'foreignKey' => 'producto_id',
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

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */

		var $hasAndBelongsToMany = array(
        'Users' =>
            array('className'            => 'User',
                 'joinTable'              => 'productos_users',
                 'foreignKey'             => 'producto_id',
                 'associationForeignKey'  => 'user_id',
                'conditions'             => '',
                'order'                  => '',
                'limit'                  => '',
                'unique'                 => true            )
        );



	// public $hasAndBelongsToMany = array(
	// 	'Carrito' => array(
	// 		'className' => 'Carrito',
	// 		'joinTable' => 'carritos_productos',
	// 		'foreignKey' => 'producto_id',
	// 		'associationForeignKey' => 'carrito_id',
	// 		'unique' => 'keepExisting',
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => '',
	// 		'limit' => '',
	// 		'offset' => '',
	// 		'finderQuery' => '',
	// 	)
	// );

}
