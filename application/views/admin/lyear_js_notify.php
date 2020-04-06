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
              <div class="card-header"><h4>通知消息</h4></div>
              <div class="card-body">
                
                <button type="button" class="btn btn-primary" id="example-success-notify">确认修改</button>
                <button type="button" class="btn btn-dark" id="example-error-notify">修改失败</button>
                
                <p class="m-t-10">页面加载等待效果</p>
                <pre><code>lightyear.loading('show');  // 显示
lightyear.loading('hide');  // 隐藏</code></pre>
                
                <p class="m-t-10">消息提示</p>
                <p>消息提示采用的是bootstrap-notify插件，这里包装了一下(包装方法来自DolphinPHP)，您也可以直接使用bootstrap-notify。</p>
                <table class="table table-bordered">
                  <tr>
                    <th>参数</th>
                    <th>说明</th>
                  </tr>
                  <tr>
                    <td>$msg</td>
                    <td>提示信息</td>
                  </tr>
                  <tr>
                    <td>$type</td>
                    <td>提示类型：'info', 'success', 'warning', 'danger'</td>
                  </tr>
                  <tr>
                    <td>$delay</td>
                    <td>定义消息提示消失的时间，毫秒数</td>
                  </tr>
                  <tr>
                    <td>$icon</td>
                    <td>图标，例如：'mdi-emoticon-happy'，具体参考<a href="<?php echo site_url('admin/dashboard/lyear_ui_icons');?>">图标</a> </td>
                  </tr>
                  <tr>
                    <td>$from</td>
                    <td>'top' 或 'bottom'</td>
                  </tr>
                  <tr>
                    <td>$align</td>
                    <td>'left', 'right', 'center'</td>
                  </tr>
                </table>
                <pre><code>lightyear.notify('修改成功，页面即将自动跳转~', 'success', 5000, 'mdi mdi-emoticon-happy', 'top', 'center');</code></pre>
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

<!--消息提示-->
<script src="/assets/js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="/assets/js/lightyear.js"></script>

<script type="text/javascript">
// 消息提示示例
$('#example-success-notify').on('click', function(){
    lightyear.loading('show');
    // 假设ajax提交操作
    setTimeout(function() {
        lightyear.loading('hide');
        lightyear.notify('修改成功，页面即将自动跳转~', 'success', 3000);
    }, 1e3)
});
$('#example-error-notify').on('click', function(){
    lightyear.loading('show');
    // 假设ajax提交操作
    setTimeout(function() {
        lightyear.loading('hide');
        lightyear.notify('服务器错误，请稍后再试~', 'danger', 100);
    }, 1e3)
});
</script>

</body>
</html>