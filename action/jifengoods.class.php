<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
include_once "cache.php";

$cachedir = './Cache/';
//设定缓存目录
$cache = new Cache($cachedir, 10);
if($cache -> load()==true)
	exit(0);
require_once './db/conn.php';
$conne -> init_conn();
$select = "select * from db_jifen_goods order by j_sellnumber desc limit 9";
$array = $conne -> getRowsArray($select);
$result = array();
for ($i = 0; $i < count($array); $i++) {
	$result[$i] = array('mId' => $array[$i]['j_id'], 'mName' => $array[$i]['j_name'], 
	'mJifenNum' => $array[$i]['j_jifennum'], 'mIntroduction' => $array[$i]['j_introduction'], 
	'mImgUrl' => $array[$i]['j_img'], 'mSellNumber' => $array[$i]['j_sellnumber'], 
	'mNumber' => $array[$i]['j_number'], );
}
$conne -> close_conn();
//页面代码开始
echo json_encode($result);
//页面代码结束
$cache -> write(3, json_encode($result));
//首次运行或缓存过期,生成缓存
ob_end_flush();

?>