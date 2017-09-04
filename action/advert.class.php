<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
$isSelf="";
if(isset($_GET['isself']) && $_GET['isself'] != null){
	$isSelf=$_GET['isself'];
}
if($isSelf==""){
	include_once "cache.php";
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if($cache -> load()==true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_advert order by a_id limit 3";
	$array = $conne -> getRowsArray($select);
	$result= array('advert1' => $array[0]['a_imgurl'], 'advert2' => $array[1]['a_imgurl'], 'advert3' => $array[2]['a_imgurl']);
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}else if($isSelf=="Y"){
	include_once "cache.php";
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if($cache -> load()==true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_advert order by a_id limit 3";
	$array = $conne -> getRowsArray($select);
	$result= array('advert1' => $array[0]['a_imgurl'], 'advert2' => $array[1]['a_imgurl'], 'advert3' => $array[2]['a_imgurl']);
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}else if($isSelf=="N"){
	include_once "cache.php";
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if($cache -> load()==true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_advert order by a_id limit 3";
	$array = $conne -> getRowsArray($select);
	$result= array('advert1' => $array[0]['a_imgurl'], 'advert2' => $array[1]['a_imgurl'], 'advert3' => $array[2]['a_imgurl']);
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}
?>