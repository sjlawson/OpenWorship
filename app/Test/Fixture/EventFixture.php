<?php
/**
 * EventFixture
 *
 */
class EventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'_user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'content_json' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2055, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => '_id', 'unique' => 1),
			'fk_events_users1_idx' => array('column' => '_user_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'_id' => 1,
			'_user_id' => 1,
			'date' => '2014-02-28 14:14:01',
			'title' => 'Lorem ipsum dolor sit amet',
			'content_json' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
