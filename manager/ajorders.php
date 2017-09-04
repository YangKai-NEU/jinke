<?php
	session_start();
	$r="1";
	if(isset($_GET['r'])){
		$r=$_GET["r"];
	}
	require_once './db/conn.php';
	$conne->init_conn();
	$select="";
	$select="select db_jifen_order.j_id,j_price,j_uid,j_submittime,j_img,j_name,count(*) from db_jifen_goods,db_jifen_order,db_jifen_transaction where db_jifen_transaction.j_jgid=db_jifen_goods.j_id and 
			db_jifen_order.j_id=db_jifen_transaction.j_joid group by j_joid";
	switch($r){
		case '1':
			$select.=" order by j_price";
			break;	
		case '2':
			$select.=" order by j_price desc";
			break;	
		case '3':
			$select.=" order by j_submittime";
			break;	
		case '4':
			$select.=" order by j_submittime desc";
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
						    <select id="order-range">  
						    	<optgroup label="按价格排序">  
							      	<option value="1">价格由低到高</option>  
							        <option value="2">价格由高到低</option>
							    </optgroup>  
							    <optgroup label="按时间排序">  
							      	<option value="3">时间由远及近</option>  
							        <option value="4">时间由近及远</option>  
							    </optgroup>  
						    </select>  
						</div>
						<div style="display: inline-block;margin-left: 30px;">
							<input style="width: 90px;height: 25px;" value="搜索" type="button" onclick="selectOrder();"/>
						</div>
					</div>
					<div class="order-top--line">
						<div class="order-top-item-on-line-white"></div>
						<div class="order-top-item-on-line-blue"></div>
					</div>
					<table style="border: 1px solid #B7AEB4;width:100%;font-size:14px; margin-top:15px;" cellspacing="0" cellpadding="0">
						<tr height="35px" valign="top" style="background: #DDDDDD;">
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">订单编号</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">用户ID</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">下单时间</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">价格</td>
						</tr>
						<?php for($i=0;$i<count($array);$i++){?>	
							<tr height="35px" valign="top" class="cur-hand mouse-on-red-off-black">
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $i;?></td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['j_uid'];?></td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['j_submittime'];?></td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['j_price'];?></td>
							</tr>
						<? }?>
					</table>
				</div>
			</div>
		</div>
	</body>
	<script type="application/javascript" src="js/jquery-1.11.1.min_044d0927.js"></script>
	<script src="js/manager.js" type="text/javascript" charset="utf-8"></script>
	<script type="application/javascript">
		<?php 
            $r='1';
            if(isset($_GET['r'])){
                $r=$_GET['r'];
            }
            if($r==1){
        ?>
                $("#order-range").find("option").eq(0).attr("selected","selected")

        <?php        
            }else if($r==2){
        ?>
                $("#order-range").find("option").eq(1).attr("selected","selected")

        <?php
            }else if($r==3){
        ?>
                $("#order-range").find("option").eq(2).attr("selected","selected")

        <?php            
            }else if($r==4){
        ?>
                $("#order-range").find("option").eq(3).attr("selected","selected")
        <?php            
            }
        ?>
		function selectOrder(){
			var r=$("#order-range").val();
			window.location.href="./ajorders.php?r="+r;
		}
	</script>
</html>