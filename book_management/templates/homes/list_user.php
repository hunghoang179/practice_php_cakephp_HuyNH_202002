<?= $this->Html->css('list_user.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Danh sách tài khoản</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <table class="table table-striped list-user">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Sách mượn</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>maddhhđ@gmail.com</td>
                <td>0965236584</td>
                <td>âfsfsđbshhhhhhhhhcbcbbss</td>
                <td>Hoàn kiếm - Hà nội</td>
                <td class="number-borrow"><span>5</span></td>
                <td><span>Hoạt động</span></td>
                <td><button class="btn-action btn-delete">Xóa</button><button class="btn-action btn-edit">Sửa</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>maddhhđ@gmail.com</td>
                <td>0965236584</td>
                <td>âfsfsđbshhhhhhhhhcbcbbss</td>
                <td>Hoàn kiếm - Hà nội</td>
                <td class="number-borrow"><span>5</span></td>
                <td><span>Hoạt động</span></td>
                <td><button class="btn-action btn-delete">Xóa</button><button class="btn-action btn-edit">Sửa</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>maddhhđ@gmail.com</td>
                <td>0965236584</td>
                <td>âfsfsđbshhhhhhhhhcbcbbss</td>
                <td>Hoàn kiếm - Hà nội</td>
                <td class="number-borrow"><span>5</span></td>
                <td><span>Hoạt động</span></td>
                <td><button class="btn-action btn-delete">Xóa</button><button class="btn-action btn-edit">Sửa</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
