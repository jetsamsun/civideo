
<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="/template/default/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/template/default/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="/template/default/css/demo.css" rel="stylesheet" />
	<!--   Core JS Files   -->
	<script src="/template/default/js/jquery.min.js" type="text/javascript"></script>
	<script src="/template/default/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/template/default/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="/template/default/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="/template/default/js/jquery.validate.min.js"></script>
	
</head>
<body>
	<div class="image-container set-full-height" style="background-image: url('/template/default/img/bg1.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="#">
            <div class="logo-container">
                <div class="logo">
                    <img src="<?php echo $data['logo']; ?>" id="img-logo" >
                </div><br>
                <div class="brand">

                </div>
            </div>
        </a>

		<!--  Made With Material Kit  -->
		<a href="https://www.shoufuzhan.com/?source=" class="made-with-mk">
			<div class="brand"><img src="/template/default/img/logo.png" style="width: 32px;margin-top: -6px;margin-left: -2px;"></div>
			<div class="made-with">服务商: <strong>Shoufuzhan.com</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
			                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		<span class="sitename"><?php echo $data['site_name']; ?></span> 在线支付平台
		                        	</h3>
									<h5>请完成以下交易.</h5>
		                    	</div>
								<div class="tab-content" style="min-height:200px">
									<div class="col-sm-12">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">交易单号</label>
		                                        	<div class="input-group">
		                                            	<input type="text" class="form-control" value="0"  id="number" name="number" readonly><span class="input-group-addon"></span></div>
		                                    	</div>
		                                	</div>
									<div class="col-sm-12">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">支付金额</label>
		                                        	<div class="input-group">
		                                            	<input type="number" name="amount" class="form-control" id="amount">
		                                            	<span class="input-group-addon">$</span>
		                                        	</div>
		                                    	</div>
		                                	</div>
								</div>
								<div class="wizard-navigation">
									<ul>
                                        <?php foreach ($data['payments'] as $k=>$v) {?>
			                            <li><a href="#<?php echo $k;?>" data-toggle="tab"><?php echo $v['label'];?></a></li>
                                        <?php }?>
			                        </ul>
								</div>

		                        <div class="tab-content">
                                    <?php foreach ($data['payments'] as $k=>$v) { ?>
		                            <div class="tab-pane" id="<?php echo $k;?>">
		                            	<h4 class="info-text"><?php echo $v['label'];?></h4>
		                                <div class="row">
		                                    <div class="col-sm-12">
                                                <?php foreach ($v['gateway'] as $kk=>$vv) {?>
                                                <?php if($vv['status']==1) {?>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="">
		                                                <input type="radio" name="payment" data-min="<?php echo $vv['min_charge'];?>" data-max="<?php echo $vv['max_charge'];?>" value="<?php echo $vv['gateway'];?>">
		                                                <div class="icon">
		                                                    <img src="<?php echo $vv['ico_pic'];?>" style="width: 60%;padding-top: 20px;">
		                                                </div>
		                                                <h6><?php echo $vv['gateway_text'];?></h6>
		                                            </div>
		                                        </div>
                                                <?php }?>
                                                <?php }?>
		                                    </div>
		                                </div>
		                            </div>
                                    <?php }?>
		                        </div>
		                        <div class="footer">
							
	                            	<div class="pull-right" style="padding-right:300px;">
	                                    <input type='button' class='btn btn-fill btn-primary btn-wd' name='submit' value='提交支付' id="topup-confirm" />
	                                </div>
	                                <div class="pull-left">
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
								
								<div id="paylist_box" style="display:;width:100%;">
			        <div style=" padding-bottom: 60px;">
			            <div>
			                <table class="pay_table">
			                    <thead>
			                    <tr>
			                        <td>订单号</td>
			                        <td>支付方式</td>
			                        <td>支付金额</td>
			                        <td>支付时间</td>
			                        <td>支付状态</td>
			                    </tr>
			                    </thead>
			                    <tbody id="pay_list">
			
			                    </tbody>
			                </table>
			            </div>
			        </div>
			    </div>
			    
			    			<?php if($data['message']) { ?>
								<div class="tab-content" style="min-height:200px">
									<div class="col-sm-8 wc-contact">
		                                    	<p style="margin-bottom: -5px">温馨提示:</p>
		                                    	<pre style="background-color: white; border:dashed 0px white; color: grey"><?php echo $data['message']; ?></pre>
								</div>
							<?php } ?>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->
	    <div class="footer">
	        <div class="container text-center">
	             本支付平台属于  <span class="sitename"><?php echo $data['site_name']?></span> 所有管理. 平台服务商: <a href="<?php echo $this->configs['site_url'];?>" title="<?php echo $this->options['site_name'];?>" target="_blank"><?php echo $this->options['site_name'];?></a>
	        </div>
	    </div>
	</div>

</body>

<script>
    $(function () {
        let rand = Math.ceil(Math.random() * 8999) + 1000;
        $('#number').val((new Date()).valueOf() + '' + rand);
        
        // $.post('/app/function.php?func=getdata',{},function(ret) {
    	//     $('.wc-contact').html(ret.data.contact);
    	// 	$('.m-domain').text(ret.data.domain);
    	// 	$('.sitename').text(ret.data.sitename);
        // 	if(ret.code == 0) {
        // 		$('.img-logo').attr('src',ret.data.logo);
        // 	} else {
        // 		//$('.left').html('<p>'+ret.msg+'</p>');
        // 	}
        // },'json');
    });
    
    $('.choice').click(function () {
		console.log("重新初始化流水号");
        let rand = Math.ceil(Math.random() * 8999) + 1000;
        $('#number').val((new Date()).valueOf() + '' + rand);
    })
	
	$('#topup-confirm').click(function () {
        let number = $('#number').val();
        let paytype = $('input:radio:checked').val();
        let min = $('input:radio:checked').data('min');
        let max = $('input:radio:checked').data('max');
        let amount = $('#amount').val() * 1;

        if (!amount || amount < 0) {
            alert("请输入正确金额");
            return
        }

        if(amount < min || amount > max) {
            alert("金额范围："+min+" ~ "+max);
            return
        }
        
        if(!paytype) {
            alert("请选择支付方式");
            return	
        } 
        
        let url = "<?php echo site_url('pay/index');?>" + "?paytype=" + paytype + "&amount=" + amount + "&number=" + number
        window.open(url)
        getajax(number);
        // window.location.href = url;
    });

    function getajax(number) {
        // $('#lodinsss').show();
        $.ajax({
            type: "GET",
            url: "<?php echo site_url('pay/check');?>?number=" + number,
            dataType: "json",
            success: function (data) {
                if (data.code === 0) {
                    if (data.data.status == 1) {
                        $("#paylist_box").show();
                        // $('#lodinsss').hide();
                        console.log(data.data)
                        let status=data.data.status==1?'支付成功':'支付未完成';
                        let html = '<tr><td>'+data.data.tradeno+'</td>'+
                            '<td>'+data.data.pay_type+'</td><td>'+data.data.total+'</td>' +
                            '<td>'+data.data.datetime+'</td><td>'+status+'</td></tr>';
                        $('#pay_list').append(html)

                    } else if (data.data.status == 0) {
                        setTimeout(function () {
                            getajax(number);
                        }, 3000)
                    }
                    // else {
                    //     $('#lodinsss').hide();
                    // }
                }
                // else {
                //     $('#lodinsss').hide();
                // }
            }
        });
    }
</script>

	

</html>