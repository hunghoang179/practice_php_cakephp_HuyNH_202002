<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Lấy lại mật khẩu</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Lấy lại mật khẩu</h1>
        <p>Nhập vào địa chỉ Email trong tài khoản muốn lấy lại mật khẩu của bạn. </p>
        <div class="form">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ email: <span class="required-label-star">*</span></label>
                        <input type="email" placeholder="Nhập email của bạn" required>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Tiếp tục</button>
                        <h5><a href=<?= $this->Url->build(['controller'=>'homes','action'=>'login']) ?>>Đăng nhập</a></h5>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
