<?php $this->load->view('common/header.php') ?>

<body>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <?php $this->load->view('common/nav.php') ?>
        <!-- Header End -->

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <div class="error-area pt--90 pt-xl--70 pb--120 pb-xl--100 pb-lg--95 pb-sm--90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 text-center">
                            <div class="error">
                                <h1>404</h1>
                                <h2>提示! 页面没找到</h2>
                                <p>当前你要访问的页面不存在, 或临时不可用,请重试.</p>

                                <a href="index.html" class="btn">返回首页</a>
                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Wrapper End -->

        <?php $this->load->view('common/footer.php') ?>
    </div>
    <!-- Main Wrapper End -->


<?php $this->load->view('common/js.php') ?>