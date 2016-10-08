<?php

App::uses('MenuManagerAppController', 'MenuManager.Controller');

/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends MenuManagerAppController {

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
//$conditions = Set::merge($conditions, array('Menu.fieldName' => $value));
        }
        $settings = array('conditions' => $conditions, 'contain' => $contain, 'order' => $order);
        $this->Paginator->settings = $settings;

        $this->set('menus', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
        $this->set('menu', $this->Menu->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Menu->create();
            if ($this->Menu->save($this->request->data)) {
                $this->Flash->success(__('The menu has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Menu->id = $id;
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Menu->save($this->request->data)) {
                $this->Flash->success(__('The menu has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The menu could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
            $this->request->data = $this->Menu->find('first', $options);
        }
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
                if ($this->Menu->deleteAll(array('Menu.id' => $requestDeleteId))) {
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
        $this->Menu->id = $id;
        if (!$this->Menu->exists()) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->Menu->delete()) {
            $this->Flash->success(__('Menu deleted'));
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Flash->error(__('Menu was not deleted'));
            $this->redirect(array('action' => 'index'));
        }
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $conditions = array();
        $contain = array();
        $order = array();
        if (!empty($this->request->data)) {
//$conditions = Set::merge($conditions, array('Menu.fieldName' => $value));
        }
        $settings = array('conditions' => $conditions, 'contain' => $contain, 'order' => $order);
        $this->Paginator->settings = $settings;

        $this->set('menus', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
        $this->set('menu', $this->Menu->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Menu->create();
            if ($this->Menu->save($this->request->data)) {
                $this->Flash->success(__('The menu has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Menu->id = $id;
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Menu->save($this->request->data)) {
                $this->Flash->success(__('The menu has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The menu could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
            $this->request->data = $this->Menu->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            if (!empty($this->request->data)) {
                $requestDeleteId = Set::classicExtract($this->request->data['selectedRecord'], '{n}.value');
                if ($this->Menu->deleteAll(array('Menu.id' => $requestDeleteId))) {
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
        $this->Menu->id = $id;
        if (!$this->Menu->exists()) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->Menu->delete()) {
            $this->Flash->success(__('Menu deleted'));
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Flash->error(__('Menu was not deleted'));
            $this->redirect(array('action' => 'index'));
        }
    }

}
