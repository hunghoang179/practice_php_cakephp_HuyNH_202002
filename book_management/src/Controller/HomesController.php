<?php

namespace App\Controller;
use Cake\Event\EventInterface;

class HomesController extends AppController{
    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout('master');
    }

    public function home(){
//        exit("homes");
    }

    public function book(){

    }

    public function login(){

    }

    public function register(){

    }

    public function about(){

    }

    public function faq(){

    }
}
