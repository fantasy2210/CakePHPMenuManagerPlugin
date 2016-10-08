<?php
App::uses('Menu', 'MenuManager.Model');

/**
 * Menu Test Case
 */
class MenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.menu_manager.menu',
		'plugin.menu_manager.menu_setting',
		'plugin.menu_manager.element',
		'plugin.menu_manager.menu_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Menu = ClassRegistry::init('MenuManager.Menu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Menu);

		parent::tearDown();
	}

}
