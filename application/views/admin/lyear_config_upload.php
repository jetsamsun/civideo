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
              <ul class="nav nav-tabs page-tabs">
                <li> <a href="<?php echo site_url('admin/dashboard/lyear_pages_config');?>">基本</a> </li>
                <li> <a href="<?php echo site_url('admin/dashboard/lyear_config_system');?>">系统</a> </li>
                <li class="active"> <a href="#!">上传</a> </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active">
                  
                  <form action="#!" method="post" name="edit-form" class="edit-form">
                    <div class="form-group">
                      <label for="upload_file_ext">图片上传大小限制</label>
                      <input class="js-tags-input form-control" type="text" id="upload_file_ext" name="upload_file_ext" value="doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,rar,zip,gz,bz2,7z" >
                      <small class="help-block">多个后缀用逗号隔开，不填写则不限制类型</small>
                    </div>
                    <div class="form-group">
                      <label for="upload_image_size">图片上传大小限制</label>
                      <input class="form-control" type="text" id="upload_image_size" name="upload_image_size" value="0" placeholder="请输入图片上传大小限制" >
                      <small class="help-block">0为不限制大小，单位：kb</small>
                    </div>
                    <div class="form-group">
                      <label for="upload_image_ext">允许上传的图片后缀</label>
                      <input class="js-tags-input form-control" type="text" id="upload_image_ext" name="upload_image_ext" value="gif,jpg,jpeg,bmp,png" >
                      <small class="help-block">多个后缀用逗号隔开，不填写则不限制类型</small>
                    </div>
                    <div class="form-group">
                      <label for="upload_file_size">文件上传大小限制</label>
                      <input class="form-control" type="text" id="upload_file_size" name="upload_file_size" value="0" placeholder="请输入文件上传大小限制" >
                      <small class="help-block">0为不限制大小，单位：kb</small>
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

<!--标签插件-->
<script src="/assets/js/jquery-tags-input/jquery.tagsinput.min.js"></script>


</body>
</html>