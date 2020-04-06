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
              <div class="tab-content">
                <div class="tab-pane active">
                  
                  <form action="javascript:void(0);" method="post" name="edit-form" class="edit-form">
                      <div class="form-group">
                          <label for="web_site_title">网站域名</label>
                          <input class="form-control" type="text" id="web_site_domain" name="web_site_domain" value="<?php echo $_SESSION["userinfo"]['sub_domain']; ?>" placeholder="站点域名不可更改" readonly />
                      </div>
                    <div class="form-group">
                      <label for="web_site_title">网站名称</label>
                      <input class="form-control" type="text" id="web_site_title" name="web_site_title" value="<?php echo $_SESSION["userinfo"]['site_name']; ?>" placeholder="请输入站点名称" >
                    </div>
                      <div class="form-group">
                          <label for="web_site_title">网站地址</label>
                          <input class="form-control" type="text" id="web_site_addr" name="web_site_addr" value="<?php echo $_SESSION["userinfo"]['website']; ?>" placeholder="请输入站点地址" >
                      </div>
                    <div class="form-group">
                        <label for="web_site_logo">LOGO图片</label>
                        <input type="text" class="form-control" name="web_site_logo" id="web_site_logo" value="<?php echo $_SESSION["userinfo"]['logo']; ?>" placeholder="http://"/>
                        <small class="help-block">请输入logo图片完整路径</small>
                    </div>
                    <div class="form-group">
                      <label for="web_site_description">联系方式</label>
                      <textarea class="form-control" id="web_site_contact" rows="5" name="web_site_contact" placeholder="请输入联系方式" ><?php echo $_SESSION["userinfo"]['contact']; ?></textarea>
                        <small class="help-block">填写联系方式，用户在支付过程有什么问题可以方便联系你</small>
                    </div>
                      <div class="form-group">
                          <label for="web_site_title">邮箱</label>
                          <input class="form-control" type="text" id="web_site_email" name="web_site_email" value="<?php echo $_SESSION["userinfo"]['email']; ?>" placeholder="请输入邮箱" >
                      </div>
                      <div class="form-group">
                          <label for="web_site_description">提示信息</label>
                          <textarea class="form-control" id="web_site_description" rows="5" name="web_site_description" placeholder="请输入提示信息" ><?php echo $_SESSION["userinfo"]['message']; ?></textarea>
                          <small class="help-block">提示信息显示在支付页面</small>
                      </div>
                      <div class="form-group">
                          <label for="web_site_description">JS代码</label>
                          <textarea class="form-control" id="web_site_js" rows="5" name="web_site_js" placeholder="请输入JS代码" ><?php echo $_SESSION["userinfo"]['js_code']; ?></textarea>
                          <small class="help-block">你还可以上传一段js代码，例如统计页面访问等</small>
                      </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary m-r-5">确 定</button>
                      <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
                    </div>
                  </form>
                  
                </div>
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

<script type="text/javascript">
    $('button[type=submit]').on('click',function () {
        let web_site_domain = $('#web_site_domain').val();
        let web_site_title = $('#web_site_title').val();
        let web_site_addr = $('#web_site_addr').val();
        let web_site_logo = $('#web_site_logo').val();
        let web_site_contact = $('#web_site_contact').val();
        let web_site_email = $('#web_site_email').val();
        let web_site_description = $('#web_site_description').val();
        let web_site_js = $('#web_site_js').val();

        $.post("<?php site_url('admin/dashboard/set');?>",{
            web_site_domain:web_site_domain,
            web_site_title:web_site_title,
            web_site_addr:web_site_addr,
            web_site_logo:web_site_logo,
            web_site_contact:web_site_contact,
            web_site_email:web_site_email,
            web_site_description:web_site_description,
            web_site_js:web_site_js,
        },function (ret) {
            lightyear.loading('show');  // 显示
            setTimeout(function() {
                lightyear.loading('hide');  // 隐藏
                lightyear.notify(ret.msg+'，页面即将刷新页面~', 'success', 3000);
                setTimeout(function() {
                    window.location.reload();
                }, 1500);
            }, 1500);
        },'json');
    });
</script>

</body>
</html>
