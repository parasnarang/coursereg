<?php
App::uses('AppModel', 'Model');
/**
 * Department Model
 *
 * @property Course $Course
 * @property Instructor $Instructor
 */
class Department extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dname';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'department_id',
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
	public $hasAndBelongsToMany = array(
		'Instructor' => array(
			'className' => 'Instructor',
			'joinTable' => 'departments_instructors',
			'foreignKey' => 'department_id',
			'associationForeignKey' => 'instructor_id',
			'unique' => true,
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
