<?php
App::uses('MenuItem', 'MenuManager.Model');

/**
 * MenuItem Test Case
 */
class MenuItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.menu_manager.menu_item',
		'plugin.menu_manager.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MenuItem = ClassRegistry::init('MenuManager.MenuItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuItem);

		parent::tearDown();
	}

}
