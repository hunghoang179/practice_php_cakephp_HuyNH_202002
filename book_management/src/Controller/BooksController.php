<?php

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;


class BooksController extends AppController{
    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout('master');
    }

    public function detail(){
        $id=$this->request->getParam('id');
        $articles = TableRegistry::getTableLocator()->get('Books');
        $book = $articles->find()
            ->where(['id' => $id])
            ->first();
        $book_likes=$articles->find()
            ->where(['category' => $book->category])
            ->where(['id !=' => $id])
            ->limit(4);
        $this->set(['book'=>$book,'book_likes'=>$book_likes]);
    }

    public function add(){
        $articles_cate = TableRegistry::getTableLocator()->get('Categories');
        $categories=$articles_cate->find('all');
        $this->set('categories',$categories);
        if ($this->request->is('post')){
            $errors = $this->Books->newEntity($this->request->getData(), ['validate' => 'Add']);
            if ($errors->hasErrors()!==true){
                $book= $this->Books->newEmptyEntity();
                $category=$this->request->getData('category');
                $name=$this->request->getData('name');
                $content=$this->request->getData('content');
                $publisher=$this->request->getData('publisher');
                $author=$this->request->getData('author');
                $publish_date=$this->request->getData('publish_date');
                $pages=$this->request->getData('pages');
                $book->name=$name;
                $book->category=$category;
                $book->content=$content;
                $book->pages=$pages;
                $book->author=$author;
                $book->publisher=$publisher;
                $book->publish_date=$publish_date;
                $book->highlights=0;
                $book->status=0;

                $file=$this->request->getData('image');
                $file_name=$file->getClientFileName();
                $book->iamge=$file_name.'.jpg';
                $is_save=$this->Books->save($book);
                if ($is_save){
                    $file->moveTo(WWW_ROOT . 'book/images/'.$book->id.'.jpg');
                    $this->Flash->success('Sách '.$name.' đã được tạo thành công.');
                }else{
                    $this->Flash->error('Thêm mới sách thất bại.');
                }
            }else{
                $errors_arr=$errors->getErrors();
                $error=reset($errors_arr);
                $error_first=reset($error);
                $this->Flash->error($error_first);
            }
        }
    }

    public function list(){
        $articles = TableRegistry::getTableLocator()->get('Books');
        $books_high=$articles->find()
            ->where(['highlights' => 1])
            ->order('Books.id DESC');
        $books=$articles->find()
            ->where(['highlights' => 0])
            ->order('Books.id DESC');
        $this->set(['books'=>$books,'books_highs'=>$books_high]);
    }
}
