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
        
        @media (max-width:767px) {
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
    </style>
    <style type="text/css">
        .stui-header__top {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);
        }
        
        .stui-header__top.headroom--not-top {
            background: #292838;
        }

        .fix-bottom {
            width: 100%;
            position: fixed;
            bottom: 0;
        }
    </style>

    <script charset="utf-8" src="/static/js/ab77b6ea7f3fbf79.js"></script>
    <script type="text/javascript" src="/static/js/jquery.autocomplete.js"></script>
    <title>极速影视 - 在线免费高清电影！</title>
    <meta name="keywords" content="电影,视频大全,在线高清电影,付费电影,免费电影,剧集,电影,在线观看,VIP高清电影直播">
    <meta name="description" content="专门做剧集,电影等在线播放服务，本页面提供电影的相关内容。">
</head>

<body style="padding: 0;" sip-shortcut-listen="true"><svg aria-hidden="true" style="position: absolute; width: 0px; height: 0px; overflow: hidden;">
    <style type="text/css">
        .stui-header__top {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);
        }
        
        .stui-header__top.headroom--not-top {
            background: #292838;
        }
        
        .am-slider-desc {
            background-color: rgba(0, 0, 0, .7);
            width: 100%;
            color: #f8f8f8;
        }
        
        .am-slider-content {
            background-color: rgba(0, 0, 0, .7);
            position: absolute;
            bottom: 0;
            padding: 10px;
            width: 100%;
            color: #e4dddd;
        }
        
        h2.am-slider-title {
            color: #fff;
            text-align: center;
        }
    </style>
    <div id="wrap" class="flex-wrap flex-vertical">
        <div id="main" class="flex-con">
            <!--head-->
            <header class="stui-header__top clearfix top-fixed headroom--not-bottom headroom--not-top top-fixed-down" id="header-top">
                <div class="container">
                    <div class="row">
                        <div class="stui-header_bd clearfix">
                            <div class="stui-header__logo">
                                <a class="logo" href="http://127.0.0.1/index.html"></a>
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
            <script type="text/javascript">
                $(".stui-header__user li,.stui-header__menu li").click(function() {
                    $(this).find(".dropdown").toggle();
                });
                $(".open-search").click(function() {
                    var Seacrh = $(".stui-header__search");
                    Seacrh.addClass("active").siblings().hide();
                    Seacrh.find(".form-control").focus();
                    $(".search-close").click(function() {
                        Seacrh.removeClass("active").siblings().show();
                    });
                });
            </script>
            <!--head-->

            <div class="container">
                <div class="row">
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box">
                            <div class="stui-pannel_hd">
                                <div class="stui-pannel__head active bottom-line clearfix">
                                    <h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>搜索结果</h3>
    </div>
    </div>
    </div>
    <!--循环显示结果开始-->
    <?php foreach ($movies as $v) { ?>
    <div class="stui-pannel-box">
        <div class="stui-content__thumb">
            <a class="stui-vodlist__thumb picture v-thumb" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>">
                <img src="<?php echo $v['Image_big_t']; ?>" data-original="<?php echo $v['Image_big_t']; ?>" class="lazyload" alt="<?php echo $v['Name']; ?>" title="<?php echo $v['Name']; ?>" width="100%" style="">
                <span class="pic-text text-right"></span>
            </a>
        </div>
        <div class="stui-content__detail">
            <h1 class="title"><a href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>" title="<?php echo $v['Name']; ?>"><?php echo $v['Name']; ?></a></h1>
            <p class="data">地区 ：<?php echo $v['country_txt']; ?></p>
            <p class="data">年代 ：<?php echo $v['Year']; ?></p>
            <p class="data">状态 ：更新至<span><?php echo $v['Episodes']; ?></span>/共<?php echo $v['Episodes']; ?>集 </p>
            <p class="data">类型 ： <?php echo $v['type_txt']; ?>
            </p>
            <p class="data">导演 ： <?php echo $v['directors_txt']; ?>
            </p>
            <p class="data">演员 ： <?php echo $v['actors_txt']; ?></p>
            <p class="data">标签 ： <?php echo $v['tags_txt']; ?></p>
            <p class="data"> <span class="detail-sketch">简介：<?php echo $v['Content']; ?></span></p>
        </div>
    </div>
    <?php } ?>
    <!--循环显示结果结束-->

    <br><br>

    </div>
    </div>
    </div>

    </div>
    </div>
    <div class="s-common-body fix-bottom">
        <div class="stui-foot clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-pd text-center masked">
                        <p>本网站内容收集于互联网，极速影视不承担任何由于内容的合法性及健康性所引起的争议和法律责任<br> Copyright ©&nbsp; 极速影视 版权所有</p>
                        <p class="text-center"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="border-t hidden-lg hidden-md">
        <ul class="flex-wrap" style="font-weight:bold">
            <a class="flex-con paiban " href="http://127.0.0.1/index.html">
                <li onclick="randomSwitchBtn(this);">首页</li>
            </a>
            <a class="flex-con paiban " href="http://127.0.0.1/cx.html">
                <li onclick="randomSwitchBtn(this);">抢先</li>
            </a>
            <a class="flex-con paiban " href="http://127.0.0.1/hall.html">
                <li onclick="randomSwitchBtn(this);">大厅</li>
            </a>
            <a class="flex-con paiban " href="http://127.0.0.1/fuli.html">
                <li onclick="randomSwitchBtn(this);">福利</li>
            </a>
            <a class="flex-con paiban " href="http://127.0.0.1/ucenter">
                <li onclick="randomSwitchBtn(this);">我的</li>
            </a>
        </ul>
    </div>
    <ul class="stui-extra clearfix">
        <li><a class="backtop" href="javascript:scroll(0,0)" style=""><i class="icon iconfont icon-less"></i></a></li>
        <li class="visible-xs"><a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a></li>
        <li class="hidden-xs"><span><i class="icon iconfont icon-qrcode"></i></span>
            <div class="sideslip">
                <div class="col-pd  text-center">
                    <img width="150" height="150" class="qrcode" src="#">
                    <p class="text-center font-12">扫码用手机访问</p>
                </div>
            </div>
        </li>
        <li title="会员中心"><a class="open-share" href="http://127.0.0.1/ucenter"><i class="icon iconfont icon-smile"></i></a></li>
        <li><a href="http://127.0.0.1/book.html"><i class="icon iconfont icon-comments"></i></a></li>
    </ul>
</body>

</html>