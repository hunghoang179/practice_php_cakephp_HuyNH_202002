<?= $this->Html->css('login.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Đăng nhập</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <p>Bạn đã xác thực Email thành công. Đăng nhập ở đây <a href=<?= $this->Url->build(['controller'=>'users','action'=>'login']) ?>>Đăng nhập</a></p>
    </div>
</section>
