<?php

namespace App\Controller;
use Cake\Event\EventInterface;


class CategoriesController extends AppController{
    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout('master');
    }

    public function listCategory(){

    }

    public function add(){

    }
}
