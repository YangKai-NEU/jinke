<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
include_once "cache.php";
$isSelf = "";
if (isset($_GET['isself']) && $_GET['isself'] != null) {
	$isSelf = $_GET['isself'];
}
if ($isSelf == "") {
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if ($cache -> load() == true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_goods order by g_sellnumber desc limit 6";
	$array = $conne -> getRowsArray($select);
	$result = array();
	for ($i = 0; $i < count($array); $i++) {
		$result[$i] = array('mId' => $array[$i]['g_id'], 'mCid' => $array[$i]['g_cid'], 'mSid' => $array[$i]['g_sid'], 'mName' => $array[$i]['g_name'], 'mImgUrl' => $array[$i]['g_imgurl'], 'mPrice' => $array[$i]['g_price'], 'mSellNumber' => $array[$i]['g_number'], 'mNumber' => $array[$i]['g_sellnumber'], );
	}
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
} else if ($isSelf == "Y") {
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if ($cache -> load() == true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_goods where g_isself='Y' order by g_sellnumber desc limit 6";
	$array = $conne -> getRowsArray($select);
	$result = array();
	for ($i = 0; $i < count($array); $i++) {
		$result[$i] = array('mId' => $array[$i]['g_id'], 'mCid' => $array[$i]['g_cid'], 'mSid' => $array[$i]['g_sid'], 'mName' => $array[$i]['g_name'], 'mImgUrl' => $array[$i]['g_imgurl'], 'mPrice' => $array[$i]['g_price'], 'mSellNumber' => $array[$i]['g_number'], 'mNumber' => $array[$i]['g_sellnumber'], );
	}
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
} else {
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if ($cache -> load() == true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_goods where g_isself='N' order by g_sellnumber desc limit 6";
	$array = $conne -> getRowsArray($select);
	$result = array();
	for ($i = 0; $i < count($array); $i++) {
		$result[$i] = array('mId' => $array[$i]['g_id'], 'mCid' => $array[$i]['g_cid'], 'mSid' => $array[$i]['g_sid'], 'mName' => $array[$i]['g_name'], 'mImgUrl' => $array[$i]['g_imgurl'], 'mPrice' => $array[$i]['g_price'], 'mSellNumber' => $array[$i]['g_number'], 'mNumber' => $array[$i]['g_sellnumber'], );
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