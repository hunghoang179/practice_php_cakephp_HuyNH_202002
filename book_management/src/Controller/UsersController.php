<?php

namespace App\Controller;

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
                $result = $this->Authentication->getResult();
                if ($result->isValid()) {
                    $user=$this->Authentication->getResult()->getData();
                    if($user->status===0){
                        return $this->redirect(['controller' => 'Users', 'action' => 'notVerified']);
                    }else{
                        return $this->redirect(['controller' => 'Users', 'action' => 'home']);
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
                $my_pass=Security::hash($password,'md5',true);
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
        $user=$this->Authentication->getResult()->getData();
        $userId = $user->id;
        $email = $user->email;
        $total_name=$user->total_name;
        $mailer = new Mailer();
        $mailer
            ->setEmailFormat('html')
            ->setTo($email)
            ->setSubject('Xác thực email')
            ->setFrom('huynguyenhuubk2.02.3@gmail.com')
            ->deliver('Xin chào <strong>'.$total_name.'</strong><br/>Ấn vào link dưới đây để xác thực email của bạn.<br/><a href="http://book_management.com/verified/'.$userId.'">Xác nhận</a>');
    }


    public function logout(){
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
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

    public function resetPassword(){
        $this->viewBuilder()->setLayout('master');
        if ($this->request->is('post')){
            $errors = $this->Users->newEntity($this->request->getData(), ['validate' => 'ResetPass']);
            if($errors->hasErrors()!==true){
                $email=$this->request->getData('email');
                $articles = TableRegistry::getTableLocator()->get('Users');
                $user = $articles->find()
                    ->where(['email' => $email])
                    ->first();
                if (isset($user->id)){
                    $total_name=$user->total_name;
                    $newPass=Security::randomString(6);
                    $user->password=Security::hash($newPass,'md5',true);
                    if ($this->Users->save($user)){
                        $mailer = new Mailer();
                        $mailer
                            ->setEmailFormat('html')
                            ->setTo($email)
                            ->setSubject('Reset mật khẩu')
                            ->setFrom('huynguyenhuubk2.02.3@gmail.com')
                            ->deliver('Xin chào <strong>'.$total_name.'</strong><br/>Mật khẩu mới của bạn là: '.$newPass.'<br/>Vui lòng đăng nhập và đổi lại mật khẩu.');
                        return $this->redirect(['controller' => 'Users', 'action' => 'notificationResetPassword']);
                    }else{
                        $this->Flash->error('Reset mật khẩu không thành công! Vui lòng thử lại.');
                    }
                }else{
                    $this->Flash->error('Địa chỉ email không tồn tại.');
                }
            }else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }

    public function notificationResetPassword(){
        $this->viewBuilder()->setLayout('master');
    }


    public function updateUser(){
        $this->viewBuilder()->setLayout('master');

        $user=$this->Authentication->getResult()->getData();
//        dd($user);
        $this->set('user',$user);
        if($this->request->is('post')){
            $newPass=$this->request->getData('new_password');
            $total_name=$this->request->getData('total_name');
            $email=$this->request->getData('email');
            $phone=$this->request->getData('phone');
            $address=$this->request->getData('address');
            $password=$this->request->getData('password');
            $password_en=Security::hash($password,'md5',true);
            $password_confirm=$this->request->getData('password_confirm');
            if ($newPass===null || $newPass===""){
                $errors = $this->Users->newEntity($this->request->getData(), ['validate' => 'UpdateInfoUser']);
                if ($errors->hasErrors()!==true){
                    if($password_en!==$user->password){
                        $this->Flash->error('Mật khẩu không chính xác');
                    }else{
                        $user->total_name=$total_name;
                        $user->phone=$phone;
                        $user->address=$address;
                        if ($email!==$user->email){
                            $articles = TableRegistry::getTableLocator()->get('Users');
                            $new_user = $articles->find()
                                ->where(['email' => $email])
                                ->first();
                            if (isset($new_user->id)){
                                $this->Flash->error('Email đã tồn tại.');
                            }else{
                                $mailer = new Mailer();
                                $mailer
                                    ->setEmailFormat('html')
                                    ->setTo($email)
                                    ->setSubject('Xác thực email')
                                    ->setFrom('huynguyenhuubk2.02.3@gmail.com')
                                    ->deliver('Xin chào <strong>'.$total_name.'</strong><br/>Ấn vào link dưới đây để xác thực email của bạn.<br/><a href="http://book_management.com/verified/'.$user->id.'">Xác nhận</a>');
                                if ($this->Users->save($user)){
                                    $this->Flash->success('Thông tin của bạn đã thay đổi thành công. Vui lòng kiểm tra email và xác nhận để hoàn thành quá trình đổi Email của bạn.');
                                }
                            }
                        }else{
                            if ($this->Users->save($user)){
                                $this->Flash->success('Thông tin của bạn đã thay đổi thành công.');
                            }
                        }
                    }
                }
                else{
                    $errors_arr=$errors->getErrors();
                    $error=reset($errors_arr);
                    $error_first=reset($error);
                    $this->Flash->error($error_first);
                }
            }else{
                $errors = $this->Users->newEntity($this->request->getData(), ['validate' => 'UpdateInfoUserHasPass']);
                if ($errors->hasErrors()!==true){
                    if($password_en!==$user->password){
                    $this->Flash->error('Mật khẩu không chính xác');
                    }else{
                        if ($newPass!==$password_confirm){
                            $this->Flash->error(__('Xác nhận mật khẩu phải giống với mật khẩu.'));
                        }else{
                            $user->total_name=$total_name;
                            $user->phone=$phone;
                            $user->address=$address;
                            $user->password=Security::hash($newPass,'md5',true);
                            if ($email!==$user->email){
                                $articles = TableRegistry::getTableLocator()->get('Users');
                                $new_user = $articles->find()
                                    ->where(['email' => $email])
                                    ->first();
                                if (isset($new_user->id)){
                                    $this->Flash->error('Email đã tồn tại.');
                                }else{
                                    $mailer = new Mailer();
                                    $mailer
                                        ->setEmailFormat('html')
                                        ->setTo($email)
                                        ->setSubject('Xác thực email')
                                        ->setFrom('huynguyenhuubk2.02.3@gmail.com')
                                        ->deliver('Xin chào <strong>'.$total_name.'</strong><br/>Ấn vào link dưới đây để xác thực email của bạn.<br/><a href="http://book_management.com/verified/'.$user->id.'">Xác nhận</a>');
                                    if ($this->Users->save($user)){
                                        $this->Flash->success('Thông tin của bạn đã thay đổi thành công. Vui lòng kiểm tra email và xác nhận để hoàn thành quá trình đổi Email của bạn.');
                                    }
                                }
                            }else{
                                if ($this->Users->save($user)){
                                    $this->Flash->success('Thông tin của bạn đã thay đổi thành công.');
                                }
                            }
                        }
                    }
                }
                else{
                    $errors_arr=$errors->getErrors();
                    $error=reset($errors_arr);
                    $error_first=reset($error);
                    $this->Flash->error($error_first);
                }
            }
//            dd($this->request->getData());
        }
    }

    public function lock(){
        $this->viewBuilder()->setLayout('master');
        $id=$this->request->getParam('id');
        $articles = TableRegistry::getTableLocator()->get('Users');
        $user = $articles->find()
            ->where(['id' => $id])
            ->first();
        $user->status=3;
        if ($this->Users->save($user)){
            $this->Flash->success('Đã khóa tài khoản '.$user->email.' thành công.');
        }else{
            $this->Flash->error('Khóa tài khoản thất bại.');
        }
        return $this->redirect(['controller' => 'Homes', 'action' => 'listUser']);
    }


    public function unLock(){
        $this->viewBuilder()->setLayout('master');
        $id=$this->request->getParam('id');
        $articles = TableRegistry::getTableLocator()->get('Users');
        $user = $articles->find()
            ->where(['id' => $id])
            ->first();
        $user->status=1;
        if ($this->Users->save($user)){
            $this->Flash->success('Đã mở khóa tài khoản '.$user->email.' thành công.');
        }else{
            $this->Flash->error('Mở khóa tài khoản thất bại.');
        }
        return $this->redirect(['controller' => 'Homes', 'action' => 'listUser']);
    }

    public function edit(){
        $this->viewBuilder()->setLayout('master');
        $id=$this->request->getParam('id');
        $articles = TableRegistry::getTableLocator()->get('Users');
        $user = $articles->find()
            ->where(['id' => $id])
            ->first();

        $articles_role = TableRegistry::getTableLocator()->get('Roles');
        $role=$articles_role->find('all');
        $this->set(['user'=>$user,'roles'=>$role]);
        if ($this->request->is('post')){
            $errors = $this->Users->newEntity($this->request->getData(), ['validate' => 'Edit']);
            if ($errors->hasErrors()!==true){
                $total_name=$this->request->getData('total_name');
                $phone=$this->request->getData('phone');
                $address=$this->request->getData('address');
                $password=$this->request->getData('password');
                $password_en=Security::hash($password,'md5',true);
                $role=$this->request->getData('role');
                $user->total_name=$total_name;
                $user->phone=$phone;
                $user->address=$address;
                $user->password=$password_en;
                $user->role=$role;
                if ($this->Users->save($user)){
                    $this->Flash->success('Sửa tài khoản '.$total_name.' thành công.');
                }else{
                    $this->Flash->error('Sửa khóa tài khoản thất bại.');
                }
            }
            else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }
}
