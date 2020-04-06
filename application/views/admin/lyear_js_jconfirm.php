<!DOCTYPE html>
<html lang="zh">
<head>
    <?php $this->load->view('admin/head.php') ?>
<!--对话框-->
<link rel="stylesheet" href="/assets/js/jconfirm/jquery-confirm.min.css">

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
              <div class="card-header"><h4>对话框</h4></div>
              <div class="card-body">

                <div class="row">
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-1">弹出框示例</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-2">确认框示例</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-3">对话框示例</button>
                  </div>
                  <br/><br/><br/>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-4">错误/红色 对话框</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-5">成功/绿色 对话框</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-primary btn-block example-p-6">警告/黄色 对话框</button>
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

<!--对话框-->
<script src="/assets/js/jconfirm/jquery-confirm.min.js"></script>

<script type="text/javascript">
$('.example-p-1').on('click', function () {
    $.alert({
        title: '嗨',
        content: '这是对用户的简单提示框。 <br> 一些 <strong>HTML</strong> <em>内容</em>',
		buttons: {
			confirm: {
				text: '确认',
				btnClass: 'btn-primary',
				action: function(){
                    $.alert('你点击了确认!');
				}
			},
			cancel: {
				text: '取消',
				action: function () {
                    $.alert('你点击了取消!');
				}
			}
		}
    });
});
$('.example-p-2').on('click', function () {
    $.confirm({
        title: '对话框',
        content: '一些内容...',
        buttons: {
            confirm: {
                text: '确认',
                action: function(){
                    $.alert('确认的!');
                }
            },
            cancel: {
                text: '关闭',
                action: function(){
                    $.alert('取消的!');
                }
            },
            somethingElse: {
                text: '其他',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function(){
                    $.alert('其他的选择？');
                }
            }
        }
    });
});
$('.example-p-3').on('click', function () {
    $.confirm({
        title: '提示',
        content: '' +
        '<form action="" class="formName">' +
        '<div class="form-group">' +
        '<label>请输入您的姓名</label>' +
        '<input type="text" placeholder="姓名" class="name form-control" required />' +
        '</div>' +
        '</form>',
        buttons: {
            formSubmit: {
                text: '提交',
                btnClass: 'btn-blue',
                action: function () {
                    var name = this.$content.find('.name').val();
                    if(!name){
                        $.alert('请您输入您的姓名');
                        return false;
                    }
                    $.alert('您的姓名是： ' + name);
                }
            },
            cancel: {
                text: '取消'
            },
        },
        onContentReady: function () {
            var jc = this;
            this.$content.find('form').on('submit', function (e) {
                e.preventDefault();
                jc.$$formSubmit.trigger('click');
            });
        }
    });
});
$('.example-p-4').on('click', function () {
    $.confirm({
        title: '错误提示',
        content: '笑江湖浪迹十年游，空负少年头。对铜驼巷陌，吟情渺渺，心事悠悠！酒冷诗残梦断，南国正清秋。',
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: '重试',
                btnClass: 'btn-red',
                action: function(){
                }
            },
            close: {
                text: '关闭'
            }
        }
    });
});
$('.example-p-5').on('click', function () {
    $.confirm({
        title: '成功',
        content: '难消受灯昏罗帐，怅昙花一现恨难休！飘零惯，金戈铁马，拼葬荒丘！',
        type: 'green',
        buttons: {
            omg: {
                text: '谢谢',
                btnClass: 'btn-green',
            },
            close: {
                text: '关闭',
            }
        }
    });
});
$('.example-p-6').on('click', function () {
    $.confirm({
        title: '警告',
        content: '把剑凄然望，无处招归舟。明日天涯路远，问谁留楚佩，弄影中洲？数英雄儿女，俯仰古今愁。',
        type: 'orange',
        typeAnimated: false,
        buttons: {
            omg: {
                text: '重试',
                btnClass: 'btn-orange',
            },
            close: {
                text: '关闭',
            }
        }
    });
});
</script>

</body>
</html>