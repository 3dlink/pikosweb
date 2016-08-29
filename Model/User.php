<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property UserGroup $UserGroup
 * @property Estado $Estado
 * @property Carrito $Carrito
 * @property LoginToken $LoginToken
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'UserGroup' => array(
			'className' => 'UserGroup',
			'foreignKey' => 'user_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)/*,
		'Carrito' => array(
			'className' => 'Carrito',
			'foreignKey' => 'carrito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'LoginToken' => array(
			'className' => 'LoginToken',
			'foreignKey' => 'user_id',
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

		var $hasAndBelongsToMany = array(
    'Productos' =>
        array('className'            => 'Producto',
             'joinTable'              => 'productos_users',
             'foreignKey'             => 'user_id',
             'associationForeignKey'  => 'producto_id',
            'conditions'             => '',
            'order'                  => '',
            'limit'                  => '',
            'unique'                 => true            )
  );


}
