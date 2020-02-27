<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\CommentsTable&\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\HasMany $Orders
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comments', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'user_id',
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('total_name')
            ->maxLength('total_name', 100)
            ->requirePresence('total_name', 'create')
            ->notEmptyString('total_name');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('address')
            ->maxLength('address', 191)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('number_borrowed_books')
            ->requirePresence('number_borrowed_books', 'create')
            ->notEmptyString('number_borrowed_books');

        $validator
            ->integer('role')
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->numeric('wallet')
            ->requirePresence('wallet', 'create')
            ->notEmptyString('wallet');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }

    public function validationRegister(Validator $validator): Validator
    {
        $validator
            ->email('email',false,'Email không đúng định dạng.')
            ->requirePresence('email', 'create','Email cần phải có.')
            ->notEmptyString('email','Email không thể để trống.')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table','message'=>'Địa chỉ Email đã tồn tại.']);

        $validator
            ->scalar('password','Lỗi mật khẩu.')
            ->maxLength('password', 255,'Mật khẩu quá dài.')
            ->requirePresence('password', 'create','Mật khẩu cần phải có.')
            ->notEmptyString('password','Mật khẩu không thể để trống.');

        $validator
            ->scalar('total_name','Lỗi Tên đầy đủ.')
            ->maxLength('total_name', 100, 'Tên quá dài. Vui lòng đặt tên đầy đủ ngắn hơn.')
            ->requirePresence('total_name', 'create', 'Tên đầy đủ cần phải có.')
            ->notEmptyString('total_name','Tên đầy đủ không thể để trống');

        $validator
            ->scalar('phone', 'Lỗi số điện thoại.')
            ->maxLength('phone', 20,'Số điện thoại quá dài.')
            ->minLength('phone', 10,'Số điện thoại quá ngắn.')
            ->requirePresence('phone', 'create','Số điện thoại cần phải có.')
            ->notEmptyString('phone','Số điện thoại không thể để trống.');

        $validator
            ->scalar('address', 'Lỗi địa chỉ.')
            ->maxLength('address', 191,'Địa chỉ quá dài.')
            ->requirePresence('address', 'create','Địa chỉ cần phải có.')
            ->notEmptyString('address','Địa chỉ không thể để trống.');
        return $validator;
    }

    public function validationLogin(Validator $validator): Validator
    {
        $validator
            ->email('email',false,'Email không đúng định dạng')
            ->requirePresence('email', 'create','Email cần phải có')
            ->notEmptyString('email','Email không thể để trống');
        $validator
            ->scalar('password','Lỗi mật khẩu')
            ->maxLength('password', 255,'Mật khẩu quá dài')
            ->requirePresence('password', 'create','Mật khẩu quá ngắn')
            ->notEmptyString('password','Mật khẩu không thể để trống');

        return $validator;
    }

    public function validationResetPass(Validator $validator): Validator
    {
        $validator
            ->email('email',false,'Email không đúng định dạng')
            ->requirePresence('email', 'create','Email cần phải có')
            ->notEmptyString('email','Email không thể để trống');

        return $validator;
    }

    public function validationUpdateInfoUser(Validator $validator): Validator
    {
        $validator
            ->email('email',false,'Email không đúng định dạng.')
            ->requirePresence('email', 'create','Email cần phải có.')
            ->notEmptyString('email','Email không thể để trống.');

        $validator
            ->scalar('password','Lỗi mật khẩu.')
            ->maxLength('password', 255,'Mật khẩu quá dài.')
            ->requirePresence('password', 'create','Mật khẩu cần phải có.')
            ->notEmptyString('password','Mật khẩu không thể để trống.');

        $validator
            ->scalar('total_name','Lỗi Tên đầy đủ.')
            ->maxLength('total_name', 100, 'Tên quá dài. Vui lòng đặt tên đầy đủ ngắn hơn.')
            ->requirePresence('total_name', 'create', 'Tên đầy đủ cần phải có.')
            ->notEmptyString('total_name','Tên đầy đủ không thể để trống');

        $validator
            ->scalar('phone', 'Lỗi số điện thoại.')
            ->maxLength('phone', 20,'Số điện thoại quá dài.')
            ->minLength('phone', 10,'Số điện thoại quá ngắn.')
            ->requirePresence('phone', 'create','Số điện thoại cần phải có.')
            ->notEmptyString('phone','Số điện thoại không thể để trống.');

        $validator
            ->scalar('address', 'Lỗi địa chỉ.')
            ->maxLength('address', 191,'Địa chỉ quá dài.')
            ->requirePresence('address', 'create','Địa chỉ cần phải có.')
            ->notEmptyString('address','Địa chỉ không thể để trống.');
        return $validator;
    }


    public function validationUpdateInfoUserHasPass(Validator $validator): Validator
    {
        $validator
            ->email('email',false,'Email không đúng định dạng.')
            ->requirePresence('email', 'create','Email cần phải có.')
            ->notEmptyString('email','Email không thể để trống.');

        $validator
            ->scalar('new_password','Lỗi mật khẩu.')
            ->maxLength('new_password', 255,'Mật khẩu quá dài.')
            ->requirePresence('new_password', 'create','Mật khẩu cần phải có.')
            ->notEmptyString('new_password','Mật khẩu không thể để trống.');

        $validator
            ->scalar('password','Lỗi mật khẩu.')
            ->maxLength('password', 255,'Mật khẩu quá dài.')
            ->requirePresence('password', 'create','Mật khẩu cần phải có.')
            ->notEmptyString('password','Mật khẩu không thể để trống.');

        $validator
            ->scalar('total_name','Lỗi Tên đầy đủ.')
            ->maxLength('total_name', 100, 'Tên quá dài. Vui lòng đặt tên đầy đủ ngắn hơn.')
            ->requirePresence('total_name', 'create', 'Tên đầy đủ cần phải có.')
            ->notEmptyString('total_name','Tên đầy đủ không thể để trống');

        $validator
            ->scalar('phone', 'Lỗi số điện thoại.')
            ->maxLength('phone', 20,'Số điện thoại quá dài.')
            ->minLength('phone', 10,'Số điện thoại quá ngắn.')
            ->requirePresence('phone', 'create','Số điện thoại cần phải có.')
            ->notEmptyString('phone','Số điện thoại không thể để trống.');

        $validator
            ->scalar('address', 'Lỗi địa chỉ.')
            ->maxLength('address', 191,'Địa chỉ quá dài.')
            ->requirePresence('address', 'create','Địa chỉ cần phải có.')
            ->notEmptyString('address','Địa chỉ không thể để trống.');
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
