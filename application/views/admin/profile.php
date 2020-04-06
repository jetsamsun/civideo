<!DOCTYPE html>
<html lang="zh">
<head>
    <?php $this->load->view('admin/head.php') ?>
</head>
  
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
      <!--左侧导航-->
      <?php $this->load->view('admin/lnav.php') ?>
      <!--End 左侧导航-->

      <!--头部信息-->
      <?php $this->load->view('admin/topbar.php') ?>
      <!--End 头部信息-->
    
    <!--页面主要内容-->
    <main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                
                <div class="edit-avatar">
                  <img src="<?php echo $_SESSION['userinfo']['logo']; ?>" alt="..." class="img-avatar">
                  <div class="avatar-divider"></div>
                  <div class="edit-avatar-content">
                      <p class="m-0"><?php echo $_SESSION['userinfo']['site_name']; ?></p>
                    <p class="m-0">账户信息</p>
                  </div>
                </div>
                <hr>
                <form method="post" action="javascript:void(0);" class="site-form">
                  <div class="form-group">
                    <label for="username">用户名</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_SESSION['userinfo']['name']; ?>" disabled="disabled" />
                  </div>
                    <div class="form-group">
                        <label for="email">邮 箱</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="请输入正确的邮箱地址" value="<?php echo $_SESSION['userinfo']['email']; ?>">
                        <small id="emailHelp" class="form-text text-muted">请保证您填写的邮箱地址是正确的。</small>
                    </div>
                  <div class="form-group">
                    <label for="nickname">Telegram</label>
                    <input type="text" class="form-control" name="telegram" id="telegram" placeholder="输入您的telegram ID" value="<?php echo $_SESSION['userinfo']['telegram']; ?>">
                  </div>
                    <div class="form-group">
                        <label for="payment">通知方式</label>
                        <label class="lyear-checkbox checkbox-primary m-t-10">
                            <input name="notify[]" type="checkbox" <?php if(in_array('email',$nofity)) {?> checked="" <?php }?> value="email"><span>邮件</span>
                        </label>
                        <label class="lyear-checkbox checkbox-primary m-t-10">
                            <input name="notify[]" type="checkbox" <?php if(in_array('telegram',$nofity)) {?> checked="" <?php }?> value="telegram"><span>telegram</span>
                        </label>
                    </div>
                  <button type="submit" class="btn btn-primary">保存</button>
                </form>
       
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<?php $this->load->view('admin/js.php') ?>

<script>
    $("button[type=submit]").on("click",function () {
        let url = '<?php echo site_url('admin/dashboard/profile'); ?>';
        let email = $("input[name=email]").val();
        let telegram = $("input[name=telegram]").val();

        var str = "";
        $("input[name='notify[]']:checked").each(function (index, item) {
            if ($("input[name='notify[]']:checked").length - 1 === index) {
                str += $(this).val();
            } else {
                str += $(this).val() + ",";
            }
        });

        $.post(url,{email:email,telegram:telegram,notify:str},function (ret) {
            if(ret.code === 0) {
                lightyear.loading('show');  // 显示
                setTimeout(function() {
                    lightyear.loading('hide');  // 隐藏
                    lightyear.notify(ret.msg+'，页面即将刷新~', 'success', 3000);
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }, 1000);
            } else {
                lightyear.notify(ret.msg, 'danger', 2000);
            }
        },'json');
    });
</script>

</body>
</html>