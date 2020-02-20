<section class="slider">
    <div class="container">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <div class="slide">
                    <img src="book/images/slide1.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Chào mừng bạn!</h3>
                            <h5>Cùng khám phá những cuốn sách hay nhất với chúng tôi nào?</h5>
                            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn">shop books</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide">
                    <img src="book/images/slide2.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Chào mừng bạn!</h3>
                            <h5>Cùng khám phá những cuốn sách hay nhất với chúng tôi nào?</h5>
                            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn">shop books</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide">
                    <img src="book/images/slide3.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Chào mừng bạn!</h3>
                            <h5>Cùng khám phá những cuốn sách hay nhất với chúng tôi nào?</h5>
                            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn">shop books</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide">
                    <img src="book/images/slide4.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Chào mừng bạn!</h3>
                            <h5>Cùng khám phá những cuốn sách hay nhất với chúng tôi nào?</h5>
                            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn">shop books</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recomended-sec">
    <div class="container">
        <div class="title">
            <h2>SÁCH ĐỀ XUẤT</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="book/images/img1.jpg" alt="img">
                    <h3>how to be a bwase</h3>
                    <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                    <div class="hover">
                        <a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="book/images/img2.jpg" alt="img">
                    <h3>How to write a book...</h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    <span class="sale">Sale !</span>
                    <div class="hover">
                        <a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="book/images/img3.jpg" alt="img">
                    <h3>7-day self publish...</h3>
                    <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                    <div class="hover">
                        <a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="book/images/img4.jpg" alt="img">
                    <h3>wendy doniger</h3>
                    <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                    <div class="hover">
                        <a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-sec">
    <div class="about-img">
        <figure style="background:url(book/images/about-img.jpg)no-repeat;"></figure>
    </div>
    <div class="about-content">
        <h2>Giới thiệu,</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
        <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
        <div class="btn-sec">
            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn yellow">Sách</a>
            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'login']) ?> class="btn black">Đăng nhập</a>
        </div>
    </div>
</section>
<section class="recent-book-sec">
    <div class="container">
        <div class="title">
            <h2>Sách đề xuất</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r1.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r2.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r3.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r4.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r5.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r1.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r2.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r3.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r4.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="book/images/r5.jpg" alt="img">
                    <h3><a href=<?= $this->Url->build(['controller'=>'Books','action'=>'detail']) ?>>Keepers of the kalachakara</a></h3>
                    <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                </div>
            </div>
        </div>
        <div class="btn-sec">
            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn gray-btn">xem tất cả</a>
        </div>
    </div>
</section>
<section class="features-sec">
    <div class="container">
        <ul>
            <li>
                <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <h3>SAFE SHOPPING</h3>
                <h5>Safe Shopping Guarantee</h5>
                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
            </li>
            <li>
                <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                <h3>30- DAY RETURN</h3>
                <h5>Moneyback guarantee</h5>
                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
            </li>
            <li>
                <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                <h3>24/7 SUPPORT</h3>
                <h5>online Consultations</h5>
                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
            </li>
        </ul>
    </div>
</section>
<section class="offers-sec" style="background:url(book/images/offers.jpg)no-repeat;">
    <div class="cover"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail">
                    <h3>Top 50% OFF on Selected</h3>
                    <h6>We are now offering some good discount
                        on selected books go and shop them</h6>
                    <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn blue-btn">xem tất cả</a>
                    <span class="icon-point percentage">
                            <img src="book/images/precentagae.png" alt="">
                        </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail">
                    <h3>Shop $ 500 Above and Get Extra!</h3>
                    <h6>We are now offering some good discount
                        on selected books go and shop them</h6>
                    <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'book']) ?> class="btn blue-btn">xem tất cả</a>
                    <span class="icon-point amount"><img src="book/images/amount.png" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-sec">
    <div class="container">
        <div id="testimonal" class="owl-carousel owl-theme">
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                <div class="box-user">
                    <h4 class="author">Susane Mathew</h4>
                    <span class="country">Australia</span>
                </div>
            </div>
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                <div class="box-user">
                    <h4 class="author">Susane Mathew</h4>
                    <span class="country">Australia</span>
                </div>
            </div>
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                <div class="box-user">
                    <h4 class="author">Susane Mathew</h4>
                    <span class="country">Australia</span>
                </div>
            </div>
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                <div class="box-user">
                    <h4 class="author">Susane Mathew</h4>
                    <span class="country">Australia</span>
                </div>
            </div>
        </div>
    </div>
    <div class="left-quote">
        <img src="book/images/left-quote.png" alt="quote">
    </div>
    <div class="right-quote">
        <img src="book/images/right-quote.png" alt="quote">
    </div>
</section>
