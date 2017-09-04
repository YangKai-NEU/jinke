<?php
	session_start();
	if(isset($_GET['o'])){
		$oid=$_GET['o'];
		require_once './db/conn.php';
		$conne->init_conn();
		$select="select u_id,u_isself from db_user,db_order where o_uid=u_id and o_id='".$oid."'";
		$array=$conne->getRowsArray($select);
		if(count($array)==0){
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('参数错误');";
			echo "window.location.href='./aorders.php';";
			echo "</script>";
		}else{
			$isself=$array[0]['u_isself'];
			$uid=$array[0]['u_id'];
			$conne->close_rst();
			if($isself=='Y'){
				$select="select * from db_self where s_id='".$uid."'";
			}else{
				$select="select * from db_qiye where q_id='".$uid."'";
			}
			$array=$conne->getRowsArray($select);
		}
		$conne->close_conn();
	}else {
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('参数错误');";
		echo "window.location.href='./aorders.php';";
		echo "</script>";
	}
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
					<?php
						if($isself=='Y'){
							echo "个人信息";
						}else{
							echo "企业信息";
						}
					?>
				</div>
				<div class="main-content">
					<?php
						if($isself=='Y'){
					?>
					<div class="info-item"><div class="info-item-left">姓名：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_name'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">性别：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_sex'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">身份证号：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_idcard'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">地址：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_address'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">户籍：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_huji'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">婚姻状况：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_hunyin'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">公司：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_workspace'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">公司地址：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_workaddress'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">公司电话：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_workphone'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">联系人1：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_lianxiren1'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">联系人2：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_lianxiren2'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">学费：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_xuefei'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">月收入：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_yueshouru'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">是否学生：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['s_isstudent'];?>"></input></div>
					<?php
						}else{
					?>
					<div class="info-item"><div class="info-item-left">姓名：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_name'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">性别：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_sex'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">地址：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_address'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">户籍：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_huji'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">身份证号：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_idcard'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">联系电话：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_phone'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">生日：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_birth'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">联系人1电话：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_lianxiren1'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">联系人2电话：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_lianxiren2'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">公司：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_workspace'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">公司地址：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_workaddress'];?>"></input></div>
					<div class="info-item"><div class="info-item-left">公司电话：</div><input class="info-item-right" disabled="true" type="text" value="<?php echo $array[0]['q_workphone'];?>"></input></div>
					<?php
						}
					?>
					<input id="pass-info" type="button" class="cur-hand" style="margin:10px;float:right;width: 100px;height: 30px;background: dodgerblue;color: white;border: none;" value="通过"></input>
					<input id="reject-info" type="button" class="cur-hand" style="margin:10px;float:right;width: 100px;height: 30px;background: #999999;color: white;border: none;" value="拒绝"></input>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js" ></script>
	<script src="js/manager.js" type="text/javascript" charset="utf-8"></script>
	<script type="application/javascript">
		$("#pass-info").click(function(){
			$.ajax({
				type: "POST",
				url: "./action/pass.class.php",
				data: {
					oid: <?php echo $oid;?>,
					pass: 'Y'
				},
				dataType: "json",
				success: function(data) {
					var obj = eval(data);
					if (obj.code == '1') {
						window.location.href = "./aorders.php";
					} else {
						alert(obj.msg);
					}
				}
			});
		});
		$("#reject-info").click(function(){
			$.ajax({
				type: "POST",
				url: "./action/pass.class.php",
				data: {
					oid: <?php echo $oid;?>,
					pass: 'R'
				},
				dataType: "json",
				success: function(data) {
					var obj = eval(data);
					if (obj.code == '1') {
						window.location.href = "./aorders.php";
					} else {
						alert(obj.msg);
					}
				}
			});
		});
	</script>
</html>