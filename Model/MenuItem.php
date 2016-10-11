<?php

App::uses('MenuManagerAppModel', 'MenuManager.Model');

/**
 * MenuItem Model
 *
 * @property MenuItem $ParentMenuItem
 * @property Menu $Menu
 * @property MenuItem $ChildMenuItem
 */
class MenuItem extends MenuManagerAppModel {

    /**
     * Behaviors
     *
     * @var array
     */
    public $actsAs = array(
        'Tree' => array(
            'level' => 'level', // Defaults to null, i.e. no level saving
        )
    );

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'menu_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'ParentMenuItem' => array(
            'className' => 'MenuManager.MenuItem',
            'foreignKey' => 'parent_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Menu' => array(
            'className' => 'MenuManager.Menu',
            'foreignKey' => 'menu_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'ChildMenuItem' => array(
            'className' => 'MenuManager.MenuItem',
            'foreignKey' => 'parent_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    //get menu items in threaded
    public function getMenuItems($menu_id = null) {

        $results = array();
        $this->Menu->id = $menu_id;
        if ($this->Menu->exists()) {
            $results = $this->find('threaded', array('conditions' => array('MenuItem.menu_id' => $menu_id),'recursive'=>1));
        }
        return $results;
    }

}
