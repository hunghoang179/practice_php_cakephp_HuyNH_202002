<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @property \App\Model\Table\CommentsTable&\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\HasMany $Orders
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BooksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('books');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comments', [
            'foreignKey' => 'book_id',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'book_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 191)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('category')
            ->requirePresence('category', 'create')
            ->notEmptyString('category');

        $validator
            ->scalar('iamge')
            ->maxLength('iamge', 191)
            ->allowEmptyString('iamge');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmptyString('content');

        $validator
            ->integer('pages')
            ->requirePresence('pages', 'create')
            ->notEmptyString('pages');

        $validator
            ->scalar('author')
            ->maxLength('author', 100)
            ->requirePresence('author', 'create')
            ->notEmptyString('author');

        $validator
            ->scalar('publisher')
            ->maxLength('publisher', 100)
            ->requirePresence('publisher', 'create')
            ->notEmptyString('publisher');

        $validator
            ->date('publish_date')
            ->requirePresence('publish_date', 'create')
            ->notEmptyDate('publish_date');

        $validator
            ->integer('highlights')
            ->requirePresence('highlights', 'create')
            ->notEmptyString('highlights');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }

    public function validationAdd(Validator $validator): Validator
    {
        $validator
            ->scalar('name', 'Lỗi tên sách.')
            ->maxLength('name', 191,'Tên sách quá dài')
            ->requirePresence('name', 'create','Tên sách cần phải có')
            ->notEmptyString('name','Tên sách không thể để trống.');

        $validator
            ->integer('category','Lỗi danh mục.')
            ->requirePresence('category', 'create','Danh mục cần phải có.')
            ->notEmptyString('category','Danh mục không thể để trống.');

        $validator
            ->scalar('iamge','Lỗi ảnh đại diện,')
            ->maxLength('iamge', 191,'Ảnh đại diện quá dài.')
            ->allowEmptyString('iamge','Ảnh đại diện không thể để trống.');

        $validator
            ->scalar('content','Lỗi nội dung.')
            ->requirePresence('content', 'create','Nội dung cần phải có.')
            ->notEmptyString('content','Nội dung không thể để trống.');

        $validator
            ->integer('pages','Số trang phải là số.')
            ->requirePresence('pages', 'create','Số trang cần phải có.')
            ->notEmptyString('pages','Số trang không thể để trống.');

        $validator
            ->scalar('author','Lỗi tác giả.')
            ->maxLength('author', 100,'Tác giả quá dài.')
            ->requirePresence('author', 'create','Tác giả cần phải có.')
            ->notEmptyString('author','Tác giả không thể để trống.');

        $validator
            ->scalar('publisher','Lỗi nhà xuất bản.')
            ->maxLength('publisher', 100,'Nhà xuất bản quá dài.')
            ->requirePresence('publisher', 'create','Nhà xuất bản cần phải có.')
            ->notEmptyString('publisher','Nhà xuất bản không thể để trống');

        $validator
            ->date('publish_date',['ymd'],'Ngày xuất bản không đúng định dạng')
            ->requirePresence('publish_date', 'create','Ngày xuất bản cần phải có.')
            ->notEmptyDate('publish_date','Ngày xuất bản không thể để trống.');

        return $validator;
    }
}
