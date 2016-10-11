<?php
App::uses('MenuSetting', 'MenuManager.Model');

/**
 * MenuSetting Test Case
 */
class MenuSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.menu_manager.menu_setting',
		'plugin.menu_manager.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MenuSetting = ClassRegistry::init('MenuManager.MenuSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuSetting);

		parent::tearDown();
	}

}
