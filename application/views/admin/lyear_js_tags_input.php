<!DOCTYPE html>
<html lang="zh">
<head>
    <?php $this->load->view('admin/head.php') ?>
<!--标签插件-->
<link rel="stylesheet" href="/assets/js/jquery-tags-input/jquery.tagsinput.min.css">

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
              <div class="card-header"><h4>标签插件</h4></div>
              <div class="card-body">
                
                <input class="form-control js-tags-input" type="text" id="example-tags" name="tags" placeholder="请输入标签" value="光年,黄金瞳">
       
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

<!--标签插件-->
<script src="/assets/js/jquery-tags-input/jquery.tagsinput.min.js"></script>


</body>
</html>