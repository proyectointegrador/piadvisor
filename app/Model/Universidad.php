<?php
App::uses('AppModel', 'Model');
/**
 * Universidad Model
 *
 * @property Disponibilidad $Disponibilidad
 * @property Demanda $Demanda
 * @property User $User
 * @property Pais $Pais
 * @property Requisito $Requisito
 */
class Universidad extends AppModel {

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
		'Disponibilidad' => array(
			'className' => 'Disponibilidad',
			'foreignKey' => 'disponibilidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Demanda' => array(
			'className' => 'Demanda',
			'foreignKey' => 'demanda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pais' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Requisito' => array(
			'className' => 'Requisito',
			'joinTable' => 'universidades_requisitos',
			'foreignKey' => 'universidad_id',
			'associationForeignKey' => 'requisito_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
