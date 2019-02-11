<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"/Users/ivanzhang/Documents/git-workspace/darong/public/../application/admin/view/dashboard/index.html";i:1548799606;}*/ ?>
<style type="text/css">
    .sm-st {
        background:#fff;
        padding:20px;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border-radius:3px;
        margin-bottom:20px;
        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
    }
    .sm-st-icon {
        width:60px;
        height:60px;
        display:inline-block;
        line-height:60px;
        text-align:center;
        font-size:30px;
        background:#eee;
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        float:left;
        margin-right:10px;
        color:#fff;
    }
    .sm-st-info {
        font-size:12px;
        padding-top:2px;
    }
    .sm-st-info span {
        display:block;
        font-size:24px;
        font-weight:600;
    }
    .orange {
        background:#fa8564 !important;
    }
    .tar {
        background:#45cf95 !important;
    }
    .sm-st .green {
        background:#86ba41 !important;
    }
    .pink {
        background:#AC75F0 !important;
    }
    .yellow-b {
        background: #fdd752 !important;
    }
    .stat-elem {

        background-color: #fff;
        padding: 18px;
        border-radius: 40px;

    }

    .stat-info {
        text-align: center;
        background-color:#fff;
        border-radius: 5px;
        margin-top: -5px;
        padding: 8px;
        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
        font-style: italic;
    }

    .stat-icon {
        text-align: center;
        margin-bottom: 5px;
    }

    .st-red {
        background-color: #F05050;
    }
    .st-green {
        background-color: #27C24C;
    }
    .st-violet {
        background-color: #7266ba;
    }
    .st-blue {
        background-color: #23b7e5;
    }

    .stats .stat-icon {
        color: #28bb9c;
        display: inline-block;
        font-size: 26px;
        text-align: center;
        vertical-align: middle;
        width: 50px;
        float:left;
    }

    .stat {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        margin-right: 10px; }
    .stat .value {
        font-size: 20px;
        line-height: 24px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 500; }
    .stat .name {
        overflow: hidden;
        text-overflow: ellipsis; }
    .stat.lg .value {
        font-size: 26px;
        line-height: 28px; }
    .stat.lg .name {
        font-size: 16px; }
    .stat-col .progress {height:2px;}
    .stat-col .progress-bar {line-height:2px;height:2px;}

    .item {
        padding:30px 0;
    }
</style>
<?php if(preg_match('/\/admin\/|admin\.php|admin_d75KABNWt\.php/i', url())): ?>
<div class="alert alert-danger-light">
    <?php echo __('Security tips'); ?>
