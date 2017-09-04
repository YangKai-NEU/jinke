<?php
	session_start();
	//生成一个矩形100*30
	$image=imagecreatetruecolor(100, 30);
	//生成颜色
	$bgcolor=imagecolorallocate($image, 255, 255, 255);
	//填充颜色
	imagefill($image, 0, 0, $bgcolor);
	$captch_code="";
	for($i=0;$i<4;$i++){
		$fontsize=rand(2,20);
		$fontcolor=imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120));
		$data="abcdefghigkmnopqrstuvwxyz13456789QWERTYUIOPASDFGHJKLZXCVBNM";
		$fontcontent=substr($data, rand(0, strlen($data)),1);
		$captch_code.=$fontcontent;
		$x=7+(2*$i+1)*10;
		$y=rand(5,10);
		//放置随机数
		imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
	}
	//添加干扰点
	for($i=0;$i<200;$i++){
		$pointcolor=imagecolorallocate($image, rand(50,200), rand(50,200), rand(50,200));
		imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
	}
	//添加干扰线
	for($i=0;$i<3;$i++){
		$linecolor=imagecolorallocate($image, rand(50,200), rand(50,200), rand(50,200));
		imageline($image, rand(1,99), rand(1,29),rand(1,99), rand(1,29),$linecolor);
	}
	//指明文档输出的类型
	header('content-type:image/png');
	imagepng($image);
	//销毁图像
	imagedestroy($image);
	$_SESSION['CAPTCH_CODE']=$captch_code;
?>