<?php $this->load->view('common/header.php') ?>

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
                        <h1 class="page-title">联络我们</h1>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url('home/index');?>">网站首页</a></li>
                            <li class="current"><span>联络我们</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <div class="inner-page-content mt--9pt5">
                <!-- Contact Area Start -->
                <section class="contact-area mb--9pt5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 mb-md--50">
                                <div class="heading mb--42">
                                    <h2>Get In Touch</h2>
                                    <hr class="delimeter">
                                </div>
                                <div class="contact-info mb--30">
                                    <p><i class="fa fa-map-marker"></i>221b Baker St, Marylebone <br>London NW1 6XE, UK
                                    </p>
                                    <p><i class="fa fa-phone"></i> +1-202-242-8157</p>
                                    <p><i class="fa fa-fax"></i> +1-202-501-1829</p>
                                    <p><i class="fa fa-clock-o"></i> Mon – Fri : 8:00 – 21:00</p>
                                </div>

                            </div>
                            <div class="col-md-7 offset-lg-1">
                                <div class="heading mb--42">
                                    <h2>联络我们</h2>
                                    <hr class="delimeter">
                                </div>
                                <form action="mail.php" class="form" id="contact-form">
                                    <input type="email" name="con_email" id="con_email" class="form__input mb--30" placeholder="Email*">
                                    <input type="text" name="con_name" id="con_name" class="form__input mb--30" placeholder="Name*">
                                    <textarea class="form__input form__input--textarea mb--30" placeholder="Message" id="con_message" name="con_message"></textarea>
                                    <button type="submit" class="btn btn-shape-round form__submit">发送</button>
                                    <div class="form__output"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Area End -->

                <!-- Google Map Area Start -->
                <div class="google-map-area">
                    <div id="google-map" style="position: relative; overflow: hidden;">
                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                    <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -200, -154);">
                                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                            <div style="width: 24px; height: 24px; overflow: hidden; position: absolute; left: -12px; top: -24px; z-index: 0; animation-duration: 700ms; animation-iteration-count: infinite; animation-name: _gm6538;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -200, -154);">
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 0px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: -256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: -256px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 0px;"></div>
                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 256px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -200, -154);">
                                                <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1209!3i1538!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=6301"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1540!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=26956"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1209!3i1540!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=19100"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1208!3i1538!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=8265"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1204!3i1540!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=28920"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1538!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=10229"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1204!3i1539!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=116964"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1538!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=14157"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1539!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=113036"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1539!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=115000"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1204!3i1538!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=16121"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1209!3i1539!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=107144"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1203!3i1538!4i256!2m3!1e0!2sm!3i500215486!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=78373"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1203!3i1539!4i256!2m3!1e0!2sm!3i500215486!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=48145"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1208!3i1539!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=109108"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1539!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=111072"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1540!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=24992"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1208!3i1540!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=21064"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1540!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=23028"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1203!3i1540!4i256!2m3!1e0!2sm!3i500215486!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=91172"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1538!4i256!2m3!1e0!2sm!3i500215498!2m3!1e2!6m1!3e5!3m17!2szh-CN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0&amp;token=12193"
                                                        style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                        <p class="gm-style-pbt"></p>
                                    </div>
                                    <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                        <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                <div title="Contixs" style="width: 24px; height: 24px; overflow: hidden; position: absolute; opacity: 0; cursor: pointer; touch-action: none; left: -12px; top: -24px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div><iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                    <a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=40.74061,-73.935242&amp;z=12&amp;t=m&amp;hl=zh-CN&amp;gl=US&amp;mapclient=apiv3" title="在 Google 地图中打开此区域（会打开一个新窗口）" style="position: static; overflow: visible; float: none; display: inline;">
                                        <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                    </a>
                                </div>
                                <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 613px; top: 85px;">
                                    <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">地图数据</div>
                                    <div style="font-size: 13px;">地图数据 ©2020 GS(2011)6020 Google</div><button draggable="false" title="关闭" aria-label="关闭" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div>
                                <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 144px; bottom: 0px; width: 221px;">
                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">地图数据</a><span>地图数据 ©2020 GS(2011)6020 Google</span></div>
                                    </div>
                                </div>
                                <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                    <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">地图数据 ©2020 GS(2011)6020 Google</div>
                                </div>
                                <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 84px; bottom: 0px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/zh-CN_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">使用条款</a></div>
                                </div><button draggable="false" title="切换全屏视图" aria-label="切换全屏视图" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="向 Google 报告道路地图或图像中的错误" href="https://www.google.com/maps/@40.74061,-73.935242,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">报告地图错误</a></div>
                                </div>
                                <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;">
                                    <div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;">
                                        <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="放大" aria-label="放大" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                            <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="缩小" aria-label="缩小" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div>
                                    </div>
                                    <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                                        <div style="width: 40px; height: 40px;"><button draggable="false" title="将地图旋转 90 度" aria-label="将地图旋转 90 度" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                            <button draggable="false" title="倾斜地图" aria-label="倾斜地图" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                    style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                    style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                    style="width: 18px;"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                            <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div>
                            <div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">此页面无法正确加载 Google 地图。</span></div>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">您是否拥有此网站？</a></td>
                                    <td style="text-align: right;"><button class="dismissButton">确定</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Google Map Area End -->

                <!-- Brand Logo Area Start -->
                <div class="brand-logo-area bg-color ptb--100" data-bg-color="#121420" style="background-color: rgb(18, 20, 32);">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <div class="element-carousel slick-carousel-0 slick-initialized slick-slider" data-slick-options="{
                                    &quot;slidesToShow&quot;: 5,
                                    &quot;autoplay&quot;: true
                                }" data-slick-responsive="[
                                    {&quot;breakpoint&quot;: 1200, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4}},
                                    {&quot;breakpoint&quot;: 992, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3}},
                                    {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2}},
                                    {&quot;breakpoint&quot;: 480, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1}}
                                ]">
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 1370px; transform: translate3d(0px, 0px, 0px);">
                                            <div class="item slick-slide slick-current slick-active first-active" data-slick-index="0" aria-hidden="false" style="width: 274px;" tabindex="0">
                                                <figure>
                                                    <img src="/assets/img/brand/brand-01.png" alt="Brand" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 274px;" tabindex="0">
                                                <figure>
                                                    <img src="/assets/img/brand/brand-02.png" alt="Brand" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 274px;" tabindex="0">
                                                <figure>
                                                    <img src="/assets/img/brand/brand-03.png" alt="Brand" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 274px;" tabindex="0">
                                                <figure>
                                                    <img src="/assets/img/brand/brand-04.png" alt="Brand" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="item slick-slide slick-active last-active" data-slick-index="4" aria-hidden="false" style="width: 274px;" tabindex="0">
                                                <figure>
                                                    <img src="/assets/img/brand/brand-05.png" alt="Brand" class="mx-auto">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Brand Logo Area End -->
            </div>
        </main>
        <!-- Main Content Wrapper End -->

        <?php $this->load->view('common/footer.php') ?>
    </div>
    <!-- Main Wrapper End -->


<?php $this->load->view('common/js.php') ?>