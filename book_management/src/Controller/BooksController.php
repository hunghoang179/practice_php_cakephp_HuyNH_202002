<?php

namespace App\Controller;
use Cake\Event\EventInterface;


class BooksController extends AppController{
    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout('master');
    }

    public function detail(){
//        exit("homes");
    }
}
