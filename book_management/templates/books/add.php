<?= $this->Html->css('book_add.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Thêm sách</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <p>Nhập thông tin dưới đây để tạo mới sách. </p>
        <div class="form">
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label-form">Danh mục: <span class="required-label-star">*</span></label>
                            <select>
                                <option selected>Chọn danh mục</option>
                                <option>Giáo dục</option>
                                <option>Sức khỏe</option>
                                <option>Nấu ăn</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Tên sách: <span class="required-label-star">*</span></label>
                            <input placeholder="Nhập tên sách" required>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Nội dung: <span class="required-label-star">*</span></label>
                            <input placeholder="Nhập nội dung sách" required>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Nhà xuất bản: <span class="required-label-star">*</span></label>
                            <input placeholder="Nhập nhà xuất bản" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label-form">Tác giả: <span class="required-label-star">*</span></label>
                            <input placeholder="Nhập tác giả" required>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Ngày xuất bản: <span class="required-label-star">*</span></label>
                            <input placeholder="Nhận ngày xuất bản" required>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Ảnh đại diện: <span class="required-label-star">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
<!--                                                    <input type="file" placeholder="Chọn ảnh đại diện cho sách" required>-->
                            <!--                        <input type="file" class="form-control-file" id="exampleFormControlFile1">-->
<!--                            <img src="https://i.pinimg.com/236x/8c/76/84/8c7684a537cb68910ae1eadaea4d1303.jpg">-->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Tạo sách</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


