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
                
                <form method="post" action=javascript:void(0); class="site-form">
                  <div class="form-group">
                    <label for="old-password">旧密码</label>
                    <input type="password" class="form-control" name="oldpwd" id="old-password" placeholder="输入账号的原登录密码" required>
                  </div>
                  <div class="form-group">
                    <label for="new-password">新密码</label>
                    <input type="password" class="form-control" name="newpwd" id="new-password" placeholder="输入新的密码" required>
                  </div>
                  <div class="form-group">
                    <label for="confirm-password">确认新密码</label>
                    <input type="password" class="form-control" name="confirmpwd" id="confirm-password" placeholder="请输入正确的邮箱地址" required>
                  </div>
                  <button type="submit" class="btn btn-primary">修改密码</button>
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
        let url = '<?php echo site_url('admin/dashboard/editpwd'); ?>';
        let oldpwd = $("input[name=oldpwd]").val();
        let newpwd = $("input[name=newpwd]").val();
        let renewpwd = $("input[name=confirmpwd]").val();

        if(!oldpwd || !newpwd || !renewpwd) {
            //lightyear.notify('请填写完整信息', 'danger', 2000);
            return;
        }

        if(newpwd !== renewpwd) {
            lightyear.notify('两次密码不一致', 'danger', 2000);
            return;
        }

        $.post(url,{oldpwd:oldpwd,newpwd:newpwd,renewpwd:renewpwd},function (ret) {
            if(ret.code === 0) {
                lightyear.loading('show');  // 显示
                setTimeout(function() {
                    lightyear.loading('hide');  // 隐藏
                    lightyear.notify(ret.msg, 'success', 3000);
                    setTimeout(function() {
                        window.location.href="<?php echo site_url('admin/dashboard/login'); ?>";
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