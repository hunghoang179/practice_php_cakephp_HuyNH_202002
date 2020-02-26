<?= $this->Html->css('login.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Xác thực Email</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <p>Link xác thực email đã được gửi đến email của bạn. Vui lòng kiểm tra và xác thực email.</p>
    </div>
</section>
