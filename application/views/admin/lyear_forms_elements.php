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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>基本样式</h4></div>
              <div class="card-body">
                
                <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data" onsubmit="return false;">
                  <div class="form-group">
                    <label class="col-xs-12">静态控件</label>
                    <div class="col-xs-12">
                      <div class="form-control-static">用户名</div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-text-input">文本</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text" id="example-text-input" name="example-text-input" placeholder="文本..">
                      <div class="help-block">输入更多信息</div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-email-input">邮箱</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="email" id="example-email-input" name="example-email-input" placeholder="邮箱..">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-password-input">密码</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="password" id="example-password-input" name="example-password-input" placeholder="密码..">
                    </div>
                  </div>
                  <div class="form-group has-success">
                    <label class="col-xs-12" for="example-text-input-success">成功状态</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text" id="example-text-input-success" name="example-text-input-success" placeholder="成功状态..">
                    </div>
                  </div>
                  <div class="form-group has-info">
                    <label class="col-xs-12" for="example-text-input-info">信息状态</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text" id="example-text-input-info" name="example-text-input-info" placeholder="信息状态..">
                    </div>
                  </div>
                  <div class="form-group has-warning">
                    <label class="col-xs-12" for="example-text-input-warning">警告状态</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text" id="example-text-input-warning" name="example-text-input-warning" placeholder="警告状态..">
                    </div>
                  </div>
                  <div class="form-group has-error">
                    <label class="col-xs-12" for="example-text-input-error">错误状态</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text" id="example-text-input-error" name="example-text-input-error" placeholder="错误状态..">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-disabled-input">禁用</label>
                    <div class="col-xs-12">
                      <input class="form-control" type="text" id="example-disabled-input" name="example-disabled-input" placeholder="禁用.." disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-textarea-input">文本域</label>
                    <div class="col-xs-12">
                      <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="内容.."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-select">选择框</label>
                    <div class="col-xs-12">
                      <select class="form-control" id="example-select" name="example-select" size="1">
                        <option value="0">请选择</option>
                        <option value="1">选项 #1</option>
                        <option value="2">选项 #2</option>
                        <option value="3">选项 #3</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-multiple-select">多选</label>
                    <div class="col-xs-12">
                      <select class="form-control" id="example-multiple-select" name="example-multiple-select" size="5" multiple>
                        <option value="1">选项 #1</option>
                        <option value="2">选项 #2</option>
                        <option value="3">选项 #3</option>
                        <option value="4">选项 #4</option>
                        <option value="5">选项 #5</option>
                        <option value="6">选项 #6</option>
                        <option value="7">选项 #7</option>
                        <option value="8">选项 #8</option>
                        <option value="9">选项 #9</option>
                        <option value="10">选项 #10</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12">单选框</label>
                    <div class="col-xs-12">
                      <div class="radio">
                        <label for="example-radio1">
                          <input type="radio" id="example-radio1" name="example-radios" value="option1">
                          Option 1
                        </label>
                      </div>
                      <div class="radio">
                        <label for="example-radio2">
                          <input type="radio" id="example-radio2" name="example-radios" value="option2">
                          Option 2
                        </label>
                      </div>
                      <div class="radio">
                        <label for="example-radio3">
                          <input type="radio" id="example-radio3" name="example-radios" value="option3">
                          Option 3
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12">内联单选框</label>
                    <div class="col-xs-12">
                      <label class="radio-inline" for="example-inline-radio1">
                        <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1">
                        One
                      </label>
                      <label class="radio-inline" for="example-inline-radio2">
                        <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2">
                        Two
                      </label>
                      <label class="radio-inline" for="example-inline-radio3">
                        <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3">
                        Three
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12">多选框</label>
                    <div class="col-xs-12">
                      <div class="checkbox">
                        <label for="example-checkbox1">
                          <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1">
                          Option 1 </label>
                      </div>
                      <div class="checkbox">
                        <label for="example-checkbox2">
                          <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2">
                          Option 2 </label>
                      </div>
                      <div class="checkbox">
                        <label for="example-checkbox3">
                          <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3">
                          Option 3 </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12">内联多选框</label>
                    <div class="col-xs-12">
                      <label class="checkbox-inline" for="example-inline-checkbox1">
                        <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1">
                        One
                      </label>
                      <label class="checkbox-inline" for="example-inline-checkbox2">
                        <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2">
                        Two
                      </label>
                      <label class="checkbox-inline" for="example-inline-checkbox3">
                        <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3">
                        Three
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-file-input">上传控件</label>
                    <div class="col-xs-12">
                      <input type="file" id="example-file-input" name="example-file-input">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-12" for="example-file-multiple-input">多文件上传</label>
                    <div class="col-xs-12">
                      <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12">
                      <button class="btn btn-primary" type="submit">提交</button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>普通表单</h4></div>
              <div class="card-body">
                
                <form action="<?php echo site_url('admin/dashboard/lyear_forms_elements');?>" method="post" onsubmit="return false;">
                  <div class="form-group">
                    <label for="example-nf-email">邮箱</label>
                    <input class="form-control" type="email" id="example-nf-email" name="example-nf-email" placeholder="请输入邮箱..">
                  </div>
                  <div class="form-group">
                    <label for="example-nf-password">密码</label>
                    <input class="form-control" type="password" id="example-nf-password" name="example-nf-password" placeholder="请输入密码..">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" type="submit">登录</button>
                  </div>
                </form>
                
              </div>
            </div>
            
            <div class="card">
              <div class="card-header"><h4>内联表单</h4></div>
              <div class="card-body">
                
                <form class="form-inline" action="<?php echo site_url('admin/dashboard/lyear_forms_elements');?>" method="post" onsubmit="return false;">
                  <div class="form-group">
                    <label class="sr-only" for="example-if-email">邮箱</label>
                    <input class="form-control" type="email" id="example-if-email" name="example-if-email" placeholder="请输入邮箱..">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="example-if-password">密码</label>
                    <input class="form-control" type="password" id="example-if-password" name="example-if-password" placeholder="请输入密码..">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-default" type="submit">登录</button>
                  </div>
                </form>
                
              </div>
            </div>
            
            <div class="card">
              <div class="card-header"><h4>水平排列的表单</h4></div>
              <div class="card-body">
                
                <form class="form-horizontal" action="<?php echo site_url('admin/dashboard/lyear_forms_elements');?>" method="post" onsubmit="return false;">
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">邮箱</label>
                    <div class="col-md-7">
                      <input class="form-control" type="email" id="example-hf-email" name="example-hf-email" placeholder="请输入邮箱..">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-password">密码</label>
                    <div class="col-md-7">
                      <input class="form-control" type="password" id="example-hf-password" name="example-hf-password" placeholder="请输入密码..">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit">登录</button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
            
            <div class="card">
              <div class="card-header"><h4>输入框大小</h4></div>
              <div class="card-body">
                
                <form action="<?php echo site_url('admin/dashboard/lyear_forms_elements');?>" method="post" onsubmit="return false;">
                  <div class="form-group">
                    <label for="example-input-small">偏小输入框</label>
                    <input class="form-control input-sm" type="text" id="example-input-small" name="example-input-small" placeholder=".input-sm">
                  </div>
                  <div class="form-group">
                    <label for="example-input-normal">正常输入框</label>
                    <input class="form-control" type="text" id="example-input-normal" name="example-input-normal" placeholder="..">
                  </div>
                  <div class="form-group">
                    <label for="example-input-large">大输入框</label>
                    <input class="form-control input-lg" type="text" id="example-input-large" name="example-input-large" placeholder=".input-lg">
                  </div>
                  <div class="form-group">
                    <label>调整列（column）尺寸</label>
                    <div class="row">
                      <div class="col-xs-4">
                        <input class="form-control" type="text" placeholder=".col-xs-4">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-5">
                        <input class="form-control" type="text" placeholder=".col-xs-5">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6">
                        <input class="form-control" type="text" placeholder=".col-xs-6">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-7">
                        <input class="form-control" type="text" placeholder=".col-xs-7">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-8">
                        <input class="form-control" type="text" placeholder=".col-xs-8">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-9">
                        <input class="form-control" type="text" placeholder=".col-xs-9">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
  
                    <div class="row">
                      <div class="col-xs-10">
                        <input class="form-control" type="text" placeholder=".col-xs-10">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-11">
                        <input class="form-control" type="text" placeholder=".col-xs-11">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-12">
                        <input class="form-control" type="text" placeholder=".col-xs-12">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>多列输入框</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <input class="form-control" type="text" placeholder=".col-xs-6">
                      </div>
                      <div class="col-xs-6">
                        <input class="form-control" type="text" placeholder=".col-xs-6">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-4">
                        <input class="form-control" type="text" placeholder=".col-xs-4">
                      </div>
                      <div class="col-xs-4">
                        <input class="form-control" type="text" placeholder=".col-xs-4">
                      </div>
                      <div class="col-xs-4">
                        <input class="form-control" type="text" placeholder=".col-xs-4">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-3">
                        <input class="form-control" type="text" placeholder=".col-xs-3">
                      </div>
                      <div class="col-xs-6">
                        <input class="form-control" type="text" placeholder=".col-xs-6">
                      </div>
                      <div class="col-xs-3">
                        <input class="form-control" type="text" placeholder=".col-xs-3">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" type="submit">提交</button>
                  </div>
                </form>
                
              </div>
            </div>
            
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header"><h4>输入框组</h4></div>
              <div class="card-body">

                <form action="<?php echo site_url('admin/dashboard/lyear_forms_elements');?>" method="post" onsubmit="return false;">
                  <div class="input-group m-b-10">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="用户名" aria-describedby="basic-addon1">
                  </div>
                  
                  <div class="input-group m-b-10">
                    <input type="text" class="form-control" placeholder="收件人的用户名" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">@itshubao.com</span>
                  </div>
                  
                  <div class="input-group m-b-10">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-addon">.00</span>
                  </div>
                  
                  <label for="basic-url">您的网址</label>
                  <div class="input-group m-b-10">
                    <span class="input-group-addon" id="basic-addon3">http://www.itshubao.com/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                  </div>
                  
                  <div class="input-group input-group-lg m-b-10">
                    <span class="input-group-addon" id="sizing-addon1">@</span>
                    <input type="text" class="form-control" placeholder="用户名" aria-describedby="sizing-addon1">
                  </div>
                  
                  <div class="input-group m-b-10">
                    <span class="input-group-addon" id="sizing-addon2">@</span>
                    <input type="text" class="form-control" placeholder="用户名" aria-describedby="sizing-addon2">
                  </div>
                   
                  <div class="input-group input-group-sm m-b-10">
                    <span class="input-group-addon" id="sizing-addon3">@</span>
                    <input type="text" class="form-control" placeholder="用户名" aria-describedby="sizing-addon3">
                  </div>
                  
                  <div class="row m-b-10">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox" aria-label="...">
                        </span>
                        <input type="text" class="form-control" aria-label="...">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio" aria-label="...">
                        </span>
                        <input type="text" class="form-control" aria-label="...">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row m-b-10">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">搜索</button>
                        </span>
                        <input type="text" class="form-control" placeholder="请输入关键词...">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="请输入关键词...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">搜索</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row m-b-10">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">陈楚生 <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#!">思恋一个荒废的名字</a></li>
                            <li><a href="#!">有没有人告诉你</a></li>
                            <li><a href="#!">经过</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#!">风起时想你</a></li>
                          </ul>
                        </div>
                        <input type="text" class="form-control" aria-label="...">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="input-group">
                        <input type="text" class="form-control" aria-label="...">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">河图 <span class="caret"></span></button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#!">窗前明月光</a></li>
                            <li><a href="#!">不见有情</a></li>
                            <li><a href="#!">春日迟</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#!">自为风月马前卒</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row m-b-10">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default">陈奕迅</button>
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#!">浮夸</a></li>
                            <li><a href="#!">爱情转移</a></li>
                            <li><a href="#!">六月飞雪</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#!">十年</a></li>
                          </ul>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default">周杰伦</button>
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#!">夜的第七章</a></li>
                            <li><a href="#!">半兽人</a></li>
                            <li><a href="#!">上海一九四三</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#!">告白气球</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row m-b-10">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" aria-label="Bold"><span class="mdi mdi-format-bold"></span></button>
                          <button type="button" class="btn btn-default" aria-label="Italic"><span class="mdi mdi-format-italic"></span></button>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with multiple buttons">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with multiple buttons">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" aria-label="Help"><span class="mdi mdi-alert-circle-outline"></span></button>
                          <button type="button" class="btn btn-default">搜索</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </form>
                
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