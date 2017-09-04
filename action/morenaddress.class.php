<?php
header("Content-type: text/html; charset=utf-8");

$uid="";
if(isset($_POST['uid'])){
	$uid=$_POST['uid'];
}
if($uid==""){
	$result=array('code'=>'-1','msg'=>'参数错误');
	echo json_encode($result);
}else {
	include_once "cache.php";
	$cachedir = './Cache/';
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if($cache -> load()==true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_address where a_uid='".$uid."' order by a_time desc limit 1";
	$array = $conne -> getRowsArray($select);
	if(count($array)==0){
		$result=array('code'=>'-1');
	}else {
		$result=array('code'=>'1','id' => $array[0]['a_id'],'name' => $array[0]['a_name'],
	'address' => $array[0]['a_address'],'phone'=>$array[0]['a_phone']);
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