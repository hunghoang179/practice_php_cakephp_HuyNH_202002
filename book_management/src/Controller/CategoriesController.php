<?php

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;


class CategoriesController extends AppController{
    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout('master');
    }

    public function listCategory(){
        $articles_cate = TableRegistry::getTableLocator()->get('Categories');
        $categories=$articles_cate->find('all');
        $this->set('categories',$categories);
    }

    public function add(){
        if ($this->request->is('post')){
            $errors = $this->Categories->newEntity($this->request->getData(), ['validate' => 'Add']);
            if ($errors->hasErrors()!==true){
                $category = $this->Categories->newEmptyEntity();
                $category->name=$this->request->getData('name');
                $category->description=$this->request->getData('description');
                $category->total_book=0;
                if ($this->Categories->save($category)){
                    $this->Flash->success('Tạo danh mục sách '.$category->name.' thành công.');
                }else{
                    $this->Flash->error('Tạo danh mục sách thất bại.');
                }
            }else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }

    public function delete($id){
        $this->request->allowMethod(['post','delete']);
        $cate=$this->Categories->get($id);
        $this->Categories->delete($cate);
        return $this->redirect(['controller' => 'Categories', 'action' => 'listCategory']);
    }

    public function edit($id){
        $cate=$this->Categories->get($id);
        $this->set('category',$cate);
        if ($this->request->is('post')){
            $errors = $this->Categories->newEntity($this->request->getData(), ['validate' => 'Add']);
            if ($errors->hasErrors()!==true){
                $cate->name=$this->request->getData('name');
                $cate->description=$this->request->getData('description');
                if ($this->Categories->save($cate)){
                    $this->Flash->success('Đã sửa danh mục sách '.$cate->name.' thành công.');
                    return $this->redirect(['controller' => 'Categories', 'action' => 'listCategory']);
                }else{
                    $this->Flash->error('Sửa danh mục sách thất bại.');
                }
            }else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }
}
