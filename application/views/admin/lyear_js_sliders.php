<!DOCTYPE html>
<html lang="zh">
<head>
    <?php $this->load->view('admin/head.php') ?>
<!--滑块插件-->
<link rel="stylesheet" href="/assets/js/ion-rangeslider/ion.rangeSlider.min.css">

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
              <div class="card-header"><h4>滑块</h4></div>
              <div class="card-body">
                
                <div class="form-group row">
                  <label class="col-lg-3">基础示例</label>
                  <div class="col-lg-9">
                    <input id="range_01">
                    <small class="form-text text-muted">无参数开始</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">最小值和最大值</label>
                  <div class="col-lg-9">
                    <input id="range_02">
                    <small class="form-text text-muted">设置最小值、最大值和起点</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">双精度，网格选项和自定义前缀</label>
                  <div class="col-lg-9">
                    <input id="range_03">
                    <small class="form-text text-muted">将type设置为double并指定范围，同时显示网格并添加前缀“$”</small>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">设置范围和步长</label>
                  <div class="col-lg-9">
                    <div class="m-b-10">
                      <input id="range_04">
                      <small class="form-text text-muted">设置负值范围</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_05">
                      <small class="form-text text-muted">使用250步长</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_06">
                      <small class="form-text text-muted">用分数值设置范围，使用分数步长</small>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">使用自定义值数组</label>
                  <div class="col-lg-9">
                    <div class="m-b-10">
                      <input id="range_07">
                      <small class="form-text text-muted">设置自己的数字</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_08">
                      <small class="form-text text-muted">使用任何字符串作为值</small>
                    </div>
                    <div class="m-b-10">
                      <input id="range_09">
                      <small class="form-text text-muted">一个字符串示例</small>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3">两个选项</label>
                  <div class="col-lg-9">
                    <input id="range_10">
                    <small class="form-text text-muted">注意如何连接和连接值？ 使用decorate_both选项</small>
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

<!--滑块插件-->
<script src="/assets/js/ion-rangeslider/ion.rangeSlider.min.js"></script>

<script type="text/javascript">
$(function() {
    $("#range_01").ionRangeSlider();
    $("#range_02").ionRangeSlider({
        min: 100,
        max: 1000,
        from: 550
    });
    $("#range_03").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    });
    $("#range_04").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500
    });
    $("#range_05").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500,
        step: 250
    });
    $("#range_06").ionRangeSlider({
        type: "double",
        grid: true,
        min: -12.8,
        max: 12.8,
        from: -3.2,
        to: 3.2,
        step: 0.1
    });
    $("#range_07").ionRangeSlider({
        type: "double",
        grid: true,
        from: 1,
        to: 5,
        values: [0, 10, 100, 1000, 10000, 100000, 1000000]
    });
    $("#range_08").ionRangeSlider({
        grid: true,
        from: 5,
        values: [
            "零", "一",
            "二", "三",
            "四", "五",
            "六", "七",
            "八", "九",
            "十"
        ]
    });
    $("#range_09").ionRangeSlider({
        grid: true,
        from: 3,
        values: [
            "一月", "二月", "三月",
            "四月", "五月", "六月",
            "七月", "八月", "九月",
            "十月", "十一月", "十二月"
        ]
    });
    $("#range_10").ionRangeSlider({
        type: "double",
        min: 100,
        max: 200,
        from: 145,
        to: 155,
        prefix: "重量: ",
        postfix: " 百万镑",
        decorate_both: true
    });
});
</script>

</body>
</html>