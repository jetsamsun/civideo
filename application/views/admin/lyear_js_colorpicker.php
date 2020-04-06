<!DOCTYPE html>
<html lang="zh">
<head>
    <?php $this->load->view('admin/head.php') ?>
<!--颜色选择插件-->
<link rel="stylesheet" href="/assets/js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

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
              <div class="card-header"><h4>颜色选择</h4></div>
              <div class="card-body">
                
                <input class="form-control js-colorpicker m-b-10" type="text" id="example-colorpicker" name="text_color" placeholder="点击选择颜色" value="" />
                
                <div class="js-colorpicker input-group colorpicker-element">
                  <input class="form-control" type="text" id="example-colorpicker2" name="example-colorpicker2" value="#33cabb">
                  <span class="input-group-addon"><i style="background-color: rgb(51, 202, 187);"></i></span>
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

<!--颜色选择插件-->
<script src="/assets/js/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>


</body>
</html>