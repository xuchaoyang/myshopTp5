<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\phpStudy\WWW\adminui/public\theme\admin\good\catebanner.html";i:1500431396;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\layout.html";i:1500431397;s:61:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\static.html";i:1500431396;s:57:"D:\phpStudy\WWW\adminui/public\theme\admin\layout\js.html";i:1500431396;}*/ ?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><meta name="renderer" content="webkit"><title><?php echo $admin_title; ?></title><meta name="keywords" content=""><meta name="description" content=""><!-- 引入公共css/js --><!-- 字体图标 --><link rel="shortcut icon" href="<?php echo $web_public; ?>favicon.ico"><link href="<?php echo $web_static; ?>/css/font-awesome.min.css" rel="stylesheet"><!-- JQuery --><script src="<?php echo $web_static; ?>/js/jquery.min.js"></script><script src="<?php echo $web_static; ?>/plugins/metisMenu/jquery.metisMenu.js"></script><!-- bootstrap --><link href="<?php echo $web_static; ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/bootstrap/js/bootstrap.min.js"></script><!-- 自定义样式 --><link href="<?php echo $css; ?>/animate.css" rel="stylesheet"><link href="<?php echo $css; ?>/style.css" rel="stylesheet"><!-- checkbox 和radio 美化 --><link href="<?php echo $web_static; ?>/css/input.css" rel="stylesheet"><!-- <link href="<?php echo $web_static; ?>/css/checkbox.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/js/checkbox.js"></script> --><!-- select 美化 --><link href="<?php echo $web_static; ?>/css/select.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/jquery/scrollbar.css" rel="stylesheet"><script src="<?php echo $web_static; ?>/plugins/jquery/scrollbar.js"></script><script src="<?php echo $web_static; ?>/js/select.js"></script><link href="<?php echo $web_static; ?>/css/common.css" rel="stylesheet"><link href="<?php echo $web_static; ?>/plugins/editor/wangEditor.min.css" rel="stylesheet"><style>        .layout-return-btn{
            position: relative;
            top: -8px;
            left: -6px;
            margin: 0!important;
        }
        body{
            height: 1vh;
        }
    </style></head><body class="gray-bg  animated fadeIn"><div class="wrapper wrapper-content ibox float-e-margins" ><div class="ibox-title visible-lg"><!-- <h5> --><ul class="breadcrumb inline pull-left" ><li><?php echo $menu['pmenu']; ?></li><li><?php echo $menu['menu_name']; ?></li></ul><!-- </h5> --><a class="pull-right btn btn-default btn-xs" title="刷新当前" href=""><i class="fa fa-refresh"></i></a></div><div class="ibox-content"><div class="panel panel-default"></div><div class="table-responsive"><table class="table table-hover table-bordered table-condensed"><thead><tr><!-- <th width='1'><input type="checkbox" class="my-all-check" name="input[]"></th> --><th width="150">url</th><th width="100">banner图</th><th width="250" class="hidden-xs">开始时间</th><th width="250" class="hidden-xs">结束时间</th><th width="250">操作</th></tr></thead><tbody><?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['start_time'] <= time() && time() <= $vo['end_time']): ?><tr><td><?php echo $vo['banner_url']; ?></td><td><a href="<?php echo url('bannerImg',['banner_id'=>$vo['banner_id']]); ?>" class="btn btn-outline btn-default btn-xs js-window-load" title="banner图" js-unique="true" js-width="40%">查看图片</a></td><td class="hidden-xs"><?php echo date("Y-m-d H:i:s",$vo['start_time']); ?></td><td class="hidden-xs"><?php echo date("Y-m-d H:i:s",$vo['end_time']); ?></td><td ><span class="btn-group"><a href="<?php echo U('editBanner',['banner_id'=>$vo['banner_id']]); ?>" class="btn btn-outline btn-default btn-xs js-window-load" title="banner编辑:当前显示" js-unique="true" ><i class="fa fa-edit fa-fw" ></i><span class="hidden-xs">编辑</span></a></span></td></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?><tr><th colspan="5">未显示设置记录</th></tr><tr><!-- <th width='1'><input type="checkbox" class="my-all-check" name="input[]"></th> --><th width="150">url</th><th width="100">banner图</th><th width="250" class="hidden-xs">开始时间</th><th width="250" class="hidden-xs">结束时间</th><th width="250">操作</th></tr><?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(time() < $vo['start_time']): ?><tr><!-- <td width='1'><input type="checkbox" value="<?php echo $vo['banner_id']; ?>" class="i-checks" name="input[]"></td> --><td><?php echo $vo['banner_url']; ?></td><td><a href="<?php echo url('bannerImg',['banner_id'=>$vo['banner_id']]); ?>" class="btn btn-outline btn-default btn-xs js-window-load" title="banner图" js-unique="true" js-width="40%">查看图片</a></td><td class="hidden-xs"><?php echo date("Y-m-d H:i:s",$vo['start_time']); ?></td><td class="hidden-xs"><?php echo date("Y-m-d H:i:s",$vo['end_time']); ?></td><td ><span class="btn-group"><a href="<?php echo U('editBanner',['banner_id'=>$vo['banner_id']]); ?>" class="btn btn-outline btn-default btn-xs js-window-load" title="banner编辑" js-unique="true" ><i class="fa fa-edit fa-fw" ></i><span class="hidden-xs">编辑</span></a></span></td></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?><tr><th colspan="5">已过期设置记录</th></tr><?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['end_time'] < time()): ?><tr><td><?php echo $vo['banner_url']; ?></td><td><a href="<?php echo url('bannerImg',['banner_id'=>$vo['banner_id']]); ?>" class="btn btn-outline btn-default btn-xs js-window-load" title="banner图" js-unique="true" js-width="40%">查看图片</a></td><td class="hidden-xs"><?php echo date("Y-m-d H:i:s",$vo['start_time']); ?></td><td class="hidden-xs"><?php echo date("Y-m-d H:i:s",$vo['end_time']); ?></td><td ><span class="btn-group"><a href="<?php echo U('delbanner',['id'=>$vo['banner_id']]); ?>" class="btn btn-danger btn-outline btn-xs js-del-btn" text="删除后将无法恢复,请谨慎操作！" ><i class="fa fa-trash-o fa-fw" ></i><span class="hidden-xs">删除</span></a></span></td></tr><?php endif; endforeach; endif; else: echo "" ;endif; ?></tbody></table><!-- <div class="cleanfix"><div class="pull-left pagination hidden-xs" ></div><div class="pull-left"></div></div> --></div></div></div></body><!-- 全局js --><script src="<?php echo $web_static; ?>plugins/slimscroll/jquery.slimscroll.min.js"></script><!-- 第三方插件，加载进度条 --><script src="<?php echo $web_static; ?>/plugins/pace/pace.min.js"></script><!-- layui --><script src="<?php echo $web_static; ?>/plugins/layui/layer/layer.js"></script><script src="<?php echo $web_static; ?>/plugins/layui/laydate/laydate.js"></script><!-- 自定义js --><script src="<?php echo $web_static; ?>/js/layer.com.js"></script><script src="<?php echo $web_static; ?>/js/common.js"></script><script src="<?php echo $web_static; ?>/js/vue.js"></script><script src="<?php echo $js; ?>/hplus.js?v=4.1.0"></script><script src="<?php echo $js; ?>/contabs.js"></script></html><style type="text/css">    .panel-heading{
        display: none;
    }
    .panel-footer{
        background-color: #fff;
        border: none
    }
    .panel-body.form-inline .form-group{
        margin-right: 10px!important;
        margin-bottom: 10px!important;

    }
    .panel-body.form-inline .form-group .form-control{
        width: 200px;
    }
    .panel-body.form-inline .form-group.group1 .form-control,
    .panel-body.form-inline .form-group.group2 .form-control
    {
        width: 205px;
    }
    .panel-body.form-inline{
        padding-bottom: 0;
    }
    .panel-body.form-inline .form-group.pull-right {
        margin: 0!important;
    }
    .panel-body.form-inline .form-group.group1{
        margin-right: 0px!important;
    }
</style><script type="text/javascript">    // 页面初始化
    $(function(){
        $('a').click(function(){
            $(this).blur();
        })
        $('.city-picker-span').css('width', '');
    })

</script>