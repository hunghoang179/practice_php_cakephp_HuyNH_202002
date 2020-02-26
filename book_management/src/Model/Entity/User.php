<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $total_name
 * @property string $phone
 * @property string $address
 * @property int $number_borrowed_books
 * @property int $role
 * @property float $wallet
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Order[] $orders
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'total_name' => true,
        'phone' => true,
        'address' => true,
        'number_borrowed_books' => true,
        'role' => true,
        'wallet' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'comments' => true,
        'orders' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    public static $convert_to_status=array(
        1=>'Hoạt động',
        0=>'Chưa xác thực',
        2=>'Khóa'
    );
}
