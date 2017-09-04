<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
include_once "cache.php";
if (CACHEENABLE) {
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if ($cache -> load() == true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_fenqi";
	$array = $conne -> getRowsArray($select);
	$result = array();
	for ($i = 0; $i < count($array); $i++) {
		$result[$i] = array('id' => $array[$i]['f_id'], 'month' => $array[$i]['f_month'], 'ratio' => $array[$i]['f_ratio']);
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