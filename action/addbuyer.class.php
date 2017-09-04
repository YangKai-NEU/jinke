<?php
header("Content-type: text/html; charset=utf-8");
$uid = "";
$gid = "";
$number = "";
if (isset($_POST['uid']) && $_POST['uid'] != null) {
	$uid = $_POST['uid'];
}
if (isset($_POST['gid']) && $_POST['gid'] != null) {
	$gid = $_POST['gid'];
}
if (isset($_POST['number']) && $_POST['number'] != null) {
	$number = $_POST['number'];
}
if($uid==""||$gid==""||$number==""){
	$result = array("Code" => "-1", "Msg" => "参数错误");
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne -> init_conn();
	$select="insert into db_buyer(b_uid,b_gid,b_number) values ('".$uid."','".$gid."','".$number."')";
	$array=$conne->uidRst($select);
	if($array==-1){
		$result = array("Code" => "-1", "Msg" => "内部错误");
		echo json_encode($result);
	}else {
		$result = array("Code" => "1", "Msg" => "添加成功");
		echo json_encode($result);
	}
}
?>