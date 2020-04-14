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
    <title>最新电影-热门推荐电影</title>
    <meta name="keywords" content="电影,电影大全,电影天堂,最新电影,好看的电影,电影排行榜" />
    <meta name="description" content="" />
<!--    <meta itemprop="url" property="og:url" content="1.html" />-->
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
    <script>
        var maccms = {
            "path": "",
            "mid": "1",
            "url": "",
            "wapurl": "",
            "mob_status": "1"
        };
    </script>
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
                    <script type="text/javascript" src="/assets/meijui/js/jquery.autocomplete.js"></script>
                    <div class="stui-header__search">
                        <form id="search" name="search" method="get" action="javascript:void(0);" onSubmit="return qrsearch(this);" data-arg="search" data-val="">
                            <input type="text" id="wd" name="wd" class="mac_wd form-control" value="<?php echo $keyword; ?>" placeholder="请输入关键词..." />
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

<script type="text/javascript">
    $(".stui-header__user li,.stui-header__menu li").click(function() {
        $(this).find(".dropdown").toggle();
        if (stui.browser.useragent.mobile) {
            $(".MacPlayer").toggle();
        }
    });
    if (stui.browser.useragent.mobile) {
        $(".stui-header__logo .logo").css("background", "url(/static/images/logo.png) no-repeat");
    } else {
        $(".stui-header__logo .logo").css("background", "url(/static/images/logo.png) no-repeat");
    }
</script>

<div class="container">
    <div class="row">
        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">
                <div class="stui-pannel_hd">
                    <ul class="cats stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按类型</span></li>
                        <li <?php if(!$cat) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="cats" data-val="">全部</a></li>
                        <?php foreach ($cats as $v) { ?>
                        <li <?php if($cat == $v['Id']) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="cats" data-val="<?php echo $v['Id']; ?>" class="text-muted"><?php echo $v['Name']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="tags stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按标签</span></li>
                        <li <?php if(!$tag) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="tags" data-val="">全部</a></li>
                        <?php foreach ($tags as $v) { ?>
                        <li <?php if($tag == $v['Id']) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="tags" data-val="<?php echo $v['Id']; ?>"><?php echo $v['Name']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="ctys stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按地区</span></li>
                        <li <?php if(!$cty) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="ctys" data-val="">全部</a></li>
                        <?php foreach ($countrys as $v) { ?>
                        <li <?php if($cty == $v['Code']) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="ctys" data-val="<?php echo $v['Code']; ?>"><?php echo $v['Name']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="years stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按年份</span></li>
                        <li <?php if(!$year) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="years" data-val="">全部</a></li>
                        <?php foreach ($years as $v) { ?>
                        <li <?php if($year == $v) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="years" data-val="<?php echo $v; ?>"><?php echo $v; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="langs stui-screen__list type-slide bottom-line-dot clearfix">
                        <li>
                            <span class="text-muted">按语言</span></li>
                        <li <?php if(!$lang) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="langs" data-val="">全部</a></li>
                        <?php foreach ($languages as $v) { ?>
                        <li <?php if($lang == $v) { ?> class="active" <?php }?>>
                            <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="langs" data-val="<?php echo $v; ?>"><?php echo $v; ?></a></li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </div>

        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">
                <div class="stui-pannel_hd">
                    <div class="stui-pannel__head bottom-line clearfix">
                        <ul class="sorts nav nav-head">
                            <li <?php if($sort == 'time') { ?> class="active" <?php }?>>
                                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="sorts" data-val="time">按时间</a></li>
                            <li <?php if($sort == 'hot') { ?> class="active" <?php }?>>
                                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="sorts" data-val="hot">按人气</a></li>
                            <li <?php if($sort == 'sore') { ?> class="active" <?php }?>>
                                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="sorts" data-val="sore">按评分</a></li>
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

        <ul class="pages stui-page text-center clearfix">
            <li>
                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="pages" data-val="1">首页</a></li>
            <li>
                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="pages" data-val="<?php if($page>1) { echo $page-1; } else { echo 1; } ?>">上一页</a></li>

            <?php foreach ($pages_show as $v) { ?>
            <li class="hidden-xs <?php if($page==$v) { ?> active <?php } ?>">
                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="pages" data-val="<?php echo $v; ?>"><?php echo $v; ?></a></li>
            <?php } ?>

            <li>
                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="pages" data-val="<?php if($page < $pages) { echo $page+1; } else { echo $pages; } ?>">下一页</a></li>
            <li>
                <a href="javascript:void(0);" onclick="qrsearch(this)" data-arg="pages" data-val="<?php echo $pages; ?>">尾页</a></li>
        </ul>
    </div>
</div>

<!--<script>-->
<!--    (function() {-->
<!--        var bp = document.createElement('script');-->
<!--        var curProtocol = window.location.protocol.split(':')[0];-->
<!--        if (curProtocol === 'https') {-->
<!--            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';-->
<!--        } else {-->
<!--            bp.src = 'http://push.zhanzhang.baidu.com/push.js';-->
<!--        }-->
<!--        var s = document.getElementsByTagName("script")[0];-->
<!--        s.parentNode.insertBefore(bp, s);-->
<!--    })();-->
<!--</script>-->
<!---->
<!--<script>-->
<!--    (function() {-->
<!--        var src = "https://jspassport.ssl.qhimg.com/11.0.1.js?d182b3f28525f2db83acfaaf6e696dba";-->
<!--        document.write('<script src="' + src + '" id="sozz"><\/script>');-->
<!--    })();-->
<!--</script>-->

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
        <a href="javascript:;">
            <i class="icon iconfont icon-comments"></i>
        </a>
    </li>
</ul>

</body>
</html>

<script>
    function qrsearch(th) {
        // 获取搜索位置
        let arg = $(th).data('arg');

        let lis = $('.'+arg).find('li');
        for(let i=0; i<lis.length; i++) {
            $(lis[i]).removeClass('active');
        }

        let val = $(th).data('val');
        if(arg === 'pages') {
            if(!isNaN(val)) {
                $(th).parent().addClass('active');
            }
        } else {
            $(th).parent().addClass('active');
        }

        let url = "<?php echo site_url('home/movielist');?>";


        // 获取搜索关键字
        let key = $('#wd').val();
        // 获取类型
        let cat = $('.cats').find('.active').find('a').eq(0).data('val');
        // 获取标签
        let tag = $('.tags').find('.active').find('a').eq(0).data('val');
        // 获取地区
        let cty = $('.ctys').find('.active').find('a').eq(0).data('val');
        // 获取年份
        let year = $('.years').find('.active').find('a').eq(0).data('val');
        // 获取语言
        let lang = $('.langs').find('.active').find('a').eq(0).data('val');
        // 获取排序
        let sort = $('.sorts').find('.active').find('a').eq(0).data('val');
        // 获取页码
        let page = $('.pages').find('.active').find('a').eq(0).data('val');

        window.location.href = url+'?arg='+arg+'&key='+key+'&cat='+cat+'&tag='+tag+'&cty='+cty+'&year='+year+'&lang='+lang+'&sort='+sort+'&page='+page;
    }
</script>