<aside class="lyear-layout-sidebar">

    <!-- logo -->
    <div id="logo" class="sidebar-header">
        <a href="<?php echo site_url('home/index');?>"><img style="margin-top: 10px; margin-bottom: 8px;" alt="light year admin" src="<?php echo $this->options['site_logo']; ?>" height="50px"></a>
    </div>
    <div class="lyear-layout-sidebar-scroll">

        <nav class="sidebar-main">
            <ul class="nav nav-drawer">
                <li class="nav-item <?php if($page=='index') {?> active <?php }?>"> <a href="<?php echo site_url('admin/index');?>"><i class="mdi mdi-home"></i> 主页面</a> </li>
                <li class="nav-item <?php if($page=='set') {?> active <?php }?>"> <a href="<?php echo site_url('admin/set');?>"><i class="mdi mdi-android-head"></i> 站点配置</a> </li>
                <li class="nav-item <?php if($page=='financial') {?> active <?php }?>"> <a href="<?php echo site_url('admin/financial');?>"><i class="mdi mdi-currency-cny"></i> 财务配置</a> </li>
                <li class="nav-item <?php if($page=='transaction') {?> active <?php }?>"> <a href="<?php echo site_url('admin/transaction');?>"><i class="mdi mdi-library-books"></i> 交易流水</a> </li>
                <li class="nav-item <?php if($page=='withdraw') {?> active <?php }?>"> <a href="<?php echo site_url('admin/withdraw');?>"><i class="mdi mdi-elevation-decline"></i> 提现流水</a> </li>

                <?php if(config_item('isdevelop')) {?>
                    <li class="nav-item nav-item-has-subnav <?php if(
                                                                $page=='lyear_ui_buttons' ||
                                                                $page=='lyear_ui_cards' ||
                                                                $page=='lyear_ui_grid' ||
                                                                $page=='lyear_ui_icons' ||
                                                                $page=='lyear_ui_tables' ||
                                                                $page=='lyear_ui_modals' ||
                                                                $page=='lyear_ui_tooltips_popover' ||
                                                                $page=='lyear_ui_alerts' ||
                                                                $page=='lyear_ui_pagination' ||
                                                                $page=='lyear_ui_progress' ||
                                                                $page=='lyear_ui_tabs' ||
                                                                $page=='lyear_ui_typography' ||
                                                                $page=='lyear_ui_step' ||
                                                                $page=='lyear_ui_other'
                                                            ) {?> active open <?php }?> ">
                        <a href="javascript:void(0)"><i class="mdi mdi-palette"></i> UI 元素</a>
                        <ul class="nav nav-subnav">
                            <li <?php if($page=='lyear_ui_buttons') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_buttons');?>">按钮</a> </li>
                            <li <?php if($page=='lyear_ui_cards') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_cards');?>">卡片</a> </li>
                            <li <?php if($page=='lyear_ui_grid') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_grid');?>">格栅</a> </li>
                            <li <?php if($page=='lyear_ui_icons') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_icons');?>">图标</a> </li>
                            <li <?php if($page=='lyear_ui_tables') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_tables');?>">表格</a> </li>
                            <li <?php if($page=='lyear_ui_modals') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_modals');?>">模态框</a> </li>
                            <li <?php if($page=='lyear_ui_tooltips_popover') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_tooltips_popover');?>">提示 / 弹出框</a> </li>
                            <li <?php if($page=='lyear_ui_alerts') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_alerts');?>">警告框</a> </li>
                            <li <?php if($page=='lyear_ui_pagination') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_pagination');?>">分页</a> </li>
                            <li <?php if($page=='lyear_ui_progress') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_progress');?>">进度条</a> </li>
                            <li <?php if($page=='lyear_ui_tabs') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_tabs');?>">标签页</a> </li>
                            <li <?php if($page=='lyear_ui_typography') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_typography');?>">排版</a> </li>
                            <li <?php if($page=='lyear_ui_step') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_step');?>">步骤</a> </li>
                            <li <?php if($page=='lyear_ui_other') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_ui_other');?>">其他</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-has-subnav <?php if(
                                                                $page=='lyear_forms_elements' ||
                                                                $page=='lyear_forms_radio' ||
                                                                $page=='lyear_forms_checkbox' ||
                                                                $page=='lyear_forms_switch'
                                                            ) {?> active open <?php }?> ">
                        <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> 表单</a>
                        <ul class="nav nav-subnav">
                            <li <?php if($page=='lyear_forms_elements') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_forms_elements');?>">基本元素</a> </li>
                            <li <?php if($page=='lyear_forms_radio') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_forms_radio');?>">单选框</a> </li>
                            <li <?php if($page=='lyear_forms_checkbox') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_forms_checkbox');?>">复选框</a> </li>
                            <li <?php if($page=='lyear_forms_switch') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_forms_switch');?>">开关</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-has-subnav <?php if(
                                                                $page=='lyear_pages_doc' ||
                                                                $page=='lyear_pages_gallery' ||
                                                                $page=='lyear_pages_config' ||
                                                                $page=='lyear_pages_rabc' ||
                                                                $page=='lyear_pages_add_doc' ||
                                                                $page=='lyear_pages_guide' ||
                                                                $page=='lyear_pages_login' ||
                                                                $page=='lyear_pages_error'
                                                            ) {?> active open <?php }?> ">
                        <a href="javascript:void(0)"><i class="mdi mdi-file-outline"></i> 示例页面</a>
                        <ul class="nav nav-subnav">
                            <li <?php if($page=='lyear_pages_doc') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_doc');?>">文档列表</a> </li>
                            <li <?php if($page=='lyear_pages_gallery') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_gallery');?>">图库列表</a> </li>
                            <li <?php if($page=='lyear_pages_config') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_config');?>">网站配置</a> </li>
                            <li <?php if($page=='lyear_pages_rabc') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_rabc');?>">设置权限</a> </li>
                            <li <?php if($page=='lyear_pages_add_doc') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_add_doc');?>">新增文档</a> </li>
                            <li <?php if($page=='lyear_pages_guide') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_guide');?>">表单向导</a> </li>
                            <li <?php if($page=='lyear_pages_login') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_login');?>">登录页面</a> </li>
                            <li <?php if($page=='lyear_pages_error') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_pages_error');?>">错误页面</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-has-subnav  <?php if(
                                                                $page=='lyear_js_datepicker' ||
                                                                $page=='lyear_js_sliders' ||
                                                                $page=='lyear_js_colorpicker' ||
                                                                $page=='lyear_js_chartjs' ||
                                                                $page=='lyear_js_jconfirm' ||
                                                                $page=='lyear_js_tags_input' ||
                                                                $page=='lyear_js_notify'
                                                            ) {?> active open <?php }?> ">
                        <a href="javascript:void(0)"><i class="mdi mdi-language-javascript"></i> JS 插件</a>
                        <ul class="nav nav-subnav">
                            <li <?php if($page=='lyear_js_datepicker') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_js_datepicker');?>">日期选取器</a> </li>
                            <li <?php if($page=='lyear_js_sliders') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_js_sliders');?>">滑块</a> </li>
                            <li <?php if($page=='lyear_js_colorpicker') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_js_colorpicker');?>">选色器</a> </li>
                            <li <?php if($page=='lyear_js_chartjs') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_js_chartjs');?>">Chart.js</a> </li>
                            <li <?php if($page=='lyear_js_jconfirm') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_js_jconfirm');?>">对话框</a> </li>
                            <li <?php if($page=='lyear_js_tags_input') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_js_tags_input');?>">标签插件</a> </li>
                            <li <?php if($page=='lyear_js_notify') {?> class="active" <?php }?> > <a href="<?php echo site_url('admin/lyear_js_notify');?>">通知消息</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-has-subnav">
                        <a href="javascript:void(0)"><i class="mdi mdi-menu"></i> 多级菜单</a>
                        <ul class="nav nav-subnav">
                            <li> <a href="#!">一级菜单</a> </li>
                            <li class="nav-item nav-item-has-subnav">
                                <a href="#!">一级菜单</a>
                                <ul class="nav nav-subnav">
                                    <li> <a href="#!">二级菜单</a> </li>
                                    <li class="nav-item nav-item-has-subnav">
                                        <a href="#!">二级菜单</a>
                                        <ul class="nav nav-subnav">
                                            <li> <a href="#!">三级菜单</a> </li>
                                            <li> <a href="#!">三级菜单</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="#!">一级菜单</a> </li>
                        </ul>
                    </li>
                <?php }?>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <p class="copyright">
                Copyright &copy; <?php echo date('Y');?>. All rights reserved.
            </p>
        </div>
    </div>

</aside>