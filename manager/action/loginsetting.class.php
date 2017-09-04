<?php
header("Content-type: text/html; charset=utf-8");
$uid="";
$isallow="";
if(isset($_POST["uid"])&&isset($_POST["isallow"])){
	$uid=$_POST["uid"];
	$isallow=$_POST["isallow"];
}
if($uid==""||$isallow==""){
	$result=array('code'=>'-1','参数错误');
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne->init_conn();
	$select="update db_user set u_active='".$isallow."' where u_id='".$uid."'";
	$array=$conne->uidRst($select);
	if($array==-1){
		$result=array('code'=>'-1','msg'=>'更新失败');
		echo json_encode($result);
	}else {
		$result=array('code'=>'1','msg'=>'更新成功');
		echo json_encode($result);
	}
	$conne->close_conn();	
}
?>