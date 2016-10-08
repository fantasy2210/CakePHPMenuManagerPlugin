<?php
/**
 * MenuSetting Fixture
 */
class MenuSettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'menu_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'activeClass' => array('type' => 'string', 'null' => true, 'default' => 'active', 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'firstClass' => array('type' => 'string', 'null' => true, 'default' => 'first-item', 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'childrenClass' => array('type' => 'string', 'null' => true, 'default' => 'has-children', 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'menuClass' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'evenOdd' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'itemFormat' => array('type' => 'string', 'null' => false, 'default' => '<li%s>%s%s</li>', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'wrapperFormat' => array('type' => 'string', 'null' => false, 'default' => '<ul%s>%s</ul>', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'wrapperClass' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'noLinkFormat' => array('type' => 'string', 'null' => true, 'default' => '<a href="#">%s</a>', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'menuVar' => array('type' => 'string', 'null' => true, 'default' => 'menu', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'authVar' => array('type' => 'string', 'null' => true, 'default' => 'user', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'authModel' => array('type' => 'string', 'null' => true, 'default' => 'User', 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'authField' => array('type' => 'string', 'null' => true, 'default' => 'group', 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indentHtmlOutput' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4, 'unsigned' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'menu_id' => 1,
			'activeClass' => 'Lorem ipsum dolor sit amet',
			'firstClass' => 'Lorem ipsum dolor sit amet',
			'childrenClass' => 'Lorem ipsum dolor sit amet',
			'menuClass' => 'Lorem ipsum dolor sit amet',
			'evenOdd' => 'Lorem ipsum dolor sit amet',
			'itemFormat' => 'Lorem ipsum dolor sit amet',
			'wrapperFormat' => 'Lorem ipsum dolor sit amet',
			'wrapperClass' => 'Lorem ipsum dolor sit amet',
			'noLinkFormat' => 'Lorem ipsum dolor sit amet',
			'menuVar' => 'Lorem ipsum dolor sit amet',
			'authVar' => 'Lorem ipsum dolor sit amet',
			'authModel' => 'Lorem ipsum dolor sit amet',
			'authField' => 'Lorem ipsum dolor sit amet',
			'indentHtmlOutput' => 1,
			'id' => 1
		),
	);

}
