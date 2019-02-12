<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"/Users/ivanzhang/Documents/git-workspace/darong/public/../application/index/view/index/index.html";i:1549988264;s:89:"/Users/ivanzhang/Documents/git-workspace/darong/application/index/view/layout/darong.html";i:1549983226;s:89:"/Users/ivanzhang/Documents/git-workspace/darong/application/index/view/common/script.html";i:1548799606;}*/ ?>
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
        <div class="hero-wrap js-fullheight" style="background-image: url('/assets/img/images/bg_1.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
			data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>大荣旅游 <br></strong>
				</h1>
				<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">尽享旅游乐趣，探索世界每一个角落</p>
				<div class="block-17 my-4">
					<form action="" method="post" class="d-block d-flex">
						<div class="fields d-block d-flex">
							<div class="textfield-search one-third">
								<input type="text" class="form-control" placeholder="搜索: 如，尼亚加拉瀑布, 黄刀公园">
							</div>
						</div>
						<input type="submit" class="search-submit btn btn-primary" value="Search">
					</form>
				</div>
				<p>选择热门旅游项目</p>
				<p class="browse d-md-flex">
					<span class="d-flex justify-content-md-center align-items-md-center"><a href="/index/index/tour/id/1"
							target="_blank"><i class="flaticon-fork"></i>跟团游</a></span>
					<span class="d-flex justify-content-md-center align-items-md-center"><a href="/index/index/tour/id/3"
							target="_blank"><i class="flaticon-hotel"></i>高端定制游</a></span>
					<span class="d-flex justify-content-md-center align-items-md-center"><a href="/index/index/tour/id/2"
							target="_blank"><i class="flaticon-meeting-point"></i>冬/夏令营</a></span>
					<span class="d-flex justify-content-md-center align-items-md-	center"><a href="/index/index/tour/id/4"
							target="_blank"><i class="flaticon-shopping-bag"></i>主题游</a></span>
				</p>
			</div>
		</div>
	</div>
</div>

<!--     <section id="about-us" class='overlay'>
        <div class='about-us'>
          <div clss='container bg-text'>
            <h1 style="margin-top:35px;" class="text-center">关于我们</h1>
            <div style="line-height:24px; text-align:center; margin:0 auto 35px; width:80%;">
              南京大荣观光旅游有限公司成立于2002年，专业从事国内以及海外旅游相关业务。经过十多年发展，公司设有南京总部以及杭州、江阴办事处等分支机构。公司始终秉承“顾客需求至上，品质卓越为本”的经营理念，不断推进产品创新，积极优化营销渠道；展望未来，公司将凭借深厚行业根基，加快移动互联网时代的业务转型，成为规模领先、品质卓越的中国旅游先锋者。
            </div>
          </div>
        </div>
    </section> -->


<section class="ftco-section ftco-destination">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading"></span>
				<h2 class="mb-4"><strong class='g-theme-color'>热门</strong> 城市</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="destination-slider owl-carousel ftco-animate">
					<?php foreach($cityList as $key => $vo): ?>
					<div class="item">
						<div class="destination">
							<a href="/index/index/city/id/<?php echo $vo['id']; ?>" target="_black"
								class="img d-flex justify-content-center align-items-center"
								style='background-image: url(<?php echo $vo['image']; ?>);'>
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="/index/index/city/id/<?php echo $vo['id']; ?>" target="_black"><?php echo $vo['name']; ?></a></h3>
								<span class="listing">15 Listing</span>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter"
	style="background: url(/assets/img/images/bg_1.jpg) center no-repeat fixed;">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-4">大荣旅游</h2>
				<span class="subheading">顾客需求至上，品质卓越为本</span>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="17">0</strong>
								<span>从事旅游领域17年</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="40">0</strong>
								<span>40多条精品旅游线路</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="87000">0</strong>
								<span>数万游客满意好评</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-start pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading"></span>
				<h2 class="mb-4"><strong class="g-theme-color">热门</strong> 路线推荐</h2>
			</div>
		</div>
	</div>
	<div class="button-group filter-button-group">
		<?php foreach($groupList as $key => $vo): ?>
		<button class="btn btn-primary" data-filter=".<?php echo $vo['filter']; ?>"><?php echo $vo['name']; ?></button>
		<?php endforeach; ?>
	</div>

	<div class="container">
		<div class="grid row">

			<?php foreach($productlist as $key => $vo): ?>
			<div class="grid-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 <?php echo $vo['filter']; ?>">
				<div class="grid-item-content destination">
					<a href="/index/index/tour_detail/id/<?php echo $vo['id']; ?>" target="_blank"
						class="img img-2 d-flex justify-content-center align-items-center"
						style="background-image: url(<?php echo $vo['image']; ?>);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3 ">
						<div class="d-flex">
							<div class="one">
								<h3><a href="#"><?php echo $vo['title']; ?></a></h3>
								<p class="rate">
									<?php $__FOR_START_562142660__=1;$__FOR_END_562142660__=$vo['rate'];for($i=$__FOR_START_562142660__;$i < $__FOR_END_562142660__;$i+=1){ ?>
									<i class="icon-star"></i>
									<?php } ?>
									<span>8 Rating</span>
								</p>
							</div>
							<div class="two">
								<span class="price per-price">￥<?php echo $vo['price']; ?><br></span>
							</div>
						</div>
						<p class="text-descp"><?php echo $vo['p']; ?></p>
						<hr>
						<p class="bottom-area d-flex">
							<span><i class="icon-map-o"></i> <?php echo $vo['country']; ?></span>
							<span class="ml-auto"><a href="/index/index/tour_detail/id/<?php echo $vo['id']; ?>">查看详情</a></span>
						</p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-12 heading-section ftco-animate">
				<span class="subheading"></span>
				<h2 style="text-align: center;"><strong class="g-theme-color">旅游</strong> 经验攻略</h2>
			</div>
		</div>

		<div class="blog-flex">
			<div class="f-entry-img" style="background-image: url(/uploads/20190212/d343724156e0f66f4b4d383052e69995.jpg);">
			</div>
			<div class="blog-entry aside-stretch-right">
				<div class="row">
					<?php if(is_array($newslist) || $newslist instanceof \think\Collection || $newslist instanceof \think\Paginator): if( count($newslist)==0 ) : echo "" ;else: foreach($newslist as $key=>$vo): ?>
					<div class="col-md-12 animate-box">
						<a href="/index/index/blog_detail/id/<?php echo $vo['id']; ?>" class="blog-post">
							<span class="img"
								style="background-image: url(<?php echo $vo['image']; ?>);"></span>
							<div class="desc">
								<span class="date">Feb 22, 2018</span>
								<h3><?php echo $vo['title']; ?></h3>
								<span class="cat"><?php echo $vo['category']; ?></span>
							</div>
						</a>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section-parallax">
	<div class="parallax-img d-flex align-items-center">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<h2>订阅最新咨询</h2>
					<p>订阅我们的最新资讯，关注所有最新的优惠、旅游产品、旅游线路等等。</p>
					<div class="row d-flex justify-content-center mt-5">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control" placeholder="输入电子邮箱">
									<input type="submit" value="点击订阅" class="submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
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