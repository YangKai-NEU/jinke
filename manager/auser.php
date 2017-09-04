<?php
	session_start();
	require_once './db/conn.php';
	$conne->init_conn();
	$select="select * from db_user";
	$array=$conne->getRowsArray($select);
	$conne->close_conn();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="stylesheet" href="css/modernizr.css" />
		<script src="js/modernizr.js"></script>
	</head>
	<body>
		<div class="cd-popup" role="alert">
			<div class="cd-popup-container">
				<p>禁止该用户登录？</p>
				<ul class="cd-buttons">
					<li><a id="user-yes" class="cur-hand">是</a></li>
					<li><a id="user-no" class="cur-hand">否</a></li>
				</ul>
				<a href="#0" class="cd-popup-close img-replace">Close</a>
			</div>
		</div>
		<?php include 'top.html';?>
		<div class="top-block">
			<?php include 'left.html';?>
			<div class="main">
				<div class="main-top">
					用户列表
				</div>
				<div class="main-content">
					<table style="border: 1px solid #B7AEB4;width:100%;font-size:14px; margin-top:5px;" cellspacing="0" cellpadding="0">
					<tr height="35px" valign="top" style="background: #DDDDDD;">
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">ID</td>
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">用户名</td>
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">联系电话</td>
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">个人/企业</td>
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">积分</td>	
						<td style="width:90px; text-align: center;height: 30px; line-height: 30px;">是否允许登录</td>		
					</tr>
					<?php for($i=0;$i<count($array);$i++){?>
						<tr height="35px" onclick="submitOrder(<?php echo $array[$i]['u_id'];?>);" class="user-item cur-hand line-color" valign="top" style="background: white;">
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['u_id'];?></td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['u_username'];?></td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['u_phone'];?></td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['u_isself'];?></td>
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['u_jifen'];?></td>		
							<td style="width:90px; text-align: center;height: 30px; line-height: 30px;"><?php echo $array[$i]['u_active'];?></td>		
						</tr>
					<?php }?>
					</table>
				</div>
			</div>
		</div>
	</body>
	<?php include './loading.php';?>
	<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js" ></script>
	<script type="application/javascript" src="./js/manager.js"></script>
	<script type="application/javascript">
		var tuid;
		$div1=$('#loading-spinner');
		if($div1.is(':visible')){
			$div1.hide();
		}
		function submitOrder(type){
			tuid=type;
			$('.cd-popup').addClass('is-visible');
		}
		$('.cd-popup').on('click', function(event){
			if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
				event.preventDefault();
				$(this).removeClass('is-visible');
			}
		});
		//close popup when clicking the esc keyboard button
		$(document).keyup(function(event){
	    	if(event.which=='27'){
	    		$('.cd-popup').removeClass('is-visible');
		    }
	    });
	    $("#user-yes").click(function(){
	    	$div1.show();
	    	$('.cd-popup').removeClass('is-visible');
	    	$.ajax({
		         type: "POST",
		         url: "action/loginsetting.class.php",
		         data: {uid:tuid,isallow:'N'},
		         dataType: "json",
		         success: function(data){
		                var obj = eval(data);
		                if(obj.code=='1'){
		                	$div1.hide();
		                	window.location.href="auser.php";
		                }else {
		                	$div1.hide();
		                	alert(obj.msg);
		                }
		            }
		    });
	    });
	    $("#user-no").click(function(){
	    	$div1.show();
	    	$('.cd-popup').removeClass('is-visible');
	    	$.ajax({
		         type: "POST",
		         url: "action/loginsetting.class.php",
		         data: {uid:tuid,isallow:'Y'},
		         dataType: "json",
		         success: function(data){
		                var obj = eval(data);
		                if(obj.code=='1'){
		                	$div1.hide();
		                	window.location.href="auser.php";
		                }else {
		                	$div1.hide();
		                	alert(obj.msg);
		                }
		            }
		    });
	    });
	</script>
</html>