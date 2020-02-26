<?php

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Validation\Validator;
use App\Model\Table\UsersTable;

class UsersController extends AppController{
//    public function beforeFilter(EventInterface $event){
//        $this->viewBuilder()->setLayout('master');
//    }
    public function login(){
        $this->viewBuilder()->setLayout('master');
        if($this->request->is('post')){
            $errors = $this->Users->newEntity($this->request->getData(), ['validate' => 'Login']);
            if($errors->hasErrors()!==true){
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Flash->error(__('Tên đăng nhập hoặc mật khẩu không chính xác'));
            }else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }

    public function home(){
        $this->viewBuilder()->setLayout('master');
//        exit("homes");
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
}
