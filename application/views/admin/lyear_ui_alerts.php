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
                
                <div class="alert alert-success" role="alert">未泯杂念参无相 三戒当持号不歧</div>
                <div class="alert alert-danger" role="alert">各逞机谋缘底事 自疑身世感亲情</div>
                <div class="alert alert-warning" role="alert">空嗟变幻迁枯骨 莫测高深立掌门</div>
                <div class="alert alert-info" role="alert">恩同义父犹藏诈 逼露庐山始识非</div>
                
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>带连接的警告框</h4></div>
              <div class="card-body">
                
                <div class="alert alert-success" role="alert">
                无相无碍观自在 不歧不谈训终违 <a href="#!" class="alert-link">第05章</a>。
                </div>
                <div class="alert alert-danger" role="alert">
                铁矢神弓 少年扶巨宦 金鞍宝马 <a href="#!" class="alert-link">大盗震虚声</a>。
                </div>
                <div class="alert alert-warning" role="alert">
                第03章 手足相残 深宫腾剑气 恩仇难解 <a href="#!" class="alert-link">古洞结奇缘</a>。
                </div>
                <div class="alert alert-info" role="alert">
                第08章 谦谢掌门 情缘难斩断 难收覆水 <a href="#!" class="alert-link">恨意朱全消</a>。
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>可关闭的警告框</h4></div>
              <div class="card-body">

                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>第01章</strong> 抱恨冰弹御强敌 忏情毒箭插酥胸
                </div>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>第02章</strong> 天旋地转不知处 柳暗花明遇故人
                </div>
                <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>第03章</strong> 野鹤闲云无觅处 雪泥鸿爪未留痕
                </div>
                <div class="alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4>第04章 埃外奇闻传后世 武林秘事动雄心</h4>
                  <p>江南喜出望外，叫道：“真的是碧灵丹？”杨柳青笑道：“我还能骗你不成？快点服下，三粒碧灵丹，最少可当得三年功力！”江南手舞足蹈，嘻嘻笑道：“明天我不用赶路啦！”邹绛霞莫名其妙，微嗔问道：“赶甚么路呀？哼，原来你是准备助拳之后，马上便走的吗？几年不见，你就不肯多留两天？”</p>
                  <p>
                    <button type="button" class="btn btn-danger">采取这个行动</button>
                    <button type="button" class="btn btn-default">或者这样做</button>
                  </p>
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