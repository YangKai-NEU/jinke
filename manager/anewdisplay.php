<?php
	session_start();
	if(isset($_GET['i'])){
		require_once './db/conn.php';
		$conne->init_conn();
		$select="select * from db_news where n_id='".$_GET['i']."'";	
		$array=$conne->getRowsArray($select);
		if(count($array)==0){
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('参数错误');";
			echo "window.location.href='./anews.php';";
			echo "</script>";
		}
		$conne->close_conn();
	}else{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('参数错误');";
		echo "window.location.href='./anews.php';";
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
					新闻详情
				</div>
				<div class="main-content">
					<div class="news-title" style="text-align: center;font-size: 22px;"><strong><?php echo $array[0]['n_title'];?></strong></div>
					<div class="news-time" style="text-align: center; font-size: 14px;margin-top: 10px;"><?php echo $array[0]['n_time'];?></div>
					<div class="news-content" style="margin-top: 20px;"><?php echo $array[0]['n_content'];?></div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js" ></script>
	<script type="application/javascript" src="./js/manager.js"></script>
</html>