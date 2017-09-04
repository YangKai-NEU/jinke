<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
include_once "cache.php";
$mCategory = "";
$p="";
if (isset($_GET['category']) && $_GET['category'] != null) {
	$mCategory = $_GET['category'];
}
$isSelf="";
if(isset($_GET['isself']) && $_GET['isself'] != null){
    $isSelf=$_GET['isself'];
}
if(isset($_GET['p']) && $_GET['p'] != null){
	$p=$_GET['p'];
}
if ($mCategory == ""||$p=="") {
	$result = array("Code" => "-1", "Msg" => "参数错误");
	echo json_encode($result);
} else if($isSelf==""){
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if ($cache -> load() == true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_goods where g_cid='".$mCategory."' order by g_sellnumber desc limit ".(8+$p);
	$array = $conne -> getRowsArray($select);
	$result = array();
	for ($i = $p; $i < count($array); $i++) {
		$result[$i-$p] = array('mId' => $array[$i]['g_id'], 'mCid' => $array[$i]['g_cid'], 'mSid' => $array[$i]['g_sid'], 'mName' => $array[$i]['g_name'], 'mImgUrl' => $array[$i]['g_imgurl'], 'mPrice' => $array[$i]['g_price'], 'mSellNumber' => $array[$i]['g_number'], 'mNumber' => $array[$i]['g_sellnumber'], );
	}
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}else if($isSelf=="Y"){
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if ($cache -> load() == true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_goods where g_cid='".$mCategory."' and g_isself='Y' order by g_sellnumber desc limit ".(8+$p);
	$array = $conne -> getRowsArray($select);
	$result = array();
	for ($i = $p; $i < count($array); $i++) {
		$result[$i-$p] = array('mId' => $array[$i]['g_id'], 'mCid' => $array[$i]['g_cid'], 'mSid' => $array[$i]['g_sid'], 'mName' => $array[$i]['g_name'], 'mImgUrl' => $array[$i]['g_imgurl'], 'mPrice' => $array[$i]['g_price'], 'mSellNumber' => $array[$i]['g_number'], 'mNumber' => $array[$i]['g_sellnumber'], );
	}
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}
else if($isSelf=="N"){
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if ($cache -> load() == true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_goods where g_cid='".$mCategory."' and g_isself='N' order by g_sellnumber desc limit ".(8+$p);
	$array = $conne -> getRowsArray($select);
	$result = array();
	for ($i = $p; $i < count($array); $i++) {
		$result[$i-$p] = array('mId' => $array[$i]['g_id'], 'mCid' => $array[$i]['g_cid'], 'mSid' => $array[$i]['g_sid'], 'mName' => $array[$i]['g_name'], 'mImgUrl' => $array[$i]['g_imgurl'], 'mPrice' => $array[$i]['g_price'], 'mSellNumber' => $array[$i]['g_number'], 'mNumber' => $array[$i]['g_sellnumber'], );
	}
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}
?>