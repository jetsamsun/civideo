<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/static/css/stui_block.css" type="text/css">
    <link rel="stylesheet" href="/static/css/stui_default.css" type="text/css">
    <link rel="stylesheet" href="/static/css/iconfont.css" type="text/css">
    <link rel="stylesheet" href="/static/css/aui.css" type="text/css">
    <script type="text/javascript" src="/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/js/stui_default.js"></script>
    <script type="text/javascript" src="/static/js/stui_block.js"></script>
    <script type="text/javascript" src="/static/js/submit_res.js"></script>
    <script type="text/javascript" src="/static/js/font_1486157_6uw53bh8p6l.js"></script>
    <script type="text/javascript" src="/static/js/pintuer.js"></script>
    <!--[if lt IE 9]>
    <script src="/style/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="/style/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body {
            background-repeat: repeat;
            background-size: inherit;
            background-attachment: fixed;
            background-position: center center;
            background: url();
        }

        .stui-header__logo .logo {
            display: block;
            width: 150px;
            height: 50px;
            background: url(/images/logo.png) no-repeat;
            background-position: 50% 50%;
            background-size: cover;
        }

        @media (max-width: 767px) {
            body:before {
                background: url() center 0 no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            .stui-header__top {
                min-height: 50px;
            }

            .stui-header__logo {
                margin-top: 10px;
                margin-left: 10px;
            }
        }

        @media (max-width: 1023px) {
            .stui-header__logo .logo {
                width: 90px;
                height: 30px;
                background: url(/images/logo.png) no-repeat;
                background-position: 50% 50%;
                background-size: cover;
            }
        }


        .focusbanner {
            text-align: center;
            margin-bottom: 20px;
        }

        .focusbanner .container {
            padding-top: 0px;
            padding-right: 0px;
            text-align: right;
            position: relative;

        }

        .js_login {
            position: absolute;
            z-index: 2;
            bottom: 10px;
            right: 10px;
        }

        .banner {
            position: relative;
            width: 100%;
            overflow: hidden;
            top: 0;
            z-index: 1;
        }

        .banner img {
            width: 100%;
        }

        .carousel {
            position: relative;
            list-style: none;
            padding: 0;
        }

        .carousel .item {
            display: nones;
            float: left;
            position: relative;
        }

        .carousel .active {
            display: block;
        }

        .carousel img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .banner .pointer {
            position: absolute;
            bottom: 0;
            padding: 15px;
        }

        .banner .pager-prev, .banner .pager-next {
            position: absolute;
            display: none;
            top: 50%;
            margin-top: -25px;
        }

        .banner .pager-prev {
            left: 20px;
        }

        .banner .pager-next {
            right: 20px;
        }

        .banner:hover .pager-prev, .banner:hover .pager-next {
            display: block;
        }

        .pointer {
            padding: 0px;
        }

        .pointer li {
            border: solid 0px #45B6F7;
            background: #fff;
            width: 10px;
            height: 10px;
            margin: 1px;
            display: inline-block;
            border-radius: 10px;
            cursor: pointer;
        }

        .pointer .active {
            border: none;
            background: #45B6F7;
            width: 12px;
            height: 12px;
            margin: 0;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .focusbanner .btn {
            margin-left: 10px;
        }


    </style>
    <title>在线免费高清电影</title>
    <meta name="keywords" content="新世界,电影,视频大全,在线高清电影,付费电影,免费电影,剧集,电影,在线观看,VIP高清电影直播">
    <meta name="description" content="">
    <script type="text/javascript" src="/static/js/mytheme-ui.js"></script>
    <script src="/static/js/flv.min.js"></script>
    <script src="/static/js/hls.min.js"></script>
    <script src="/static/js/dash.all.min.js"></script>
    <script src="/static/js/webtorrent.min.js"></script>
    <script src="/static/js/pearplayer.js"></script>
    <script src="/static/js/DPlayer.min.js"></script>

    <style type="text/css">
        #timer {
            background: rgba(0, 0, 0, 0.59);
            padding: 5px;
            text-align: center;
            width: 30px;
            position: absolute;
            top: 5%;
            right: 2%;
            color: #fff;
            font-size: 16px;
            border-radius: 50%;
            height: 30px;
            line-height: 20px
        }

        #xiang {
            background: rgba(177, 13, 13, 0.87);
            padding: 5px;
            text-align: center;
            width: auto;
            position: absolute;
            bottom: 2%;
            right: 1%;
            color: #fff;
            font-size: 16px;
            border-radius: 10px;
            height: 20px;
            line-height: 9px
        }

        #ys,
        .jkbtn1 {
            border: 1px solid #FF9900;
            background-color: #FF9900;
            color: #FFFFFF;
        }

        .stui-player__video {
            margin-bottom: 10px;
        }

        .embed-responsive {
            padding-bottom: 56.25%;
        }

        .ad_time {
            width: 554px;
            height: 351px;
            background: #000;
            filter: alpha(opacity=50);
            -moz-opacity: 0.5;
            opacity: 0.5;
            padding: 5px;
            position: absolute;
            top: 0;
            left: 0;
            color: #fff;
        }

        .ad_time span {
            font-weight: bold;
            color: #cc0;
            padding: 0 5px;
        }

        .close {
            width: 49px;
            height: 20px;
            background: url(/static/image/close.png) no-repeat;
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
            display: none;
        }

    </style>
