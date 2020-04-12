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
    <title>新世界-极速影视 - 在线免费高清电影！</title>
    <meta name="keywords" content="新世界,电影,视频大全,在线高清电影,付费电影,免费电影,剧集,电影,在线观看,VIP高清电影直播">
    <meta name="description"
          content="新世界,主要讲述新中国解放前夕，白纸坊警署小警察徐天在追查未婚妻贾小朵被害案件过程中，意外参与到中国共产党和平解放北平的事业当中。面对动荡的时局，金海、铁林和徐天三兄弟所处不同的位置，在...">
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
                                <img src="<?php echo $this->configs['site_logo']; ?>" alt="Logo" width="140px;">
                            </a>
                        </div>
                        <ul class="stui-header__menu">
                            <li class=""><a href="<?php echo site_url('home/index');?>">首页</a></li>
                            <li class=" hidden-xs"><a href="<?php echo site_url('home/movielist');?>">电影</a></li>
                            <li><a href="javascript:;">更多 <i class="icon iconfont icon-moreunfold"></i></a>
                                <ul class="dropdown">
                                    <li class=""><a href="#">电视剧</a></li>
                                    <li class=""><a href="#">综艺</a></li>
                                    <li class=""><a href="#">动漫</a></li>
                                </ul>
                            </li>
                        </ul>
                        <script type="text/javascript" src="/static/js/jquery.autocomplete.js"></script>
                        <div class="stui-header__search">
                            <input type="text" id="wd" name="wd" class="mac_wd form-control" value=""
                                   placeholder="输入明星、影片关键词" onkeydown="if(event.keyCode==13){submi.click()}">
                            <button class="submit" id="submi" type="submit" onclick="submit()"><i
                                        class="icon iconfont icon-search"></i></button>
                            <a class="search-close visible-xs" href="javascript:;"><i
                                        class="icon iconfont icon-close"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="focusbanner">
            <div class="container">
