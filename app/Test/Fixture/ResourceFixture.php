<?php
/**
 * ResourceFixture
 *
 */
class ResourceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'_user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'standard_lib' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 65, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'resource_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'license' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'meta' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => '_id', 'unique' => 1),
			'fk_vow_resources_vow_users1_idx' => array('column' => '_user_id', 'unique' => 0)
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
			'standard_lib' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'url' => 'Lorem ipsum dolor sit amet',
			'resource_type' => 'Lorem ipsum dolor sit amet',
			'license' => 'Lorem ipsum dolor sit amet',
			'meta' => 'Lorem ipsum dolor sit amet'
		),
	);

}