</head>

<body sip-shortcut-listen="true">
<div id="wrap" class="flex-wrap flex-vertical">
    <div id="main" class="flex-con">
        <!--head-->
        <header class="stui-header__top clearfix top-fixed headroom--not-bottom top-fixed-up headroom--top"
                id="header-top">
            <div class="container">
                <div class="row">
                    <div class="stui-header_bd clearfix">
                        <div class="stui-header__logo">
                            <a href="<?php echo site_url('home/index');?>" class="logo--normal">
                                <img src="<?php echo $this->configs['site_logo']; ?>" alt="Logo" width="110em">
                            </a>
                        </div>
                        <ul class="stui-header__menu">
                            <li class=""><a href="<?php echo site_url('home/index');?>">首页</a></li>
                            <li class=" hidden-xs"><a href="<?php echo site_url('home/videolist');?>?channel=movie">电影</a></li>
                            <li><a href="javascript:;">更多 <i class="icon iconfont icon-moreunfold"></i></a>
                                <ul class="dropdown">
                                    <li class=""><a href="<?php echo site_url('home/videolist');?>?channel=tv">电视剧</a></li>
                                    <li class=""><a href="<?php echo site_url('home/videolist');?>?channel=variety">综艺</a></li>
                                    <li class=""><a href="<?php echo site_url('home/videolist');?>?channel=cartoon">动漫</a></li>
                                </ul>
                            </li>
                        </ul>
                        <script type="text/javascript" src="/static/js/jquery.autocomplete.js"></script>
                        <div class="stui-header__search">
                            <form action="<?php echo site_url('home/search');?>" class="">
                            <input type="text" id="wd" name="wd" class="mac_wd form-control" value="<?php if(isset($keyword)) echo $keyword;?>"
                                   placeholder="请输入关键词..." >
                            <button class="submit" id="submi" type="submit" onclick="submit()"><i
                                        class="icon iconfont icon-search"></i></button>
                            <a class="search-close visible-xs" href="javascript:;"><i
                                        class="icon iconfont icon-close"></i></a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="focusbanner">
            <div class="container">
                <div class="banner">
                    <div class="carousel">
                        <div class="item"><a href="infodisp.asp?id=1916" title="唐人街探案3"><img
                                        src="http://www.babaihao.com/uploadfile/ba33.jpg" class="img-responsive" alt="唐人街探案3"/></a>
                        </div>
                        <div class="item"><a href="infodisp.asp?id=1904" title="终结者6：黑暗命运"><img
                                        src="http://www.babaihao.com/uploadfile/ba32.jpg" class="img-responsive"
                                        alt="终结者6：黑暗命运"/></a></div>
                        <div class="item"><a href="infodisp.asp?id=1915" title="叶问4"><img
                                        src="http://www.babaihao.com/uploadfile/ba31.jpg" class="img-responsive" alt="叶问4"/></a>
                        </div>
                        <div class="item"><a href="infodisp.asp?id=1899" title="中国机长"><img
                                        src="http://www.babaihao.com/uploadfile/ba30.jpg" class="img-responsive"
                                        alt="中国机长"/></a></div>
                        <div class="item"><a href="infodisp.asp?id=1914" title="勇敢者游戏2：再战巅峰"><img
                                        src="http://www.babaihao.com/uploadfile/ba29.jpg" class="img-responsive"
                                        alt="勇敢者游戏2：再战巅峰"/></a></div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(".stui-header__user li,.stui-header__menu li").click(function () {
                $(this).find(".dropdown").toggle();
            });
            $(".open-search").click(function () {
                var Seacrh = $(".stui-header__search");
                Seacrh.addClass("active").siblings().hide();
                Seacrh.find(".form-control").focus();
                $(".search-close").click(function () {
                    Seacrh.removeClass("active").siblings().show();
                });
            });
        </script>
        <!--head-->
        <div class="container">
            <div class="row">
                <!--推荐电影开始-->
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <ul class="stui-vodlist clearfix">
                    </ul>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-remen"></use></svg> 热播推荐
                                </h3>
