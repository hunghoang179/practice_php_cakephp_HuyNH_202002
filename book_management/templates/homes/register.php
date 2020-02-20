<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Đăng ký</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Đăng ký</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
        <div class="form">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <input placeholder="Enter User Name" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="col-md-4">
                        <input type="email" placeholder="Password" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="col-md-4">
                        <input type="email" placeholder="Repeat Password" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Đăng ký</button>
                        <h5><a href=<?= $this->Url->build(['controller'=>'homes','action'=>'login']) ?>>Đăng nhập</a></h5>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
