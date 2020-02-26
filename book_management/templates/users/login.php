<?= $this->Html->css('login.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Đăng nhập</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Đăng nhập</h1>
        <p>Vui lòng nhập địa chỉ email và mật khẩu của bạn để đăng nhập vào hệ thống. </p>
        <?= $this->Flash->render() ?>

        <div class="form">
            <?= $this->Form->create() ?>
<!--            <form>-->
                <div class="row">
                    <div class="col-md-5">
                        <input type="email" placeholder="Nhập địa chỉ email" name="email">
                        <span class="required-star">*</span>
                    </div>
                    <div class="col-md-5">
                        <input type="password" placeholder="Nhập mật khẩu" name="password">
                        <span class="required-star">*</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button type="submit" class="btn black">Đăng nhập</button>
                        <h5><a href=<?= $this->Url->build(['controller'=>'homes','action'=>'register']) ?>>Đăng ký</a> <span class="space">|</span> <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'resetPassword']) ?>>Quên mật khẩu</a></h5>
                    </div>
                </div>
            <?= $this->Form->end() ?>
<!--            </form>-->
        </div>
    </div>
</section>
