<?= $this->Html->css('list_category.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Danh mục sách</span>
        <a class="add-content" href=<?= $this->Url->build(['controller'=>'Categories','action'=>'add']) ?>>Thêm danh mục</a>
    </div>
</div>

<section class="static about-sec">
    <div class="container">
        <?= $this->Flash->render() ?>
        <table class="table table-striped list-user">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($categories as $category):
                ?>
                <tr>
                    <th scope="row"><?php echo $category->id ?></th>
                    <td><?php echo $category->name ?></td>
                    <td class="number-borrow"><span><?php echo $category->total_book ?></span></td>
                    <td><?php echo $category->description ?></td>
                    <td>
                        <?php echo $this->Form->postLink('Xóa',['action'=>'delete',$category->id],['class'=>'btn-action btn-delete','confirm'=>'Bạn có chắc chắn']) ?>
                        <?php echo $this->Html->Link('Sửa',['action'=>'edit',$category->id],['class'=>'btn-action btn-edit']) ?>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
</section>

