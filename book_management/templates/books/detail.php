<?= $this->Html->css('detail.css'); ?>
<section class="product-sec">
    <div class="container">
        <h1><?= $book->name ?></h1>
        <div class="row">
            <div class="col-md-6 slider-sec">
                <!-- main slider carousel -->
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="/book/images/<?= $book->id ?>.jpg" class="img-fluid">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                </div>
                <!--/main slider carousel-->
            </div>
            <div class="col-md-6 slider-content">
                <p><?php echo $book->content ?></p>
                <div class="book-info">
                    <ul>
                        <li>
                            <span class="name">Tác giả</span><span class="clm">:</span>
                            <strong><?= $book->author ?></strong>
                        </li>
                        <li>
                            <span class="name">Nhà xuất bản</span><span class="clm">:</span>
                            <strong><?= $book->publisher ?></strong>
                        </li>
                        <li>
                            <span class="name">Số trang</span><span class="clm">:</span>
                            <strong><?= $book->pages ?></strong>
                        </li>
                        <li>
                            <span class="name">Danh mục</span><span class="clm">:</span>
                            <strong><?= $book->category ?></strong>
                        </li>
                        <li>
                            <span class="name">Ngày xuất bản</span><span class="clm">:</span>
                            <strong><?= $book->publish_date ?></strong>
                        </li>
                    </ul>
                    <div class="btn-sec">
                        <button class="btn ">Mượn ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="related-books">
    <div class="container">
        <h2>Sách bạn có thể thích</h2>
        <div class="recomended-sec">
            <div class="row">
                <?php foreach ($book_likes as $book_like):
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="/book/images/<?= $book_like->id ?>.jpg" alt="img">
                        <h3><?= $book_like->name ?></h3>
                        <h6><span class="price"><?= $book_like->pages ?></span> / <a href="#"><?= $book_like->author ?></a></h6>
                        <div class="hover">
                            <a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail','id'=>$book_like->id]) ?>>
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
    </div>
</section>
