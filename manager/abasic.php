<?php
	require_once '../config/config.php';
	$confige->initConfig("../config/config.json");
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
					基本配置
				</div>
				<div class="main-content">
					<form action="./action/aconfig.php" method="post">
						<table style="border: 1px solid #B7AEB4;width:100%;font-size:14px; margin-top:5px;" cellspacing="0" cellpadding="0">
							<tr height="35px" valign="top" style="background: #DDDDDD;">
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">元素名称</td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">元素内容</td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">操作</td>
							</tr>
							<tr height="35px" valign="top">
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">homepage_title</td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><input type="text" name="homepage_title" id="input-1" disabled style="text-align: center;height: 24px;margin-top: 3px; width: 300px;" value="<?php echo $confige->getItem('homepage_title');?>" /></td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><a id="edit-1" class="cur-hand mouse-on-red-off-black">编辑</a></td>
							</tr>
							<tr height="35px" valign="top">
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">account_title</td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><input type="text" name="account_title" id="input-2" disabled style="text-align: center;height: 24px;margin-top: 3px; width: 300px;" value="<?php echo $confige->getItem('account_title');?>" /></td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><a id="edit-2" class="cur-hand mouse-on-red-off-black">编辑</a></td>
							</tr>
						</table>
						<input type="submit" style="width: 100%; height: 35px;background: dodgerblue;color: white;border: none;margin-top: 10px;" value="提交"/>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script type="application/javascript" src="js/jquery-1.11.1.min_044d0927.js"></script>
	<script src="js/manager.js" type="text/javascript" charset="utf-8"></script>
	<script type="application/javascript">
		$("#edit-1").click(function(){
			$("#input-1").removeAttr("disabled");
		});
		$("#edit-2").click(function(){
			$("#input-2").removeAttr("disabled");
		});
	</script>
</html>