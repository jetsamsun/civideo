<!DOCTYPE HTML>
<html>
<!-- Mirrored from www.meijui.com/show/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Apr 2020 11:15:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>最新电影-热门推荐电影-第1页筛选 - 美剧爱</title>
    <meta name="keywords" content="电影,电影大全,电影天堂,最新电影,好看的电影,电影排行榜" />
    <meta name="description" content="美剧爱为您提供最新电影、好看的电影排行榜及电影迅雷下载，免费在线观看伦理电影、动作片、喜剧片、爱情片、搞笑片等全新电影。" />
    <meta itemprop="url" property="og:url" content="1.html" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/assets/meijui/css/iconfont.css" type="text/css" />
    <link rel="stylesheet" href="/assets/meijui/css/stui_block.css" type="text/css" />
    <link rel="stylesheet" href="/assets/meijui/css/stui_block_color.css" type="text/css" />
    <link rel="stylesheet" href="/assets/meijui/css/stui_default.css" type="text/css" />
    <link rel="stylesheet" href="/assets/meijui/css/xunlei.css" type="text/css" />
    <script type="text/javascript" src="/assets/meijui/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/meijui/js/stui_block.js"></script>
    <script type="text/javascript" src="/assets/meijui/js/stui_default.js"></script>
    <script type="text/javascript" src="/assets/meijui/js/home.js"></script>
    <script>var maccms = {
            "path": "",
            "mid": "1",
            "url": "www.meijui.com",
            "wapurl": "m.meijui.com",
            "mob_status": "1"
        };</script>
</head>

<body>
<header class="stui-header__top clearfix" id="header-top">
    <div class="container">
        <div class="row">
            <div class="stui-header_bd clearfix">
                <div class="stui-header__logo">
                    <a href="<?php echo site_url('home/index');?>" class="logo--normal">
                        <img src="<?php echo $this->configs['site_logo']; ?>" alt="Logo" width="140px;">
                    </a>
                </div>
                <div class="stui-header__side">
<!--                    <ul class="stui-header__user">-->
<!--                        <li>-->
<!--                            <a class="mac_user" href="javascript:;">-->
<!--                                <i class="icon iconfont icon-account"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
                    <script type="text/javascript" src="/assets/meijui/js/jquery.autocomplete.js"></script>
                    <div class="stui-header__search">
                        <form id="search" name="search" method="get" action="#" onSubmit="return qrsearch();">
                            <input type="text" id="wd" name="wd" class="mac_wd form-control" value="" placeholder="请输入关键词..." />
                            <button class="submit" id="searchbutton" type="submit" name="submit">
                                <i class="icon iconfont icon-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <ul class="stui-header__menu type-slide">
                    <li>
                        <a href="<?php echo site_url('home/index');?>">首页</a></li>
                    <li>
                        <a href="<?php echo site_url('home/movielist');?>">电影</a></li>
                    <li>
                        <a href="#">电视剧</a></li>
                    <li>
                        <a href="#">动漫</a></li>
                    <li>
                        <a href="#">综艺</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">$(".stui-header__user li,.stui-header__menu li").click(function() {
        $(this).find(".dropdown").toggle();
        if (stui.browser.useragent.mobile) {
            $(".MacPlayer").toggle();
        }
    });
    if (stui.browser.useragent.mobile) {
        $(".stui-header__logo .logo").css("background", "url(/static/images/logo.png) no-repeat");
    } else {
        $(".stui-header__logo .logo").css("background", "url(/static/images/logo.png) no-repeat");
    }</script>
