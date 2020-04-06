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
                            <ul class="nav nav-tabs page-tabs">
                                <li class="active"> <a href="#!">会员等级：<?php if($_SESSION['userinfo']['grade']==0) {?> Free <?php } ?> </a> </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active">

                                    <form action="javascript:void(0);" method="post" name="edit-form" class="edit-form">
                                        <div class="form-group">
                                            <label class="btn-block" for="foreign">是否开启外币</label>
                                            <label class="lyear-switch switch-solid switch-primary">
                                                <input name="foreign" type="checkbox" <?php if($_SESSION['userinfo']['foreign']) {?> checked="" <?php } ?> ><span></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="payment">服务商</label>
                                            <?php foreach ($payments as $k=>$v) {?>
                                            <label class="lyear-checkbox checkbox-primary m-t-10">
                                                <input name="payment[]" type="checkbox" <?php if(in_array($k,$payment)) {?> checked="" <?php }?> value="<?php echo $k;?>">
                                                <span><?php echo $v['sprovider_text'];?></span>
                                                <i class="mdi mdi-help-circle" data-toggle="tooltip" data-placement="right" title="
                                                <?php
                                                    $str = '';
                                                    foreach ($v['gateway'] as $kk=>$vv) {
                                                        if($vv['status']==1) {
                                                            $str .= '【' . $vv['gateway_text'] . '】 费率' . $vv['fee_rate'] . '%, 单笔￥' . $vv['single_fee'] . ', 最低￥' . $vv['min_fee'] . '，金额范围' . $vv['min_charge'] . '~' . $vv['max_charge'] . '; ';
                                                        }
                                                    }

                                                    echo empty($str) ? '暂无通道！' : $str;
                                                ?>

                                                "></i>
                                            </label>
                                            <?php }?>
                                        </div>

                                        <label for="web_site_keywords">提现银行</label>
                                        <div class="form-group">
                                            <div class="form-controls">
                                                <select name="bank" class="form-control">
                                                    <option value="ABC" <?php if($bank->deposit=='ABC') {?> selected <?php }?>>农业银行</option>
                                                    <option value="ICBC" <?php if($bank->deposit=='ICBC') {?> selected <?php }?>>工商银行</option>
                                                    <option value="BOC" <?php if($bank->deposit=='BOC') {?> selected <?php }?>>中国银行</option>
                                                    <option value="CCB" <?php if($bank->deposit=='CCB') {?> selected <?php }?>>建设银行</option>
                                                </select>
                                            </div>
                                            <small class="help-block">请选择开户银行</small>
                                            <input class="form-control" type="text" name="sub_branch" value="<?php echo $bank->branch; ?>" placeholder="请输入开户支行" >
                                            <small class="help-block">填写您的开户支行</small>
                                            <input class="form-control" type="text" name="bank_account" value="<?php echo $bank->account; ?>" placeholder="请输入银行账号" >
                                            <small class="help-block">填写您的银行账号</small>
                                            <input class="form-control" type="text" name="bank_addr" value="<?php echo $bank->address; ?>" placeholder="请输入银行地址" >
                                            <small class="help-block">填写银行地址（选填）</small>
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

<script>
    $("button[type=submit]").on("click",function () {
        let url = '<?php echo site_url('admin/dashboard/financial'); ?>';
        let foreign = $("input[name=foreign]").is(':checked');
        let deposit = $("select[name=bank]").val();
        let branch = $("input[name=sub_branch]").val();
        let account = $("input[name=bank_account]").val();
        let address = $("input[name=bank_addr]").val();

        var str = "";
        $("input[name='payment[]']:checked").each(function (index, item) {
            if ($("input[name='payment[]']:checked").length - 1 === index) {
                str += $(this).val();
            } else {
                str += $(this).val() + ",";
            }
        });

        $.post(url,{foreign:foreign,payment:str,deposit:deposit,branch:branch,account:account,address:address},function (ret) {
            if(ret.code === 0) {
                lightyear.loading('show');  // 显示
                setTimeout(function() {
                    lightyear.loading('hide');  // 隐藏
                    lightyear.notify(ret.msg+'，页面即将刷新~', 'success', 3000);
                    setTimeout(function() {
                        window.location.reload();
                    }, 1500);
                }, 1500);
            } else {
                lightyear.notify(ret.msg, 'danger', 3000);
            }
        },'json');
    });
</script>

</body>
</html>

