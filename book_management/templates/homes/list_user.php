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
            <?php
            foreach ($users as $user):
            ?>
            <tr>
                <th scope="row"><?php echo $user->id ?></th>
                <td><?php echo $user->total_name ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->phone ?></td>
                <td><?php echo $user->password ?></td>
                <td><?php echo $user->address ?></td>
                <td class="number-borrow"><span><?php echo $user->number_borrowed_books ?></span></td>
                <td><span><?php if ($user->status===0) echo "Chưa xác thực";
                        elseif ($user->status===1) echo "Hoạt động";
                        else echo "Khóa";?></span></td>
                <td><button class="btn-action btn-delete">Xóa</button><button class="btn-action btn-edit">Sửa</button></td>
            </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            <?= $this->Paginator->prev("<<") ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(">>") ?>
            </ul>
        </nav>
</section>
