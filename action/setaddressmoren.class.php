<?php
header("Content-type: text/html; charset=utf-8");
$aid = "";
if(isset($_POST["aid"])){
	$aid=$_POST["aid"];
}
if($aid==""){
	$result=array('code'=>'-1','msg'=>'参数错误');
	echo json_encode($result);
}else{
	require_once './db/conn.php';
	$conne -> init_conn();
	$time=date('y-m-d H:i:s',time());
	$select="update db_address set a_time='".$time."' where a_id='".$aid."'";
	$conne->uidRst($select);
	$conne->close_conn();
	$result=array('code'=>'1','msg'=>'设置成功');
	echo json_encode($result);
}
?>