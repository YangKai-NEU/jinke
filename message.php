<?php
	require_once './classes/user.php';
	session_start();
	if(!isset($_SESSION['C_USER'])||$_SESSION['C_USER']==NULL){
		echo "<script type='text/javascript'>
			window.location.href='./login.php';
		</script>";
	}	
	require_once './config/config.php';
	$confige->initConfig("./config/config.json");	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="css/calendar.css" />
		<link href="css/common_dd94d7a.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
		<script type="text/javascript" src="./js/jquery.bxslider_e88acd1b.js"></script>
		<!--商品分类菜单JavaScript-->
		<script src="js/menu.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="./js/lrscroll_1.js"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/base_8aebc17.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.imagezoom.min.js"></script>
		<title><?php echo $confige->getItem('account_title');?>-我的消息</title>
	</head>
	<body>
		<?php include "./top.html";?>
		<div class="account-header">
			<div class="account-header-main">
				<aaa class="my-fenbei  cur-hand"><strong><?php echo $confige->getItem('account_title');?></strong></aaa>
				<aaa id="account-index" class="header-font mouse-on-green-off-white cur-hand" style="margin-left: 100px;">首页</aaa>
				<aaa id="account-buyer" class="header-font mouse-on-green-off-white cur-hand" style="margin-left: 40px;">购物车</aaa>
				<aaa class="jifenshangcheng header-font mouse-on-green-off-white cur-hand" style="margin-left: 40px;">积分商城</aaa>
			</div>
		</div>
		
		<div class='account-main'>
			<div class='account-main-left cur-hand'>
				<div id="account-main-left-function" class="all-function text-red">全部功能</div>
				<div id="account-main-left-buyer" class="account-text-b mouse-on-red-off-black cur-hand">我的购物车</div>
				<div id="account-main-left-all-order" class="account-text-b mouse-on-red-off-black cur-hand">我的订单</div>
				<div id="account-main-left-receipt" class="account-text-l mouse-on-red-off-black cur-hand">待收货</div>
				<div id="account-main-left-receive" class="account-text-l mouse-on-red-off-black cur-hand">已收货</div>
				<div id="account-main-left-fenqijinxingshi" class="account-text-l mouse-on-red-off-black cur-hand">分期进行时</div>
				<div id="account-main-left-meiriqiandao" class="account-text-b mouse-on-red-off-black cur-hand">每日签到</div>
				<div id="account-main-left-myjifen" class="account-text-b mouse-on-red-off-black cur-hand">我的积分</div>
				<div id="account-main-left-jifenrecord" class="account-text-b mouse-on-red-off-black cur-hand">积分兑换记录</div>
				<div id="account-main-left-selfinfosetting" class="account-text-b mouse-on-red-off-black cur-hand">个人信息设置</div>
				<div id="account-main-left-address" class="account-text-b  cur-hand mouse-on-red-off-black">收货地址设置</div>
				<div id="modify-pwd" class="account-text-b cur-hand mouse-on-red-off-black">修改密码</div>
				<div id="account-main-left-message" class="account-text-b text-red cur-hand font17px">我的消息</div>
				<div id="account-exit" class="account-text-b mouse-on-red-off-black cur-hand">退出当前账号</div>
			</div>
			<div class="account-main-right">
				<div class="account-main-right-header">
					<image src="./images/naozhong.png" style="margin-left: 5px; height: 30px;margin-top:5px;line-height: 30px;width: 30px;"></image>
					<aaa class="my-calendar">我的日历</aaa>
				</div>
				<div class="account-main-right-body">
					<div id="account-main-right-body-day">16</div>
					<div id="account-main-right-body-week">星期六</div>
					<div id="account-main-right-body-month">2016/4</div>
				</div>
				<hr style="height:1px;border:none;border-top:2px solid #CCCCCC; margin-top: 20px;"/>
				<div id="CalendarMain">
				<div id="title">
					<a class="selectBtn month" href="javascript:" onClick="CalendarHandler.CalculateLastMonthDays();">
						<
					</a>
					<a class="selectBtn selectYear" href="javascript:" onClick="CalendarHandler.CreateSelectYear(CalendarHandler.showYearStart);">
						2014年
					</a>
					<a class="selectBtn selectMonth" onClick="CalendarHandler.CreateSelectMonth()">
						6月
					</a>
					<a class="selectBtn nextMonth" href="javascript:" onClick="CalendarHandler.CalculateNextMonthDays();">
						>
					</a>
					<a class="selectBtn currentDay" href="javascript:" onClick="CalendarHandler.CreateCurrentCalendar(0,0,0);">
						今天
					</a>
				</div>
				<div id="context">
					<div class="week">
						<h3>
							一
						</h3>
						<h3>
							二
						</h3>
						<h3>
							三
						</h3>
						<h3>
							四
						</h3>
						<h3>
							五
						</h3>
						<h3>
							六
						</h3>
						<h3>
							日
						</h3>
					</div>
					<div id="center">
						<div id="centerMain">
							<div id="selectYearDiv">
							</div>
							<div id="centerCalendarMain">
								<div id="Container">
								</div>
							</div>
							<div id="selectMonthDiv">
							</div>
						</div>
					</div>
					<div id="foots">
						<a id="footNow">
							19:14:34
						</a>
					</div>
				</div>
			</div>
			</div>
			<div class="account-main-mid">
				<div class="account-main-mid-title">
					我的消息
				</div>
				暂无消息
			</div>
		</div>
		<main id="main">
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
			</div>
		</main>
		<?php include "./bottom.html"; ?>
		<script src="js/ga_751f342.js" type="text/javascript"></script>
		<script src="js/autocomplete_eb18b81.js" type="text/javascript"></script>
		<script src="js/slider_f195ce1.js" type="text/javascript"></script>
		<script src="js/catenav_454c784.js" type="text/javascript"></script>
		<script src="js/common_26fc9e5.js" type="text/javascript"></script>
		<script src="js/index_10b1345.js" type="text/javascript"></script>
		<script src="js/countdown_96b1b14.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/account.js" ></script>
		<script type="text/javascript" src="js/jquery-1.11.1.min_044d0927.js" ></script>
		<script type="text/javascript" src="js/calendar.js" ></script>
		<?php
			if(isset($_SESSION['C_USER'])&&$_SESSION['C_USER']!=NULL){
				echo "<script type='text/javascript'>
				$('#login-or-hide').hide();
				$('#top-welcome').html('欢迎您，".$_SESSION['C_USER']->mUserName."');
				$('#register-or-exit').html('注销');
				</script>";
			}
		?>
		<script type="application/javascript">
			$(".my-fenbei").click(function(){
				window.location.href="./account.php";
			});
			$('#register-or-exit').click(function(){
				if($('#register-or-exit').html()=="注销"){
					exitLogin();
				}
			})
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