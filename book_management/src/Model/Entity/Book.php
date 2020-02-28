<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string $name
 * @property int $category
 * @property string|null $iamge
 * @property string $content
 * @property int $pages
 * @property string $author
 * @property string $publisher
 * @property \Cake\I18n\FrozenDate $publish_date
 * @property int $highlights
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Order[] $orders
 */
class Book extends Entity
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
        'name' => true,
        'category' => true,
        'iamge' => true,
        'content' => true,
        'pages' => true,
        'author' => true,
        'publisher' => true,
        'publish_date' => true,
        'highlights' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'comments' => true,
        'orders' => true,
    ];
}