<!--                <div class="js_login">-->
<!---->
<!--                    <a href="User_Login.asp" class="signin-loader" title="登录"><p class="btn btn-login">登录</p></a>&nbsp;-->
<!--                    <div class="btn btn-user"><a href="UserReg.asp" class="signup-loader" title="注册">注册</a></div>&nbsp;-->
<!---->
<!--                </div>-->
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
                <div class="col-lg-wide-75 col-xs-1">

                    <!-- 播放器-->
                    <div class="stui-player__item myui-player__item clearfix" style="background-color: #fff;">


                        <div style="overflow:hidden">
                            <!--播放广告start-->
                            <div id="player_adimg"
                                 style="position:relative;z-index:209910539;border-radius:5px;max-width:100%;max-height:80%;height: 100%;width: 100%;display: none;background-color:#000;">
                                <div class="box">
                                    <div class="ad"><!--广告--><a href="#" target="_blank"><img
                                                    src="/static/image/ad.jpg"/></a></div>
                                    <div class="ad_time">时间还剩<span id="t">10</span>秒</div>
                                    <div class="close"></div>
                                </div>
                            </div>
                            <!--播放广告end-->
                            <!--暂停广告start-->
                            <div id="pause_adimg"
                                 style="position: absolute; z-index: 209910539; border-radius: 5px; max-width: 100%; max-height: 80%; height: 200px; width: 300px; background-color: rgb(204, 204, 204); /*! display: none; */overflow: hidden;top: 50%;left: 50%;transform: translate(-50%,-50%);display:none;">
                                <div class="box">
                                    <div class="ad"><!--广告--><a href="#" target="_blank"><img
                                                    src="/static/image/ad.jpg"></a></div>
                                    <div class="close" style="display: block;"></div>
                                </div>
                                <div></div>
                            </div>
                            <!--暂停广告end-->

                            <div id="dplayer"></div>
                        </div>
                        <div class="stui-player__detail detail" id="dianshijuid">
                            <ul class="more-btn">
                                <li><a href="javascript:void(0)" onclick="location.reload()"
                                       class="btn btn-sm btn-default" title="刷新">刷新</a></li>
                                <!--  <li>
                                     <div class="dropdown">
                                         <a href="javascript:scroll(0,0)" class="dropbtn btn btn-sm btn-default" title="切换线路">线路</a>
                                         <div class="dropdown-content">
                                             <span class="text-muted" id="xlus">
                                             <a onclick="xldata(this)" data-jk="" class="btn btn-sm btn-default jkbtn0">推荐</a>
                                         </div>
                                     </div>
                                 </li> -->
                                <li><a href="" class="btn btn-sm btn-default" title="收藏">收藏</a></li>
                                <!--仅当为剧集类型时显示start-->
                                <li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-prev"
                                       title="上一集"><i class="icon iconfont icon-back hidden-xs"></i> 上一集</a></li>
                                <li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-next" title="下一集">下一集
                                        <i class="icon iconfont icon-more hidden-xs"></i></a></li>
                                <!--仅当为剧集类型时显示end-->
                            </ul>
                            <h1 class="title" id="xuji"><a
                                        href="http://127.0.0.1/seacher-%E6%96%B0%E4%B8%96%E7%95%8C.html" title="新世界"
                                        id="movie_name"><?php echo $detail['Name']; ?></a><span class="js jjpos">第1集</span></h1>
                            <span class="text-muted">地区：</span><?php echo $detail['country_txt']; ?><span class="split-line"></span>
                            <span class="text-muted">年份：</span><?php echo $detail['Year']; ?><span class="split-line"></span>
                            <span class="text-muted">状态：</span>更新至<span><?php echo $detail['Episodes']; ?></span>/共<?php echo $detail['Episodes']; ?>集
                        </div>
                    </div>
                    <!-- 播放器-->
                    <!-- 播放地址-->
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box b playlist mb">
                            <div class="stui-pannel_hd">
                                <div class="stui-pannel__head bottom-line active clearfix"><span
                                            class="more text-muted pull-right">无需安装任何插件，即可快速播放</span>
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-play"></use>
                                        </svg>
                                        播放列表
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid">
                                <ul class="stui-content__playlist column10 clearfix" id="playlist">
                                </ul>
                            </div>
                            <div style="display: none;" Name="EpisodesList" Id="EpisodesList"
                                 data-img="http://dik.img.kttpdq.com/pic/93/64994/5510b1712740f4f5.jpg">
                                <?php foreach ($episodes as $v) { ?>
                                <li><?php echo $v['Episode']; ?>,<?php echo $v['Code'].'p'; ?>,<?php if(strpos($v['Play_url'], 'http://') !== false || strpos($v['Play_url'], 'https://') !== false) { echo $v['Play_url']; } else { echo $this->cfgs['m3u8_url'] . $v['Play_url']; }?></li>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                    <!-- 播放地址-->
                    <!-- 剧情简介start-->
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box">
                            <div class="stui-pannel__head bottom-line active clearfix">
                                <div class="stui-pannel__head clearfix">
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-jie"></use>
                                        </svg>
                                        剧情简介
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="stui-pannel-box">
                            <div class="stui-content__thumb">
                                <a class="stui-vodlist__thumb picture v-thumb"
                                   href="#" title="新世界">
                                    <img src="<?php echo $detail['Image_big_t']; ?>"
                                         data-original="<?php echo $detail['Image_big_t']; ?>"
                                         class="lazyload" alt="<?php echo $detail['Name']; ?>" title="<?php echo $detail['Name']; ?>" width="100%">
                                    <span class="pic-text text-right"></span>
                                </a>
                            </div>
                            <div class="stui-content__detail">
                                <h1 class="title"><a href="http://1gh.cc/seacher-%E6%96%B0%E4%B8%96%E7%95%8C.html"
                                                     title="<?php echo $detail['Name']; ?>"><?php echo $detail['Name']; ?></a></h1>
                                <p class="data">地区 ：<?php echo $detail['country_txt']; ?></p>
                                <p class="data">年代 ：<?php echo $detail['Year']; ?></p>
                                <p class="data">状态 ：更新至<span><?php echo $detail['Episodes']; ?></span>/共<?php echo $detail['Episodes']; ?>集 </p>
                                <p class="data">类型 ： <?php echo $detail['type_txt']; ?>
                                </p>
                                <p class="data">导演 ： <?php echo $detail['directors_txt']; ?>
                                </p>
                                <p class="data">
                                    演员 ： <?php echo $detail['actors_txt']; ?>
                                </p>
                            </div>
                            <div class="stui-pannel_bd">
                                <p class="col-pd detail">
                                    <span class="detail-sketch">简介：<?php echo $detail['Content']; ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 剧情简介end-->
                    <br>
                    <!-- 猜你喜欢-->
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box">
                            <div class="stui-pannel_hd">
                                <div class="stui-pannel__head bottom-line active clearfix">
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-like"></use>
                                        </svg>
                                        猜你喜欢
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd">
                                <ul class="stui-vodlist__bd clearfix">
                                    <?php foreach ($rand as $v) { ?>
                                    <li class="col-md-6 col-sm-4 col-xs-3">
                                        <div class="stui-vodlist__box">
                                            <a title="<?php echo $v['Name']; ?>" class="stui-vodlist__thumb lazyload"
                                               href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>"
                                               data-original="<?php echo $v['Image_big_t']; ?>"
                                               style="background-image: url(&quot;https://p.ssl.qhimg.com/dmfd/180_246_/d/dy_f96bdd07e33770bed8780f143f00f8e7.&quot;);">
                                                <span class="play hidden-xs"></span>
                                                <span class="pic-text text-right"></span>
                                            </a>
                                            <div class="stui-vodlist__detail padding-0">
                                                <h4 class="title text-overflow">
                                                    <a title="<?php echo $v['Name']; ?>" href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>"><?php echo $v['Name']; ?></a>
                                                </h4>
                                                <p class="text text-overflow text-muted hidden-xs"><?php echo $v['Content']; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 猜你喜欢-->
                </div>
                <!--左边结束-->
                <script>
                    function bofang1111(obj) {
                        var href = $(obj).attr('data-href');
                        var text = $(obj).text();
                        $('.js').text('-' + text + '');
                        $.each($('.lipbtn'), function () {
                            $(this).attr('id', '');
                        });
                        $(obj).attr('id', 'ys');
                        var jiekou = $('.jkbtn0').attr('data-jk');
                        if (href != '' || href != null) {
                            setTimeout(function () {
                                $('#video').attr('src', jiekou + href);
                            }, 0)
                        }
                    }

                    function xldata(obj) {
                        var url = $(obj).attr('data-jk');
                        $.each($('.jkbtn0'), function () {
                            $(this).removeClass('jkbtn0');
                        });
                        $(obj).addClass('jkbtn0');
                        var src = $('#ys').attr('data-href');
                        $('#video').attr('src', url + src);
                    }
                </script>
                <script>
                    $(function () {
                        $('#btn-prev').click(function () {
                            $('#ys').parent().prev().children('a:eq(0)').click();
                        }) //上一集
                        $('#btn-next').click(function () {
                            $('#ys').parent().next().children('a:eq(0)').click();
                        }) //上一集
                    })
                </script>

                <!--右边开始-->
                <div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">
                    <!-- 扫码-->
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box clearfix">
                            <div class="col-pd text-center" style="border: 1px solid #eee; border-radius: 5px;">
                                <p style="padding: 30px; margin: 0;"><img src="" class="qrcode"></p>
                                <p>扫码浏览手机版</p>
                            </div>
                        </div>
                    </div>
                    <!-- 扫码-->
                    <!--排行榜-->
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box">
                            <div class="stui-pannel_hd">
                                <div class="stui-pannel__head active clearfix">
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-bang"></use>
                                        </svg>
                                        影视热度排行榜
                                    </h3>
                                </div>
                                <div class="stui-pannel__head bottom-line clearfix">
                                    <!--可循环4个,定义不同的data-index-->
                                    <ul class="hot-cate-title">
                                        <li data-index="dy" class="activee">电影</li>
                                        <li data-index="dy" class="">电视剧</li>
                                    </ul>
                                    <!--可循环4个,定义不同的data-index-->
                                </div>
                            </div>
                            <div class="stui-pannel_bd clearfix">
                                <!--注意data-pid与上方的data-index对应-->
                                <ul class="hot-cate-list stui-vodlist__text active col-pd clearfix activee"
                                    data-pid="dy">
                                    <?php foreach ($hots as $k=>$v) { ?>
                                    <li class="col-xs-1 padding-0"><a class="text-overflow"
                                                                      href="<?php echo site_url('home/player');?>?mid=<?php echo $v['Id'];?>"
                                                                      title="<?php echo $v['Name']; ?>"><span
                                                    class="am-badge am-round pull-left"><?php echo ++$k; ?></span><span
                                                    class="text-muted pull-right"><?php echo $v['Score']; ?>万</span><em class="text-red"></em>&nbsp;<?php echo $v['Name']; ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--排行榜-->
                    <!--相关明星-->
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box">
                            <div class="stui-pannel_hd">
                                <div class="stui-pannel__head active bottom-line clearfix">
                                    <h3 class="title">
                                        <svg class="iconm" aria-hidden="true">
                                            <use xlink:href="#icon-star"></use>
                                        </svg>
                                        相关明星
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd">
                                <ul class="stui-vodlist__bd clearfix">
                                    <?php foreach ($acs as $v) { ?>
                                    <li class="col-md-4" style="text-align: center" ;="">
                                        <div class="stui-vodlist__box">
                                            <a title="<?php echo $v['Name']; ?>" class="stui-vodlist__thumb lazyload"
                                               href="javascript:void(0);"
                                               data-original="<?php echo $v['Image_t']; ?>"
                                               style="padding-top: 100%; border-radius: 50%; background-image: url(&quot;https://p.ssl.qhimg.com/dmfd/150_150_/t01384224b1e796520c.jpg&quot;);">
                                            </a>
                                            <div class="stui-vodlist__detail padding-0">
                                                <h4 class="title text-overflow">
                                                    <a title="<?php echo $v['Name']; ?>"
                                                       href="javascript:void(0);"><?php echo $v['Name']; ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--相关明星-->
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box clearfix">
                            <div class="col-pd text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <!--右边结束-->
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