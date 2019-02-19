<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:103:"/Users/ivanzhang/Documents/git-workspace/darong/public/../application/index/view/index/tour_detail.html";i:1550266683;s:89:"/Users/ivanzhang/Documents/git-workspace/darong/application/index/view/layout/darong.html";i:1550002295;s:89:"/Users/ivanzhang/Documents/git-workspace/darong/application/index/view/common/script.html";i:1548799606;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Darong - Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/css/animate.css">

    <link rel="stylesheet" href="/assets/css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/css/css/aos.css">

    <link rel="stylesheet" href="/assets/css/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/css/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/assets/css/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/css/icomoon.css">
    <link rel="stylesheet" href="/assets/css/css/style.css">

    <script type="text/javascript">
        var require = {
            config:  <?php echo json_encode($config); ?>
        };
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Darong.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/index.html" class="nav-link">首页</a></li>
                    <li class="nav-item"><a href="/index/index/about.html" class="nav-link">关于我们</a></li>
                    <li class="nav-item has-dropdown">
                        <a class="nav-link">热门线路</a>
                        <ul class="dropdown">
                            <?php if(is_array($groupList) || $groupList instanceof \think\Collection || $groupList instanceof \think\Paginator): if( count($groupList)==0 ) : echo "" ;else: foreach($groupList as $key=>$vo): ?>
                            <li><a href="/index/index/tour/id/<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a class="nav-link">热门城市</a>
                        <ul class="dropdown">
                            <?php if(is_array($cityList) || $cityList instanceof \think\Collection || $cityList instanceof \think\Paginator): if( count($cityList)==0 ) : echo "" ;else: foreach($cityList as $key=>$vo): ?>
                            <li><a href="/index/index/city/id/<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="/index/index/blog.html" class="nav-link">经验攻略</a></li>
                    <li class="nav-item"><a href="/index/index/contact.html" class="nav-link">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="content">
        <style>
    .timeline {
        list-style: none;
        padding: 20px 0 20px;
        position: relative;
    }

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 5%;
        margin-left: -1.5px;
    }

    .timeline>li {
        margin-bottom: 20px;
        position: relative;
    }

    .timeline>li:before,
    .timeline>li:after {
        content: " ";
        display: table;
    }

    .timeline>li:after {
        clear: both;
    }

    .timeline>li:before,
    .timeline>li:after {
        content: " ";
        display: table;
    }

    .timeline>li:after {
        clear: both;
    }

    .timeline>li>.timeline-panel {
        width: 85%;
        margin-left: 11%;
        float: left;
        border: 1px solid #d4d4d4;
        border-radius: 2px;
        padding: 20px;
        position: relative;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }

    .timeline>li>.timeline-panel:before {
        position: absolute;
        top: 26px;
        right: -15px;
        display: inline-block;
        border-top: 15px solid transparent;
        border-left: 15px solid #ccc;
        border-right: 0 solid #ccc;
        border-bottom: 15px solid transparent;
        content: " ";
    }

    .timeline>li>.timeline-panel:after {
        position: absolute;
        top: 27px;
        right: -14px;
        display: inline-block;
        border-top: 14px solid transparent;
        border-left: 14px solid #fff;
        border-right: 0 solid #fff;
        border-bottom: 14px solid transparent;
        content: " ";
    }

    .timeline>li>.timeline-badge {
        color: #fff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 1.4em;
        text-align: center;
        position: absolute;
        top: 16px;
        left: 5%;
        margin-left: -25px;
        background-color: #999999;
        z-index: 100;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }

    .timeline>li.timeline-inverted>.timeline-panel {
        /* float: right; */
    }

    .timeline>li.timeline-inverted>.timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
    }

    .timeline>li.timeline-inverted>.timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
    }

    .timeline-badge.primary {
        background-color: #2e6da4 !important;
    }

    .timeline-badge.success {
        background-color: #3f903f !important;
    }

    .timeline-badge.warning {
        background-color: #f0ad4e !important;
    }

    .timeline-badge.danger {
        background-color: #d9534f !important;
    }

    .timeline-badge.info {
        background-color: #5bc0de !important;
    }

    .timeline-title {
        margin-top: 0;
        color: inherit;
    }

    .timeline-body>p,
    .timeline-body>ul {
        margin-bottom: 0;
    }

    .timeline-body>p+p {
        margin-top: 5px;
    }

    li .blog-row-image{
        margin-top: 30px;
        margin-bottom: 30px;
    }

    li .blog-row-image .room-img{
        border-radius: 3px;
    }

    .g-font-size-16{
        font-size: 16px;
    }

    @media (max-width: 767px) {
        ul.timeline:before {
            left: 40px;
        }

        ul.timeline>li>.timeline-panel {
            width: calc(100% - 90px);
            width: -moz-calc(100% - 90px);
            width: -webkit-calc(100% - 90px);
        }

        ul.timeline>li>.timeline-badge {
            left: 15px;
            margin-left: 0;
            top: 16px;
        }

        ul.timeline>li>.timeline-panel {
            float: right;
        }

        ul.timeline>li>.timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        ul.timeline>li>.timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }


    }
