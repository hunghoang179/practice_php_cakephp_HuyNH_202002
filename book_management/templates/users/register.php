<?= $this->Html->css('register.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Đăng ký</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Đăng ký</h1>
        <p>Nhập thông tin dưới đây để đăng tý tài khoản. </p>
        <?= $this->Flash->render() ?>
        <div class="form">
            <?= $this->Form->create() ?>
                <div class="row">
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ email: <span class="required-label-star">*</span></label>
                        <input type="email" name="email" placeholder="Nhập email của bạn" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Tên đầy đủ: <span class="required-label-star">*</span></label>
                        <input type="text" name="total_name" placeholder="Nhập tên" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Mật khẩu: <span class="required-label-star">*</span></label>
                        <input type="password" name="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Số điện thoại: <span class="required-label-star">*</span></label>
                        <input type="text" name="phone" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Xác nhận mật khẩu: <span class="required-label-star">*</span></label>
                        <input type="password" name="password_confirm" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ: <span class="required-label-star">*</span></label>
                        <input type="text" name="address" placeholder="Nhập địa chỉ" required>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Đăng ký</button>
                        <h5><a href=<?= $this->Url->build(['controller'=>'users','action'=>'login']) ?>>Đăng nhập</a></h5>
                    </div>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>
