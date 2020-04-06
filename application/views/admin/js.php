<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/assets/js/main.min.js"></script>

<!--消息提示-->
<script type="text/javascript" src="/assets/js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="/assets/js/lightyear.js"></script>


<script>
    $(".login").on("click",function () {
        let url = '<?php echo site_url("admin/dashboard/login");?>';
        let username = $("input[name=username]").val();
        let password = $("input[name=password]").val();
        let captcha = $("input[name=captcha]").val();

        if(!username || !password || !captcha) {
            //lightyear.notify('请填写信息完整', 'danger', 2000);
            return ;
        }

        $.post(url,{username:username,password:password,captcha:captcha}, function (ret) {
            if(ret.code === 0) {
                lightyear.loading('show');  // 显示
                setTimeout(function() {
                    lightyear.loading('hide');  // 隐藏
                    lightyear.notify(ret.msg+'，页面即将自动跳转~', 'success', 2000);
                    setTimeout(function() {
                        window.location.href='<?php echo site_url("admin/dashboard/index");?>';
                    }, 500);
                }, 500);
            } else {
                lightyear.notify(ret.msg, 'danger', 2000);
            }
        }, 'json');
    });

    $(".logout").on("click",function () {
        let url = '<?php echo site_url("admin/dashboard/logout");?>';
        $.post(url,{}, function (ret) {
            if(ret.code === 0) {
                lightyear.notify(ret.msg+'，页面即将自动跳转~', 'warning', 2000);
                setTimeout(function() {
                    window.location.href='<?php echo site_url("admin/dashboard/login");?>';
                }, 500);
            } else {
                lightyear.notify(ret.msg, 'danger', 2000);
            }
        }, 'json');
    });

    $('.clear_cache').on('click',function () {
        lightyear.loading('show');  // 显示
        setTimeout(function() {
            lightyear.loading('hide');  // 隐藏
            lightyear.notify('清空缓存成功', 'success', 3000);
        }, 1500);
    });
</script>