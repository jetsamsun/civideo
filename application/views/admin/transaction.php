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
                            <div class="card-toolbar clearfix">
                                <form class="pull-right search-bar" method="get" action="<?php echo site_url('admin/dashboard/transaction')?>" role="form">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <input type="hidden" name="search_field" id="search-field" value="tradeno">
                                            <button class="btn btn-default dropdown-toggle" id="search-btn" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                                                流水号 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li> <a tabindex="-1" href="javascript:void(0)" data-field="title">流水号</a> </li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control" value="" name="keyword" placeholder="请输入关键字">
                                    </div>
                                </form>
                                <div class="toolbar-btn-action">
                                    <a class="btn btn-danger delete-items" href="javascript:void(0);"><i class="mdi mdi-window-close"></i> 删除</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class="lyear-checkbox checkbox-primary">
                                                    <input type="checkbox" id="check-all"><span></span>
                                                </label>
                                            </th>
                                            <th>流水号</th>
                                            <th>服务商</th>
                                            <th>网关</th>
                                            <th>支付金额</th>
                                            <th>服务费</th>
                                            <th>支付时间</th>
                                            <th>支付状态</th>
                                            <th>备注</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($logs as $v) {?>
                                        <tr>
                                            <td>
                                                <label class="lyear-checkbox checkbox-primary">
                                                    <input type="checkbox" name="ids[]" value="<?php echo $v['id']; ?>"><span></span>
                                                </label>
                                            </td>
                                            <td><?php echo $v['tradeno']; ?></td>
                                            <td><?php echo $v['sprovider_text']; ?></td>
                                            <td><?php echo $v['gateway_text']; ?></td>
                                            <td><?php echo $v['total']; ?></td>
                                            <td><?php echo $v['fee']; ?></td>
                                            <td><?php echo date('Y-m-d H:i:s',$v['datetime']); ?></td>
                                            <td>
                                                <?php if($v['status']==1) { ?>
                                                <font class="text-success">支付成功</font>
                                                <?php } else {?>
                                                <font class="text-warning">未完成</font>
                                                <?php }?>
                                            </td>
                                            <td><?php echo $v['remark']; ?></td>
                                            <td>
                                                <div class="btn-group">
<!--                                                    <a class="btn btn-xs btn-default" href="#!" title="编辑" data-toggle="tooltip"><i class="mdi mdi-pencil"></i></a>-->
                                                    <a class="btn btn-xs btn-default delete-item" href="javascript:void(0);" title="删除" data-toggle="tooltip" data-id="<?php echo $v['id']; ?>" ><i class="mdi mdi-window-close"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>



                                <?php echo $pagination; ?>

                                <!--模态框-->
                                <div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="myLargeModalLabel">删除操作</h4>
                                            </div>
                                            <div class="modal-body">
                                                您确定要删除吗？
                                            </div>
                                            <div class="modal-footer">
                                                <input type="text" class="hidden tid" value="dsf">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                                <button type="button" class="btn btn-primary confirm">确定</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End 模态框-->

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
    $(function(){
        $('.search-bar .dropdown-menu a').click(function() {
            var field = $(this).data('field') || '';
            $('#search-field').val(field);
            $('#search-btn').html($(this).text() + ' <span class="caret"></span>');
        });
    });

    $('.delete-items').on('click',function () {
        var str = "";
        $("input[name='ids[]']:checked").each(function (index, item) {
            if ($("input[name='ids[]']:checked").length - 1 === index) {
                str += $(this).val();
            } else {
                str += $(this).val() + ",";
            }
        });
        if(str) {
            $('.tid').val(str);
            $('#myModal').modal();
        } else {
            lightyear.notify('没有选中任何项', 'danger', 2000);
        }
    });
    $('.delete-item').on('click',function () {
        $('.tid').val($(this).data('id'));
        $('#myModal').modal();
    });
    $('.confirm').on('click',function () {
        $.post("<?php echo site_url('admin/dashboard/transaction')?>?op=del",{ids:$('.tid').val()},function (ret) {
            if(ret.code===0) {
                lightyear.loading('show');  // 显示
                setTimeout(function() {
                    $('#myModal').modal('hide');
                    lightyear.loading('hide');  // 隐藏
                    lightyear.notify(ret.msg+'，页面即将刷新~', 'success', 3000);
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

</body>
</html>