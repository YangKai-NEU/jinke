<?php
	session_start();
	if(isset($_SESSION['C_USER'])&&$_SESSION['C_USER']!=NULL){
		echo "<script type='text/javascript'>
			window.location.href='index.php';
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
		<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
		<script type="text/javascript" src="./js/jquery.bxslider_e88acd1b.js"></script>
		<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script>
		<title><?php echo $confige->getItem('homepage_title');?>-用户注册</title>
	</head>
	<body>
		<?php include "./top.html";?>
		<!--Begin Login Begin-->
		<div class="log_bg">
			<div class="top">
				<div class="logo cur-hand" style="text-align: center;font-size: 35px;color: red;">
					<?php echo $confige->getItem('homepage_title');?>
				</div>
			</div>
			<div class="regist">
				<div class="log_img">
					<img src="./images/l_img.png" width="611" height="425">
				</div>
				<div class="reg_c">
					<form>
						<table border="0" style="width:420px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
							<tbody>
								<tr height="50" valign="top">
									<td width="95">
										&nbsp;
									</td>
									<td>
										<span class="fl" style="font-size:24px;">注册</span>
										<span class="fr">已有分呗账号，
											<a href="./login.php" style="color:#ff4e00;">
												我要登录
											</a></span>
									</td>
								</tr>
								<tr height="50">
									<td align="right">
										<font color="#ff4e00">*</font>&nbsp;用户名 &nbsp;
									</td>
									<td>
										<input type="text" value="" class="l_user">
									</td>
								</tr>
								<tr height="50">
									<td align="right">
										<font color="#ff4e00">*</font>&nbsp;密码 &nbsp;
									</td>
									<td>
										<input type="password" value="" class="l_pwd">
									</td>
								</tr>
								<tr height="50">
									<td align="right">
										<font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;
									</td>
									<td>
										<input type="password" value="" class="l_pwd">
									</td>
								</tr>
								<tr height="50">
									<td align="right">
										<font color="#ff4e00">*</font>&nbsp;邮箱 &nbsp;
									</td>
									<td>
										<input type="text" value="" class="l_email">
									</td>
								</tr>
								<tr height="50">
									<td align="right">
										<font color="#ff4e00">*</font>&nbsp;手机 &nbsp;
									</td>
									<td>
										<input type="text" value="" class="l_tel">
									</td>
								</tr>
								<tr height="50">
									<td align="right">
										邀请人会员名 &nbsp;
									</td>
									<td>
										<input type="text" value="" class="l_mem">
									</td>
								</tr>
								<tr height="50">
									<td align="right">
										邀请人ID号 &nbsp;
									</td>
									<td>
										<input type="text" value="" class="l_num">
									</td>
								</tr>
								<tr height="50">
									<td align="right" valign="middle">
										<font color="#ff4e00">*</font>&nbsp;验证码 &nbsp;
									</td>
									<td valign="middle">
										<img id="captcha_img" onclick="this.src='./captcha.php?r='+Math.random()" src="./captcha.php?r=<?php echo rand();?>">
										<input type="text" value="" class="l_ipt">
										<a id="l_another" href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">换一个?</a>
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td style="font-size:12px; padding-top:20px;">
										<span style="font-family:&#39;宋体&#39;;" class="fl">
											<label class="r_rad"><input type="checkbox"></label>
											<label class="r_txt">我已阅读并接受《用户协议》</label>
										</span>
									</td>
								</tr>
								<tr height="60">
									<td>
										&nbsp;
									</td>
									<td>
										<input type="submit" value="立即注册" class="log_btn">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
		<!--End Login End-->
		<!--Begin Footer Begin-->
		<?php include "./bottom.html"; ?>
	</body>
	<script type="text/javascript" src="./js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="application/javascript">
		$(".logo").click(function(){
			window.location.href="index.php";
		});
		$('#register-or-exit').click(function(){
			window.location.href="register.php";
		})
		
	</script>
</html>