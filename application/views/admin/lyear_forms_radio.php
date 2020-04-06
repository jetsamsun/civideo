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
              <div class="card-header"><h4>基本样式</h4></div>
              <div class="card-body">
                
                <p>将 <code>.checkbox</code> 类添加到<code>&lt;label&gt;</code>。</p>
                <div class="example-box">
                  <label class="lyear-radio">
                    <input type="radio" name="r1">
                    <span>默认单选框</span>
                  </label>
                  <label class="lyear-radio radio-grey m-t-10">
                    <input type="radio" name="r1">
                    <span>灰色单选框</span>
                  </label>
                  <label class="lyear-radio radio-primary m-t-10">
                    <input type="radio" checked="" name="r1">
                    <span>主色单选框</span>
                  </label>
                  <label class="lyear-radio m-t-10">
                    <input type="radio" disabled="" name="r1">
                    <span>禁用的</span>
                  </label>
                </div>
                
                <p class="m-t-10">对于内联复选框 <code>.checkbox-inline</code>。</p>
                <div class="example-box">
                  <label class="lyear-radio radio-inline radio-primary">
                    <input type="radio" name="e"><span>羽毛球</span>
                  </label>
                  <label class="lyear-radio radio-inline radio-primary">
                    <input type="radio" name="e"><span>冰球</span>
                  </label>
                  <label class="lyear-radio radio-inline radio-primary">
                    <input type="radio" name="e"><span>网球</span>
                  </label>
                </div>
                
              </div>
            </div>
            
            <div class="card">
              <div class="card-header"><h4>颜色</h4></div>
              <div class="card-body">
                
                <p>添加 <code>.checkbox-*</code> 用于更改复选框的外观：<code>.checkbox-primary</code> <code>.checkbox-info</code>...</p>
                <div class="example-box">
                  <label class="lyear-radio radio-primary">
                    <input type="radio" checked="">
                    <span>Primary（主色）</span>
                  </label>
                  <label class="lyear-radio radio-success m-t-10">
                    <input type="radio" checked="">
                    <span>Success（成功）</span>
                  </label>
                  <label class="lyear-radio radio-secondary m-t-10">
                    <input type="radio" checked="">
                    <span>Secondary（灰色）</span>
                  </label>
                  <label class="lyear-radio radio-info m-t-10">
                    <input type="radio" checked="">
                    <span>Info（一般信息）</span>
                  </label>
                  <label class="lyear-radio radio-warning m-t-10">
                    <input type="radio" checked="">
                    <span>Warning（警告）</span>
                  </label>
                  <label class="lyear-radio radio-danger m-t-10">
                    <input type="radio" checked="">
                    <span>Danger（警告）</span>
                  </label>
                  <label class="lyear-radio radio-dark m-t-10">
                    <input type="radio" checked="">
                    <span>Dark（黑色）</span>
                  </label>
                  <label class="lyear-radio radio-purple m-t-10">
                    <input type="radio" checked="">
                    <span>Purple（紫色）</span>
                  </label>
                  <label class="lyear-radio radio-pink m-t-10">
                    <input type="radio" checked="">
                    <span>Pink（粉红色）</span>
                  </label>
                  <label class="lyear-radio radio-cyan m-t-10">
                    <input type="radio" checked="">
                    <span>Cyan（青色）</span>
                  </label>
                  <label class="lyear-radio radio-yellow m-t-10">
                    <input type="radio" checked="">
                    <span>Yellow（黄色）</span>
                  </label>
                  <label class="lyear-radio radio-brown m-t-10">
                    <input type="radio" checked="">
                    <span>Brown（棕色）</span>
                  </label>
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

</body>
</html>