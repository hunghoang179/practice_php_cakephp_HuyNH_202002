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
            <tr>
                <th scope="row">1</th>
                <td>Sức khỏe</td>
                <td class="number-borrow"><span>5</span></td>
                <td>Sách có nội dung về các vấn đề sức khỏe của con người.</td>
                <td><button class="btn-action btn-delete">Xóa</button><button class="btn-action btn-edit">Sửa</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Sức khỏe</td>
                <td class="number-borrow"><span>5</span></td>
                <td>Sách có nội dung về các vấn đề sức khỏe của con người.</td>
                <td><button class="btn-action btn-delete">Xóa</button><button class="btn-action btn-edit">Sửa</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Sức khỏe</td>
                <td class="number-borrow"><span>5</span></td>
                <td>Sách có nội dung về các vấn đề sức khỏe của con người.</td>
                <td><button class="btn-action btn-delete">Xóa</button><button class="btn-action btn-edit">Sửa</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

