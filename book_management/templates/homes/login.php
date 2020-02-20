<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Đăng nhập</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài khoản của tôi / Đăng nhập</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
        <div class="form">
            <form>
                <div class="row">
                    <div class="col-md-5">
                        <input placeholder="Enter User Name" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="col-md-5">
                        <input type="email" placeholder="Enter Email Address" required>
                        <span class="required-star">*</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Đăng nhập</button>
                        <h5>Nếu chưa đăng ký? <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'register']) ?>>Đăng ký ở đây</a></h5>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
