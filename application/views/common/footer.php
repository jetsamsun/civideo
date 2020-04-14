<!-- Footer Start-->
<footer class="footer bg-color" data-bg-color="#F6F7FA">
    <div class="footer-top border-bottom pt--70 pb--65 pb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-md--35">
                    <div class="footer-widget">
                        <div class="textwidget mb--21">
                            <figure class="footer-logo">
                                <img src="/assets/img/logo/logo.png" alt="Logo" width="50%">
                            </figure>
                        </div>
                    </div>
                    <div class="footer-widget">
                        <div class="newsletter-form-widget">
                            <p>订阅最新资讯邮件</p>
                            <form action="<?php echo site_url('home/contact');?>" method="post" name="mc-embedded-subscribe-form" class="newsletter-form mc-form">
                                <input type="email" name="newsletter_email" class="newsletter-form__input" placeholder="Enter Your Email">
                                <button type="submit" class="newsletter-form__btn">我要订阅</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div>
                                <!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div>
                                <!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div>
                                <!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5 offset-md-1 mb-md--35 mb-sm--25">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20">页面</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu">
                                <li><a href="<?php echo site_url('home/index');?>">首页</a></li>
                                <li><a href="<?php echo site_url('home/videolist');?>?channel=movie">电影</a></li>
                                <li><a href="<?php echo site_url('home/videolist');?>?channel=tv">电视剧</a></li>
                                <li><a href="<?php echo site_url('home/videolist');?>?channel=variety">综艺</a></li>
                                <li><a href="<?php echo site_url('home/videolist');?>?channel=cartoon">动漫</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 mb-sm--30">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20">服务特色</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu">
                                <li><a href="#">多种收款渠道</a></li>
                                <li><a href="#">支持人民币/美元/比特币</a></li>
                                <li><a href="#">没有最低提现门槛</a></li>
                                <li><a href="#">提现到任何国家</a></li>
                                <li><a href="#">完全匿名,避免跟踪</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20">法律条款</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu">
                                <li><a href="#">服务协议</a></li>
                                <li><a href="#">安全政策</a></li>
                                <li><a href="#">隐私政策</a></li>
                                <li><a href="#">媒体</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom ptb--17">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright-text">Shoufuzhan.com &copy; 2020 all rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End-->

<!-- OffCanvas Menu Start -->
<div class="offcanvas-menu-wrapper" id="offcanvasMenu">
    <div class="offcanvas-menu-inner">
        <a href="" class="btn-close">
            <img src="/assets/img/icons/icon-cross.png" alt="Cross">
        </a>
        <nav class="offcanvas-navigation">
            <ul class="offcanvas-menu">
                <li class="menu-item-has-children active">
                    <a href="<?php echo site_url('home/index');?>">
                        <span class="mm-text">首页</span>
                    </a>
                    <!--<ul class="sub-menu">-->
                    <!--    <li>-->
                    <!--        <a href="index.html">-->
                    <!--            <span class="mm-text">Homepage 01</span>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="index-02.html">-->
                    <!--            <span class="mm-text">Homepage 02</span>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--</ul>-->
                </li>
                <li>
                    <a href="<?php echo site_url('home/m');?>">
                        <span class="mm-text">收付服务</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('home/about');?>">
                        <span class="mm-text">关于我们</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('home/contact');?>">
                        <span class="mm-text">联络我们</span>
                    </a>
                </li>

                <li class="menu-item-has-children">
                    <a href="<?php echo site_url('home/apply');?>">
                        <span class="mm-text">申请平台</span>
                    </a>
                </li>

                <li class="menu-item-has-children">
                    <a href="<?php echo site_url('admin/index');?>">
                        <span class="mm-text">会员中心</span>
                    </a>
                </li>
            </ul>
            <div class="site-info vertical">
                <div class="site-info__item">
                    <strong>8:00 AM - 9:00 PM</strong>
                    <a href="mailto:support@shoufuzhan.com">support@shoufuzhan.com</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- OffCanvas Menu End -->

<!-- Global Overlay Start -->
<div class="global-overlay"></div>
<!-- Global Overlay End -->

<!-- Global Overlay Start -->
<a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
<!-- Global Overlay End -->