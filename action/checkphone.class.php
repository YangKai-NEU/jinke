<?php
header("Content-type: text/html; charset=utf-8");
//$isSelf="";
$inputPhone="";
if(isset($_GET['phone']) && $_GET['phone'] != null){
	$inputPhone=$_GET['phone'];
}
//if(isset($_GET['isself']) && $_GET['isself'] != null){
//	$isSelf=$_GET['isself'];
//}
if($inputPhone==""){
	$result = array("Code" => "-1", "Msg" => "参数错误");
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select * from db_user where u_phone='" . $inputPhone . "'";
	$tmp = $conne -> getRowsArray($select);
	if (count($tmp)==0) {
		$result = array('Code' => "1", 'Msg' => "该手机号可以注册");
		echo json_encode($result);
	} else {
		$result = array('Code' => "-1", 'Msg' => "该手机号已经注册");
		echo json_encode($result);
	}
}
?>