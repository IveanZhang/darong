<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:99:"/Users/ivanzhang/Documents/git-workspace/darong/public/../application/admin/view/tour/tour/add.html";i:1549577374;s:90:"/Users/ivanzhang/Documents/git-workspace/darong/application/admin/view/layout/default.html";i:1548799606;s:87:"/Users/ivanzhang/Documents/git-workspace/darong/application/admin/view/common/meta.html";i:1548968088;s:89:"/Users/ivanzhang/Documents/git-workspace/darong/application/admin/view/common/script.html";i:1548799606;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Title'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-title" data-rule="required" class="form-control" name="row[title]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Img'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-img" data-rule="required" class="form-control" size="50" name="row[img]" type="text" value="">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-img" class="btn btn-danger plupload" data-input-id="c-img"
                            data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false"
                            data-preview-id="p-img"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-img" class="btn btn-primary fachoose" data-input-id="c-img"
                            data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-img"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-img"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Description'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-description" data-rule="required" class="form-control" name="row[description]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Group_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-group_id" data-rule="required" data-source="tour/group/index" class="form-control selectpage"
                name="row[group_id]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Country_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-country_id" data-rule="required" data-source="country/index" class="form-control selectpage"
                name="row[country_id]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Ishot'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <select id="c-ishot" data-rule="required" class="form-control selectpicker" name="row[ishot]">
                <?php if(is_array($ishotList) || $ishotList instanceof \think\Collection || $ishotList instanceof \think\Paginator): if( count($ishotList)==0 ) : echo "" ;else: foreach($ishotList as $key=>$vo): ?>
                <option value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',"0"))): ?>selected<?php endif; ?>><?php echo $vo; ?> </option> <?php endforeach; endif; else: echo "" ;endif; ?> </select> </div>
                    </div> <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-2"><?php echo __('Price'); ?>:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input id="c-price" data-rule="required" class="form-control" name="row[price]" type="number">
                    </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
            <div class="col-xs-12 col-sm-8">

                <div class="radio">
                    <?php if(is_array($statusList) || $statusList instanceof \think\Collection || $statusList instanceof \think\Paginator): if( count($statusList)==0 ) : echo "" ;else: foreach($statusList as $key=>$vo): ?>
                    <label for="row[status]-<?php echo $key; ?>"><input id="row[status]-<?php echo $key; ?>" name="row[status]" type="radio"
                            value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',"1"))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-2"><?php echo __('Rate'); ?>:</label>
            <div class="col-xs-12 col-sm-8">
                <input id="c-rate" data-rule="required" class="form-control" name="row[rate]" type="number">
            </div>
        </div>
        <div class="form-group layer-footer">
            <label class="control-label col-xs-12 col-sm-2"></label>
            <div class="col-xs-12 col-sm-8">
                <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
                <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
            </div>
        </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>