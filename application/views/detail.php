<?php $this->load->view('common/header.php') ?>

    <style>
        .h-35 {
            margin-bottom: 5px;
        }
    </style>

<body>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <?php $this->load->view('common/nav.php') ?>
        <!-- Header End -->


        <section class="page-title-area bg-image ptb--80" data-bg-image="/assets/img/bg/page_title_bg.jpg" style="background-image: url(&quot;/assets/img/bg/page_title_bg.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">影片详情</h1>
                        <ul class="breadcrumb" style="background-color: transparent;">
                            <li><a href="<?php echo site_url('home/index');?>">网站首页</a></li>
                            <li class="current"><span>影片详情</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <!-- Skoll Area Start -->
            <section class="skill-area mb--9pt3 mb-md--8pt9">
                <div class="container">
                    <h2 class="text-uppercase mb--25"></h2>
                    <h5 class="text-uppercase mb--25">当前位置：首页><?php echo $detail['type_txt']; ?>><?php echo $detail['cat_txt']; ?>><?php echo $detail['Name']; ?></h5>
                    <div class="row">
                        <div class="col-lg-3 mb-md--38">
                            <div class="heading mb--30">
                                <img src="<?php
                                if(empty($detail['Image_big'])) {
                                    echo '/assets/images/no.jpg';
                                } else {
                                    if(strpos($detail['Image_big'], 'http://') !== false || strpos($detail['Image_big'], 'https://') !== false)
                                        echo $detail['Image_big'];
                                    else
                                        echo $this->configs['img_url'] . $detail['Image_big'];
                                }
                                ?>" alt="" class="">
                            </div>
                        </div>
                        <div class="col-lg-9 mb-md--38">
                            <div class="heading mb--30">
                                <p class="h-35">片名：<?php echo $detail['Name']; ?></p>
                                <p class="h-35">状态：HD</p>
                                <p class="h-35">主演：<?php echo $detail['actors_txt']; ?></p>
                                <p class="h-35">类型：<?php echo $detail['type_txt']; ?>&nbsp;&nbsp;<?php echo $detail['cat_txt']; ?></p>
                                <p class="h-35">导演：<?php echo $detail['directors_txt']; ?></p>
                                <p class="h-35">地区：<?php echo $detail['country_txt']; ?></p>
                                <p class="h-35">年份：<?php echo $detail['Year']; ?></p>
                                <p class="h-35">标签：<?php echo $detail['tags_txt']; ?></p>
                                <p class="h-35">剧情简介：<?php echo $detail['Content']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: -10px;">
                        <?php foreach ($episodes as $rate=>$episode) {  ?>
                            <div class="" style="margin-bottom: 15px;">
                            <p>在线播放【<?php echo $rate; ?>p】</p>
                            <?php foreach ($episode as $k=>$v) {  ?>
                            <a href="<?php echo site_url('home/player');?>?id=<?php echo $v['Id'];?>" class="btn btn-defalut" style="margin: 3px;" ><?php echo $v['Title']; ?></a>
                            <?php } ?>
                            </div>
                        <?php } ?>

                    </div>
                    <br/>


                    <div class="heading">
                        <h2 class="mb--18">你也可能喜欢以下影片：</h2>
                    </div>
                    <div class="row">
                        <?php foreach ($rand as $v) {  ?>
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
            <!-- Skoll Area End -->

            <!-- CTA Area Start -->
            <section class="cta-area ptb--60 pb-sm--65 plr--45 bg-color" data-bg-color="#202020" style="background-color: rgb(32, 32, 32);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 text-md-left text-center mb-sm--15">
                            <h3 class="color--white">需要帮助?</h3>
                            <p class="color--white lh-1pt5">有关帐户与财务的问题,请随时与我们联络.</p>
                        </div>
                        <div class="col-md-4 text-md-right text-center">
                            <a href="<?php echo site_url('home/contact');?>" class="btn btn-dark">联络我们</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CTA Area End -->
        </main>
        <!-- Main Content Wrapper End -->

        <?php $this->load->view('common/footer.php') ?>
    </div>
    <!-- Main Wrapper End -->


<?php $this->load->view('common/js.php') ?>