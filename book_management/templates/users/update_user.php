<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Cập nhật thông tin</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Thông tin cá nhân</h1>
        <p>Nhập lại các thông tin mà bạn muốn thay đổi. </p>
        <?= $this->Flash->render() ?>
        <div class="form">
            <?= $this->Form->create() ?>
                <div class="row">
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ email: <span class="required-label-star">*</span></label>
                        <input type="email" placeholder="Nhập email của bạn" value="<?php echo $user['email'] ?>" name="email">
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Tên đầy đủ: <span class="required-label-star">*</span></label>
                        <input type="text" placeholder="Nhập tên" value="<?php echo $user['total_name'] ?>" name="total_name">
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Mật khẩu: <span class="required-label-star">*</span></label>
                        <input type="password" placeholder="Nhập mật khẩu" name="password">
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Số điện thoại: <span class="required-label-star">*</span></label>
                        <input type="text" placeholder="Nhập số điện thoại" name="phone" value="<?php echo $user['phone'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Mật khẩu mới: <span class="required-label-star">*</span></label>
                        <input type="password" placeholder="Nhập lại mật khẩu" name="new_password">
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ: <span class="required-label-star">*</span></label>
                        <input type="text" placeholder="Nhập địa chỉ" name="address" value="<?php echo $user['address'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Xác nhận mật khẩu: <span class="required-label-star">*</span></label>
                        <input type="password" placeholder="Nhập lại mật khẩu" name="password_confirm">
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Cập nhật</button>
                    </div>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>
