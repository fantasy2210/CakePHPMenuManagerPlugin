<?php

App::uses('MenuManagerAppController', 'MenuManager.Controller');

/**
 * MenuItems Controller
 *
 * @property MenuItem $MenuItem
 * @property PaginatorComponent $Paginator
 */
class MenuItemsController extends MenuManagerAppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $conditions = array();
        $contain = array();
        $order = array();
        if (!empty($this->request->data)) {
            //$conditions = Set::merge($conditions, array('MenuItem.fieldName' => $value));
        }
        $settings = array('conditions' => $conditions, 'contain' => $contain, 'order' => $order);
        $this->Paginator->settings = $settings;

        $this->set('menuItems', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->MenuItem->exists($id)) {
            throw new NotFoundException(__('Invalid menu item'));
        }
        $options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
        $this->set('menuItem', $this->MenuItem->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->MenuItem->create();
            if ($this->MenuItem->save($this->request->data)) {
                $this->Flash->success(__('The menu item has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->Flash->error(__('The menu item could not be saved. Please, try again.'));
            }
        }
        $this->MenuItem->recover();
        $parentMenuItems = $this->MenuItem->ParentMenuItem->generateTreeList(
                null, null, null, '&nbsp;&nbsp;&nbsp;'
        );

        $menus = $this->MenuItem->Menu->find('list');
        $this->set(compact('parentMenuItems', 'menus'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->MenuItem->id = $id;
        if (!$this->MenuItem->exists($id)) {
            throw new NotFoundException(__('Invalid menu item'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->MenuItem->save($this->request->data)) {
                $this->Flash->success(__('The menu item has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The menu item could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
            $this->request->data = $this->MenuItem->find('first', $options);
        }
        $parentMenuItems = $this->MenuItem->ParentMenuItem->find('list');
        $menus = $this->MenuItem->Menu->find('list');
        $this->set(compact('parentMenuItems', 'menus'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            if (!empty($this->request->data)) {
                $requestDeleteId = Set::classicExtract($this->request->data['selectedRecord'], '{n}.value');
                if ($this->MenuItem->deleteAll(array('MenuItem.id' => $requestDeleteId))) {
                    echo true;
                } else {
                    echo false;
                }
            }
            exit();
        }
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->MenuItem->id = $id;
        if (!$this->MenuItem->exists()) {
            throw new NotFoundException(__('Invalid menu item'));
        }
        if ($this->MenuItem->delete()) {
            $this->Flash->success(__('Menu item deleted'));
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Flash->error(__('Menu item was not deleted'));
            $this->redirect(array('action' => 'index'));
        }
    }

}
