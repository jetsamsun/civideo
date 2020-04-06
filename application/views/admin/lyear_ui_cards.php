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
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-primary">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-success">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-info">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-warning">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-danger">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-purple">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-cyan">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-brown">
                <h4>主色</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
        
        </div>
        
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <h4>标题</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button" data-toggle="tooltip" title="撤消"><i class="mdi mdi-undo"></i></button>
                  </li>
                  <li>
                    <button type="button" data-toggle="tooltip" title="重做"><i class="mdi mdi-redo"></i></button>
                  </li>
                  <li>
                    <button type="button" data-toggle="tooltip" title="修改"><i class="mdi mdi-pencil"></i></button>
                  </li>
                  <li class="dropdown">
                    <button type="button" data-toggle="dropdown">更多 <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li> <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> 通知</a> </li>
                      <li> <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> 消息</a> </li>
                      <li class="divider"></li>
                      <li> <a tabindex="-1" href="javascript:void(0)">更新个人信息</a> </li>
                    </ul>
                  </li>
                </ul>
                <!-- .card-actions --> 
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 -->
          
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <h4>标题</h4>
                <ul class="card-actions">
                  <li> <span>文本 1</span> </li>
                  <li> <span>文本 2</span> </li>
                  <li> <span>文本 3</span> </li>
                </ul>
              </div>
              <div class="card-body">
                <p>内容...</p>
              </div>
            </div>
          </div>
          <!-- .col-sm-6 --> 
        </div>
        <!-- .row --> 
        <!-- End Cards with Actions -->
        
      </div>
      
    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<?php $this->load->view('admin/js.php') ?>

</body>
</html>