<?php
header("Content-type: text/html; charset=utf-8");
$uid = "";	
$name="";
$strange_address="";
$phone="";
$postcode="";
$time=date('y-m-d h:i:s',time());
if (isset($_POST['uid']) && $_POST['uid'] != null) {
	$uid = $_POST['uid'];
}
if (isset($_POST['name']) && $_POST['name'] != null) {
	$name = $_POST['name'];
}
if (isset($_POST['address']) && $_POST['address'] != null) {
	$strange_address = $_POST['address'];
}
if (isset($_POST['phone']) && $_POST['phone'] != null) {
	$phone = $_POST['phone'];
}
if (isset($_POST['postcode']) && $_POST['postcode'] != null) {
	$postcode = $_POST['postcode'];
}
if($uid==""||$name==""||$address=""||$phone==""){
	$result=array('code'=>'-1','msg'=>'参数错误');
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne -> init_conn();
	$select="insert into db_address(a_uid,a_name,a_address,a_phone,a_time,a_postcode) values(
		'".$uid."','".$name."','".$strange_address."','".$phone."','".$time."','".$postcode."')";
	$conne->uidRst($select);
	$conne->close_rst();
	$select="select * from db_address where a_uid='".$uid."' order by a_time desc limit 1";
	$array=$conne->getRowsArray($select);
	$result=array('code'=>'1','msg'=>'添加成功','aid'=>$array[0]['a_id']);
	echo json_encode($result);
	$conne->close_conn();
}

?>