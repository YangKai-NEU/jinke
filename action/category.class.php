<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
include_once "cache.php";
$mType="";
if(isset($_GET['type']) && $_GET['type']!=null){
	$mType=$_GET['type'];
}
if($mType==""){
	$result = array("Code" => "-1", "Msg" => "参数错误");
	echo json_encode($result);
}else {
	if (CACHEENABLE) {
		$cachedir = './Cache/';
		//设定缓存目录
		$cache = new Cache($cachedir, 10);
		if($cache -> load()==true)
			exit(0);
		require_once './db/conn.php';
		$conne -> init_conn();
		$select = "select * from db_category where c_tid='".$mType."'";
		$array = $conne -> getRowsArray($select);
		$result=array();
		for($i=0;$i<count($array);$i++){
			$result[$i]= array('id' => $array[$i]['c_id'],'tid' => $array[$i]['c_tid'], 'name' => $array[$i]['c_name']);
		}
		$conne -> close_conn();
		//页面代码开始
		echo json_encode($result);
		//页面代码结束
		$cache -> write(3, json_encode($result));
		//首次运行或缓存过期,生成缓存
		ob_end_flush();
	}
}
?>