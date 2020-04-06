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
                        <h1 class="page-title">申请平台</h1>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url('chinese/index');?>">网站首页</a></li>
                            <li class="current"><span>申请平台</span></li>
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
                                    <h2>申请开通</h2>
                                    <hr class="delimeter">
                                </div>
                                <font style="color:red"><b>请认真填写,审核通过后我们将发送用户名与密码到你的邮箱做进一步的设定</b></font><br>
                                <div class="form" id="contact-form">
                                    <label>邮箱*</label> : <input type="email" name="con_email" id="con_email" class="form__input mb--30" placeholder="电子邮箱">
                                    <label>名字*</label> :<input type="text" name="con_name" id="con_name" class="form__input mb--30" placeholder="你的名字">
                                    <label>电话*</label> :<input type="text" name="con_wc" id="con_wc" class="form__input mb--30" placeholder="+8613688889999">
                                    <label>意向子域名*</label> :<span>
                                    	<input type="text" name="con_sub" id="con_sub" class="form__input mb--5" placeholder="cool">
                                    	.<select name="fee">
                                    		<option class="m-domain" value="0"><?php echo config_item('site_domain'); ?></option>
                                        </select></span><br>
                                    <label>站点名称*</label> :<input type="text" name="site_name" id="site_name" class="form__input mb--30" placeholder="站点名称">
                                    <label>站点地址*</label> :<input type="text" name="con_site" id="con_site" class="form__input mb--30" placeholder="http://wwww.google.com">
                                    <label>站点Logo*</label> :<input type="text" name="con_logo" id="con_logo" class="form__input mb--30" placeholder="logo路径">
                                    <textarea class="form__input form__input--textarea mb--30" placeholder="提示信息" id="con_message" name="con_message"></textarea>
                                    <button type="button" class="btn btn-shape-round form__submit">发送</button>
                                    <div class="form__output"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Area End -->
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


<script>
    // $(function () {
    //     $.post('./app/function.php?func=getdomain',{},function(ret) {
    //     	if(ret.code == 0) {
    //     		$('.m-domain').text(ret.data.domain);
    //     	} else {
    //     		alert(ret.msg);
    //     	}
    //     },'json');
    // });
    
    $('.form__submit').on('click',function() {
    	let email = $('#con_email').val();
    	let username = $('#con_name').val();
    	let contact = $('#con_wc').val();
    	let sub_domain = $('#con_sub').val();
    	let site_url = $('#con_site').val();
    	let message = $('#con_message').val();
        let site_name = $('#site_name').val();
        let logo = $('#con_logo').val();
    	

		if(!email || !username || !contact || !sub_domain || !site_url || !site_name || !logo) {
			alert("请填写完整信息");
			return ;
		}
	
		
		$.post("<?php echo site_url('chinese/apply');?>",{
			email:email,
			username:username,
			contact:contact,
			sub_domain:sub_domain,
			site_url:site_url,
			message:message,
            site_name:site_name,
            logo:logo,
		},function(ret) {
			if(ret.code===0) {
				alert(ret.msg);
				//window.location.reload();
			} else {
				alert(ret.msg);
			}
		},'json'); 
    });
</script>