<!--                                <a class="more text-muted pull-right" href="http://127.0.0.1/movie_____rankhot_1.html">更多 <i class="icon iconfont icon-more"></i></a>-->
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <!--第一个大图开始-->
                                <li class="col-lg-4 col-md-4 col-sm-3 col-xs-3 hidden-md hidden-sm hidden-xs">
                                    <div class="stui-vodlist__box stui-vodlist__bg">
                                        <a class="stui-vodlist__thumb active first lazyload" href="http://127.0.0.1/vod/m/fafoaBH5RnbATR.html" title="沉睡魔咒2" data-original="http://p5.qhimg.com/d/dy_9ec4066793e535f407f24c640be68dff.jpg" style="padding-top: 176%; background-image: url(&quot;http://p5.qhimg.com/d/dy_9ec4066793e535f407f24c640be68dff.jpg&quot;);"><span class="play hidden-xs"></span><span class="pic-tag pic-tag-h">HOT</span></a>
                                        <div class="stui-vodlist__detail active">
                                            <h4 class="title text-overflow"><a href="http://127.0.0.1/vod/m/fafoaBH5RnbATR.html" title="">沉睡魔咒2</a></h4>
                                            <p class="text text-overflow visible-lg"><span class="text-muted"></span>主演：安吉丽娜·朱莉 艾丽·范宁 米歇尔·菲佛 萨姆·赖利 艾德·斯克林</p>
                                        </div>
                                    </div>
                                </li>
                                <!--第一个大图结束-->
                                <!--占位而已,无实际作用start-->
                                <li class="col-lg-7 col-md-5 col-sm-3 col-xs-3 hidden-lg hidden-md">
                                    <div class="stui-vodlist__box stui-vodlist__bg">
                                        &nbsp;
                                    </div>
                                </li>
                                <!--占位而已,无实际作用end-->
                                <!--最多10个-->
                                <?php foreach ($hot as $k=>$v) { ?>
                                <li class="col-lg-7 col-md-5 col-sm-3 col-xs-3 ">
                                    <div class="stui-vodlist__box stui-vodlist__bg">
                                        <a class="stui-vodlist__thumb active lazyload" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>" data-original="<?php echo $v['Image_big_t']; ?>">
                                            <span class="play hidden-xs"></span>
                                            <span class="pic-tag pic-tag-h"><?php echo $v['Score']; ?></span>
                                            <span class="pic-tag pic-tag-b"><?php echo $v['Year']; ?></span>
                                        </a>
                                        <div class="stui-vodlist__detail active">
                                            <h4 class="title text-overflow"><a href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>"><?php echo $v['Name']; ?></a></h4>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                                <!--最多10个-->
                            </ul>
                        </div>
                    </div>
                </div>
                <!--推荐电影结束-->
                <!--抢先看-->
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <ul class="stui-vodlist clearfix">
                    </ul>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <a class="more text-muted pull-right" href="<?php echo site_url('home/videolist');?>?channel=movie">更多 <i class="icon iconfont icon-more"></i></a>
                                <h3 class="title">
                                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-play"></use></svg>
                                    <a href="<?php echo site_url('home/videolist');?>?channel=movie">影视尝鲜</a></h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php foreach ($movie as $v) { ?>
                                <li class="col-md-7 col-sm-3 col-xs-3 ">
                                    <div class="stui-vodlist__box stui-vodlist__bg">
                                        <a class="stui-vodlist__thumb lazyload" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>"
                                           title="<?php echo $v['Name']; ?>"
                                           data-original="<?php echo $v['Image_big_t']; ?>">
                                            <span class="play hidden-xs"></span>
                                            <span class="pic-tag pic-tag-b"><?php echo $v['Year']; ?></span>
                                        </a>
                                        <div class="stui-vodlist__detail active">
                                            <h4 class="title text-overflow"><a href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>"
                                                                               title="<?php echo $v['Name']; ?>"><?php echo $v['Name']; ?></a></h4>
                                            <p class="text text-overflow text-muted hidden-xs">主演：<?php echo $v['actors_txt']; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--抢先看-->
                <!--MV-->
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <a class="more text-muted pull-right" href="<?php echo site_url('home/videolist');?>?channel=variety">更多 <i class="icon iconfont icon-more"></i></a>
                                <h3 class="title">
                                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-mv"></use></svg>
                                    <a href="<?php echo site_url('home/videolist');?>?channel=variety">综艺频道</a></h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php foreach ($variety as &$v) { ?>
                                <li class="col-md-6 col-sm-4 col-xs-3">
                                    <div class="stui-vodlist__box stui-vodlist__bg">
                                        <a class="stui-vodlist__thumb1 lazyload" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>" data-original="<?php echo $v['Image_t']; ?>" style="background-image: url(&quot;https://vthumb.ykimg.com/0542070852EC31CB6A0A3F42D141D300&quot;);">
                                            <span class="play hidden-xs"></span>
                                            <span class="pic-tag pic-tag-b"><?php echo $v['Year'];?></span></a>
                                        <div class="stui-vodlist__detail active">
                                            <h4 class="title text-overflow"><a href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>"><?php echo $v['Name']; ?></a></h4>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--MV-->
                <!--电影-->
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <ul class="stui-vodlist clearfix">
                    </ul>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <!--顶部开始-->
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-movie"></use></svg>
                                    <a href="<?php echo site_url('home/videolist');?>?channel=tv">追剧吧</a></h3>
                            </div>
                        </div>
                        <!--顶部结束-->
                        <div class="stui-pannel_bd clearfix">
                            <!--左边占位8开始-->
                            <div class="col-lg-wide-8 col-xs-1 padding-0">
                                <ul class="stui-vodlist clearfix">
                                    <!--最多10个-->
                                    <?php foreach ($tv as $v) { ?>
                                    <li class="col-md-6 col-sm-4 col-xs-3">
                                        <div class="stui-vodlist__box stui-vodlist__bg">
                                            <a class="stui-vodlist__thumb lazyload img-shadow" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name'];?>" alt="" data-original="<?php echo $v['Image_big_t']; ?>" style="background-image: url(&quot;http://p7.qhimg.com/d/dy_5d3557757e18eacbe017cc20afd30e3a.&quot;);">
                                                <span class="play hidden-xs"></span><span class="pic-tag pic-tag-b"><?php echo $v['Year'];?></span>
                                            </a>
                                            <div class="stui-vodlist__detail active">
                                                <h4 class="title text-overflow">
                                                    <a href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name'];?>"><?php echo $v['Name'];?></a>
                                                    <p class="text text-overflow text-muted hidden-xs">主演：<?php echo $v['actors_txt']; ?></p>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                    <!--最多10个-->
                                </ul>
                            </div>
                            <!--左边占位8结束-->
                            <div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
                                <div class="stui-pannel_bd clearfix">
                                    <div class="stui-pannel__head">
                                        <a class="more text-muted pull-right" href="<?php echo site_url('home/videolist');?>?channel=tv">更多 <i class="icon iconfont icon-more"></i></a>
                                        <h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>影视排行</h3>
                                    </div>
                                </div>
                                <div class="stui-pannel_bd clearfix">
                                    <ul class="stui-vodlist__text active col-pd clearfix">
                                        <!--最多10个-->
                                        <?php foreach ($ranking as $k=>$v) { ?>
                                        <li class="col-xs-1 padding-0"><a class="text-overflow" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name'];?>"><span class="am-badge am-round pull-left"><?php echo $k+1; ?></span><span class="text-muted pull-right"><?php echo $v['Score'];?>万</span><em class="text-red"></em>&nbsp;<?php echo $v['Name'];?></a></li>
                                        <?php } ?>
                                        <!--最多10个-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--电影-->
                <!--娱乐-->
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <ul class="stui-vodlist clearfix">
                    </ul>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <a class="more text-muted pull-right" href="<?php echo site_url('home/videolist');?>?channel=cartoon">更多 <i class="icon iconfont icon-more"></i></a>
                                <h3 class="title">
                                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-news"></use></svg>
                                    <a href="<?php echo site_url('home/videolist');?>?channel=cartoon">精彩动漫</a></h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <!--最多7个-->
                                <?php foreach ($cartoon as $v) { ?>
                                <li class="col-md-7 col-sm-2 col-xs-3 ">
                                    <div class="stui-vodlist__box stui-vodlist__bg">
                                        <a class="stui-vodlist__thumb lazyload" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>" data-original="<?php echo $v['Image_big_t']; ?>" style="background-image: url(&quot;http://r1.ykimg.com/051600005D50C455ADA7B28A3B089BE7&quot;);">
                                            <span class="play hidden-xs"></span>
                                            <span class="pic-tag pic-tag-b"><?php echo $v['Year']; ?></span></a>
                                        <div class="stui-vodlist__detail active">
                                            <h4 class="title text-overflow"><a href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>"><?php echo $v['Name']; ?></a></h4>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                                <!--最多7个-->
                            </ul>
                        </div>
                    </div>
                </div>
                <!--娱乐-->

                <!--合作-->
                <div class="stui-pannel stui-pannel-bg clearfix hidden-sm hidden-xs">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-hezuo"></use></svg> 合作伙伴
                                </h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-link__pic clearfix">
                                <li class="col-md-7 col-sm-4 col-xs-3">
                                    <a href="http://v.qq.com/" target="_blank" title=""> <img src="/static/image/qq.png"> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--合作-->
                <!--友链-->
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <ul class="stui-vodlist clearfix">
                    </ul>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-link"></use></svg> 友情链接
                                </h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <div class="col-xs-1">
                                <ul class="stui-link__text clearfix">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--友链-->
            </div>
        </div>
    </div>

    <script>
        $('.hot-cate-title li').hover(function () {
            var index = $(this).data('index'),
                cate_list = $('.hot-cate-list[data-pid=' + index + ']');
            if ($('.hot-cate-title.activee').data('index') === index) {
                //悬浮在已经选中的分类
                return true;
            }
            //移除已经选中的class
            $('.hot-cate-title li').removeClass('activee');
            $('.hot-cate-list').removeClass('activee');
            $(this).addClass('activee');
            cate_list.addClass('activee');
        }, function () {

        });
    </script>
    <script type="text/javascript" src="/static/js/history.js"></script>
    <script type="text/javascript">
        var vod_name = '新世界',
            vod_url = window.location.href,
            vod_part = '1';
    </script>
    <div class="stui-foot clearfix">
        <div class="container">
            <div class="row">
                <div class="col-pd text-center masked">
                    <p>本网站内容收集于互联网，青瓜影视不承担任何由于内容的合法性及健康性所引起的争议和法律责任<br> Copyright ©&nbsp; 青瓜影视 版权所有</p>
                    <p class="text-center"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--底部-->
<!--wap下的底部菜单start-->
<div id="footer" class="border-t hidden-lg hidden-md">
    <ul class="flex-wrap" style="font-weight:bold">
        <a class="flex-con paiban " href="<?php echo site_url('home/index');?>">
            <li onclick="randomSwitchBtn(this);">首页</li>
        </a>
        <a class="flex-con paiban " href="javascript:void(0);">
            <li onclick="randomSwitchBtn(this);">抢先</li>
        </a>
        <a class="flex-con paiban " href="javascript:void(0);">
            <li onclick="randomSwitchBtn(this);">大厅</li>
        </a>
        <a class="flex-con paiban " href="javascript:void(0);">
            <li onclick="randomSwitchBtn(this);">福利</li>
        </a>
        <a class="flex-con paiban " href="javascript:void(0);">
            <li onclick="randomSwitchBtn(this);">我的</li>
        </a>
    </ul>
</div>
<!--wap下的底部菜单end-->
<ul class="stui-extra clearfix">
    <li><a class="backtop" href="javascript:scroll(0,0)" style="display: none;"><i class="icon iconfont icon-less"></i></a>
    </li>
    <li class="visible-xs"><a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a></li>
    <li class="hidden-xs"><span><i class="icon iconfont icon-qrcode"></i></span>
        <div class="sideslip">
            <div class="col-pd  text-center">
                <img width="150" height="150" class="qrcode" src="#">
                <p class="text-center font-12">扫码用手机访问</p>
            </div>
        </div>
    </li>
    <li title="会员中心"><a class="open-share" href="#"><i class="icon iconfont icon-smile"></i></a>
    </li>
    <li><a href="#"><i class="icon iconfont icon-comments"></i></a></li>
</ul>
<!--<script src="/static/js/stats.js"></script>-->
<script src="/static/js/player.js"></script>
</body>

</html>