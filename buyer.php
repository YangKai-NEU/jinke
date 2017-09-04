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
	require_once './action/db/conn.php';
	$conne -> init_conn();
	$select="select b_id,b_gid,g_imgurl,g_name,g_price,b_number from db_buyer,db_goods where db_buyer.b_gid=db_goods.g_id 
		and b_uid='".$_SESSION['C_USER']->mId."'";
	$array=$conne->getRowsArray($select);
	$conne->close_conn();
?>
<!DOCTYPE html>
<html class="hb-loaded">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo $confige->getItem('homepage_title');?>-购物车</title>
		<link href="css/common_dd94d7a.css" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
		<script type="text/javascript" src="./js/jquery.bxslider_e88acd1b.js"></script>
		<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="./js/menu.js"></script>
		<script type="text/javascript" src="./js/lrscroll_1.js"></script>
		<script src="js/dc.js" async type="text/javascript"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/base_8aebc17.js" type="text/javascript"></script>
	</head>
	<body>		
		<?php include "./top.html";?>
		<div class="top">
			<div class="logo cur-hand">
				<div style="text-align: center; color: orangered; font-size: 40px;">
					<?php echo $confige->getItem('homepage_title');?>
				</div>
			</div>
			<div class="search">
				<form>
					<input type="text" value="" class="s_ipt">
					<input type="submit" value="搜索" class="s_btn">
				</form>
			</div>
		</div>
		<div id="car">
			<div id="car-title">
				<p id="car-title-all-goods">
					购物车
				</p>
				<span  id="car-title-right">
					已选商品（不含运费）
					<price id="price" style="color: red;">¥
						<?php 
							$total_price=0;
							for($i=0;$i<count($array);$i++){
								$total_price+=$array[$i]['g_price']*$array[$i]['b_number'];
							}
							echo $total_price;
						?>	
					</price>
					<button type="button" id="go-sum">结算</button>
				</span>
			</div>
			<div style="display: inline;">
				<form>
					<table border="0" style="width:1200px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
						<tbody>
							<tr height="30px" valign="top">
								<td style="width:180px; padding-left: 20px; height: 30px; line-height: 30px;">
									<input id="check-all-t" class="check-element" name="all-select" type="checkbox" value="" style="margin-right: 5px;" />
									<aaa id="check-all-t-t" class="cur-hand">全选</aaa>
								</td>
								<td style="width:374px;text-align: center; height: 30px; line-height: 30px;">
									商品信息
								</td>
								<td style="width:154px;text-align: center; height: 30px; line-height: 30px;">
									单价（元）
								</td>
								<td style="width:154px;text-align: center; height: 30px; line-height: 30px;">
									数量
								</td>
								<td style="width:154px;text-align: center; height: 30px; line-height: 30px;">
									金额（元）
								</td>
								<td style="width:185px;text-align: center; height: 30px; line-height: 30px;">
									操作
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>			
			<div id="car-header" border="0.1" style="margin-top: 10px;">
				<form>
					<table border="0" style="width:1200px; font-size:14px;">
						<tbody>
							<?php 
								if(count($array)==0){
							?>			
							<div style="height: 350px;background: white;text-align: center;">
								<img  src="images/buyer_larger.jpg" style="height: 250px;"/><br />
								<aaa style="height: 100px;line-height: 100px;font-size: 17px;">您的购物车还是空的</aaa>
								<a href="./index.php" class="mouse-on-strong" style="color: red; height: 100px;line-height: 100px;font-size: 17px;">去商场逛逛</a>
							</div>
							<?php 		
								}else{
									for($i=0;$i<count($array);$i++){	
							?>
									<tr height="120px">
										<td style="width:180px; padding-left: 20px; height: 100px;">
											<input class="check-element" name="check-item" type="checkbox" value="" style="margin-right: 10px;" />
											<img class="dynload" imgsrc="<?php echo $array[$i]['g_imgurl'];?>" style="width: 100px; width: 100px;" src="images/a.gif"/>
										</td>
										<td style="width:374px; height: 100px;">
											<p id="goods-name" class="cur-hand mouse-on-red-off-black" style="margin: 10px;">
												<?php echo $array[$i]['g_name'];?>
											</p>
										</td>
										<td style="width:154px; text-align: center; height: 100px;">
											<p>
												<?php echo $array[$i]['g_price'];?>
											</p>
										</td>
										<td style="width:154px; text-align: center; height: 100px;">
											<input class="text-box" name="" onclick="subNum(<?php echo $array[$i]['b_id'];?>);" style="border-width: 0px;width:20px;height:25px;line-height:25px;display:inline; margin-right:-5px;" type="button" value="-"/>
											<input class="text-box" name="" style="border-width: 0px;width:30px;height:25px;line-height:25px;text-align:center;margin-left:0px;margin-right:-5px;display:inline;" type="text" value="<?php echo $array[$i]['b_number'];?>" /> 
											<input class="text-box" name="" onclick="addNum(<?php echo $array[$i]['b_id'];?>);" style="border-width: 0px;width:20px;height:25px;line-height:25px;display:inline; margin-right:-5px;" type="button" value="+"/>
										</td>
										<td style="width:154px; text-align: center; height: 100px;">
											<p id="goods-total-price" style="color: red;">
												<?php echo $array[$i]['g_price']*$array[$i]['b_number'];?>
											</p>
										</td>
										<td style="width:185px; text-align: left;height: 100px;">
											<a onclick="deleteBuyer(<?php echo $array[$i]['b_id'];?>);" style="margin-left: 50px;" class="mouse-on-red-off-black">删除</a><br>
											<a style="margin-left: 50px;" class="mouse-on-red-off-black">相似商品</a>
										</td>
									</tr>
							<?php 
									}
								}
							?>
						</tbody>
					</table>
				</form>
			</div>
			
			<div id="car-footer" style="height: 50px; margin-top: 15px;background: gainsboro;">
				<input id="check-all-b" class="check-element" type="checkbox" value="" style="display:inline;height:50px; line-height:50px;margin-left: 10px;" />
				<aaa id="check-all-b-t" class="cur-hand">全选</aaa>
				<a style="margin-left: 20px;" onclick="deleteAll();">删除</a>
				<div id="car-footer-right">
					<aaa>已选商品</aaa>
					<aaa style="color: red;font-size: 17px;">
						<?php 
							$total_num=0;
							for($i=0;$i<count($array);$i++){
								$total_num+=$array[$i]['b_number'];
							}
							echo $total_num;
						?>	
					</aaa>
					<aaa>件</aaa>
					<aaa style="margin-left: 20px;">合计（无运费）:</aaa>
					<aaa style="color:red;font-size: 17px;margin-right: 10px;">￥
						<?php 
							$total_price=0;
							for($i=0;$i<count($array);$i++){
								$total_price+=$array[$i]['g_price']*$array[$i]['b_number'];
							}
							echo $total_price;
						?>	
					</aaa>
					<input class="cur-hand" border="0" type="submit" style="border:none; height: 40px;background: orangered;font-size: 18px; color: white; width: 100px; margin-top: -7px;" value="结 算"/>
				</div>
			</div>
		</div>
		<!-- main -->
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
		<?php include "./footer.html"; ?>
		<?php include "./bottom.html"; ?>
		<script type="text/javascript">var is_showcode_pop = '0';</script>
		<script src="js/ga_751f342.js" type="text/javascript"></script>
		<script src="js/autocomplete_eb18b81.js" type="text/javascript"></script>
		<script src="js/slider_f195ce1.js" type="text/javascript"></script>
		<script src="js/catenav_454c784.js" type="text/javascript"></script>
		<script src="js/common_26fc9e5.js" type="text/javascript"></script>
		<script src="js/index_10b1345.js" type="text/javascript"></script>
		<script src="js/account.js" type="application/javascript"></script>
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
			$('#register-or-exit').click(function(){
				if($('#register-or-exit').html()=="注销"){
					exitLogin();
				}
			})
			function subNum(i){
				$.ajax({
					type: "POST",
					url: "action/resetbuyernum.class.php",
					data: {
						bid:i,type:0
					},
					dataType: "json",
					success: function(data) {
						var obj = eval(data);
						if (obj.code == '1') {
							window.location.href = "./buyer.php";
						} else {
							alert(obj.msg);
						}
					}
				});
			}
			function addNum(i){
				$.ajax({
					type: "POST",
					url: "action/resetbuyernum.class.php",
					data: {
						bid:i,type:1
					},
					dataType: "json",
					success: function(data) {
						var obj = eval(data);
						if (obj.code == '1') {
							window.location.href = "./buyer.php";
						} else {
							alert(obj.msg);
						}
					}
				});
			}
			function deleteBuyer(i){
				$.ajax({
					type: "POST",
					url: "action/deletebuyer.class.php",
					data: {
						bid:i
					},
					dataType: "json",
					success: function(data) {
						var obj = eval(data);
						if (obj.code == '1') {
							window.location.href = "./buyer.php";
						} else {
							alert(obj.msg);
						}
					}
				});
			}
			function deleteAll(){
				var s=[];
				var ppp=0;
				<?php $pos=0;?>
				var obj=document.getElementsByName('check-item');
				for(var i=0; i<obj.length; i++){
					if(obj[i].checked) {
						s[ppp++]=<?php echo $array[$pos]['b_id']?>;
					}
					<?php $pos++;?>
				}
//				alert(JSON.stringify(s));
				$.ajax({
					type: "POST",
					url: "action/deletebuyerlist.class.php",
					data: {
						data:JSON.stringify(s)
					},
					dataType: "json",
					success: function(data) {
						var obj = eval(data);
						if (obj.code == '1') {
							alert(obj.msg);
							window.location.href = "./buyer.php";
						} else {
							alert(obj.msg);
						}
					}
				});
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