</div>
<?php endif; ?>
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null, false); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#one" data-toggle="tab"><?php echo __('Dashboard'); ?></a></li>
            <li><a href="#two" data-toggle="tab"><?php echo __('Custom'); ?></a></li>
        </ul>
    </div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">

                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-red"><i class="fa fa-users"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $totaluser; ?></span>
                                <?php echo __('Total user'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-violet"><i class="fa fa-book"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $totalviews; ?></span>
                                <?php echo __('Total view'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-blue"><i class="fa fa-shopping-bag"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $totalorder; ?></span>
                                <?php echo __('Total order'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-green"><i class="fa fa-cny"></i></span>
                            <div class="sm-st-info">
                                <span><?php echo $totalorderamount; ?></span>
                                <?php echo __('Total order amount'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div id="echart" style="height:200px;width:100%;"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card sameheight-item stats">
                            <div class="card-block">
                                <div class="row row-sm stats-container">
                                    <div class="col-xs-6 stat-col">
                                        <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                        <div class="stat">
                                            <div class="value"> <?php echo $todayusersignup; ?> </div>
                                            <div class="name"> <?php echo __('Today user signup'); ?> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: 30%"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 stat-col">
                                        <div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
                                        <div class="stat">
                                            <div class="value"> <?php echo $todayuserlogin; ?> </div>
                                            <div class="name"> <?php echo __('Today user login'); ?> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6  stat-col">
                                        <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
                                        <div class="stat">
                                            <div class="value"> <?php echo $todayorder; ?> </div>
                                            <div class="name"> <?php echo __('Today order'); ?> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6  stat-col">
                                        <div class="stat-icon"> <i class="fa fa-users"></i> </div>
                                        <div class="stat">
                                            <div class="value"> <?php echo $unsettleorder; ?> </div>
                                            <div class="name"> <?php echo __('Unsettle order'); ?> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6  stat-col">
                                        <div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
                                        <div class="stat">
                                            <div class="value"> <?php echo $sevendnu; ?> </div>
                                            <div class="name"> <?php echo __('Seven dnu'); ?> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 stat-col">
                                        <div class="stat-icon"> <i class="fa fa-dollar"></i> </div>
                                        <div class="stat">
                                            <div class="value"> <?php echo $sevendau; ?> </div>
                                            <div class="name"> <?php echo __('Seven dau'); ?> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: 25%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:15px;">

                    <div class="col-lg-12">
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <div class="panel-title">
                                    <span class="label label-success pull-right"><?php echo __('Real time'); ?></span>
                                    <h5><?php echo __('Category count'); ?></h5>
                                </div>
                                <div class="panel-content">
                                    <h1 class="no-margins">1234</h1>
                                    <div class="stat-percent font-bold text-gray"><i class="fa fa-commenting"></i> 1234</div>
                                    <small><?php echo __('Category count tips'); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="panel bg-aqua-gradient">
                            <div class="panel-body">
                                <div class="ibox-title">
                                    <span class="label label-info pull-right"><?php echo __('Real time'); ?></span>
                                    <h5><?php echo __('Attachment count'); ?></h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">1043</h1>
                                    <div class="stat-percent font-bold text-gray"><i class="fa fa-modx"></i> 2592</div>
                                    <small><?php echo __('Attachment count tips'); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <div class="panel bg-purple-gradient">
                            <div class="panel-body">
                                <div class="ibox-title">
                                    <span class="label label-primary pull-right"><?php echo __('Real time'); ?></span>
                                    <h5><?php echo __('Article count'); ?></h5>
                                </div>
                                <div class="ibox-content">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h1 class="no-margins">1234</h1>
                                            <div class="font-bold"><i class="fa fa-commenting"></i> <small><?php echo __('Comment count'); ?></small></div>
                                        </div>
                                        <div class="col-md-6">
                                            <h1 class="no-margins">6754</h1>
                                            <div class="font-bold"><i class="fa fa-heart"></i> <small><?php echo __('Like count'); ?></small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="panel bg-green-gradient">
                            <div class="panel-body">
                                <div class="ibox-title">
                                    <span class="label label-primary pull-right"><?php echo __('Real time'); ?></span>
                                    <h5><?php echo __('News count'); ?></h5>
                                </div>
                                <div class="ibox-content">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h1 class="no-margins">5302</h1>
                                            <div class="font-bold"><i class="fa fa-commenting"></i> <small><?php echo __('Comment count'); ?></small></div>
                                        </div>
                                        <div class="col-md-6">
                                            <h1 class="no-margins">8205</h1>
                                            <div class="font-bold"><i class="fa fa-user"></i> <small><?php echo __('Like count'); ?></small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--如果需要删除最新新闻和最新发贴，删除HTML后还需要删除dashboard.js中的代码-->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title"><?php echo __('Recent news'); ?></h3>
                                <div class="box-tools pull-right">
                                    <a href="https://www.fastadmin.net" target="_blank" class="btn btn-box-tool"><?php echo __('More'); ?></a>
                                </div>
                            </div>
                            <div class="box-body" id="news-list">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box box-success">
                            <div class="box-header">
                                <h3 class="box-title"><?php echo __('Recent discussion'); ?></h3>
                                <div class="box-tools pull-right">
                                    <a href="https://forum.fastadmin.net" class="btn btn-box-tool"><?php echo __('More'); ?></a>
                                </div>
                            </div>
                            <div class="box-body" id="discussion-list">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box box-info">
                            <div class="box-header"><h3 class="box-title"><?php echo __('Server info'); ?></h3></div>
                            <div class="box-body">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td width="140"><?php echo __('FastAdmin version'); ?></td>
                                            <td><?php echo \think\Config::get('fastadmin.version'); ?> <a href="javascript:;" class="btn btn-xs btn-checkversion">检查最新版</a></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('FastAdmin addon version'); ?></td>
                                            <td><?php echo $addonversion; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Sapi name'); ?></td>
                                            <td><?php echo php_sapi_name(); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Debug mode'); ?></td>
                                            <td><?php echo \think\Config::get('app_debug')?__('Yes'):__('No'); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Software'); ?></td>
                                            <td><?php echo \think\Request::instance()->server('SERVER_SOFTWARE'); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Upload mode'); ?></td>
                                            <td><?php echo $uploadmode; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Upload url'); ?></td>
                                            <td><?php echo $config['upload']['uploadurl']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Upload Cdn url'); ?></td>
                                            <td><?php echo $config['upload']['cdnurl']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Timezone'); ?></td>
                                            <td><?php echo date_default_timezone_get(); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Cdn url'); ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo __('Language'); ?></td>
                                            <td><?php echo $config['language']; ?></td>
                                        </tr>
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="two">
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo __('Custom zone'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script id="newstpl" type="text/html">
    <ul class="nav nav-stacked">
        <%for(var i=0;i < news.length;i++){%>
        <%var item=news[i];%>
        <li>
            <a href="<%=item.url%>" target="_blank">
                <span class="text"><%=item.title%></span>
            </a>
        </li>
        <%}%>
    </ul>
</script>
<script id="discussiontpl" type="text/html">
    <ul class="products-list product-list-in-box">
        <%for(var i=0;i < news.length;i++){%>
        <%var item=news[i];%>
        <li class="item">
            <div class="">
                <a href="<%=item.url%>" target="_blank" class="product-title"><%=item.title%>
                    <span class="label label-warning pull-right"><%=item.comments_count%></span></a>
                <span class="product-description">
                    <%=item.last_time%>
                </span>
            </div>
        </li>
        <%}%>
    </ul>
</script>
<script>
    var Orderdata = {
    column: <?php echo json_encode(array_keys($paylist)); ?>,
            paydata: <?php echo json_encode(array_values($paylist)); ?>,
            createdata: <?php echo json_encode(array_values($createlist)); ?>,
    };
</script>