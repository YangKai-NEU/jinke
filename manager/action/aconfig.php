<?php
	header("Content-type: text/html; charset=utf-8");
	session_start();	
	require_once '../../config/config.php';
	$confige->initConfig("../../config/config.json");
	if(isset($_POST['homepage_title'])){
		 $confige->addNewItem("homepage_title",$_POST['homepage_title']);
	}
	if(isset($_POST['account_title'])){
		 $confige->addNewItem("account_title",$_POST['account_title']);
	}
	$confige->writeToFile("../../config/config.json");
	echo "<script language='javascript' type='text/javascript'>";
	echo "alert('提交成功');";
	echo "window.location.href='../abasic.php';";
	echo "</script>";
?>