<?php
	session_start();
	require_once './db/conn.php';
	$conne->init_conn();
	$select="select n_id,n_title,n_time from db_news";
	$array=$conne->getRowsArray($select);
	$conne->close_conn();
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
					新闻列表
				</div>
				<div class="main-content">
					<table style="border: 1px solid #B7AEB4;width:100%;font-size:14px; margin-top:5px;" cellspacing="0" cellpadding="0">
					<tr height="35px" valign="top" style="background: #DDDDDD;">
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">ID</td>
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">标题</td>
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">时间</td>	
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">操作</td>	
					</tr>
					<?php for($i=0;$i<count($array);$i++){?>
						<tr height="35px" valign="top" style="background: white;" class="line-color cur-hand">
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $i;?></td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;" onclick="viewNews(<?php echo $array[$i]['n_id'];?>);" ><?php echo $array[$i]['n_title'];?></td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['n_time'];?></td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">
								<a class="modify-item mouse-on-red-off-black cur-hand" href="./anewmodify.php?i=<?php echo $array[$i]['n_id'];?>">
									修改
								</a>/
								<a class="mouse-on-red-off-black cur-hand" onclick="deleteNews(<?php echo $array[$i]['n_id'];?>);">删除</a></td>		
						</tr>
					<?php }?>
					</table>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js" ></script>
	<script src="js/manager.js" type="text/javascript" charset="utf-8"></script>
	<script type="application/javascript">
		function viewNews(i){
			window.location.href="./anewdisplay.php?i="+i;;
		}
		function deleteNews(i){
			$.ajax({
		         type: "POST",
		         url: "./action/newdelete.class.php",
		         data: {nid:i},
		         dataType: "json",
		         success: function(data){
		                var obj = eval(data);
		                if(obj.code=='1'){
		                	alert(obj.msg);
		                	window.location.href="./anews.php";
		                }else {
		                	alert(obj.msg);
		                }
		            }
		    });
		}
	</script>
</html>