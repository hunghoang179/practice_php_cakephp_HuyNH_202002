<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Lấy lại mật khẩu</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Lấy lại mật khẩu</h1>
        <p>Nhập vào địa chỉ Email đã đăng ký tài khoản của bạn. </p>
        <?= $this->Flash->render() ?>
        <div class="form">
            <?= $this->Form->create() ?>
                <div class="row">
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ email: <span class="required-label-star">*</span></label>
                        <input type="email" placeholder="Nhập email của bạn" name="email" required>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Tiếp tục</button>
                        <h5><a href=<?= $this->Url->build(['controller'=>'users','action'=>'login']) ?>>Đăng nhập</a></h5>
                    </div>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>
