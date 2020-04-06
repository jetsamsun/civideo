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
              <div class="card-header"><h4>分页</h4></div>
              <div class="card-body">
                <h5>基本样式</h5>
                <nav>
                  <ul class="pagination">
                    <li class="disabled">
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li>
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
                
                <hr>
                <h5>无边框 <code>.no-border</code></h5>
                <nav>
                  <ul class="pagination no-border">
                    <li class="disabled">
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li>
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
                
                <hr>
                <h5>圆角边框 <code>.pagination-circle</code></h5>
                <nav>
                  <ul class="pagination pagination-circle">
                    <li class="disabled">
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li>
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
                
                <hr>
                <h5>无间隔 <code>.no-gutters</code></h5>
                <nav>
                  <ul class="pagination no-gutters">
                    <li class="disabled">
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li>
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
                
                <hr>
                <h5>大小尺寸 <code>.pagination-sm</code> <code>.pagination-lg</code></h5>
                <nav>
                  <ul class="pagination pagination-sm">
                    <li class="disabled">
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li>
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav>
                  <ul class="pagination">
                    <li class="disabled">
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li>
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <nav>
                  <ul class="pagination pagination-lg">
                    <li class="disabled">
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li>
                      <a href="#!">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
                
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            
            <div class="card">
              <div class="card-header"><h4>翻页</h4></div>
              <div class="card-body">

                <nav>
                  <ul class="pager">
                    <li><a href="#">上一页</a></li>
                    <li><a href="#">下一页</a></li>
                  </ul>
                </nav>
                    
                <nav>
                  <ul class="pager">
                    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> 历史</a></li>
                    <li class="next"><a href="#">最新 <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>
                </nav>
                
                <nav>
                  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> 历史</a></li>
                    <li class="next"><a href="#">最新 <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>
                </nav>
                
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