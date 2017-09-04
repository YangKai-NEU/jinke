<?php
header("Content-type: text/html; charset=utf-8");
$uid = "";	
if (isset($_POST['uid']) && $_POST['uid'] != null) {
	$uid = $_POST['uid'];
}
if($uid==""){
	$result = array("code" => "-1", "msg" => "参数错误");
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne -> init_conn();
	$select="update db_jifen_order set j_isshow='N' where j_uid='".$uid."'";
	$conne->uidRst($select);
	$conne->close_conn();
	$result = array("code" => "1", "msg" => "已清空");
	echo json_encode($result);
}

?>