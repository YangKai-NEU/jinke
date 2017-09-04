<?php
	require_once './config/config.php';
	$confige->initConfig("./config/config.json");	
?>
<!DOCTYPE html>
<html class="hb-loaded">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $confige->getItem('homepage_title');?>-搜索</title>
		<link href="css/common_dd94d7a.css" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
		<script type="text/javascript" src="./js/jquery.bxslider_e88acd1b.js"></script>
		<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>
		<script src="js/dc.js" async type="text/javascript"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/base_8aebc17.js" type="text/javascript"></script>
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
		
		<!-- main -->
		<main id="main">
			<div class="index-floor">
				<div class="index-goods-list cl">
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/DD/44/CqgBJlWKJymAA_SaAAFWGx5AnjM548-308x196.jpg" src="images/a.gif" alt="东来顺林达饭庄">
							<span class="index-goods-place">北京朝阳区东土城路8号A座</span>
							<span class="goods-mark">
																									<em class="reserve iepng"></em>
											</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【西坝河东里】东来顺林达饭庄">【西坝河东里】东来顺林达饭庄</a>
						<a class="index-goods-text" href="" target="_blank" title="海参菌汤火锅4-5人餐，服务周到">海参菌汤火锅4-5人餐，服务周到</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>199</span>
							<span class="money">¥<del>512</del></span>
							<span class="number">已售<i>140</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/61/3E/CqgBJlQEI2OAQBKiAADqthPtTvI873-308x196.jpg" src="images/a.gif" alt="俏江南">
							<span class="index-goods-place">恒基店、阳光店、亦庄店、华贸店、东方店、望京店、首体-腾达店、银座店、金融街店、亮马河店、翠微广场店、安贞店、北京通州店</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																	</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【13店通用】俏江南">【13店通用】俏江南</a>
						<a class="index-goods-text" href="" target="_blank" title="自选4人餐，提供免费WiFi，含服务费">自选4人餐，提供免费WiFi，含服务费</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>298</span>
							<span class="money">¥<del>1234.2</del></span>
							<span class="number">已售<i>1044</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/67/73/CqgBJlQRYoSAVAS-AAEEXg6IX5c768-308x196.jpg" src="images/a.gif" alt="汉丽轩">
							<span class="index-goods-place">十里堡店、白纸坊店</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																	</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【2店通用】汉丽轩">【2店通用】汉丽轩</a>
						<a class="index-goods-text" href="" target="_blank" title="单人烤肉自助午餐，酒水饮料无限畅饮">单人烤肉自助午餐，酒水饮料无限畅饮</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>39.9</span>
							<span class="app-price"><b>立减 </b><em>¥7.98</em></span>
							<span class="money">¥<del>49</del></span>
							<span class="number">已售<i>3307</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/DE/63/CqgBJlWQ5VGAYjO9AAC1X6ca9BE585-308x196.jpg" src="images/a.gif" alt="亚日一阁">
							<span class="index-goods-place">北京东城区朝阳门银河SOHO C座 B1 3-102</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																			<em class="reserve iepng"></em>
											</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【朝阳门】亚日一阁">【朝阳门】亚日一阁</a>
						<a class="index-goods-text" href="" target="_blank" title="4人餐，提供免费WiFi">4人餐，提供免费WiFi</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>299</span>
							<span class="money">¥<del>403</del></span>
							<span class="number">已售<i>12</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/BF/B4/CqgBVFUsh1yAWPiBAAEJrLhIp5s315-308x196.jpg" src="images/a.gif" alt="国宾酒店自助餐厅">
							<span class="index-goods-place">北京西城区阜成门外大街甲9号国宾酒店1楼</span>
							<span class="goods-mark">
																							</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【阜成门】国宾酒店自助餐厅">【阜成门】国宾酒店自助餐厅</a>
						<a class="index-goods-text" href="" target="_blank" title="单人自助餐，午晚餐通用">单人自助餐，午晚餐通用</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>138</span>
							<span class="money">¥<del>216</del></span>
							<span class="number">已售<i>176</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f3.lashouimg.com/cms/M00/76/12/CqgBHlQqXdaAcqu9AADcjaGwm9E741-308x196.jpg" src="images/a.gif" alt="新辣道">
							<span class="index-goods-place">北京常营华联店、北京回龙观店、北京通州北苑店、北京西直门店、北京肖家河店、北京望京店、北京蓝色港湾店、北京上地店、北京马…</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																			<em class="reserve iepng"></em>
											</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【32店通用】新辣道">【32店通用】新辣道</a>
						<a class="index-goods-text" href="" target="_blank" title="100元现金抵用1次，可叠加使用">100元现金抵用1次，可叠加使用</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>88</span>
							<span class="money">¥<del>100</del></span>
							<span class="number">已售<i>8516</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://s2.lashouimg.com/cms/M00/4E/7B/CqgBHlPZoNGAZ1L3AAEGLh7ktlo275-308x196.jpg" src="images/a.gif" alt="好伦哥">
							<span class="index-goods-place">北京海淀区复兴路甲36号百朗园B座二层</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																			<em class="reserve iepng"></em>
											</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【五棵松】好伦哥">【五棵松】好伦哥</a>
						<a class="index-goods-text" href="" target="_blank" title="好伦哥：单人自助餐，无需预约，单人自助">好伦哥：单人自助餐，无需预约，单人自助</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>52</span>
							<span class="money">¥<del>56</del></span>
							<span class="number">已售<i>2726</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/C3/29/CqgBVFU4U3OAd98PAAEby0haSkA660-308x196.jpg" src="images/a.gif" alt="金凤成祥">
							<span class="index-goods-place">北太店、师大二店、金凤成祥（万客隆店)、金凤成祥（财经大学店)、交大一店、交大二店、文慧园一店、燕莎店、左岸店、万柳店、…</span>
							<span class="goods-mark">
																									<em class="reserve iepng"></em>
											</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【268店通用】金凤成祥">【268店通用】金凤成祥</a>
						<a class="index-goods-text" href="" target="_blank" title="现金抵用1次，全场通用">现金抵用1次，全场通用</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>17</span>
							<span class="money">¥<del>20</del></span>
							<span class="number">已售<i>456</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://d2.lashouimg.com/cms/M00/B7/A8/CqgBVFUHwNKAGsL5AB9Yq_JWFqs724-308x196.jpg" src="images/a.gif" alt="深海800米海鲜自助">
							<span class="index-goods-place">王府井店、双井店</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																			<em class="reserve iepng"></em>
											</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【2店通用】深海800米海鲜自助">【2店通用】深海800米海鲜自助</a>
						<a class="index-goods-text" href="" target="_blank" title="单人自助餐，午餐/晚餐通用，海鲜/中式/西式等">单人自助餐，午餐/晚餐通用，海鲜/中式/西式等</a>
						</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>228</span>
							<span class="money">¥<del>258</del></span>
							<span class="number">已售<i>395</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://d2.lashouimg.com/cms/M00/D8/03/CqgBVFV6jY-AadA-AAC6cibsBF0160-308x196.jpg" src="images/a.gif" alt="便宜坊烤鸭店">
							<span class="index-goods-place">三里屯店、太阳宫店、朝阳大悦城店、五彩城店</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																	</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【4店通用】便宜坊烤鸭店">【4店通用】便宜坊烤鸭店</a>
						<a class="index-goods-text" href="" target="_blank" title="4人餐，地道口味">4人餐，地道口味</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>328</span>
							<span class="money">¥<del>658</del></span>
							<span class="number">已售<i>11</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://d2.lashouimg.com/cms/M00/A2/BC/CqgBHlSY_2aAAECxAAFIXS84Mc0746-308x196.jpg" src="images/a.gif" alt="富丽客巴西烤肉">
							<span class="index-goods-place">劲松店、长虹桥店、永定路店、清华园店</span>
							<span class="goods-mark">
																									<em class="reserve iepng"></em>
											</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【4店通用】富丽客巴西烤肉">【4店通用】富丽客巴西烤肉</a>
						<a class="index-goods-text" href="" target="_blank" title="单人烤肉自助餐，午晚餐通用">单人烤肉自助餐，午晚餐通用</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>62</span>
							<span class="money">¥<del>68</del></span>
							<span class="number">已售<i>42526</i></span> </div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/5E/BE/CqgBHlP-vZGAUayKAAC1omWC9uI572-308x196.jpg" src="images/a.gif" alt="福樱兰日本料理">
							<span class="index-goods-place">北京通州区梨园东里2号（妇幼保健医院南侧格林豪泰酒店一层）	</span>
							<span class="goods-mark">
																			<em class="merger iepng"></em>
																	</span>
						</a>
						<h3>
						<a class="index-goods-name" href="" target="_blank" title="【梨园】福樱兰日本料理">【梨园】福樱兰日本料理</a>
						<a class="index-goods-text" href="" target="_blank" title="单人自助午/晚餐，提前1天预约，节假日通用">单人自助午/晚餐，提前1天预约，节假日通用</a>
					</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>178</span>
							<span class="money">¥<del>198</del></span>
							<span class="number">已售<i>2609</i></span> </div>
					</div>

				</div>
			</div>
		</main>
		<?php
		include "./footer.html";
		?>
		<?php
		include "./bottom.html";
		?>
		<script src="js/ga_751f342.js" type="text/javascript"></script>
		<script src="js/autocomplete_eb18b81.js" type="text/javascript"></script>
		<script src="js/slider_f195ce1.js" type="text/javascript"></script>
		<script src="js/catenav_454c784.js" type="text/javascript"></script>
		<script src="js/common_26fc9e5.js" type="text/javascript"></script>
		<script src="js/index_10b1345.js" type="text/javascript"></script>
		<script src="js/countdown_96b1b14.js" type="text/javascript"></script>
	</body>
</html>