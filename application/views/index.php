
<?php $this->load->view('common/header.php') ?>

<body>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <?php $this->load->view('common/nav.php') ?>
        <!-- Header End -->

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <!-- Slider area Start -->
            <section class="homepage-slider mb--10pt">
                <div class="element-carousel" data-slick-options='{
                    "slidesToShow": 1,
                    "autoplay": false,
                    "customPaging": true
                }'>
                    <div class="item">
                        <div class="single-slide d-flex align-items-center" style="background-image: url(/assets/img/slider/slider-03.jpg);">
                            <div class="container">
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-sm-8">
                                        <div class="slider-content">
                                            <h1 class="heading__primary color--white mb--3pt6" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">在线视频网站-海量正版高清视频在线观看.
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-slide d-flex align-items-center" style="background-image: url(/assets/img/slider/slider-04.jpg);">
                            <div class="container">
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-sm-8">
                                        <div class="slider-content">
                                            <h1 class="heading__primary color--white mb--3pt6" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">以丰富的内容、极致的观看体验、便捷的登录方式.
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <span class="custom-paging"></span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Slider area End -->

            <!-- Hot Video Start -->
            <section class="feature-area mb--10pt">
                <div class="container">
                    <div class="heading">
                        <h2 class="mb--18">最新热门影片推荐</h2>
                        <hr class="delimeter mb--22">
                    </div>
                    <div class="row">
                        <?php foreach ($hot as $v) {  ?>
                        <div class="col-lg-2 col-md-6" style="margin-bottom: 15px;">
                            <a href="<?php echo site_url('home/detail');?>?id=<?php echo $v['Id'];?>" class="mainmenu__link">
                                <img src="<?php
                                if(empty($v['Image_big'])) {
                                    echo '/assets/images/no.jpg';
                                } else {
                                    if(strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false)
                                        echo $v['Image_big'];
                                    else
                                        echo $this->configs['img_url'] . $v['Image_big'];
                                }
                                ?>" alt="" class="">
                                <p class="feature__desc"><?php echo $v['Name']; ?></p>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- Hot Video End -->

            <!-- New Video Start -->
            <section class="feature-area mb--10pt">
                <div class="container">
                    <div class="heading">
                        <h2 class="mb--18">最新电影</h2>
                        <hr class="delimeter mb--22">
                    </div>
                    <div class="row">
                        <?php foreach ($movie as $v) {  ?>
                            <div class="col-lg-2 col-md-6" style="margin-bottom: 15px;">
                                <a href="<?php echo site_url('home/detail');?>?id=<?php echo $v['Id'];?>" class="mainmenu__link">
                                    <img src="<?php
                                    if(empty($v['Image_big'])) {
                                        echo '/assets/images/no.jpg';
                                    } else {
                                        if(strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false)
                                            echo $v['Image_big'];
                                        else
                                            echo $this->configs['img_url'] . $v['Image_big'];
                                    }
                                    ?>" alt="" class="">
                                    <p class="feature__desc"><?php echo $v['Name']; ?></p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- New Video End -->

            <!-- TV Video Start -->
            <section class="feature-area mb--10pt">
                <div class="container">
                    <div class="heading">
                        <h2 class="mb--18">最新电视剧</h2>
                        <hr class="delimeter mb--22">
                    </div>
                    <div class="row">
                        <?php foreach ($tv as $v) {  ?>
                            <div class="col-lg-2 col-md-6" style="margin-bottom: 15px;">
                                <a href="<?php echo site_url('home/detail');?>?id=<?php echo $v['Id'];?>" class="mainmenu__link">
                                    <img src="<?php
                                    if(empty($v['Image_big'])) {
                                        echo '/assets/images/no.jpg';
                                    } else {
                                        if(strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false)
                                            echo $v['Image_big'];
                                        else
                                            echo $this->configs['img_url'] . $v['Image_big'];
                                    }
                                    ?>" alt="" class="">
                                    <p class="feature__desc"><?php echo $v['Name']; ?></p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- TV Video End -->

            <!-- Show Video Start -->
            <section class="feature-area mb--10pt">
                <div class="container">
                    <div class="heading">
                        <h2 class="mb--18">最新综艺</h2>
                        <hr class="delimeter mb--22">
                    </div>
                    <div class="row">
                        <?php foreach ($variety as $v) {  ?>
                            <div class="col-lg-2 col-md-6" style="margin-bottom: 15px;">
                                <a href="<?php echo site_url('home/detail');?>?id=<?php echo $v['Id'];?>" class="mainmenu__link">
                                    <img src="<?php
                                    if(empty($v['Image_big'])) {
                                        echo '/assets/images/no.jpg';
                                    } else {
                                        if(strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false)
                                            echo $v['Image_big'];
                                        else
                                            echo $this->configs['img_url'] . $v['Image_big'];
                                    }
                                    ?>" alt="" class="">
                                    <p class="feature__desc"><?php echo $v['Name']; ?></p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- Show Video End -->

            <!-- Cartoon Video Start -->
            <section class="feature-area mb--10pt">
                <div class="container">
                    <div class="heading">
                        <h2 class="mb--18">最新动漫</h2>
                        <hr class="delimeter mb--22">
                    </div>
                    <div class="row">
                        <?php foreach ($cartoon as $v) {  ?>
                            <div class="col-lg-2 col-md-6" style="margin-bottom: 15px;">
                                <a href="<?php echo site_url('home/detail');?>?id=<?php echo $v['Id'];?>" class="mainmenu__link">
                                    <img src="<?php
                                    if(empty($v['Image_big'])) {
                                        echo '/assets/images/no.jpg';
                                    } else {
                                        if(strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false)
                                            echo $v['Image_big'];
                                        else
                                            echo $this->configs['img_url'] . $v['Image_big'];
                                    }
                                    ?>" alt="" class="">
                                    <p class="feature__desc"><?php echo $v['Name']; ?></p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- Cartoon Video End -->

            <!-- About Area Start -->
            <section class="about-area mb--10pt" style="margin-bottom: 0em;">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="vCenter hEnd h-sm-start bg-image pt--94 pt-sm--70 pb--100 pb-sm--75 pl--15 pr-8percent" data-bg-image="/assets/img/bg/blog-breadcrumb.jpg">
                                <div class="max-width-470">
                                    <div class="heading">
                                        <h2 class="mb--18">相约人间四月</h2>
                                        <hr class="delimeter mb--22">
                                    </div>
                                    <p class="mb--25">绿肥红瘦，天地清明，风暖花香，春天是惹人爱的。那么，许自己一段闲暇的时光，在这个美丽而多情的季节，与春天相约.</p>
                                    <a href="#" class="btn">了解更多</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="bg-image bg-sm-padding h-100" data-bg-image="/assets/img/bg/bg-02.jpg"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->

            <!-- Brand Logo Area Start -->
            <div class="brand-logo-area bg-color ptb--100 ptb-md--80 mb--9pt5" data-bg-color="#121420">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="element-carousel" data-slick-options='{
                                "slidesToShow": 5,
                                "autoplay": true
                            }' data-slick-responsive='[
                                {"breakpoint": 1200, "settings": {"slidesToShow": 4}},
                                {"breakpoint": 992, "settings": {"slidesToShow": 3}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                            ]'>
                                <div class="item">
                                    <figure>
                                        <img src="/assets/img/brand/brand-01.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="/assets/img/brand/brand-02.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="/assets/img/brand/brand-03.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="/assets/img/brand/brand-04.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="/assets/img/brand/brand-05.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand Logo Area End -->

            <!-- Tetimonial Area Start -->
            <section class="testimonial-area mb--9pt5">
                <div class="container">
                    <div class="row mb--52 mb-md--43">
                        <div class="col-12 text-center">
                            <h2>客户评价</h2>
                            <hr class="delimeter mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel slick-dot-mt-40" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3,
                                "slidesToScroll": 1,
                                "dots": true
                            }' data-slick-responsive='[
                                {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                            ]'>
                                <div class="item">
                                    <div class="testimonial testimonial-style-2">
                                        <div class="testimonial__inner">
                                            <div class="testimonial__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                </p>
                                            </div>
                                            <div class="testimonial__author">
                                                <figure class="testimonial__author--img">
                                                    <img src="/assets/img/others/comment-2.jpg" alt="client">
                                                </figure>
                                                <div class="testimonial__author--info">
                                                    <h3 class="testimonial__author--name">John Snow</h3>
                                                    <p class="testimonial__author--role">PR Officer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial testimonial-style-2">
                                        <div class="testimonial__inner">
                                            <div class="testimonial__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                </p>
                                            </div>
                                            <div class="testimonial__author">
                                                <figure class="testimonial__author--img">
                                                    <img src="/assets/img/others/comment-1.jpg" alt="client">
                                                </figure>
                                                <div class="testimonial__author--info">
                                                    <h3 class="testimonial__author--name">Sansa Stark</h3>
                                                    <p class="testimonial__author--role">Marketing</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial testimonial-style-2">
                                        <div class="testimonial__inner">
                                            <div class="testimonial__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                </p>
                                            </div>
                                            <div class="testimonial__author">
                                                <figure class="testimonial__author--img">
                                                    <img src="/assets/img/others/comment-3.jpg" alt="client">
                                                </figure>
                                                <div class="testimonial__author--info">
                                                    <h3 class="testimonial__author--name">Arya Stark</h3>
                                                    <p class="testimonial__author--role">Product Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial testimonial-style-2">
                                        <div class="testimonial__inner">
                                            <div class="testimonial__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                                </p>
                                            </div>
                                            <div class="testimonial__author">
                                                <figure class="testimonial__author--img">
                                                    <img src="/assets/img/others/comment-2.jpg" alt="client">
                                                </figure>
                                                <div class="testimonial__author--info">
                                                    <h3 class="testimonial__author--name">Tyrion</h3>
                                                    <p class="testimonial__author--role">Marketing</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tetimonial Area End -->

        </main>
        <!-- Main Content Wrapper End -->
        <?php $this->load->view('common/footer.php') ?>
    </div>
    <!-- Main Wrapper End -->

    <?php $this->load->view('common/js.php') ?>


<!--    <script language="JavaScript">-->
<!--        document.oncontextmenu=new Function("event.returnValue=false;");-->
<!--        document.onselectstart=new Function("event.returnValue=false;");-->
<!--    </script>-->


