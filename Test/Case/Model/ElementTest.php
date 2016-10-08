<?php
App::uses('Element', 'MenuManager.Model');

/**
 * Element Test Case
 */
class ElementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.menu_manager.element',
		'plugin.menu_manager.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Element = ClassRegistry::init('MenuManager.Element');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Element);

		parent::tearDown();
	}

}
