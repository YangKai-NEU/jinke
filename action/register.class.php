<?php
header("Content-type: text/html; charset=utf-8");
$inputPhone = "";
$inputUserName = "";
$inputPwd = "";
$inviter = "";
$isSelf = "";
if (isset($_POST['phone']) && $_POST['phone'] != null) {
	$inputPhone = $_POST['phone'];
}
if (isset($_POST['username']) && $_POST['username'] != null) {
	$inputUserName = $_POST['username'];
}
if (isset($_POST['password']) && $_POST['password'] != null) {
	$inputPwd = $_POST['password'];
}
if (isset($_POST['inviter']) && $_POST['inviter'] != null) {
	$inviter = $_POST['inviter'];
}
if (isset($_GET['isself']) && $_GET['isself'] != null) {
	$isSelf = $_GET['isself'];
}
if ($inputPhone == "" || $inputUserName == "" || $inputPwd == "" || $isSelf == "") {
	$result = array("Code" => "-1", "Msg" => "参数错误");
	echo json_encode($result);
}
require_once './db/conn.php';
$conne -> init_conn();
$select = "select count(*) from db_user where u_username='" . $inputUserName . "'";
$tmp = $conne -> getRowsArray($select);
if ($tmp[0]['count(*)'] == 0) {
	$conne -> close_rst();
	$select = "insert into db_user(u_phone,u_username,u_pwd,u_isself) values('" . $inputPhone . "','" . $inputUserName . "','" . $inputPwd . "','" . $isSelf . "')";
	$conne -> uidRst($select);
	$conne -> close_rst();
	$select = "select * from db_user where u_username='" . $inputUserName . "'";
	$ttt = $conne -> getRowsArray($select);
	$tmpid = $ttt[0]['u_id'];
	$conne -> close_rst();
	if ($isSelf == "Y") {
		$select = "insert into db_self(s_id) values('" . $tmpid . "')";
	} else {
		$select = "insert into db_qiye(q_id) values('" . $tmpid . "')";
	}
	$conne -> uidRst($select);
	$conne -> close_rst();
	$select = "update db_user set u_jifen=u_jifen+5 where u_phone='" . $inviter . "' or u_username='" . $inviter . "'";
	$conne -> uidRst($select);
	$result = array('Code' => "1", 'Msg' => "注册成功");
	echo json_encode($result);
} else {
	$result = array('Code' => "-1", 'Msg' => "该用户名已存在");
	echo json_encode($result);
}
?>