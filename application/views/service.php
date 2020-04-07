<?php $this->load->view('common/header.php') ?>



    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <?php $this->load->view('common/nav.php') ?>
        <!-- Header End -->

        <section class="page-title-area bg-image ptb--80" data-bg-image="/assets/img/bg/page_title_bg.jpg" style="background-image: url(&quot;/assets/img/bg/page_title_bg.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">收付服务</h1>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url('home/index');?>">网站首页</a></li>
                            <li class="current"><span>收付服务</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <div class="inner-page-content mt--9pt5">
                <!-- Services Area Start -->
                <section class="services-area mb--9pt mb-md--8pt6 mb-sm--7pt6">
                    <div class="container">
                        <div class="row mb--60 mb-md--50">
                            <div class="col-12 text-center">
                                <h2>收付服务</h2>
                                <hr class="delimeter mx-auto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-sm--40">
                                <div class="service">
                                    <figure class="service__image">
                                        <img src="/assets/img/services/service-01.jpg" alt="Service" class="w-100">
                                        <a href="#" class="item-overlay"></a>
                                    </figure>
                                    <div class="service__info">
                                        <h3 class="service__title"><a href="#">多币种多渠道.</a></h3>
                                        <span class="service__category">
                                            <a href="#">收款</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-sm--40">
                                <div class="service">
                                    <figure class="service__image">
                                        <img src="/assets/img/services/service-02.jpg" alt="Service" class="w-100">
                                        <a href="#" class="item-overlay"></a>
                                    </figure>
                                    <div class="service__info">
                                        <h3 class="service__title"><a href="#">直接下发,不经过中间手续.</a></h3>
                                        <span class="service__category">
                                            <a href="#">付款</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service">
                                    <figure class="service__image">
                                        <img src="/assets/img/services/service-03.jpg" alt="Service" class="w-100">
                                        <a href="#" class="item-overlay"></a>
                                    </figure>
                                    <div class="service__info">
                                        <h3 class="service__title"><a href="#">可汇至全球任意银行.</a></h3>
                                        <span class="service__category">
                                            <a href="#">提现</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services Area End -->

                <!-- Skill Area Start -->
                <section class="skill-area mb--9pt5 mb-lg--8pt7 mb-sm--9pt4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-sm--45">
                                <div class="heading mb--26">
                                    <h3>实时跟踪每一笔资金流向</h3>
                                    <p>无论何时何地,只要连上网络,就能操作一切你想操作的!</p>
                                </div>
                                <div class="prgoress-wrapper">
                                    <div class="progress-charts">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                <span class="percent-label">掌握全局</span>
                                            </div>
                                        </div>
                                        <p class="progress-title">实时监控资金流入</p>
                                    </div>
                                    <div class="progress-charts">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                <span class="percent-label">安全可靠</span>
                                            </div>
                                        </div>
                                        <p class="progress-title">实时下发资金给代理商</p>
                                    </div>
                                    <div class="progress-charts">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                <span class="percent-label">快速转移</span>
                                            </div>
                                        </div>
                                        <p class="progress-title">随时提现,5分钟内到帐(国际汇款除外)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img src="/assets/img/bg/bg-01.jpg" alt="Service Image" class="w-100">
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Skill Area End -->

                <!-- Pricing Area Start -->
                <section class="pricing-area mb--10pt">
                    <div class="container">
                        <div class="row mb--40 mb-md--30">
                            <div class="col-12 text-center">
                                <h2>服务套餐</h2>
                                <hr class="delimeter mx-auto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="element-carousel slick-carousel-0 slick-gutter-30 slick-initialized slick-slider" data-slick-options="{
                                    &quot;spaceBetween&quot;: 30,
                                    &quot;slidesToShow&quot;: 3,
                                    &quot;slidesToscroll&quot;: 1,
                                    &quot;autoplay&quot;: true
                                }" data-slick-responsive="[
                                    {&quot;breakpoint&quot;: 992, &quot;settings&quot;:{
                                        &quot;slidesToShow&quot;: 2
                                    }},
                                    {&quot;breakpoint&quot;: 768, &quot;settings&quot;:{
                                        &quot;slidesToShow&quot;: 1
                                    }}
                                ]">
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 1140px; transform: translate3d(0px, 0px, 0px);">
                                            <div class="item slick-slide slick-current slick-active first-active" data-slick-index="0" aria-hidden="false" style="width: 380px;" tabindex="0">
                                                <div class="pricing">
                                                    <div class="pricing__inner">
                                                        <div class="pricing__header">
                                                            <figure class="pricing__icon">
                                                                <img src="/assets/img/icons/icon-crown-01.png" alt="Crown Icon" class="mx-auto">
                                                            </figure>
                                                            <h2 class="pricing__title font-weight-normal">免费会员</h2>
                                                        </div>
                                                        <div class="pricing__body">
                                                            <p class="pricing__desc">免实名,免收开通费<br>可使用普通收款渠道<br>只可提现到境内<br>当月没有资金流0费用.</p>
                                                            <h2 class="pricing__price">
                                                                <span class="pricing__price--sub">低至</span>
                                                                <span class="pricing__price--main">￥0 元</span>
                                                                <span class="pricing__price--sub">/月</span>
                                                            </h2>
                                                        </div>
                                                        <div class="pricing__footer">
                                                            <a href="apply" class="btn btn-shape-round" tabindex="0">申请</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 380px;" tabindex="0">
                                                <div class="pricing">
                                                    <div class="pricing__inner">
                                                        <div class="pricing__header">
                                                            <figure class="pricing__icon">
                                                                <img src="/assets/img/icons/icon-crown-02.png" alt="Crown Icon" class="mx-auto">
                                                            </figure>
                                                            <h2 class="pricing__title font-weight-normal">付费会员</h2>
                                                        </div>
                                                        <div class="pricing__body">
                                                            <p class="pricing__desc">免费会员的所有功能<br>每月固定的平台费用<br>提供优质多币种收款渠道,成功率高.</p><br>
                                                            <h2 class="pricing__price">
                                                                <span class="pricing__price--sub">价格从</span>
                                                                <span class="pricing__price--main">￥100.00 元</span>
                                                                <span class="pricing__price--sub">起/月</span>
                                                            </h2>
                                                        </div>
                                                        <div class="pricing__footer">
                                                            <a href="apply" class="btn btn-shape-round" tabindex="0">申请</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item slick-slide slick-active last-active" data-slick-index="2" aria-hidden="false" style="width: 380px;" tabindex="0">
                                                <div class="pricing">
                                                    <div class="pricing__inner">
                                                        <div class="pricing__header">
                                                            <figure class="pricing__icon">
                                                                <img src="/assets/img/icons/icon-crown-03.png" alt="Crown Icon" class="mx-auto">
                                                            </figure>
                                                            <h2 class="pricing__title font-weight-normal">企业VIP</h2>
                                                        </div>
                                                        <div class="pricing__body">
                                                            <p class="pricing__desc">付费会员的所有功能<br>每月固定的平台费用<br>提供优质多币种收款渠道,成功率高.<br>可提现至全球任何银行.</p>
                                                            <h2 class="pricing__price">
                                                                <span class="pricing__price--sub">价格从</span>
                                                                <span class="pricing__price--main">￥500.00 元</span>
                                                                <span class="pricing__price--sub">起/月</span>
                                                            </h2>
                                                        </div>
                                                        <div class="pricing__footer">
                                                            <a href="apply" class="btn btn-shape-round" tabindex="0">申请</a>
                                                        </div>
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
                <!-- Pricing Area End -->
            </div>
        </main>
        <!-- Main Content Wrapper End -->

        <?php $this->load->view('common/footer.php') ?>
    </div>
    <!-- Main Wrapper End -->




<?php $this->load->view('common/js.php') ?>