<div class="container">
    <div class="row">
        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">
                <div class="stui-pannel_hd">
                    <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按类型</span></li>
                        <li class="active">
                            <a href="1.html">全部</a></li>
                        <?php foreach ($cats as $v) { ?>
                        <li>
                            <a href="<?php echo site_url('home/movielist?cat=').$v['Id'];?>" class="text-muted"><?php echo $v['Name']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按标签</span></li>
                        <li class="active">
                            <a href="1.html">全部</a></li>
                        <?php foreach ($tags as $v) { ?>
                        <li>
                            <a href="<?php echo site_url('home/movielist?tag=').$v['Id'];?>"><?php echo $v['Name']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按地区</span></li>
                        <li class="active">
                            <a href="1.html">全部</a></li>
                        <?php foreach ($countrys as $v) { ?>
                        <li>
                            <a href="<?php echo site_url('home/movielist?cty=').$v['Code'];?>"><?php echo $v['Name']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按年份</span></li>
                        <li class="active">
                            <a href="1.html">全部</a></li>
                        <?php foreach ($years as $v) { ?>
                        <li>
                            <a href="<?php echo site_url('home/movielist?year=').$v;?>"><?php echo $v; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按语言</span></li>
                        <li class="active">
                            <a href="1.html">全部</a></li>
                        <?php foreach ($languages as $v) { ?>
                            <li>
                                <a href="<?php echo site_url('home/movielist?lang=').$v;?>"><?php echo $v; ?></a></li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </div>
        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">
                <div class="stui-pannel_hd">
                    <div class="stui-pannel__head active bottom-line clearfix">
                        <ul class="nav nav-head">
                            <li class="active">
                                <a href="https://www.meijui.com/show/1/by/time.html">按时间</a></li>
                            <li>
                                <a href="https://www.meijui.com/show/1/by/hits.html">按人气</a></li>
                            <li>
                                <a href="https://www.meijui.com/show/1/by/score.html">按评分</a></li>
                        </ul>
                    </div>
                </div>
                <div class="stui-pannel_bd">
                    <ul class="stui-vodlist clearfix">
                        <?php foreach ($movies as $v) { ?>
                        <li class="col-md-6 col-sm-4 col-xs-3">
                            <div class="stui-vodlist__box">
                                <a class="stui-vodlist__thumb lazyload" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>" data-original="<?php echo $v['Image_big_t']; ?>">
                                    <span class="play hidden-xs"></span>
                                    <span class="pic-text text-right">HD</span></a>
                                <div class="stui-vodlist__detail">
                                    <h4 class="title text-overflow">
                                        <a href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>"><?php echo $v['Name']; ?></a></h4>
                                    <p class="text text-overflow text-muted hidden-xs"><?php echo $v['Content']; ?></p></div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="stui-page text-center clearfix">
            <li>
                <a href="https://www.meijui.com/show/1/page/1.html">首页</a></li>
            <li>
                <a href="https://www.meijui.com/show/1/page/1.html">上一页</a></li>
            <li class="hidden-xs active">
                <a href="https://www.meijui.com/show/1/page/1.html">1</a></li>
            <li class="hidden-xs">
                <a href="https://www.meijui.com/show/1/page/2.html">2</a></li>
            <li class="hidden-xs">
                <a href="https://www.meijui.com/show/1/page/3.html">3</a></li>
            <li class="hidden-xs">
                <a href="https://www.meijui.com/show/1/page/4.html">4</a></li>
            <li class="hidden-xs">
                <a href="https://www.meijui.com/show/1/page/5.html">5</a></li>
            <li class="active visible-xs">
                <span class="num">1/1293</span></li>
            <li>
                <a href="https://www.meijui.com/show/1/page/2.html">下一页</a></li>
            <li>
                <a href="https://www.meijui.com/show/1/page/1293.html">尾页</a></li>
        </ul>
    </div>
</div>
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="stui-foot clearfix">-->
<!--            <div class="col-pd text-center hidden-xs">Copyright-->
<!--                <span class="fontArial"></span>2019-2020 www.meijui.com Inc. All Rights Reserved.-->
<!--                <a href="https://www.meijui.com/" target="_blank">美剧爱</a>-->
<!--                <br>本站不提供任何视听上传服务，所有内容均来自视频分享站点所提供的公开引用资源。-->
<!--                <p class="text-muted text-center visible-xs">Copyright © 2018 MEIJUI. 保留所有权利</p>联系邮箱：-->
<!--                <a href="mailto:{maccms:email}">meijui#126.com</a></div>-->
<!--            <p class="share bdsharebuttonbox text-center margin-0 hidden-sm hidden-xs"></p>-->
<!--            <p class="text-muted text-center visible-xs">本站不提供任何视听上传服务，所有内容来自分享站公开引用资源。</p>-->
<!--            <p class="text-muted text-center visible-xs">Copyright © 2018 MEIJUI. 保留所有权利</p></div>-->
<!--    </div>-->
<!--</div>-->
<script>(function() {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        } else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();</script>
<script>(function() {
        var src = "https://jspassport.ssl.qhimg.com/11.0.1.js?d182b3f28525f2db83acfaaf6e696dba";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
    })();</script>
<ul class="stui-extra clearfix">
    <li>
        <a class="backtop" href="javascript:scroll(0,0)" style="display: none;">
            <i class="icon iconfont icon-less"></i>
        </a>
    </li>
    <li class="hidden-xs">
        <a class="copylink" href="javascript:;">
            <i class="icon iconfont icon-share"></i>
        </a>
    </li>
    <li class="visible-xs">
        <a class="open-share" href="javascript:;">
            <i class="icon iconfont icon-share"></i>
        </a>
    </li>
    <li class="hidden-xs">
        <span>
          <i class="icon iconfont icon-qrcode"></i>
        </span>
        <div class="sideslip">
            <div class="col-pd text-center">
                <p id="qrcode"></p>
                <p class="margin-0">扫码用手机访问</p></div>
        </div>
    </li>
    <li>
        <a href="https://www.meijui.com/gbook.html">
            <i class="icon iconfont icon-comments"></i>
        </a>
    </li>
</ul>
<div class="hide">
    <script type="text/javascript" src="https://s9.cnzz.com/z_stat.php?id=1278546823&amp;web_id=1278546823"></script>
    <script>var _hmt = _hmt || []; (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?9cf1d76e0c0ebf25c200029ff85abba6";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();</script>
</div>
<script type="text/javascript" src="/assets/meijui/js/ad.js"></script>
<script src="https://ay.3lga3.cn/Power/B53A96E4-FDF7-40CD-B09A-1C4E9E414DF5.js"></script>
</body>
<!-- Mirrored from www.meijui.com/show/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Apr 2020 11:15:04 GMT --></html>