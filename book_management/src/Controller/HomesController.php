<?php

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

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

    public function about(){

    }

    public function faq(){

    }

    public function resetPassword(){

    }

    public function notificationResetPassword(){

    }

    public function updateUser(){

    }


    public function listUser(){
        $articles = TableRegistry::getTableLocator()->get('Users');
        $query = $articles->find('all')
        ->order('Users.id ASC');
//        dd($this->paginate($query,['limit'=>5]));
        $this->set('users',$this->paginate($query,['limit'=>5]));
    }

    public function listBorrow(){

    }
}
