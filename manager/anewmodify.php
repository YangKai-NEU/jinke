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
		<link rel="stylesheet" href="../editor/themes/default/default.css" />
		<link rel="stylesheet" href="../editor/plugins/code/prettify.css" />
		<script charset="utf-8" src="../editor/kindeditor.js"></script>
		<script charset="utf-8" src="../editor/lang/zh_CN.js"></script>
		<script charset="utf-8" src="../editor/plugins/code/prettify.js"></script>
		<script>
			KindEditor.ready(function(K) {
				var editor1 = K.create('textarea[name="content1"]', {
					cssPath : '../editor/plugins/code/prettify.css',
					uploadJson : '../editor/php/upload_json.php',
					fileManagerJson : '../editor/php/file_manager_json.php',
					allowFileManager : true,
					afterCreate : function() {
						var self = this;
						K.ctrl(document, 13, function() {
							self.sync();
							K('form[name=example]')[0].submit();
						});
						K.ctrl(self.edit.doc, 13, function() {
							self.sync();
							K('form[name=example]')[0].submit();
						});
					}
				});
				prettyPrint();
			});
		</script>
	</head>
	<body>
		<?php include 'top.html';?>
		<div class="top-block">
			<?php include 'left.html';?>
			<div class="main">
				<div class="main-top">
					新建新闻
				</div>
				<div class="main-content">
					<form name="example" method="post" action="action/newmodify.class.php">
						<input name="news-id" style="display:none;" value="<?php echo $array[0]['n_id'];?>"></input>
						<aaa style="height: 50px;line-height: 50px;">标题：<aaa></aaa><input name='news-title' style="height: 30px;line-height: 30px;width: 300px;" type="text" name="news-title" value="<?php echo $array[0]['n_title'];?>"/>
						<textarea name="content1" id="news-content" style="width:100%;height:500px;">
							<?php echo $array[0]['n_content'];?>
						</textarea>
						<br />
						<input type="submit" id="news-btn" name="news-button" class="news-button" value="提交内容" />
					</form>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js" ></script>
	<script type="application/javascript" src="./js/manager.js"></script>
</html>