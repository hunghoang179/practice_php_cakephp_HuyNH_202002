<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?> class="web-url">http://book_management.com/</a></div>
                <div class="col-md-6">
                    <h5>Free Shipping Over $99 + 3 Free Samples With Every Order</h5></div>
                <div class="col-md-3">
                    <span class="ph-number">Call : 800 1234 5678</span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?>><img src="/book/images/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item active">
                            <a href=<?= $this->Url->build(['controller'=>'users','action'=>'home']) ?> class="nav-link">Trang chủ</a>
                        </li>
                        <li class="navbar-item">
                            <a href=<?= $this->Url->build(['controller'=>'Books','action'=>'list']) ?> class="nav-link">Sách</a>
                        </li>
                        <li class="navbar-item">
                            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'about']) ?> class="nav-link">Giới thiệu</a>
                        </li>
                        <li class="navbar-item">
                            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'faq']) ?> class="nav-link">FQA</a>
                        </li>
                        <li class="navbar-item">
                            <a href=<?= $this->Url->build(['controller'=>'homes','action'=>'listUser']) ?> class="nav-link">DS Tài khoản</a>
                        </li>
                        <li class="navbar-item">
                            <?php
                            if ($username){
                                echo '<div class="dropdown show">
                                        <a class="dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            '.$username.'
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href='.$this->Url->build(['controller'=>'users','action'=>'logout']).'>Đăng xuất</a>
                                            <a class="dropdown-item" href='.$this->Url->build(['controller'=>'users','action'=>'updateUser']).'>Thông tin cá nhân</a>
                                            <a class="dropdown-item" href='.$this->Url->build(['controller'=>'Categories','action'=>'listCategory']).'>Thể loại sách</a>
                                        </div>
                                    </div>';
                            }
                            else{
                                echo $this->Html->link(
                                    'Đăng nhập',
                                    ['controller' => 'users', 'action' => 'login']
                                );
                            }
                            ?>
                        </li>
                    </ul>
                    <div class="cart my-2 my-lg-0">
                            <span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        <span class="quntity">3</span>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                        <span class="fa fa-search"></span>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>

