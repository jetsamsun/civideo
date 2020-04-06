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
              <div class="card-header"><h4>模态框</h4></div>
              <div class="card-body">
                
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                  点击启动示例
                </button>
                
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">标题</h4>
                      </div>
                      <div class="modal-body">
                        您的内容...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">点击保存</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr>
                <h5>可选尺寸</h5>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">大模态框</button>
                
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myLargeModalLabel">标题（大）</h4>
                      </div>
                      <div class="modal-body">
                        您的内容...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">点击保存</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">小模态框</button>
                
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myLargeModalLabel">标题（小）</h4>
                      </div>
                      <div class="modal-body">
                        您的内容...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">点击保存</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr>
                <h5>使用格栅</h5>
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">
                  点击演示示例
                </button>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="gridSystemModal">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">标题</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-4">.col-md-4</div>
                          <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                        </div>
                        <div class="row">
                          <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                          <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                        </div>
                        <div class="row">
                          <div class="col-sm-9">
                            Level 1: .col-sm-9
                            <div class="row">
                              <div class="col-xs-8 col-sm-6">
                                Level 2: .col-xs-8 .col-sm-6
                              </div>
                              <div class="col-xs-4 col-sm-6">
                                Level 2: .col-xs-4 .col-sm-6
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">点击保存</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <hr>
                <h5>变更模态框内容</h5>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">打开模态框 for @mdo</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">新消息</h4>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="control-label">收件人：</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="control-label">消息内容：</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">发送消息</button>
                      </div>
                    </div>
                  </div>
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

<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('发送新消息给 ' + recipient)
    modal.find('.modal-body input').val(recipient)
})
</script>

</body>
</html>