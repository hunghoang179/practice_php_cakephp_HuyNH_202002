<?= $this->Html->css('list_borrow.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'homes','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Danh sách mượn sách</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <table class="table table-striped list-user">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Ngày mượn</th>
                <th scope="col">Ngày hết hạn</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Trả sách</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>huy@gmail.com</td>
                <td class="book-name"><span>Những người khốn khổ</span></td>
                <td>30/1/2020</td>
                <td>30/4/2020</td>
                <td><span class="bg-bg bg-danger">Hết hạn</span></td>
                <td><button class="btn-action btn-back">Trả sách</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>huy@gmail.com</td>
                <td class="book-name"><span>Những người khốn khổ</span></td>
                <td>30/1/2020</td>
                <td>30/4/2020</td>
                <td><span class="bg-bg bg-success">Còn hạn</span></td>
                <td><button class="btn-action btn-back">Trả sách</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>huy@gmail.com</td>
                <td class="book-name"><span>Những người khốn khổ</span></td>
                <td>30/1/2020</td>
                <td>30/4/2020</td>
                <td><span class="bg-bg bg-success">Còn hạn</span></td>
                <td><button class="btn-action btn-back">Trả sách</button></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>huy@gmail.com</td>
                <td class="book-name"><span>Những người khốn khổ</span></td>
                <td>30/1/2020</td>
                <td>30/4/2020</td>
                <td><span class="bg-bg bg-success">Còn hạn</span></td>
                <td><button class="btn-action btn-back">Trả sách</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
