
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
                                            <h1 class="heading__primary color--white mb--3pt6" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">你的专属最佳境外收款平台,支持多渠道,多币种.
                                            </h1>
                                            <a href="<?php echo site_url('chinese/apply')?>" class="btn btn-outline btn-white btn-hover-1" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">申请平台</a>
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
                                            <h1 class="heading__primary color--white mb--3pt6" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">境内收款,境外提现,节省中间手续,财务轻松.
                                            </h1>
                                            <a href="<?php echo site_url('chinese/apply')?>" class="btn btn-outline btn-white btn-hover-1" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">申请平台</a>
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

            <!-- Feature Area Start -->
            <section class="feature-area mb--10pt">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-md--50">
                            <div class="feature feature-style-2">
                                <div class="feature__icon">
                                    <span class="icon icon-box icon-outline">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </span>
                                </div>
                                <div class="feature__info">
                                    <h3 class="feature__title">得到新点子</h3>
                                    <p class="feature__desc">有想法就行动,因为我们天生就是行动派.机会不是等出来,是你我创造出来的</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-md--50">
                            <div class="feature feature-style-2">
                                <div class="feature__icon">
                                    <span class="icon icon-box icon-outline">
                                        <i class="ion-magnet"></i>
                                    </span>
                                </div>
                                <div class="feature__info">
                                    <h3 class="feature__title">制定运营计划</h3>
                                    <p class="feature__desc">够IN,够HIGH的站点内容,让用户沉迷其中不可自拨.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="feature feature-style-2">
                                <div class="feature__icon">
                                    <span class="icon icon-box icon-outline">
                                        <i class="ion-pie-graph"></i>
                                    </span>
                                </div>
                                <div class="feature__info">
                                    <h3 class="feature__title">扩展你的业务</h3>
                                    <p class="feature__desc">提供一站式的收付款平台,解决流量变现的关键瓶颈.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Feature Area End -->

            <!-- About Area Start -->
            <section class="about-area mb--10pt" style="margin-bottom: 0em;">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="vCenter hEnd h-sm-start bg-image pt--94 pt-sm--70 pb--100 pb-sm--75 pl--15 pr-8percent" data-bg-image="/assets/img/bg/blog-breadcrumb.jpg">
                                <div class="max-width-470">
                                    <div class="heading">
                                        <h2 class="mb--18">收付站是谁?</h2>
                                        <hr class="delimeter mb--22">
                                    </div>
                                    <p class="mb--25">我们深知广大中小站长开通境内收款将面临着繁琐的手续与潜在的财务风险,为了解决这一痛点,收付站团队决定颠覆旧有模式,一步到底,实现境内收款,境外提现,让你专注于运营.</p>
                                    <a href="<?php echo site_url('chinese/about'); ?>" class="btn">了解更多</a>
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

            <!-- Blog Area Start -->
            <section class="blog-area mb--9pt3 mb-sm--8pt8">
                <div class="container">
                    <div class="row mb--60 mb-md--50">
                        <div class="col-12 text-center">
                            <h2>最新资讯</h2>
                            <hr class="delimeter mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3,
                                "autoplay": true
                            }' data-slick-responsive='[
                                {"breakpoint": 1200, "settings": {"slidesToShow": 3}},
                                {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                            ]'>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="/assets/img/blog/blog-06-560x345.jpg" alt="Blog Image" class="w-100">
                                                    <a href="#" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="#">美元收款通道接受内测申请</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2020</span>
                                                    <span class="posted-by"><span>By: </span><a href="#">Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="/assets/img/blog/blog-07-560x345.jpg" alt="Blog Image" class="w-100">
                                                    <a href="#" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="#">我们的运营团队已搬至新加坡</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">1.1.2020</span>
                                                    <span class="posted-by"><span>By: </span><a href="#">Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="/assets/img/blog/blog-08-560x345.jpg" alt="Blog Image" class="w-100">
                                                    <a href="#" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="#">签署协议引入合作收款渠道</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">20.11.2019</span>
                                                    <span class="posted-by"><span>By: </span><a href="#">Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="/assets/img/blog/blog-11-560x345.png" alt="Blog Image" class="w-100">
                                                    <a href="#" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="#">新的规划,新的团队起航</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">1.10.2019</span>
                                                    <span class="posted-by"><span>By: </span><a href="#">Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->
        </main>
        <!-- Main Content Wrapper End -->
        <?php $this->load->view('common/footer.php') ?>
    </div>
    <!-- Main Wrapper End -->

    <?php $this->load->view('common/js.php') ?>



