<?php
	require_once './config/config.php';
	$confige->initConfig("./config/config.json");	
?>
<!DOCTYPE html>
<html class="hb-loaded">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			<?php echo $confige->getItem('account_title');?>
		</title>
		<meta content="lashou" name="copyright">
		<meta name="renderer" content="webkit">
		<link href="./css/common_dd94d7a.css" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
		<script type="text/javascript" src="./js/jquery.bxslider_e88acd1b.js"></script>
		<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/base_8aebc17.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.imagezoom.min.js"></script>
		<style type="text/css">
			/* box */
			.box{width:350px;float: left;margin-top: 20px;display: inline;}
			.tb-pic a{display:table-cell;text-align:center;vertical-align:middle;}
			.tb-pic a img{vertical-align:middle;}
			.tb-pic a{*display:block;*font-family:Arial;*line-height:1;}
			.tb-thumb{margin:10px 0 0;overflow:hidden;}
			.tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
			.tb-s350, .tb-s350 a{height:350px;width:350px;background: gainsboro;}
			.tb-s350, .tb-s350 img{max-height:350px;max-width:350px;}
			.tb-s350 a{*font-size:271px;}
			.tb-s40 a{*font-size:35px;}
			.tb-s40, .tb-s40 a{height:40px;width:40px;}
			.tb-booth{border:1px solid #CDCDCD;position:relative;z-index:1;}
			.tb-thumb .tb-selected{background:none repeat scroll 0 0 #C30008;height:40px;padding:2px;}
			.tb-thumb .tb-selected div{background-color:#FFFFFF;border:medium none;}
			.tb-thumb li div{border:1px solid #CDCDCD;}
			div.zoomDiv{z-index:999;position:absolute;top:0px;left:0px;width:200px;height:200px;background:#ffffff;border:1px solid #CCCCCC;display:none;text-align:center;overflow:hidden;}
			div.zoomMask{position:absolute;background:url("images/mask.png") repeat scroll 0 0 transparent;cursor:move;z-index:1;}
		</style>
		<!--[if IE 6]>
		<script src="http://d2.lashouimg.com/public/js/lib/iepng.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="http://f3.lashouimg.com/public/js/lib/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">//<![CDATA[
(function() {
	if (window.top !==window.self) {
		try {
			if (window.top.location.host.indexOf('lashou.com')) {}
			else {
				setTimeout(function() {
					window.top.location=window.self.location;
					document.body.innerHTML='';
				}
				, 0);
				window.self.onload=function() {
					document.body.innerHTML='';
				}
				;
			}
		}
		catch (e) {
			try {
				setTimeout(function() {
					window.top.location=window.self.location;
					document.body.innerHTML='';
				}
				, 0);
				window.self.onload=function() {
					document.body.innerHTML='';
				}
				;
			}
			catch (e) {}
		}
	}
}

)();
//]]></script>
	</head>
	<body>
		<!--Begin Header Begin-->
		<div class="soubg">
			<div class="sou">
				<!--Begin 所在收货地区 Begin-->
				<span class="s_city_b">
					<span class="fl">送货至：</span>
					<span class="s_city">
						<span>四川</span>
						<div class="s_city_bg">
							<div class="s_city_t">
							</div>
							<div class="s_city_c">
								<h2>
									请选择所在的收货地区
								</h2>
								<table border="0" class="c_tab" style="width:235px; margin-top:10px;" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<th>
												A
											</th>
											<td class="c_h">
												<span>安徽</span><span>澳门</span>
											</td>
										</tr>
										<tr>
											<th>
												B
											</th>
											<td class="c_h">
												<span>北京</span>
											</td>
										</tr>
										<tr>
											<th>
												C
											</th>
											<td class="c_h">
												<span>重庆</span>
											</td>
										</tr>
										<tr>
											<th>
												F
											</th>
											<td class="c_h">
												<span>福建</span>
											</td>
										</tr>
										<tr>
											<th>
												G
											</th>
											<td class="c_h">
												<span>广东</span><span>广西</span><span>贵州</span><span>甘肃</span>
											</td>
										</tr>
										<tr>
											<th>
												H
											</th>
											<td class="c_h">
												<span>河北</span><span>河南</span><span>黑龙江</span><span>海南</span><span>湖北</span><span>湖南</span>
											</td>
										</tr>
										<tr>
											<th>
												J
											</th>
											<td class="c_h">
												<span>江苏</span><span>吉林</span><span>江西</span>
											</td>
										</tr>
										<tr>
											<th>
												L
											</th>
											<td class="c_h">
												<span>辽宁</span>
											</td>
										</tr>
										<tr>
											<th>
												N
											</th>
											<td class="c_h">
												<span>内蒙古</span><span>宁夏</span>
											</td>
										</tr>
										<tr>
											<th>
												Q
											</th>
											<td class="c_h">
												<span>青海</span>
											</td>
										</tr>
										<tr>
											<th>
												S
											</th>
											<td class="c_h">
												<span>上海</span><span>山东</span><span>山西</span><span class="c_check">四川</span><span>陕西</span>
											</td>
										</tr>
										<tr>
											<th>
												T
											</th>
											<td class="c_h">
												<span>台湾</span><span>天津</span>
											</td>
										</tr>
										<tr>
											<th>
												X
											</th>
											<td class="c_h">
												<span>西藏</span><span>香港</span><span>新疆</span>
											</td>
										</tr>
										<tr>
											<th>
												Y
											</th>
											<td class="c_h">
												<span>云南</span>
											</td>
										</tr>
										<tr>
											<th>
												Z
											</th>
											<td class="c_h">
												<span>浙江</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</span>
				</span>
				<!--End 所在收货地区 End-->
				<span class="fr">
					<span class="fl">你好，请
						<a href="./login.php">
							登录
						</a>&nbsp;
						<a href="./register.php" style="color:#ff4e00;">
							免费注册
						</a>&nbsp;|&nbsp;
						<a href="javascript:void(0)">
							我的订单
						</a>&nbsp;|&nbsp;</span>
					<span class="f1">
						<div class="ss_list">
							<a href="javascript:void(0)">
								收藏夹
							</a>
							<div class="ss_list_bg">
								<div class="s_city_t">
								</div>
								<div class="ss_list_c">
									<ul>
										<li>
											<a href="javascript:void(0)">
												我的收藏夹
											</a>
										</li>
										<li>
											<a href="javascript:void(0)">
												我的收藏夹
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="ss_list">
							<a href="javascript:void(0)">
								客户服务
							</a>
							<div class="ss_list_bg">
								<div class="s_city_t">
								</div>
								<div class="ss_list_c">
									<ul>
										<li>
											<a href="javascript:void(0)">
												客户服务
											</a>
										</li>
										<li>
											<a href="javascript:void(0)">
												客户服务
											</a>
										</li>
										<li>
											<a href="javascript:void(0)">
												客户服务
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="ss_list">
							<a href="javascript:void(0)">
								网站导航
							</a>
							<div class="ss_list_bg">
								<div class="s_city_t">
								</div>
								<div class="ss_list_c">
									<ul>
										<li>
											<a href="javascript:void(0)">
												网站导航
											</a>
										</li>
										<li>
											<a href="javascript:void(0)">
												网站导航
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</span>
					<span class="fl">|&nbsp;关注我们：</span>
					<span class="s_sh">
						<a href="javascript:void(0)" class="sh1">
							新浪
						</a>
						<a href="javascript:void(0)" class="sh2">
							微信
						</a>
					</span>|
					<span class="fr">
						<a href="javascript:void(0)">
							<div class="ss_list">
								<a href="javascript:void(0)">
									手机版
								</a>
								<div class="ss_list_bg">
									<div class="s_city_t">
									</div>
									<div class="ss_list_c">
										<ul>
											<li>
												<a href="javascript:void(0)">
													Android
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													IOS
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</a>
					</span>
				</span>
			</div>
		</div>
		<div class="top">
			<div class="logo">
				<a href="#">
					<img src="./images/logo.png">
				</a>
			</div>
			<div class="search">
				<form>
					<input type="text" value="" class="s_ipt">
					<input type="submit" value="搜索" class="s_btn">
				</form>
			</div>
		</div>
		<!-- nav end -->
		<script type="text/javascript">var _switch = 'index';
			if (_switch != "index") {
				indexQrcode();
			}
			
			function indexQrcodeDelay() {
				setTimeout(function() {
					$(".index-app-qrcode").find(".iap-con").slideUp(200, function() {
						$(".index-app-qrcode").hover(function() {
							$(this).find(".iap-con").show();
						}, function() {
							$(this).find(".iap-con").hide();
						});
					});
				}, 3000);
			}
			
			function indexQrcode() {
				$(".index-app-qrcode").hover(function() {
					$(this).find(".iap-con").show();
				}, function() {
					$(this).find(".iap-con").hide();
				});
			}
			var banner_c = getCookie("tips");
			if (banner_c && banner_c.indexOf("t1") > -1) {
				$("#banner").hide();
			}
		</script>
		<div id="goods-information">
			<div class="box" border="1">
				<div class="tb-booth tb-pic tb-s350">
					<a href="images/01.jpg">
						<img src="images/01_mid.jpg" alt="美女" rel="images/01.jpg" class="jqzoom" />
					</a>
				</div>
				<ul class="tb-thumb" id="thumblist">
					<li class="tb-selected">
						<div class="tb-pic tb-s40">
							<a href="#">
								<img src="images/01_small.jpg" mid="images/01_mid.jpg" big="images/01.jpg">
							</a>
						</div>
					</li>
					<li>
						<div class="tb-pic tb-s40">
							<a href="#">
								<img  src="images/02_small.jpg" mid="images/02_mid.jpg" big="images/02.jpg">
							</a>
						</div>
					</li>
					<li>
						<div class="tb-pic tb-s40">
							<a href="#">
								<img src="images/03_small.jpg" mid="images/03_mid.jpg" big="images/03.jpg">
							</a>
						</div>
					</li>
					<li>
						<div class="tb-pic tb-s40">
							<a href="#">
								<img src="images/04_small.jpg" mid="images/04_mid.jpg" big="images/04.jpg">
							</a>
						</div>
					</li>
					<li>
						<div class="tb-pic tb-s40">
							<a href="#">
								<img src="images/05_small.jpg" mid="images/05_mid.jpg" big="images/05.jpg">
							</a>
						</div>
					</li>
				</ul>
			</div>
			<div id="goods-information-shop" >
				<div style="text-align: center;color: orange;font-size: 17px; margin-top: 10px;font-weight:bold">钻级卖家</div>
				<h4 style="margin-left: 20px;font-size: 15px;margin-top: 15px;">来自星星的运动休闲店</h4>
				<aaa style="margin-left: 14px;">掌柜：</aaa><aaa style="color:black">Scorpio</aaa><br>
				<aaa style="margin-left: 14px;">电话：</aaa><aaa style="color:black">15640468428</aaa><br>
				<aaa style="margin-left: 14px;">联系：</aaa>
				<img src="images/liuyan.png" style="width: 20px;height: 20px;margin-top: 3px;"/>
				<a style="color:black" onmouseover="this.style.color='red';" onmouseout="this.style.color='black'">给我留言</a><br>
			</div>
			<div id="goods-information-intro">
				<h4 id="goods-information-name">
					2015新款春夏季范冰冰同款百搭休闲运动女短裙X32635F78299
				</h4>
				<p id="goods-information-detail" style="font-size: 14px;">
					三ye草 三标齐全，范冰冰同款，超好质量，保证跟别家卖200元以上价格品质一样，纯棉品质，绝对超值
				</p>
				<div id="goods-information-header" style="height:50px;color: black; background: cornsilk;">
					<aaa style="margin-left: 10px; font-size: 15px;color: dimgrey;">价格</aaa>
					<aaa style="font-size: 20px;margin-left:20px;height:50px;line-height: 50px; color: red;">¥65.00</aaa>
				</div>
				<div id="goods-information-peisong" style="height:30px;color: black;">
					<aaa style="margin-left: 10px; font-size: 15px;color: dimgrey;">配送</aaa>
					<aaa style="font-size: 15px;margin-left:20px;height:50px;line-height: 50px;">广东广州 至</aaa>
				</div>
				<div id="goods-information-number" style="height:30px;color: black; margin-top: 20px;">
					<aaa style="margin-left: 10px; font-size: 15px;color: dimgrey;">数量</aaa>
					<input class="text-box" name="" style="border-width: 0px;width:20px;height:25px;line-height:25px;display:inline; margin-right:-5px;margin-left: 20px;" type="button" value="-"/>
					<input class="text-box" name="" style="border-width: 0px;width:30px;height:25px;line-height:25px;text-align:center;margin-left:0px;margin-right:-5px;display:inline;" type="text" value="1" /> 
					<input class="text-box" name="" style="border-width: 0px;width:20px;height:25px;line-height:25px;display:inline; margin-right:-5px;" type="button" value="+"/>
					<aaa style="margin-left: 10px; font-size: 15px;">件，（库存133件）</aaa>
				</div>
				
				<div id="goods-information-footer" style="margin-top: 20px;">
					<input type="button" id="buy-now" style="border:none; color:orangered; background:navajowhite;width: 100px; height: 40px;margin-left: 10px;" value="立即购买"/>
					<input type="button" id="add-to-buyer" style="border:none;color: white; background: orangered;width: 130px; height: 40px;margin-left: 20px;" value="加入购物车"/>
				</div>
			</div>
			
			
		</div>
		<script type="text/javascript">$(document).ready(function() {
			$(".jqzoom").imagezoom();
			$("#thumblist li a").click(function() {
			$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
			$(".jqzoom").attr('src', $(this).find("img").attr("mid"));
			$(".jqzoom").attr('rel', $(this).find("img").attr("big"));
			});
});</script>
		<!-- main -->
		<main id="main" style="margin-top: 20px;">
			<div class="index-floor">
				<h2 class="index-floor-title">
					<i class="meishi">
					</i>
					<a class="meishi" href="http://beijing.lashou.com/cate/meishi">
						猜你喜欢
					</a>
					<div class="fr">
						<a href="http://beijing.lashou.com/cate/huoguo" target="_blank">
							火锅
						</a>
						<span>
						</span>
						<a href="http://beijing.lashou.com/cate/zizhu" target="_blank">
							自助餐
						</a>
						<span>
						</span>
						<a href="http://beijing.lashou.com/cate/tianpin" target="_blank">
							蛋糕甜品
						</a>
						<span>
						</span>
						<a href="http://beijing.lashou.com/cate/beijingcai" target="_blank">
							北京菜
						</a>
						<span>
						</span>
						<a href="http://beijing.lashou.com/cate/shaokao" target="_blank">
							烧烤
						</a>
						<span>
						</span>
						<a href="http://beijing.lashou.com/cate/kuaican" target="_blank">
							小吃快餐
						</a>
						<span>
						</span>
						<a href="http://beijing.lashou.com/cate/meishi" target="_blank">
							全部&nbsp;<em>&gt;&gt;</em>
						</a>
					</div>
				</h2>
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
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://d2.lashouimg.com/cms/M00/B7/A8/CqgBVFUHwNKAGsL5AB9Yq_JWFqs724-308x196.jpg" src="images/a.gif" alt="深海800米海鲜自助">
							<span class="index-goods-place">王府井店、双井店</span>
							<span class="goods-mark">
								<em class="merger iepng">
								</em>
								<em class="reserve iepng">
								</em>
							</span>
						</a>
						<h3>
							<a class="index-goods-name" href="" target="_blank" title="【2店通用】深海800米海鲜自助">
								【2店通用】深海800米海鲜自助
							</a>
							<a class="index-goods-text" href="" target="_blank" title="单人自助餐，午餐/晚餐通用，海鲜/中式/西式等">
								单人自助餐，午餐/晚餐通用，海鲜/中式/西式等
							</a>
						</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>228</span>
							<span class="money">¥<del>258</del></span>
							<span class="number">已售<i>395</i></span>
						</div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://d2.lashouimg.com/cms/M00/D8/03/CqgBVFV6jY-AadA-AAC6cibsBF0160-308x196.jpg" src="images/a.gif" alt="便宜坊烤鸭店">
							<span class="index-goods-place">三里屯店、太阳宫店、朝阳大悦城店、五彩城店</span>
							<span class="goods-mark">
								<em class="merger iepng">
								</em>
							</span>
						</a>
						<h3>
							<a class="index-goods-name" href="" target="_blank" title="【4店通用】便宜坊烤鸭店">
								【4店通用】便宜坊烤鸭店
							</a>
							<a class="index-goods-text" href="" target="_blank" title="4人餐，地道口味">
								4人餐，地道口味
							</a>
						</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>328</span>
							<span class="money">¥<del>658</del></span>
							<span class="number">已售<i>11</i></span>
						</div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://d2.lashouimg.com/cms/M00/A2/BC/CqgBHlSY_2aAAECxAAFIXS84Mc0746-308x196.jpg" src="images/a.gif" alt="富丽客巴西烤肉">
							<span class="index-goods-place">劲松店、长虹桥店、永定路店、清华园店</span>
							<span class="goods-mark">
								<em class="reserve iepng">
								</em>
							</span>
						</a>
						<h3>
							<a class="index-goods-name" href="" target="_blank" title="【4店通用】富丽客巴西烤肉">
								【4店通用】富丽客巴西烤肉
							</a>
							<a class="index-goods-text" href="" target="_blank" title="单人烤肉自助餐，午晚餐通用">
								单人烤肉自助餐，午晚餐通用
							</a>
						</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>62</span>
							<span class="money">¥<del>68</del></span>
							<span class="number">已售<i>42526</i></span>
						</div>
					</div>
					<div class="index-goods">
						<a class="index-goods-img" href="" target="_blank">
							<img class="dynload" imgsrc="http://f2.lashouimg.com/cms/M00/5E/BE/CqgBHlP-vZGAUayKAAC1omWC9uI572-308x196.jpg" src="images/a.gif" alt="福樱兰日本料理">
							<span class="index-goods-place">北京通州区梨园东里2号（妇幼保健医院南侧格林豪泰酒店一层）	</span>
							<span class="goods-mark">
								<em class="merger iepng">
								</em>
							</span>
						</a>
						<h3>
							<a class="index-goods-name" href="" target="_blank" title="【梨园】福樱兰日本料理">
								【梨园】福樱兰日本料理
							</a>
							<a class="index-goods-text" href="" target="_blank" title="单人自助午/晚餐，提前1天预约，节假日通用">
								单人自助午/晚餐，提前1天预约，节假日通用
							</a>
						</h3>
						<div class="index-goods-info">
							<span class="price"><em>¥</em>178</span>
							<span class="money">¥<del>198</del></span>
							<span class="number">已售<i>2609</i></span>
						</div>
					</div>
				</div>
				<div class="attest">
				</div>
				<?php
				include "./footer.html";
				?>
				<?php
				include "./bottom.html";
				?>
				</footer>
				<!-- footer end -->
				<script type="text/javascript">var is_showcode_pop = '0';</script>
				<script src="js/ga_751f342.js" type="text/javascript"></script>
				<script src="js/autocomplete_eb18b81.js" type="text/javascript"></script>
				<script src="js/slider_f195ce1.js" type="text/javascript"></script>
				<script src="js/catenav_454c784.js" type="text/javascript"></script>
				<script src="js/common_26fc9e5.js" type="text/javascript"></script>
				<script src="js/index_10b1345.js" type="text/javascript"></script>
				<script src="js/countdown_96b1b14.js" type="text/javascript"></script>
				<script type="text/javascript">$(function() {
					$('a[tracknum]').live('click', function() {
						var pos = $(this).attr('tracknum');
						if (pos) {
							document.cookie = "pos=" + pos + ";path=/;domain=.lashou.com";
						}
					});
					$('input.filter-but[tracknum]').live('click', function() {
						var pos = $(this).attr('tracknum');
						if (pos) {
							document.cookie = "pos=" + pos + ";path=/;domain=.lashou.com";
						}
					});
					});
				</script>
				<script type="text/javascript">$(function() {
					var firstOrNo ='';
					if (firstOrNo == 1) {
						indexQrcodeDelay();
					} else {
						indexQrcode();
					}
					});
				</script>
	</body>
</html>