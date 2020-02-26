<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Cập nhật thông tin</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Cập nhật thông tin</h1>
        <p>Nhập lại các thông tin mà bạn muốn thay đổi. </p>
        <div class="form">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ email: <span class="required-label-star">*</span></label>
                        <input type="email" placeholder="Nhập email của bạn" required readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Tên đầy đủ: <span class="required-label-star">*</span></label>
                        <input type="text" placeholder="Nhập tên" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Số điện thoại: <span class="required-label-star">*</span></label>
                        <input type="text" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Mật khẩu: <span class="required-label-star">*</span></label>
                        <input type="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Địa chỉ: <span class="required-label-star">*</span></label>
                        <input type="text" placeholder="Nhập địa chỉ" required>
                    </div>
                    <div class="col-md-6">
                        <label class="label-form">Xác nhận mật khẩu: <span class="required-label-star">*</span></label>
                        <input type="password" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
