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
        
        public function getSongSlideById($id) 
	{
            
            $query = "SELECT
                    s.title AS song_title, s.author AS song_author,
                        s.license AS song_license, s.content AS song_content, 
                    r.title AS resource_title, r.url AS resource_url, r.resource_type AS resource_type
                FROM " . $this->tablePrefix . $this->table ." s
                LEFT JOIN " . $this->tablePrefix ."resources r ON
                    r._id = s._bg_resource_id
                WHERE
                    s._id = $id";
            $result = $this->query($query);
            return $result[0];
        }

	/**
	 * @param $userId
	 *
	 */
	public function getSongSlidesTitlesByUserId($userId) 
	{
	    $query = "SELECT _id, title
		FROM " . $this->tablePrefix . $this->table . "
		WHERE _user_id = " . $userId . "
		ORDER BY title";

	    $result = $this->query($query);

	    return $result;
	}

	public function getSongSlidesByEventID($eventId)
	{
	    $query = "SELECT _id, title
		FROM " . $this->tablePrefix . $this->table ." ss "
	      ." INNER JOIN " . $this->tablePrefix ."event_songs es "
	      ."ON es.song_slide_id = ss._id"
	      ." WHERE es.event_id = ".$eventId;
	    
	    $result = $this->query($query);

	    return $result;
	}

}
