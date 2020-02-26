<?= $this->Html->css('login.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Xác thực Email</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <p>Vui lòng xác thực email để có thể đăng nhập. Gửi lại link xác thực: <a href=<?= $this->Url->build(['controller'=>'users','action'=>'reSendMail']) ?>>Gửi lại</a></p>
    </div>
</section>
