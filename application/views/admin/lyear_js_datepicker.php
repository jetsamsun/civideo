<!DOCTYPE html>
<html lang="zh">
<head>
    <?php $this->load->view('admin/head.php') ?>
<!--时间选择插件-->
<link rel="stylesheet" href="/assets/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
<!--日期选择插件-->
<link rel="stylesheet" href="/assets/js/bootstrap-datepicker/bootstrap-datepicker3.min.css">

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
              <div class="card-header"><h4>时间选择</h4></div>
              <div class="card-body">
                
                <input class="form-control js-datetimepicker" type="text" id="example-datetimepicker" name="add_time" placeholder="请选择具体时间" value="" data-side-by-side="true" data-locale="zh-cn" data-format="YYYY-MM-DD HH:mm" />
                
              </div>
            </div>
          </div>
          
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>日期选择</h4></div>
              <div class="card-body">
                
                <input class="form-control js-datepicker m-b-10" type="text" id="example-datepicker" name="example-datepicker" placeholder="yyyy-mm-dd" value="" data-date-format="yyyy-mm-dd" />
                
                <input class="form-control js-datepicker m-b-10" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="yyyy/mm/dd" placeholder="yyyy/mm/dd">
                
                <input class="form-control js-datepicker m-b-10" type="text" id="example-datepicker2" name="example-datepicker2" data-date-format="yy/mm/dd" placeholder="yy/mm/dd">
                
                <div class="input-daterange input-group">
                  <input class="form-control js-datepicker" data-date-format="yyyy-mm-dd" type="text" id="example-daterange1" name="example-daterange1" placeholder="从">
                  <span class="input-group-addon"><i class="mdi mdi-chevron-right"></i></span>
                  <input class="form-control js-datepicker" data-date-format="yyyy-mm-dd" type="text" id="example-daterange2" name="example-daterange2" placeholder="至">
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

<!--时间选择插件-->
<script src="/assets/js/bootstrap-datetimepicker/moment.min.js"></script>
<script src="/assets/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/js/bootstrap-datetimepicker/locale/zh-cn.js"></script>
<!--日期选择插件-->
<script src="/assets/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/assets/js/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>




</body>
</html>