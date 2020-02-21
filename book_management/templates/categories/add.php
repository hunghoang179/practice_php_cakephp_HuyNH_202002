<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Thêm danh mục</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <p>Nhập thông tin dưới đây để tạo mới danh mục sách. </p>
        <div class="form">
            <form>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <label class="label-form">Tên danh mục: <span class="required-label-star">*</span></label>
                        <input type="text" placeholder="Nhập tên danh mục" required>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <label class="label-form">Mô tả: <span class="required-label-star">*</span></label>
                        <input placeholder="Mô tả danh mục" required>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Tạo danh mục</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

