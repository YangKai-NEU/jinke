<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
include_once "cache.php";
$mId="";
if (isset($_GET['goods']) && $_GET['goods'] != null) {
	$mId = $_GET['goods'];
}
if($mId==""){
	$result = array("Code" => "-1", "Msg" => "ID为空");
	echo json_encode($result);
}else if (CACHEENABLE) {
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if($cache -> load()==true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_goods where g_id='".$mId."'";
	$array = $conne -> getRowsArray($select);
	$result = array('mId' => $array[0]['g_id'], 'mName' => $array[0]['g_name'], 'mImgUrl' => $array[0]['g_imgurl'], 
		'mPrice' => $array[0]['g_price'], 'mNumber' => $array[0]['g_number'], 'mSellNumber' => $array[0]['g_sellnumber'], 
		'mAdvert1' => $array[0]['g_advert1'],'mAdvert2' => $array[0]['g_advert2'],'mAdvert3' => $array[0]['g_advert3']);
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}
?>