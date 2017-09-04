<?php
header("Content-type: text/html; charset=utf-8");
$mInfo = "";
if (isset($_POST['info']) && $_POST['info'] != null) {
	$mInfo = $_POST['info'];
}
if ($mInfo != "") {
	require_once './db/conn.php';
	$conne -> init_conn();
	$obj = json_decode($mInfo);
	$price = 0;
	if (count($obj) == 0) {
		return;
	}
	$select = "update db_qiye set 
		q_name='" . $obj -> mName . "',
		q_sex='" . $obj -> mSex . "',
		q_address='" . $obj -> mAddress . "',
		q_huji='" . $obj -> mHuji . "',
		q_idcard='" . $obj -> mIdCard . "',
		q_phone='" . $obj -> mPhone . "',
		q_birth='" . $obj -> mBirth . "',
		q_lianxiren1='" . $obj -> mLianxiren1 . "',
		q_lianxiren2='" . $obj -> mLianxiren2 . "',
		q_workspace='" . $obj -> mWorkSpace . "',
		q_workaddress='" . $obj -> mWorkAddress . "',
		q_workphone='" . $obj -> mWorkPhone . "'
	 where q_id='" . $obj -> mId . "'";
	$conne -> uidRst($select);
	$conne -> close_conn();
	$result = array('code' => '1', "msg" => "提交成功");
	echo json_encode($result);
} else {
	$result = array('code' => '-1', "msg" => "参数错误");
	echo json_encode($result);
}
?>