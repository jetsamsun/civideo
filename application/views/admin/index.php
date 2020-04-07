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
            <div class="card bg-primary">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">账户余额</p>
                  <p class="h3 text-white m-b-0"><?php echo $_SESSION['userinfo']['balance']; ?></p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-currency-cny fa-1-5x"></i></span> </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-lg-3">
            <div class="card bg-danger">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">历史交易</p>
                  <p class="h3 text-white m-b-0"><?php echo $_SESSION['userinfo']['his_amout']; ?></p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-swap-horizontal fa-1-5x"></i></span> </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-lg-3">
            <div class="card bg-success">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">提现金额</p>
                  <p class="h3 text-white m-b-0"><?php echo $_SESSION['userinfo']['withdraw']; ?></p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-arrow-down-bold fa-1-5x"></i></span> </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-lg-3">
            <div class="card bg-purple">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">提现记录</p>
                  <p class="h3 text-white m-b-0"><?php echo $_SESSION['userinfo']['get_num']; ?> 条</p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-comment-outline fa-1-5x"></i></span> </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          
          <div class="col-lg-6"> 
            <div class="card">
              <div class="card-header">
                <h4>每月交易</h4>
              </div>
              <div class="card-body">
                <canvas class="js-chartjs-bars"></canvas>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6"> 
            <div class="card">
              <div class="card-header">
                <h4>交易历史记录</h4>
              </div>
              <div class="card-body">
                <canvas class="js-chartjs-lines"></canvas>
              </div>
            </div>
          </div>
           
        </div>
        
        <div class="row">
          
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>提现申请</h4>
              </div>
              <div class="card-body">
                  <label for="web_site_keywords">提现金额</label>
                  <div class="form-group">
                      <input class="form-control" type="number" name="amount" value="" placeholder="请输入提现金额" >
                      <small class="help-block">提现金额不能大于账户余额</small>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary m-r-5 withdraw">提 交</button>
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
    $('.withdraw').on('click',function () {
        let amount = $('input[name=amount]').val();
        let balance = '<?php echo $_SESSION['userinfo']['balance']; ?>';
        if(amount <= 0) {
            lightyear.notify('请输入正确的金额', 'danger', 2000);
            return ;
        }
        if(amount - balance > 0) {
            lightyear.notify('提现金额不能大于账户余额', 'danger', 2000);
            return ;
        }


        $.post("<?php echo site_url('admin/withdraw')?>?op=apply",{amount:amount},function (ret) {
            if(ret.code===0) {
                lightyear.loading('show');  // 显示
                setTimeout(function() {
                    $('#myModal').modal('hide');
                    lightyear.loading('hide');  // 隐藏
                    lightyear.notify(ret.msg, 'success', 3000);
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }, 1000);
            } else {
                lightyear.notify(ret.msg, 'danger', 2000);
            }
        },'json');
    });
</script>


<!--图表插件-->
<script type="text/javascript" src="/assets/js/Chart.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    var $dashChartBarsCnt  = jQuery( '.js-chartjs-bars' )[0].getContext( '2d' ),
        $dashChartLinesCnt = jQuery( '.js-chartjs-lines' )[0].getContext( '2d' );

    var bars = '<?php echo json_encode($bars);?>';
    bars = JSON.parse(bars);
    var barsLabelsArray = [];
    var barsDatasetsArray = [];
    for(var v in bars){
        barsLabelsArray.push(v);
        barsDatasetsArray.push(bars[v]);
    }
    
    var $dashChartBarsData = {
		labels: barsLabelsArray,
		datasets: [
			{
				label: '交易金额',
                borderWidth: 1,
                borderColor: 'rgba(0,0,0,0)',
				backgroundColor: 'rgba(51,202,185,0.5)',
                hoverBackgroundColor: "rgba(51,202,185,0.7)",
                hoverBorderColor: "rgba(0,0,0,0)",
				data: barsDatasetsArray
			}
		]
	};

    var lines = '<?php echo json_encode($lines);?>';
    lines = JSON.parse(lines);
    var linesLabelsArray = [];
    var linesDatasetsArray = [];
    for(var v in lines){
        linesLabelsArray.push(v);
        linesDatasetsArray.push(lines[v]);
    }
    var $dashChartLinesData = {
		labels: linesLabelsArray,
		datasets: [
			{
				label: '交易资金',
				data: linesDatasetsArray,
				borderColor: '#358ed7',
				backgroundColor: 'rgba(53, 142, 215, 0.175)',
                borderWidth: 1,
                fill: false,
                lineTension: 0.5
			}
		]
	};
    
    new Chart($dashChartBarsCnt, {
        type: 'bar',
        data: $dashChartBarsData
    });
    
    var myLineChart = new Chart($dashChartLinesCnt, {
        type: 'line',
        data: $dashChartLinesData,
    });
});
</script>



</body>
</html>