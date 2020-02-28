<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Sửa danh mục</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <p>Nhập thông tin dưới đây để sửa danh mục sách. </p>
        <?= $this->Flash->render() ?>
        <div class="form">
            <?= $this->Form->create() ?>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <label class="label-form">Tên danh mục: <span class="required-label-star">*</span></label>
                    <input type="text" placeholder="Nhập tên danh mục" name="name" value="<?= $category->name ?>">
                </div>
                <div class="col-lg-8 col-md-12">
                    <label class="label-form">Mô tả: <span class="required-label-star">*</span></label>
                    <input placeholder="Mô tả danh mục" name="description" value="<?= $category->description ?>">
                </div>
                <div class="col-lg-8 col-md-12">
                    <button class="btn black">Cập nhật</button>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>


