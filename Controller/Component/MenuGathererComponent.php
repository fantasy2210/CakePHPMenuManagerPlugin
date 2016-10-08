<?php

App::uses('Component', 'Controller');


class MenuGathererComponent extends Component {

    protected $_controller;
    //
    protected $_model;
    //
    protected $_menu = array();
    

    /**
     * Initialize component
     *
     * @param Controller $controller Instantiating controller
     * @return void
     */
    public function initialize(Controller $controller) {
        parent::initialize($controller);
        $this->_controller = $controller;

        $this->_model = $this->_controller->{$this->_controller->modelClass};
    }

    /**
     * MenuGathererComponent::get()
     *
     * @param string $menu Menu
     * @return array Menu data
     */
    public function get($menu = null) {
        if ($menu === null) {
            return $this->_menu;
        }

        return $this->_menu[$menu];
    }

    /**
     * Add an item to a menu at the specified position
     *
     * @param string $menu Menu
     * @param array $item Item
     * @param int $index Index
     * @return void
     */
    public function item($menu, $item = array(), $index = null) {
        $this->_checkMenu($menu);

        if ($index === null) {
            $this->_menu[$menu][] = $item;
            return;
        }

        $this->_menu = array_splice($this->_menu, $index, 0, $item);
    }

    /**
     * MenuGathererComponent::menu()
     *
     * @param mixed $name Name
     * @param mixed $menu Menu
     * @return void
     */
    public function menu($name, $menu = array()) {
        if (is_array($name)) {
            foreach ($name as $key => $val) {
                $this->setMenu($key, $val);
            }
            return;
        }

        $this->_menu[$name] = $menu;
    }

    /**
     * MenuGathererComponent::set()
     *
     * @param mixed $menu Menu
     * @return void
     */
    public function set($menu = array()) {
        $this->_menu = (array) $menu;
    }

    /**
     * MenuGathererComponent::_checkMenu()
     *
     * @param mixed $name Name
     * @return void
     */
    protected function _checkMenu($name) {
        if (is_array($name)) {
            foreach ($name as $val) {
                $this->_checkMenu($val);
            }

            return;
        }

        if (!isset($this->_menu[$name])) {
            $this->set($name);
        }
    }

    public function render($menu_id) {
        try {
            $menuItems = $this->_model->getMenuItems($menu_id);
        } catch (Exception $e) {
            debug($e->getMessage());
        }
        $data = array();
        foreach ($menuItems as $item) {
            $children = $item['ChildMenuItem'];
            $node = array(
                'title' => $item['MenuItem']['name'],
                'alias' => $item['MenuItem']['alias'],
                'parent_id' => $item['ParentMenuItem']['id'],
                'lft' => $item['MenuItem']['lft'],
                'rght' => $item['MenuItem']['rght'],
                'menu_id' => $item['MenuItem']['menu_id'],
                'separator' => $item['MenuItem']['separator'],
                'url' => $item['MenuItem']['url'],
                'ulId' => $item['MenuItem']['ulId'],
                'partialMatch' => $item['MenuItem']['partialMatch'],
                'permissions' => $item['MenuItem']['permissions'],
                'class' => $item['MenuItem']['class'],
                'iconTag' => $item['MenuItem']['iconTag'],
                'level' => $item['MenuItem']['level'],
                'iconShowChildrenTag' => $item['MenuItem']['iconShowChildrenTag'],
                'aTagOtherAttibutes' => $item['MenuItem']['aTagOtherAttibutes'],
                'id' => $item['MenuItem']['id']);
            foreach ($children as $child) {
                $node['children'][] = array(
                    'title' => $child['name'],
                    'url' => $child['url']
                );
            }
            $data[] = $node;
        }
        $menu = array("{$menu_id}" => $data);
        return array($menu_id, $menu);
    }

}
