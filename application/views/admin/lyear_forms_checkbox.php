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
                
                <p>这很容易。将 <code>.checkbox</code> 类添加到<code>&lt;label&gt;</code>。</p>
                <div class="example-box">
                  <label class="lyear-checkbox">
                    <input type="checkbox">
                    <span>默认复选框</span>
                  </label>
                  <label class="lyear-checkbox m-t-10">
                    <input type="checkbox" checked="">
                    <span>选中的</span>
                  </label>
                  <label class="lyear-checkbox checkbox-grey m-t-10">
                    <input type="checkbox">
                    <span>灰色背景复选框</span>
                  </label>
                  <label class="lyear-checkbox m-t-10">
                    <input type="checkbox" disabled="">
                    <span>禁用的</span>
                  </label>
                </div>
                
                <p class="m-t-10">对于内联复选框 <code>.checkbox-inline</code>。</p>
                <div class="example-box">
                  <label class="lyear-checkbox checkbox-inline checkbox-primary">
                    <input type="checkbox"><span>篮球</span>
                  </label>
                  <label class="lyear-checkbox checkbox-inline checkbox-primary">
                    <input type="checkbox"><span>足球</span>
                  </label>
                  <label class="lyear-checkbox checkbox-inline checkbox-primary">
                    <input type="checkbox"><span>排球</span>
                  </label>
                </div>
                
              </div>
            </div>
            
            <div class="card">
              <div class="card-header"><h4>颜色</h4></div>
              <div class="card-body">
                
                <p>添加 <code>.checkbox-*</code> 用于更改复选框的外观：<code>.checkbox-primary</code> <code>.checkbox-info</code>...</p>
                <div class="example-box">
                  <label class="lyear-checkbox checkbox-primary m-t-10">
                    <input type="checkbox" checked=""><span>Primary（主色）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-success m-t-10">
                    <input type="checkbox" checked=""><span>Success（成功）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-secondary m-t-10">
                    <input type="checkbox" checked=""><span>Secondary（灰色）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-info m-t-10">
                    <input type="checkbox" checked=""><span>Info（一般信息）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-warning m-t-10">
                    <input type="checkbox" checked=""><span>Warning（警告）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-danger m-t-10">
                    <input type="checkbox" checked=""><span>Danger（危险）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-dark m-t-10">
                    <input type="checkbox" checked=""><span>Dark（黑色）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-purple m-t-10">
                    <input type="checkbox" checked=""><span>Purple（紫色）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-pink m-t-10">
                    <input type="checkbox" checked=""><span>Pink（粉红色）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-cyan m-t-10">
                    <input type="checkbox" checked=""><span>Cyan（青色）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-yellow m-t-10">
                    <input type="checkbox" checked=""><span>Yellow（黄色）</span>
                  </label>
                  <label class="lyear-checkbox checkbox-brown m-t-10">
                    <input type="checkbox" checked=""><span>Brown（棕色）</span>
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