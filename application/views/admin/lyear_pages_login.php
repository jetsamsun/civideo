<!DOCTYPE html>
<html lang="zh">
<head>
    <?php $this->load->view('admin/head.php') ?>
<style>
.lyear-wrapper {
    position: relative;
}
.lyear-login {
    display: flex !important;
    min-height: 100vh;
    align-items: center !important;
    justify-content: center !important;
}
.login-center {
    background: #fff;
    min-width: 38.25rem;
    padding: 2.14286em 3.57143em;
    border-radius: 5px;
    margin: 2.85714em 0;
}
.login-header {
    margin-bottom: 1.5rem !important;
}
.login-center .has-feedback.feedback-left .form-control {
    padding-left: 38px;
    padding-right: 12px;
}
.login-center .has-feedback.feedback-left .form-control-feedback {
    left: 0;
    right: auto;
    width: 38px;
    height: 38px;
    line-height: 38px;
    z-index: 4;
    color: #dcdcdc;
}
.login-center .has-feedback.feedback-left.row .form-control-feedback {
    left: 15px;
}
</style>
</head>
  
<body>
<div class="row lyear-wrapper">
  <div class="lyear-login">
    <div class="login-center">
      <div class="login-header text-center">
        <a href="<?php echo site_url('admin/index');?>"> <img alt="light year admin" src="/assets/images/logo-sidebar.png"> </a>
      </div>
      <form action="#!" method="post">
        <div class="form-group has-feedback feedback-left">
          <input type="text" placeholder="请输入您的用户名" class="form-control" name="username" id="username" />
          <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback feedback-left">
          <input type="password" placeholder="请输入密码" class="form-control" id="password" name="password" />
          <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback feedback-left row">
          <div class="col-xs-7">
            <input type="text" name="captcha" class="form-control" placeholder="验证码">
            <span class="mdi mdi-check-all form-control-feedback" aria-hidden="true"></span>
          </div>
          <div class="col-xs-5">
            <img src="/assets/images/captcha.png" class="pull-right" id="captcha" style="cursor: pointer;" onclick="this.src=this.src+'?d='+Math.random();" title="点击刷新" alt="captcha">
          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="button" onclick="location.href='<?php echo site_url("admin/index");?>'">立即登录</button>
        </div>
      </form>
      <hr>
      <footer class="col-sm-12 text-center">
        <p class="m-b-0">Copyright © 2019 <a href="http://lyear.itshubao.com">IT书包</a>. All right reserved</p>
      </footer>
    </div>
  </div>
</div>

<?php $this->load->view('admin/js.php') ?>

</body>
</html>