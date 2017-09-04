<?php
	require_once './classes/user.php';
	session_start();
	$_SESSION['advert']=array('advert1'=>'http://jinkewang.duapp.com/images/advert1.jpg',
				'advert2'=>'http://jinkewang.duapp.com/images/advert2.jpg',
				'advert3'=>'http://jinkewang.duapp.com/images/advert2.jpg',
				'advert4'=>'http://jinkewang.duapp.com/images/advert4.jpg');
	$array=$_SESSION['advert'];
	require_once './config/config.php';
	$confige->initConfig("./config/config.json");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<link href="css/common_dd94d7a.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
		<script type="text/javascript" src="./js/jquery.bxslider_e88acd1b.js"></script>
		<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>
		<!--商品分类菜单JavaScript-->
		<script src="js/menu.js" type="text/javascript" charset="utf-8"></script>
		<script type="application/javascript" src="js/select.js"></script>
		<script type="application/javascript" src="js/lrscroll.js"></script>
		<script type="application/javascript" src="js/iban.js"></script>
		<script type="application/javascript" src="js/f_ban.js"></script>
		<script type="application/javascript" src="js/fban.js"></script>
		<script type="application/javascript" src="js/mban.js"></script>
		<script type="application/javascript" src="js/bban.js"></script>
		<script type="application/javascript" src="js/hban.js"></script>
		<script type="application/javascript" src="js/tban.js"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/base_8aebc17.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.imagezoom.min.js"></script>
		<script type="text/javascript" src="./js/lrscroll_1.js"></script>
		<title><?php echo $confige->getItem('homepage_title');?></title>
	</head>
	<body>
		<?php include "./top.html";?>
		<div class="top">
			<div class="logo cur-hand" style="text-align: center;font-size: 35px;color: red;">
				<?php echo $confige->getItem('homepage_title');?>
			</div>
			<div class="search">
				<form>
					<input type="text" value="" class="s_ipt">
					<input type="submit" value="搜索" class="s_btn">
				</form>
				<span class="fl">
					<a href="javascript:void(0)">
						咖啡
					</a>
					<a href="javascript:void(0)">
						iphone 6S
					</a>
					<a href="javascript:void(0)">
						新鲜美食
					</a>
					<a href="javascript:void(0)">
						蛋糕
					</a>
					<a href="javascript:void(0)">
						日用品
					</a>
					<a href="javascript:void(0)">
						连衣裙
					</a>
				</span>
			</div>
		
			<div class="i_car">
				<div class="car_t">
					购物车 [ <span>3</span> ]
				</div>
				<div class="car_bg">
					<!--Begin 购物车未登录 Begin-->
					<div class="un_login">
						还未登录！
						<a href="./login.html" style="color:#ff4e00;">
							马上登录
						</a> 查看购物车！
					</div>
					<!--End 购物车未登录 End-->
					<!--Begin 购物车已登录 Begin-->
					<ul class="cars">
						<li>
							<div class="img">
								<a href="javascript:void(0)">
									<img src="./images/car1.jpg" width="58" height="58">
								</a>
							</div>
							<div class="name">
								<a href="javascript:void(0)">
									法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只
								</a>
							</div>
							<div class="price">
								<font color="#ff4e00">￥399</font> X1
							</div>
						</li>
						<li>
							<div class="img">
								<a href="javascript:void(0)">
									<img src="./images/car2.jpg" width="58" height="58">
								</a>
							</div>
							<div class="name">
								<a href="javascript:void(0)">
									香奈儿（Chanel）邂逅活力淡香水50ml
								</a>
							</div>
							<div class="price">
								<font color="#ff4e00">￥399</font> X1
							</div>
						</li>
						<li>
							<div class="img">
								<a href="javascript:void(0)">
									<img src="./images/car2.jpg" width="58" height="58">
								</a>
							</div>
							<div class="name">
								<a href="javascript:void(0)">
									香奈儿（Chanel）邂逅活力淡香水50ml
								</a>
							</div>
							<div class="price">
								<font color="#ff4e00">￥399</font> X1
							</div>
						</li>
						<li>
							<div class="img">
								<a href="javascript:void(0)">
									<img src="./images/car1.jpg" width="58" height="58">
								</a>
							</div>
							<div class="name">
								<a href="javascript:void(0)">
									法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只
								</a>
							</div>
							<div class="price">
								<font color="#ff4e00">￥399</font> X1
							</div>
						</li>
						<li>
							<div class="img">
								<a href="javascript:void(0)">
									<img src="./images/car2.jpg" width="58" height="58">
								</a>
							</div>
							<div class="name">
								<a href="javascript:void(0)">
									香奈儿（Chanel）邂逅活力淡香水50ml
								</a>
							</div>
							<div class="price">
								<font color="#ff4e00">￥399</font> X1
							</div>
						</li>
						<li>
							<div class="img">
								<a href="javascript:void(0)">
									<img src="./images/car2.jpg" width="58" height="58">
								</a>
							</div>
							<div class="name">
								<a href="javascript:void(0)">
									香奈儿（Chanel）邂逅活力淡香水50ml
								</a>
							</div>
							<div class="price">
								<font color="#ff4e00">￥399</font> X1
							</div>
						</li>
					</ul>
					<div class="price_sum">
						共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span>
					</div>
					<div class="price_a">
						<a href="javascript:void(0)">
							去购物车结算
						</a>
					</div>
					<!--End 购物车已登录 End-->
				</div>
			</div>
		</div>
		<!--End Header End-->
		<!--Begin Menu Begin-->
		<div class="menu_bg">
			<div class="menu">
				<!--Begin 商品分类详情 Begin-->
				<div class="nav">
					<div class="nav_t">
						全部商品分类
					</div>
					<div class="leftNav">
						<ul>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav1.png">
									</span>
									<span class="fl">进口食品、生鲜</span>
								</div>
								<div class="zj" style="display: none;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav2.png">
									</span>
									<span class="fl">食品、饮料、酒</span>
								</div>
								<div class="zj" style="top: -40px; display: none;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力2
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav3.png">
									</span>
									<span class="fl">母婴、玩具、童装</span>
								</div>
								<div class="zj" style="top: -80px; display: none;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力3
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav4.png">
									</span>
									<span class="fl">家居、家庭清洁、纸品</span>
								</div>
								<div class="zj" style="top:-120px;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力4
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav5.png">
									</span>
									<span class="fl">美妆、个人护理、洗护</span>
								</div>
								<div class="zj" style="top:-160px;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力5
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav6.png">
									</span>
									<span class="fl">女装、内衣、中老年</span>
								</div>
								<div class="zj" style="top:-200px;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力6
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav7.png">
									</span>
									<span class="fl">鞋靴、箱包、腕表配饰</span>
								</div>
								<div class="zj" style="top:-240px;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力7
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav8.png">
									</span>
									<span class="fl">男装、运动</span>
								</div>
								<div class="zj" style="top:-280px;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力8
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav9.png">
									</span>
									<span class="fl">手机、小家电、电脑</span>
								</div>
								<div class="zj" style="top:-320px;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力9
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="fj">
									<span class="n_img">
										<span>
										</span>
										<img src="./images/nav10.png">
									</span>
									<span class="fl">礼品、充值</span>
								</div>
								<div class="zj" style="top:-360px;">
									<div class="zj_l">
										<div class="zj_l_c">
											<h2>
												零食 / 糖果 / 巧克力10
											</h2>
											<a href="javascript:void(0)">
												坚果
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												巧克力
											</a>|
											<a href="javascript:void(0)">
												口香糖
											</a>|
											<a href="javascript:void(0)">
												海苔
											</a>|
											<a href="javascript:void(0)">
												鱼干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
											<a href="javascript:void(0)">
												红枣
											</a>|
											<a href="javascript:void(0)">
												牛肉干
											</a>|
											<a href="javascript:void(0)">
												蜜饯
											</a>|
										</div>
									</div>
									<div class="zj_r">
										<a href="javascript:void(0)">
											<img src="./images/n_img1.jpg" width="236" height="200">
										</a>
										<a href="javascript:void(0)">
											<img src="./images/n_img2.jpg" width="236" height="200">
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!--End 商品分类详情 End-->
				<ul class="menu_r">
					<li>
						<a href="#">
							首页
						</a>
					</li>
					<li>
						<a href="#">
							美食
						</a>
					</li>
					<li>
						<a href="#">
							生鲜
						</a>
					</li>
					<li>
						<a href="#">
							家居
						</a>
					</li>
					<li>
						<a href="#">
							女装
						</a>
					</li>
					<li>
						<a href="#">
							美妆
						</a>
					</li>
					<li>
						<a href="#">
							数码
						</a>
					</li>
					<li>
						<a href="#">
							团购
						</a>
					</li>
				</ul>
				<div class="m_ad">
					中秋送好礼！
				</div>
			</div>
		</div>
		<!--End Menu End-->
		<div class="i_bg bg_color">
			<div class="i_ban_bg">
				<div class="banner">
					<div class="top_slide_wrap">
						<div class="bx-wrapper" style="max-width: 100%;">
							<div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 401px;">
								<ul class="slide_box bxslider" style="width: 515%; position: relative; transition-duration: 0.5s; transform: translate3d(-1480px, 0px, 0px);">
									<li style="float: left; list-style: none; position: relative; width: 740px;" class="bx-clone">
										<img src="<?php echo $array['advert1'];?>" width="740" height="401">
									</li>
									<li style="float: left; list-style: none; position: relative; width: 740px;">
										<img src="<?php echo $array['advert2'];?>" width="740" height="401">
									</li>
									<li style="float: left; list-style: none; position: relative; width: 740px;">
										<img src="<?php echo $array['advert3'];?>" width="740" height="401">
									</li>
									<li style="float: left; list-style: none; position: relative; width: 740px;">
										<img src="<?php echo $array['advert4'];?>" width="740" height="401">
									</li>
									<li style="float: left; list-style: none; position: relative; width: 740px;" class="bx-clone">
										<img src="<?php echo $array['advert2'];?>" width="740" height="401">
									</li>
								</ul>
							</div>
							<div class="bx-controls bx-has-pager">
								<div class="bx-pager bx-default-pager">
									<a href="" data-slide-index="0" class="bx-pager-link">
									</a>
									<a href="" data-slide-index="1" class="bx-pager-link active">
									</a>
									<a href="" data-slide-index="2" class="bx-pager-link">
									</a>
								</div>
							</div>
						</div>
						<div class="op_btns clearfix">
							<a href="javascript:void(0)" class="op_btn op_prev">
								<span>
								</span>
							</a>
							<a href="javascript:void(0)" class="op_btn op_next">
								<span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<script type="text/javascript">//var jq = jQuery.noConflict();
					(function() {
						$(".bxslider").bxSlider({
							auto: true,
							prevSelector: jq(".top_slide_wrap .op_prev")[0],
							nextSelector: jq(".top_slide_wrap .op_next")[0]
						});
					})();
				</script>
				<!--End Banner End-->
				<div class="inews">
					<div class="news_t">
						<span class="fr">
							<a href="javascript:void(0)">
								更多 &gt;
							</a>
						</span>新闻资讯
					</div>
					<ul>
						<li>
							<span>[ 特惠 ]</span>
							<a href="javascript:void(0)">
								掬一轮明月 表无尽惦念
							</a>
						</li>
						<li>
							<span>[ 公告 ]</span>
							<a href="javascript:void(0)">
								好奇金装成长裤新品上市
							</a>
						</li>
						<li>
							<span>[ 特惠 ]</span>
							<a href="javascript:void(0)">
								大牌闪购 · 抢！
							</a>
						</li>
						<li>
							<span>[ 公告 ]</span>
							<a href="javascript:void(0)">
								发福利 买车就抢千元油卡
							</a>
						</li>
						<li>
							<span>[ 公告 ]</span>
							<a href="javascript:void(0)">
								家电低至五折
							</a>
						</li>
					</ul>
					<?php
						if(!isset($_SESSION['C_USER'])||$_SESSION['C_USER']==NULL){
					?>
					<div class="charge_t">
						用户登录
						<div class="ch_t_icon">
						</div>
					</div>
					<form>
						<table border="0" style="width:205px; margin-top:10px;" cellspacing="0" cellpadding="0">
							<tbody>
								<tr style="height: 35px;line-height: 35px; text-align: center;">
									<td width="43" style="text-align:right;display: inline-block;width: 50px;">
										用户名：
									</td>
									<td>
										<input id="input-username" style="width: 140px;" type="text" value="" class="c_ipt">
									</td>
								</tr>
								<tr style="height: 35px;line-height: 35px; text-align: center;">
									<td width="43" style="text-align:right;display: inline-block;width: 50px;">
										密码：
									</td>
									<td>
										<input id="input-password" style="width: 140px;" type="password" value="" class="c_ipt">
									</td>
								</tr>
								<tr height="43">
									<td colspan="2">
										<input id="login-btn" type="button" value="立即登录" class="c_btn">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					<?php
						}else{
					?>
					<div class="logined-div">
						<image src="./images/init_head.png" style="height: 70px;width:70px;margin-top: 5px;" class="cur-hand" onclick="goToAccount();"></image><br/>
						<aaa style="font-size: 14px;">Hi~<?php echo $_SESSION['C_USER']->mUserName;?></aaa><br/>
						当前积分：<?php echo $_SESSION['C_USER']->mJifen;?>&nbsp;&nbsp;<a style="font-size: 16px;color: red;" href="./meiriqiandao.php" class="mouse-on-strong">去签到</a><br/>
						<input type="button" class="mouse-on-back-red-off-orange cur-hand" onclick="goToAccount();"style="width: 85px;margin-top;10px;height: 30px;border:none;color:white;display: inline-block;" value="<?php echo $confige->getItem('account_title');?>"/>
						<input type="button" class="mouse-on-back-red-off-orange cur-hand" onclick="exitLogin();" style="width: 85px;height: 30px;margin-left:10px;border:none;color:white;display: inline-block;" value="注销"/>
					</div>
					<?php		
						}
					?>
				</div>
			</div>
			<div class="content mar_20">
				<img src="./images/mban_1.jpg" width="1200" height="110">
			</div>
			<!--Begin 进口 生鲜 Begin-->
			<div class="i_t mar_10">
				<span class="floor_num">1F</span>
				<span class="fl">进口 <b>·</b> 生鲜</span>
				<span class="i_mores fr">
					<a href="javascript:void(0)">
						进口咖啡
					</a>&nbsp; &nbsp; &nbsp;
					<a href="javascript:void(0)">
						进口酒
					</a>&nbsp; &nbsp; &nbsp;
					<a href="javascript:void(0)">
						进口母婴
					</a>&nbsp; &nbsp; &nbsp;
					<a href="javascript:void(0)">
						新鲜蔬菜
					</a>&nbsp; &nbsp; &nbsp;
					<a href="javascript:void(0)">
						新鲜水果
					</a>
				</span>
			</div>
			<main id="main" style="margin-top: 20px;">
			<div class="index-floor">
				<div class="index-goods-list cl">
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/DD/44/CqgBJlWKJymAA_SaAAFWGx5AnjM548-308x196.jpg" src="images/a.gif" alt="东来顺林达饭庄">
								<span class="index-goods-place">北京朝阳区东土城路8号A座</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【西坝河东里】东来顺林达饭庄">
									【西坝河东里】东来顺林达饭庄
								</a>
								<a class="index-goods-text" href="" target="_blank" title="海参菌汤火锅4-5人餐，服务周到">
									海参菌汤火锅4-5人餐，服务周到
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>199</span>
								<span class="money">¥<del>512</del></span>
								<span class="number">已售<i>140</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/61/3E/CqgBJlQEI2OAQBKiAADqthPtTvI873-308x196.jpg" src="images/a.gif" alt="俏江南">
								<span class="index-goods-place">恒基店、阳光店、亦庄店、华贸店、东方店、望京店、首体-腾达店、银座店、金融街店、亮马河店、翠微广场店、安贞店、北京通州店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【13店通用】俏江南">
									【13店通用】俏江南
								</a>
								<a class="index-goods-text" href="" target="_blank" title="自选4人餐，提供免费WiFi，含服务费">
									自选4人餐，提供免费WiFi，含服务费
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>298</span>
								<span class="money">¥<del>1234.2</del></span>
								<span class="number">已售<i>1044</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/67/73/CqgBJlQRYoSAVAS-AAEEXg6IX5c768-308x196.jpg" src="images/a.gif" alt="汉丽轩">
								<span class="index-goods-place">十里堡店、白纸坊店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【2店通用】汉丽轩">
									【2店通用】汉丽轩
								</a>
								<a class="index-goods-text" href="" target="_blank" title="单人烤肉自助午餐，酒水饮料无限畅饮">
									单人烤肉自助午餐，酒水饮料无限畅饮
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>39.9</span>
								<span class="app-price"><b>立减 </b><em>¥7.98</em></span>
								<span class="money">¥<del>49</del></span>
								<span class="number">已售<i>3307</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/DE/63/CqgBJlWQ5VGAYjO9AAC1X6ca9BE585-308x196.jpg" src="images/a.gif" alt="亚日一阁">
								<span class="index-goods-place">北京东城区朝阳门银河SOHO C座 B1 3-102</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【朝阳门】亚日一阁">
									【朝阳门】亚日一阁
								</a>
								<a class="index-goods-text" href="" target="_blank" title="4人餐，提供免费WiFi">
									4人餐，提供免费WiFi
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>299</span>
								<span class="money">¥<del>403</del></span>
								<span class="number">已售<i>12</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/BF/B4/CqgBVFUsh1yAWPiBAAEJrLhIp5s315-308x196.jpg" src="images/a.gif" alt="国宾酒店自助餐厅">
								<span class="index-goods-place">北京西城区阜成门外大街甲9号国宾酒店1楼</span>
								<span class="goods-mark">
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【阜成门】国宾酒店自助餐厅">
									【阜成门】国宾酒店自助餐厅
								</a>
								<a class="index-goods-text" href="" target="_blank" title="单人自助餐，午晚餐通用">
									单人自助餐，午晚餐通用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>138</span>
								<span class="money">¥<del>216</del></span>
								<span class="number">已售<i>176</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/76/12/CqgBHlQqXdaAcqu9AADcjaGwm9E741-308x196.jpg" src="images/a.gif" alt="新辣道">
								<span class="index-goods-place">北京常营华联店、北京回龙观店、北京通州北苑店、北京西直门店、北京肖家河店、北京望京店、北京蓝色港湾店、北京上地店、北京马…</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【32店通用】新辣道">
									【32店通用】新辣道
								</a>
								<a class="index-goods-text" href="" target="_blank" title="100元现金抵用1次，可叠加使用">
									100元现金抵用1次，可叠加使用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>88</span>
								<span class="money">¥<del>100</del></span>
								<span class="number">已售<i>8516</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/4E/7B/CqgBHlPZoNGAZ1L3AAEGLh7ktlo275-308x196.jpg" src="images/a.gif" alt="好伦哥">
								<span class="index-goods-place">北京海淀区复兴路甲36号百朗园B座二层</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【五棵松】好伦哥">
									【五棵松】好伦哥
								</a>
								<a class="index-goods-text" href="" target="_blank" title="好伦哥：单人自助餐，无需预约，单人自助">
									好伦哥：单人自助餐，无需预约，单人自助
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>52</span>
								<span class="money">¥<del>56</del></span>
								<span class="number">已售<i>2726</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/C3/29/CqgBVFU4U3OAd98PAAEby0haSkA660-308x196.jpg" src="images/a.gif" alt="金凤成祥">
								<span class="index-goods-place">北太店、师大二店、金凤成祥（万客隆店)、金凤成祥（财经大学店)、交大一店、交大二店、文慧园一店、燕莎店、左岸店、万柳店、…</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【268店通用】金凤成祥">
									【268店通用】金凤成祥
								</a>
								<a class="index-goods-text" href="" target="_blank" title="现金抵用1次，全场通用">
									现金抵用1次，全场通用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>17</span>
								<span class="money">¥<del>20</del></span>
								<span class="number">已售<i>456</i></span>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!--End 进口 生鲜 End-->
			<!--Begin 食品饮料 Begin-->
			<div class="i_t mar_10">
				<span class="floor_num">2F</span>
				<span class="fl">食品饮料</span>
				<span class="i_mores fr">
					<a href="javascript:void(0)">
						咖啡
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						休闲零食
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						饼干糕点
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						冲饮谷物
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						营养保健
					</a>
				</span>
			</div>
			<main id="main" style="margin-top: 20px;">
			<div class="index-floor">
				<div class="index-goods-list cl">
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/DD/44/CqgBJlWKJymAA_SaAAFWGx5AnjM548-308x196.jpg" src="images/a.gif" alt="东来顺林达饭庄">
								<span class="index-goods-place">北京朝阳区东土城路8号A座</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【西坝河东里】东来顺林达饭庄">
									【西坝河东里】东来顺林达饭庄
								</a>
								<a class="index-goods-text" href="" target="_blank" title="海参菌汤火锅4-5人餐，服务周到">
									海参菌汤火锅4-5人餐，服务周到
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>199</span>
								<span class="money">¥<del>512</del></span>
								<span class="number">已售<i>140</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/61/3E/CqgBJlQEI2OAQBKiAADqthPtTvI873-308x196.jpg" src="images/a.gif" alt="俏江南">
								<span class="index-goods-place">恒基店、阳光店、亦庄店、华贸店、东方店、望京店、首体-腾达店、银座店、金融街店、亮马河店、翠微广场店、安贞店、北京通州店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【13店通用】俏江南">
									【13店通用】俏江南
								</a>
								<a class="index-goods-text" href="" target="_blank" title="自选4人餐，提供免费WiFi，含服务费">
									自选4人餐，提供免费WiFi，含服务费
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>298</span>
								<span class="money">¥<del>1234.2</del></span>
								<span class="number">已售<i>1044</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/67/73/CqgBJlQRYoSAVAS-AAEEXg6IX5c768-308x196.jpg" src="images/a.gif" alt="汉丽轩">
								<span class="index-goods-place">十里堡店、白纸坊店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【2店通用】汉丽轩">
									【2店通用】汉丽轩
								</a>
								<a class="index-goods-text" href="" target="_blank" title="单人烤肉自助午餐，酒水饮料无限畅饮">
									单人烤肉自助午餐，酒水饮料无限畅饮
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>39.9</span>
								<span class="app-price"><b>立减 </b><em>¥7.98</em></span>
								<span class="money">¥<del>49</del></span>
								<span class="number">已售<i>3307</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/DE/63/CqgBJlWQ5VGAYjO9AAC1X6ca9BE585-308x196.jpg" src="images/a.gif" alt="亚日一阁">
								<span class="index-goods-place">北京东城区朝阳门银河SOHO C座 B1 3-102</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【朝阳门】亚日一阁">
									【朝阳门】亚日一阁
								</a>
								<a class="index-goods-text" href="" target="_blank" title="4人餐，提供免费WiFi">
									4人餐，提供免费WiFi
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>299</span>
								<span class="money">¥<del>403</del></span>
								<span class="number">已售<i>12</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/BF/B4/CqgBVFUsh1yAWPiBAAEJrLhIp5s315-308x196.jpg" src="images/a.gif" alt="国宾酒店自助餐厅">
								<span class="index-goods-place">北京西城区阜成门外大街甲9号国宾酒店1楼</span>
								<span class="goods-mark">
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【阜成门】国宾酒店自助餐厅">
									【阜成门】国宾酒店自助餐厅
								</a>
								<a class="index-goods-text" href="" target="_blank" title="单人自助餐，午晚餐通用">
									单人自助餐，午晚餐通用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>138</span>
								<span class="money">¥<del>216</del></span>
								<span class="number">已售<i>176</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/76/12/CqgBHlQqXdaAcqu9AADcjaGwm9E741-308x196.jpg" src="images/a.gif" alt="新辣道">
								<span class="index-goods-place">北京常营华联店、北京回龙观店、北京通州北苑店、北京西直门店、北京肖家河店、北京望京店、北京蓝色港湾店、北京上地店、北京马…</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【32店通用】新辣道">
									【32店通用】新辣道
								</a>
								<a class="index-goods-text" href="" target="_blank" title="100元现金抵用1次，可叠加使用">
									100元现金抵用1次，可叠加使用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>88</span>
								<span class="money">¥<del>100</del></span>
								<span class="number">已售<i>8516</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/4E/7B/CqgBHlPZoNGAZ1L3AAEGLh7ktlo275-308x196.jpg" src="images/a.gif" alt="好伦哥">
								<span class="index-goods-place">北京海淀区复兴路甲36号百朗园B座二层</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【五棵松】好伦哥">
									【五棵松】好伦哥
								</a>
								<a class="index-goods-text" href="" target="_blank" title="好伦哥：单人自助餐，无需预约，单人自助">
									好伦哥：单人自助餐，无需预约，单人自助
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>52</span>
								<span class="money">¥<del>56</del></span>
								<span class="number">已售<i>2726</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/C3/29/CqgBVFU4U3OAd98PAAEby0haSkA660-308x196.jpg" src="images/a.gif" alt="金凤成祥">
								<span class="index-goods-place">北太店、师大二店、金凤成祥（万客隆店)、金凤成祥（财经大学店)、交大一店、交大二店、文慧园一店、燕莎店、左岸店、万柳店、…</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【268店通用】金凤成祥">
									【268店通用】金凤成祥
								</a>
								<a class="index-goods-text" href="" target="_blank" title="现金抵用1次，全场通用">
									现金抵用1次，全场通用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>17</span>
								<span class="money">¥<del>20</del></span>
								<span class="number">已售<i>456</i></span>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!--End 食品饮料 End-->
			<!--Begin 个人美妆 Begin-->
			<div class="i_t mar_10">
				<span class="floor_num">3F</span>
				<span class="fl">个人美妆</span>
				<span class="i_mores fr">
					<a href="javascript:void(0)">
						洗发护发
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						面膜
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						洗面奶
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						香水
					</a>&nbsp; &nbsp; | &nbsp; &nbsp;
					<a href="javascript:void(0)">
						沐浴露
					</a>
				</span>
			</div>
			<main id="main" style="margin-top: 20px;">
			<div class="index-floor">
				<div class="index-goods-list cl">
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/DD/44/CqgBJlWKJymAA_SaAAFWGx5AnjM548-308x196.jpg" src="images/a.gif" alt="东来顺林达饭庄">
								<span class="index-goods-place">北京朝阳区东土城路8号A座</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【西坝河东里】东来顺林达饭庄">
									【西坝河东里】东来顺林达饭庄
								</a>
								<a class="index-goods-text" href="" target="_blank" title="海参菌汤火锅4-5人餐，服务周到">
									海参菌汤火锅4-5人餐，服务周到
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>199</span>
								<span class="money">¥<del>512</del></span>
								<span class="number">已售<i>140</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/61/3E/CqgBJlQEI2OAQBKiAADqthPtTvI873-308x196.jpg" src="images/a.gif" alt="俏江南">
								<span class="index-goods-place">恒基店、阳光店、亦庄店、华贸店、东方店、望京店、首体-腾达店、银座店、金融街店、亮马河店、翠微广场店、安贞店、北京通州店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【13店通用】俏江南">
									【13店通用】俏江南
								</a>
								<a class="index-goods-text" href="" target="_blank" title="自选4人餐，提供免费WiFi，含服务费">
									自选4人餐，提供免费WiFi，含服务费
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>298</span>
								<span class="money">¥<del>1234.2</del></span>
								<span class="number">已售<i>1044</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/67/73/CqgBJlQRYoSAVAS-AAEEXg6IX5c768-308x196.jpg" src="images/a.gif" alt="汉丽轩">
								<span class="index-goods-place">十里堡店、白纸坊店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【2店通用】汉丽轩">
									【2店通用】汉丽轩
								</a>
								<a class="index-goods-text" href="" target="_blank" title="单人烤肉自助午餐，酒水饮料无限畅饮">
									单人烤肉自助午餐，酒水饮料无限畅饮
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>39.9</span>
								<span class="app-price"><b>立减 </b><em>¥7.98</em></span>
								<span class="money">¥<del>49</del></span>
								<span class="number">已售<i>3307</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/DE/63/CqgBJlWQ5VGAYjO9AAC1X6ca9BE585-308x196.jpg" src="images/a.gif" alt="亚日一阁">
								<span class="index-goods-place">北京东城区朝阳门银河SOHO C座 B1 3-102</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【朝阳门】亚日一阁">
									【朝阳门】亚日一阁
								</a>
								<a class="index-goods-text" href="" target="_blank" title="4人餐，提供免费WiFi">
									4人餐，提供免费WiFi
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>299</span>
								<span class="money">¥<del>403</del></span>
								<span class="number">已售<i>12</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/BF/B4/CqgBVFUsh1yAWPiBAAEJrLhIp5s315-308x196.jpg" src="images/a.gif" alt="国宾酒店自助餐厅">
								<span class="index-goods-place">北京西城区阜成门外大街甲9号国宾酒店1楼</span>
								<span class="goods-mark">
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【阜成门】国宾酒店自助餐厅">
									【阜成门】国宾酒店自助餐厅
								</a>
								<a class="index-goods-text" href="" target="_blank" title="单人自助餐，午晚餐通用">
									单人自助餐，午晚餐通用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>138</span>
								<span class="money">¥<del>216</del></span>
								<span class="number">已售<i>176</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/76/12/CqgBHlQqXdaAcqu9AADcjaGwm9E741-308x196.jpg" src="images/a.gif" alt="新辣道">
								<span class="index-goods-place">北京常营华联店、北京回龙观店、北京通州北苑店、北京西直门店、北京肖家河店、北京望京店、北京蓝色港湾店、北京上地店、北京马…</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【32店通用】新辣道">
									【32店通用】新辣道
								</a>
								<a class="index-goods-text" href="" target="_blank" title="100元现金抵用1次，可叠加使用">
									100元现金抵用1次，可叠加使用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>88</span>
								<span class="money">¥<del>100</del></span>
								<span class="number">已售<i>8516</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/4E/7B/CqgBHlPZoNGAZ1L3AAEGLh7ktlo275-308x196.jpg" src="images/a.gif" alt="好伦哥">
								<span class="index-goods-place">北京海淀区复兴路甲36号百朗园B座二层</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【五棵松】好伦哥">
									【五棵松】好伦哥
								</a>
								<a class="index-goods-text" href="" target="_blank" title="好伦哥：单人自助餐，无需预约，单人自助">
									好伦哥：单人自助餐，无需预约，单人自助
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>52</span>
								<span class="money">¥<del>56</del></span>
								<span class="number">已售<i>2726</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/C3/29/CqgBVFU4U3OAd98PAAEby0haSkA660-308x196.jpg" src="images/a.gif" alt="金凤成祥">
								<span class="index-goods-place">北太店、师大二店、金凤成祥（万客隆店)、金凤成祥（财经大学店)、交大一店、交大二店、文慧园一店、燕莎店、左岸店、万柳店、…</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【268店通用】金凤成祥">
									【268店通用】金凤成祥
								</a>
								<a class="index-goods-text" href="" target="_blank" title="现金抵用1次，全场通用">
									现金抵用1次，全场通用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>17</span>
								<span class="money">¥<del>20</del></span>
								<span class="number">已售<i>456</i></span>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!--End 数码家电 End-->
			<!--Begin 猜你喜欢 Begin-->
			<div class="i_t mar_10">
				<span class="fl">猜你喜欢</span>
			</div>
			<main id="main" style="margin-top: 20px;">
			<div class="index-floor">
				<div class="index-goods-list cl">
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/DD/44/CqgBJlWKJymAA_SaAAFWGx5AnjM548-308x196.jpg" src="images/a.gif" alt="东来顺林达饭庄">
								<span class="index-goods-place">北京朝阳区东土城路8号A座</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【西坝河东里】东来顺林达饭庄">
									【西坝河东里】东来顺林达饭庄
								</a>
								<a class="index-goods-text" href="" target="_blank" title="海参菌汤火锅4-5人餐，服务周到">
									海参菌汤火锅4-5人餐，服务周到
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>199</span>
								<span class="money">¥<del>512</del></span>
								<span class="number">已售<i>140</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/61/3E/CqgBJlQEI2OAQBKiAADqthPtTvI873-308x196.jpg" src="images/a.gif" alt="俏江南">
								<span class="index-goods-place">恒基店、阳光店、亦庄店、华贸店、东方店、望京店、首体-腾达店、银座店、金融街店、亮马河店、翠微广场店、安贞店、北京通州店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【13店通用】俏江南">
									【13店通用】俏江南
								</a>
								<a class="index-goods-text" href="" target="_blank" title="自选4人餐，提供免费WiFi，含服务费">
									自选4人餐，提供免费WiFi，含服务费
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>298</span>
								<span class="money">¥<del>1234.2</del></span>
								<span class="number">已售<i>1044</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/67/73/CqgBJlQRYoSAVAS-AAEEXg6IX5c768-308x196.jpg" src="images/a.gif" alt="汉丽轩">
								<span class="index-goods-place">十里堡店、白纸坊店</span>
								<span class="goods-mark">
									<em class="merger iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【2店通用】汉丽轩">
									【2店通用】汉丽轩
								</a>
								<a class="index-goods-text" href="" target="_blank" title="单人烤肉自助午餐，酒水饮料无限畅饮">
									单人烤肉自助午餐，酒水饮料无限畅饮
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>39.9</span>
								<span class="app-price"><b>立减 </b><em>¥7.98</em></span>
								<span class="money">¥<del>49</del></span>
								<span class="number">已售<i>3307</i></span>
							</div>
						</div>
						<div class="index-goods">
							<a class="index-goods-img" href="" target="_blank">
								<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/C3/29/CqgBVFU4U3OAd98PAAEby0haSkA660-308x196.jpg" src="images/a.gif" alt="金凤成祥">
								<span class="index-goods-place">北太店、师大二店、金凤成祥（万客隆店)、金凤成祥（财经大学店)、交大一店、交大二店、文慧园一店、燕莎店、左岸店、万柳店、…</span>
								<span class="goods-mark">
									<em class="reserve iepng">
									</em>
								</span>
							</a>
							<h3>
								<a class="index-goods-name" href="" target="_blank" title="【268店通用】金凤成祥">
									【268店通用】金凤成祥
								</a>
								<a class="index-goods-text" href="" target="_blank" title="现金抵用1次，全场通用">
									现金抵用1次，全场通用
								</a>
							</h3>
							<div class="index-goods-info">
								<span class="price"><em>¥</em>17</span>
								<span class="money">¥<del>20</del></span>
								<span class="number">已售<i>456</i></span>
							</div>
						</div>
					</div>
				</div>
			</main>
		<!--End 猜你喜欢 End-->
		<!--Begin Footer Begin -->
		<div class="b_btm_bg b_btm_c">
			<div class="b_btm">
				<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td width="72">
								<img src="./images/b1.png" width="62" height="62">
							</td>
							<td>
								<h2>
									正品保障
								</h2>正品行货 放心购买
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td width="72">
								<img src="./images/b2.png" width="62" height="62">
							</td>
							<td>
								<h2>
									件件包邮
								</h2>送货上门 免运费
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td width="72">
								<img src="./images/b3.png" width="62" height="62">
							</td>
							<td>
								<h2>
									天天低价
								</h2>天天低价 畅选无忧
							</td>
						</tr>
					</tbody>
				</table>
				<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td width="72">
								<img src="./images/b4.png" width="62" height="62">
							</td>
							<td>
								<h2>
									准时送达
								</h2>收货时间由你做主
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<?php include "./footer.html"; ?>
		<?php include "./bottom.html"; ?>
		<script src="js/ga_751f342.js" type="text/javascript"></script>
		<script src="js/autocomplete_eb18b81.js" type="text/javascript"></script>
		<script src="js/slider_f195ce1.js" type="text/javascript"></script>
		<script src="js/catenav_454c784.js" type="text/javascript"></script>
		<script src="js/common_26fc9e5.js" type="text/javascript"></script>
		<script src="js/index_10b1345.js" type="text/javascript"></script>
		<?php
			if(isset($_SESSION['C_USER'])&&$_SESSION['C_USER']!=NULL){
				echo "<script type='text/javascript'>
				$('#login-or-hide').hide();
				$('#top-my-account').removeAttr('hidden');
				$('#top-my-account').html('".$confige->getItem('account_title')."');
				$('#top-welcome').html('欢迎您，".$_SESSION['C_USER']->mUserName."');
				$('#register-or-exit').html('注销');
				</script>";
			}
		?>
		<script type="application/javascript">
			$(".logo").click(function(){
				window.location.href="index.php";
			});
			$('#register-or-exit').click(function(){
				if($('#register-or-exit').html()=="注销"){
					exitLogin();
				}else {
					window.location.href="register.php";
				}
			})
			$("#login-btn").click(function(){
				var user_name=$("#input-username").val();
				var pass_word=$("#input-password").val();
				if(user_name==""||pass_word=="") {
					alert("here");
					return false;
				} else {
					$.ajax({
						type: "POST",
						url: "./action/login.class.php",
						data: {
							username: user_name,
							password: pass_word
						},
						dataType: "json",
						success: function(data) {
							var obj = eval(data);
							if (obj.Code == '1') {
								window.location.href = "./index.php";
							} else {
								alert(obj.Msg);
							}
						}
					});
				}
			});
			function goToAccount(){
				window.location.href="./account.php";
			}
			function exitLogin(){
				$.ajax({
					type: "POST",
					url: "action/exit.class.php",
					data: {
					},
					dataType: "json",
					success: function(data) {
						var obj = eval(data);
						if (obj.code == '1') {
							window.location.href = "./index.php";
						} else {
							alert(obj.msg);
						}
					}
				});
			}
		</script>
	</body>
</html>