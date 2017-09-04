<?php
	session_start();
	if(isset($_SESSION['C_USER'])&&$_SESSION['C_USER']!=NULL){
		echo "<script type='text/javascript'>
			window.location.href='./index.php';
		</script>";
	}
	require_once './config/config.php';
	$confige->initConfig("./config/config.json");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="./css/style.css">
		<title><?php echo $confige->getItem('homepage_title');?>-用户登录</title>
	</head>
	<body>
		<?php include "./top.html";?>
		<div class="log_bg">
			<div class="top">
				<div class="logo cur-hand" style="text-align: center;font-size: 35px;color: red;">
					<?php echo $confige->getItem('homepage_title');?>
				</div>
			</div>
			<div class="login">
				<div class="log_img">
					<img src="./images/l_img.png" width="611" height="425">
				</div>
				<div class="log_c">
					<form>
						<table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
							<tbody>
								<tr height="50" valign="top">
									<td width="55">
										&nbsp;
									</td>
									<td>
										<span class="fl" style="font-size:24px;">登录</span>
										<span class="fr">还没有分呗账号，
											<a href="./register.php" style="color:#ff4e00;">
												去注册
											</a></span>
									</td>
								</tr>
								<tr height="70">
									<td>
										用户名
									</td>
									<td>
										<input id="input-username" type="text" value="" class="l_user" placeholder="用户名/手机号">
									</td>
								</tr>
								<tr height="70">
									<td>
										密&nbsp; &nbsp; 码
									</td>
									<td>
										<input id="input-password" type="password" value="" class="l_pwd" placeholder="密码">
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td style="font-size:12px; padding-top:20px;">
										<span style="font-family:&#39;宋体&#39;;" class="fl">
											<label class="r_rad"><input id="save-check" type="checkbox"></label>
											<label class="r_txt">请保存我这次的登录信息</label>
										</span>
										<span class="fr">
											<a href="javascript:void(0)" style="color:#ff4e00;">
												忘记密码
											</a></span>
									</td>
								</tr>
								<tr height="60">
									<td>
										&nbsp;
									</td>
									<td>
										<input id="login-btn" type="button" value="登录" class="log_btn">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
		<?php include "./bottom.html"; ?>
	</body>
	<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="application/javascript">
		$(document).ready(function(){
			if(window.localStorage){
				if(window.localStorage["username"]!=""){
					$("#input-username").val(window.localStorage["username"]);
				}
				if(window.localStorage["issave"]=='true'){
					$('#save-check').attr('checked','true');
				}
			}
		});
		$(".logo").click(function(){
			window.location.href="index.php";
		});
		$('#register-or-exit').click(function(){
			window.location.href="register.php";
		})
		$("#login-btn").click(function(){
			var user_name=$("#input-username").val();
			var pass_word=$("#input-password").val();
			if(user_name==""||pass_word=="") {
				return false;
			} else {
				$.ajax({
					type: "POST",
					url: "./action/login.class.php",
					data: {
						username: user_name,
						password: pass_word
					},
					dataType: "json",
					success: function(data) {
						var obj = eval(data);
						if (obj.Code == '1') {
							if(window.localStorage){
								if($('#save-check').is(':checked')) {
									window.localStorage["username"] = user_name; 
					        		window.localStorage["issave"]='true';
								}else{
									window.localStorage["username"] = ""; 
					        		window.localStorage["issave"]='false';
								}
							}
							window.location.href = "./index.php";
						} else {
							alert(obj.Msg);
						}
					}
				});
			}
		});
	</script>
</html>