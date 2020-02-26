<?php

namespace App\Controller;

use Cake\Mailer\TransportFactory;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Mailer;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;

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
                    if($user['status']===0){
                        return $this->redirect(['controller' => 'Users', 'action' => 'notVerified']);
                    }else{
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                }else{
                    $this->Flash->error(__('Tên đăng nhập hoặc mật khẩu không chính xác'));
                }
            }else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }

    public function notVerified(){
        $this->viewBuilder()->setLayout('master');
    }

    public function home(){
        $this->viewBuilder()->setLayout('master');
    }


    public function register(){
        $this->viewBuilder()->setLayout('master');
        if($this->request->is('post')){
            $errors = $this->Users->newEntity($this->request->getData(), ['validate' => 'Register']);
            if($errors->hasErrors()!==true){
                $email=$this->request->getData('email');
                $total_name=$this->request->getData('total_name');
                $password=$this->request->getData('password');
                $password_confirm=$this->request->getData('password_confirm');
                $my_pass=Security::hash($password,'md5',false);
                $phone=$this->request->getData('phone');
                $address=$this->request->getData('address');
                if($password_confirm!==$password){
                    $this->Flash->error(__('Xác nhận mật khẩu phải giống với mật khẩu.'));
                }else{
                    $user = $this->Users->newEmptyEntity();
                    $user->email=$email;
                    $user->total_name=$total_name;
                    $user->password=$my_pass;
                    $user->phone=$phone;
                    $user->address=$address;
                    $user->number_borrowed_books=0;
                    $user->role=1;
                    $user->wallet=0;
                    $user->status=0;
                    if ($this->Users->save($user)) {
                        $user_id=$user->id;
                        $this->Flash->success(__('Đăng ký thành công! Email xác nhận đã được gửi đến địa chỉ Email của bạn.'));
                        $mailer = new Mailer();
                        $mailer
                            ->setEmailFormat('html')
                            ->setTo($email)
                            ->setSubject('Xác thực email')
                            ->setFrom('huynguyenhuubk2.02.3@gmail.com')
                            ->deliver('Xin chào <strong>'.$total_name.'</strong><br/>Ấn vào link dưới đây để xác thực email của bạn.<br/><a href="http://book_management.com/verified/'.$user_id.'">Xác nhận</a>');

                    }else{
                        $this->Flash->error(__('Đăng ký thất bại! Vui lòng thử lại.'));
                    }
                }
            }else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }

    public function reSendMail(){
        $this->viewBuilder()->setLayout('master');
        $userId = $this->Auth->user('id');
        $email = $this->Auth->user('email');
        $total_name=$this->Auth->user('total_name');
        $mailer = new Mailer();
        $mailer
            ->setEmailFormat('html')
            ->setTo($email)
            ->setSubject('Xác thực email')
            ->setFrom('huynguyenhuubk2.02.3@gmail.com')
            ->deliver('Xin chào <strong>'.$total_name.'</strong><br/>Ấn vào link dưới đây để xác thực email của bạn.<br/><a href="http://book_management.com/verified/'.$userId.'">Xác nhận</a>');
    }


    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function verified(){
        $this->viewBuilder()->setLayout('master');
        $id=$this->request->getParam('id');
        $articles = TableRegistry::getTableLocator()->get('Users');
        $user = $articles->find()
            ->where(['id' => $id])
            ->first();
        $user->status=1;
        $this->Users->save($user);
    }
}
