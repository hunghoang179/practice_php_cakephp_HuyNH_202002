<?= $this->Html->css('list.css'); ?>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>>Trang chủ</a>
        <span class="breadcrumb-item active">Sách</span>
        <a class="add-content" href=<?= $this->Url->build(['controller'=>'Books','action'=>'add']) ?>>Thêm sách</a>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h2>Sách nổi bật</h2>
        <div class="recomended-sec">
            <div class="row">
                <?php
                foreach ($books_highs as $books_high):
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="/book/images/<?= $books_high->id ?>.jpg" alt="img">
                            <h3><?= $books_high->name ?></h3>
                            <h6><span class="price"><?= $books_high->pages ?></span> / <a href="#"><?= $books_high->author ?></a></h6>
                            <div class="hover">
                                <a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail','id'=>$books_high->id]) ?>>
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <h2>Sách đã thêm gần đây</h2>
        <div class="recent-book-sec">
            <div class="row">
                <?php
                foreach ($books as $book):
                    ?>
                    <div class="col-md-3">
                        <div class="item">
                            <img src="/book/images/<?= $book->id ?>.jpg" alt="img">
                            <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail','id'=>$book->id]) ?>><?= $book->name ?></a></h3>
                            <h6><span class="price"><?= $book->pages ?></span> / <a href="#"><?= $book->author ?></a></h6>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="btn-sec">
                <button class="btn gray-btn">Hiển thị thêm</button>
            </div>
        </div>
    </div>
</section>
