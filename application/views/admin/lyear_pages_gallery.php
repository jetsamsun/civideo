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
              <div class="card-body">
                
                <div class="masonry-grid gap-2" data-provide="photoswipe">
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/1.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/5.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/2.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/3.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/4.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/9.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/6.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/7.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/8.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/10.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/11.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/13.jpg" alt="The selected child description">
                  </a>
                
                  <a class="masonry-item" href="#">
                    <img src="/assets/images/gallery/14.jpg" alt="The selected child description">
                  </a>
                
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