</style>

<div class="hero-wrap js-fullheight" style="background-image: url('/assets/img/images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="/index/index/index.html">首页</a></span> <span>热门旅游路线</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $tourname['title']; ?>
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                <h2><?php echo $tourname['title']; ?></h2>
            </div>
        </div>
        <ul class="timeline">
            <?php foreach($contentList as $key=>$vo): ?>
            <li class="timeline-inverted">
                <div class="timeline-badge"><i class="glyphicon glyphicon-check"><?php echo $key+1; ?></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title"><?php echo $vo['title']; ?></h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>第 <?php echo $key+1; ?> 天</small></p>
                    </div>
                    <div class="timeline-body">
                        <p class="g-font-size-16"><?php echo $vo['content']; ?></p>
                        <div class="row">
                            <div class="col-md-6 col-12 blog-row-image">
                                <div class="room-img" style="background-image: url(<?php echo $vo['image']; ?>);">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 blog-row-image">
                                <div class="room-img" style="background-image: url(<?php echo $vo['image_opt']; ?>);">
                                </div>
                            </div>
                        </div>
                        <p><?php echo $vo['tips']; ?></p>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
    </main>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">DaRong.</h2>
                        <p>南京大荣观光旅游有限公司成立于2002年，专业从事国内以及海外旅游相关业务。经过十多年发展，公司设有南京总部以及杭州、江阴办事处等分支机构。公司始终秉承“顾客需求至上，品质卓越为本”的经营理念，公司将凭借深厚行业根基，加快移动互联网时代的业务转型，成为规模领先、品质卓越的中国旅游先锋者。
                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">快速导航</h2>
                        <ul class="list-unstyled">
                            <li><a href="/index/index/about.html" class="py-2 d-block">关于我们</a></li>
                            <li><a href="#" class="py-2 d-block">热门路线</a></li>
                            <li><a href="#" class="py-2 d-block">热门城市</a></li>
                            <li><a href="/index/index/blog.html" class="py-2 d-block">经验攻略</a></li>
                            <li><a href="/index/index/contact.html" class="py-2 d-block">联系我们</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">近期文章</h2>
                        <ul class="list-unstyled">
                            <?php if(is_array($recentNews) || $recentNews instanceof \think\Collection || $recentNews instanceof \think\Paginator): if( count($recentNews)==0 ) : echo "" ;else: foreach($recentNews as $key=>$vo): ?>
                                <li><a href="/index/index/blog_detail/id/<?php echo $vo['id']; ?>" class="py-2 d-block"><?php echo $vo['title']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">联系我们</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">250 Sheppard Ave East,
                                        North York, Ontario, CA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+1
                                            (416)-224-0386</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">http://www.uuwill.vip</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright 2018</script> All rights reserved by Liangzi IT Inc.</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>

    <script src="/assets/js/js/jquery.min.js"></script>
    <script src="/assets/js/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/assets/js/js/popper.min.js"></script>
    <script src="/assets/js/js/bootstrap.min.js"></script>
    <script src="/assets/js/js/jquery.easing.1.3.js"></script>
    <script src="/assets/js/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/js/jquery.stellar.min.js"></script>
    <script src="/assets/js/js/owl.carousel.min.js"></script>
    <script src="/assets/js/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/js/aos.js"></script>
    <script src="/assets/js/js/jquery.animateNumber.min.js"></script>
    <script src="/assets/js/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/js/scrollax.min.js"></script>

    <script src="https://unpkg.com/isotope-layout@2/dist/isotope.pkgd.min.js"></script>
    <script src="/assets/js/js/main.js"></script>
    <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>

</body>

</html>