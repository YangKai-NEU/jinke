<?php
	session_start();
	$t="1";
	$r="5";
	if(isset($_GET['t'])){
		$t=$_GET["t"];
	}
	if(isset($_GET['r'])){
		$r=$_GET["r"];
	}
	require_once './db/conn.php';
	$conne->init_conn();
	$select="";
	switch($t){
		case '1':
			$select="select o_id,o_pass,o_receive,o_uid,o_time,o_price,g_name,g_imgurl,f_month,f_ratio,o_leave,count(*) from db_order,db_transaction,
		db_goods,db_fenqi where o_id=t_oid and g_id=t_gid and o_fid=f_id and o_pass!='R' group by t_oid";
			break;
		case '2':
			$select="select o_id,o_pass,o_receive,o_uid,o_time,o_price,g_name,g_imgurl,f_month,f_ratio,o_leave,count(*) from db_order,db_transaction,
		db_goods,db_fenqi where o_id=t_oid and g_id=t_gid and o_receive='N' and o_fid=f_id and o_pass!='R' group by t_oid";
			break;
		case '3':
			$select="select o_id,o_pass,o_uid,o_receive,o_time,o_price,g_name,g_imgurl,f_month,f_ratio,o_leave,count(*) from db_order,db_transaction,
		db_goods,db_fenqi where o_id=t_oid and g_id=t_gid and o_receive='Y' and o_fid=f_id and o_pass!='R' group by t_oid";
			break;
		case '4':
			$select="select o_id,o_pass,o_uid,o_receive,o_time,o_price,g_name,g_imgurl,f_month,f_ratio,o_leave,count(*) from db_order,db_transaction,
		db_goods,db_fenqi where o_id=t_oid and g_id=t_gid and o_fid=f_id and o_leave>0 group and o_pass!='R' by t_oid";
			break;
	}
	switch($r){
		case '5':
			$select.=" order by o_price";
			break;	
		case '6':
			$select.=" order by o_price desc";
			break;	
		case '7':
			$select.=" order by o_time";
			break;	
		case '8':
			$select.=" order by o_time desc";
			break;	
	}
	$array=$conne->getRowsArray($select);
	$conne->close_conn();	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<?php include 'top.html';?>
		<div class="top-block">
			<?php include 'left.html';?>
			<div class="main">
				<div class="main-top">
					订单管理
				</div>
				<div class="main-content">
					<div class="order-top">
						<div id="fenqi-order" class="order-top-item-on cur-hand">
							分期订单
						</div>
						<div id="jifen-order" class="order-top-item-off cur-hand">
							积分兑换
						</div>
						<div style="display: inline-block;margin-left: 50px;">
						    <select id="order-type"> 
						        <option value="1">全部订单</option>  
						        <option value="2">待收货</option>  
						        <option value="3">已收货</option> 
						        <option value="4">分期进行时</option>  
						    </select>  
						    <select id="order-range">  
						    	<optgroup label="按价格排序">  
							      	<option value="5">价格由低到高</option>  
							        <option value="6">价格由高到低</option>
							    </optgroup>  
							    <optgroup label="按时间排序">  
							      	<option value="7">时间由远及近</option>  
							        <option value="8">时间由近及远</option>  
							    </optgroup>  
						    </select>
						</div>
						<div style="display: inline-block;margin-left: 30px;">
							<input style="width: 90px;height: 25px;" value="搜索" type="button" onclick="selectOrder();"/>
						</div>
						
					</div>
					<div class="order-top--line">
						<div class="order-top-item-on-line-blue"></div>
						<div class="order-top-item-on-line-white"></div>
					</div>
					<table style="border: 1px solid #B7AEB4;width:100%;font-size:14px; margin-top:15px;" cellspacing="0" cellpadding="0">
						<tr height="35px" valign="top" style="background: #DDDDDD;">
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">订单编号</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">用户ID</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">下单时间</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">价格</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">剩余次数</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">状态</td>
						</tr>
						<?php for($i=0;$i<count($array);$i++){?>	
							<tr height="35px" valign="top" class="cur-hand">
								<td style="width:30px; text-align: center;height: 30px; line-height: 30px;"><?php echo $i;?></td>
								<td style="width:30px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['o_uid'];?></td>
								<td style="width:30px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['o_time'];?></td>
								<td style="width:30px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['o_price'];?></td>
								<td style="width:30px; text-align: center;height: 30px; line-height: 30px;"><?php 
									if($array[$i]['o_pass']=='Y'){
										echo $array[$i]['o_leave'];
									}else {
										echo "-";
									}
									?>
								</td>
								<td style="width:30px; text-align: center;height: 30px; line-height: 30px;color: green;"><?php 
									if($array[$i]['o_pass']=='Y'){
										if($array[$i]['o_receive']=='Y'){
											echo "已收货";
										}else {
											echo "待收货";
										}
									}else if($array[$i]['o_pass']=='N'){
										echo "<a onclick='viewMsg(".$array[$i]['o_id'].");' id='pass-item' class='mouse-on-red-off-black'>待通过</a>";
									}else{
										echo "<a style='color:red;'>已拒绝</a>";
									}
									?>
								</td>
							</tr>
						<? }?>
					</table>
				</div>
			</div>
		</div>
	</body>
	<script type="application/javascript" src="js/jquery-1.11.1.min_044d0927.js"></script>
	<script src="js/manager.js" type="text/javascript" charset="utf-8"></script>
	<script>
		<?php 
            $t='1';
            $r='5';
            if(isset($_GET['t'])){
                $t=$_GET['t'];
            }
            if(isset($_GET['r'])){
                $r=$_GET['r'];
            }
            if($t==1){
        ?>
               $("#order-type").find("option").eq(0).attr("selected","selected")

        <?php
            }else if($t==2){
        ?>        
                $("#order-type").find("option").eq(1).attr("selected","selected")

        <?php
            }else if($t==3){
        ?>
                   $("#order-type").find("option").eq(2).attr("selected","selected")

        <?php        
            }else if($t==4){
        ?>
                   $("#order-type").find("option").eq(3).attr("selected","selected")

        <?php            
            }
            if($r==5){
        ?>
                $("#order-range").find("option").eq(0).attr("selected","selected")

        <?php        
            }else if($r==6){
        ?>
                $("#order-range").find("option").eq(1).attr("selected","selected")

        <?php
            }else if($r==7){
        ?>
                $("#order-range").find("option").eq(2).attr("selected","selected")

        <?php            
            }else if($r==8){
        ?>
                $("#order-range").find("option").eq(3).attr("selected","selected")
        <?php            
            }
        ?>;
		
		function selectOrder(){
			var t=$("#order-type").val();
			var r=$("#order-range").val();
			window.location.href="./aorders.php?t="+t+"&r="+r;
		}
		function viewMsg(oid){
			window.location.href="./amsg.php?o="+oid;
		}
	</script>
</html>