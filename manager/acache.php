<?php
	$array=array();
	$pos=0;
	$file=scandir("../action/Cache");
	for($i=0;$i<count($file);$i++){
		if (strpos($file[$i],".")) {
            $array[$pos]="../action/Cache/".$file[$i];
            $pos++;
        }else if($file[$i] != "." && $file[$i] != ".."){
        	$subfiles=scandir("../action/Cache/".$file[$i]);
			for($j=0;$j<count($subfiles);$j++){
				if($subfiles[$j] != "." && $subfiles[$j] != ".."){
					$array[$pos]="../action/Cache/".$file[$i].'/'.$subfiles[$j];
           			$pos++;
				}
			}
        }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="./css/style.css" />
	</head>
	<body>
		<?php include 'top.html';?>
		<div class="top-block">
			<?php include 'left.html';?>
			<div class="main">
				<div class="main-top">
					Cache管理
					<aaa id="delete-all-cache" class="mouse-on-strong cur-hand" style="float: right;margin-right: 20px;color: red;">一键清空</aaa>
				</div>
				<div class="main-content">
					<table style="border: 1px solid #B7AEB4;width:100%;font-size:14px; margin-top:5px;" cellspacing="0" cellpadding="0">
						<tr height="35px" valign="top" style="background: #DDDDDD;">
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">Cache文件目录</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">文件大小</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">上次访问时间</td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">操作</td>
						</tr>
						<?php for($i=0;$i<count($array);$i++){?>	
							<tr height="35px" valign="top">
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i];?></td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo filesize($array[$i])."KB";?></td>
								<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo date("F d Y H:i:s.",fileatime($array[$i]));?></td>
								<td onclick="submitOrder('<?php echo $array[$i];?>');" style="width:90px; text-align: center;height: 30px; line-height: 30px;" class="cur-hand mouse-on-red-off-black">删除</td>
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
		function submitOrder(type){
			$.ajax({
		         type: "POST",
		         url: "action/deletecache.php",
		         data: {isall:'N',cachefile:type},
		         dataType: "json",
		         success: function(data){
		                var obj = eval(data);
		                if(obj.code=='1'){
		                	alert(obj.msg);
		                	window.location.href="acache.php";
		                }else {
		                	alert(obj.msg);
		                }
		            }
		    });
		}
		$("#delete-all-cache").click(function(){
			$.ajax({
		         type: "POST",
		         url: "action/deletecache.php",
		         data: {isall:'Y',cachefile:'null'},
		         dataType: "json",
		         success: function(data){
		                var obj = eval(data);
		                if(obj.code=='1'){
		                	alert(obj.msg);
		                	window.location.href="acache.php";
		                }else {
		                	alert(obj.msg);
		                }
		            }
		    });
		});
	</script>
</html>