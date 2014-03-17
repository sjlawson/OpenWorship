<?php
App::uses('AppModel', 'Model');
/**
 * SongSlide Model
 *
 * @property  $
 * @property User $User
 */
class SongSlide extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = '_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed


/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => '_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public function get_songslid_by_id($id) {
            return $this->find($id);
        }
        
}
