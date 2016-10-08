<?php

App::uses('AppController', 'Controller');

class MenuManagerAppController extends AppController {

    public function beforeRender() {
        parent::beforeRender();
        if ($this->request->is('ajax')) {
            $this->layout='ajax';
            $this->viewPath.='/ajax';
        }
    }

}
