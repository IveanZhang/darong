<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:96:"/Users/ivanzhang/Documents/git-workspace/darong/public/../application/index/view/index/city.html";i:1549903580;s:89:"/Users/ivanzhang/Documents/git-workspace/darong/application/index/view/layout/darong.html";i:1549903979;s:89:"/Users/ivanzhang/Documents/git-workspace/darong/application/index/view/common/script.html";i:1548799606;}*/ ?>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
                aria-expanded="false" aria-label="Toggle navigation">
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
                                <?php if(is_array($groupList) || $groupList instanceof \think\Collection || $groupList instanceof \think\Paginator): if( count($groupList)==0 ) : echo "" ;else: foreach($groupList as $key=>$vo): ?>
                                    <li><a href="/index/index/tour/id/<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">经验攻略</a></li>
                    <li class="nav-item"><a href="/index/index/contact.html" class="nav-link">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="content">
        <div class="hero-wrap js-fullheight" style="background-image: url('/assets/img/images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a
                            href="/index/index/index.html">首页</a></span> <span>热门旅游城市</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $countrylist['name']; ?></h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Find City</h3>
                    <form action="#">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Destination, City">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control" placeholder="Keyword search">
                                        <option value="">Select Location</option>
                                        <option value="">San Francisco USA</option>
                                        <option value="">Berlin Germany</option>
                                        <option value="">Lodon United Kingdom</option>
                                        <option value="">Paris Italy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                            </div>
                            <div class="form-group">
                                <div class="range-slider">
                                    <span>
                                        <input type="number" value="25000" min="0" max="120000" /> -
                                        <input type="number" value="50000" min="0" max="120000" />
                                    </span>
                                    <input value="1000" min="0" max="120000" step="500" type="range" />
                                    <input value="50000" min="0" max="120000" step="500" type="range" />
                                    </svg>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Star Rating</h3>
                    <form method="post" class="star-rating">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
                                            class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i
                                            class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i
                                            class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php if(is_array($productlist) || $productlist instanceof \think\Collection || $productlist instanceof \think\Paginator): if( count($productlist)==0 ) : echo "" ;else: foreach($productlist as $key=>$vo): ?>
                    <div class="col-md-4 ftco-animate">
                        <div class="destination">
                            <a href="/index/index/tour_detail/id/<?php echo $vo['id']; ?>" target="_blank" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $vo['image']; ?>);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#"><?php echo $vo['title']; ?></a></h3>
                                        <p class="rate">
                                            <?php $__FOR_START_1667498259__=1;$__FOR_END_1667498259__=$vo['rate'];for($i=$__FOR_START_1667498259__;$i < $__FOR_END_1667498259__;$i+=1){ ?>
                                            <i class="icon-star"></i>
                                            <?php } ?>
                                            <span>8 Rating</span>
                                        </p>
                                    </div>
                                    <div class="two">
                                        <span class="price per-price">￥<?php echo $vo['price']; ?><br></span>
                                    </div>
                                </div>
                                <p><?php echo $vo['p']; ?></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> <?php echo $vo['country']; ?></span>
                                    <span class="ml-auto"><a href="/index/index/tour_detail/id/<?php echo $vo['id']; ?>">查看详情</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->
    </main>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">DaRong.</h2>
                        <p>南京大荣观光旅游有限公司成立于2002年，专业从事国内以及海外旅游相关业务。经过十多年发展，公司设有南京总部以及杭州、江阴办事处等分支机构。公司始终秉承“顾客需求至上，品质卓越为本”的经营理念，公司将凭借深厚行业根基，加快移动互联网时代的业务转型，成为规模领先、品质卓越的中国旅游先锋者。</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">快速导航</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">关于我们</a></li>
                            <li><a href="#" class="py-2 d-block">热门路线</a></li>
                            <li><a href="#" class="py-2 d-block">热门城市</a></li>
                            <li><a href="#" class="py-2 d-block">经验攻略</a></li>
                            <li><a href="#" class="py-2 d-block">联系我们</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">近期文章</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">文章文章文章文章文章文章1</a></li>
                            <li><a href="#" class="py-2 d-block">文章文章文章文章文章文章2</a></li>
                            <li><a href="#" class="py-2 d-block">文章文章文章文章文章文章3</a></li>
                            <li><a href="#" class="py-2 d-block">文章文章文章文章文章文章4</a></li>
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
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">http://www.uuwill.vip</span></a></li>
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
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

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