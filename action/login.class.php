<?php
header("Content-type: text/html; charset=utf-8");
require_once '../classes/user.php';
session_start();
$inputUserName = "";
$inputPwd = "";
if (isset($_POST['username'])) {
	$inputUserName = $_POST['username'];
}
if (isset($_POST['password'])) {
	$inputPwd = $_POST['password'];
}
if ($inputUserName != "" && $inputPwd != "") {
	//type=1:个人分期；type=2:企业分期。
	require_once "./db/conn.php";
	$conne -> init_conn();
	$select = "select * from db_user where (u_username='" . $inputUserName . "' or u_phone='" . $inputUserName . "') and u_pwd='" . $inputPwd . "'";
	$array = $conne -> getRowsArray($select);
	if (count($array) == 0) {
		$result = array("Code" => "-1", "Msg" => "账号或密码错误");
		echo json_encode($result);
	} else {
		$_SESSION['C_USER']=new User($array[0]["u_id"],$array[0]["u_phone"],$array[0]["u_username"],
			$array[0]["u_pwd"],$array[0]["u_imgurl"],$array[0]["u_isself"],$array[0]["u_jifen"],
			$array[0]["u_lastqiandaotime"],$array[0]["u_email"],$array[0]["u_active"]);
		$result = array("Code" => "1", "Msg" => "登录成功", 'mJifen'=>$array[0]["u_jifen"],"mId" => $array[0]["u_id"], "mPhone" => $array[0]["u_phone"], "mPwd" => $array[0]["u_pwd"], "mUserName" => $array[0]["u_username"], "mIsSelf" => $array[0]["u_isself"], 'mLastQiandaoTime' => $array[0]["u_lastqiandaotime"]);
		echo json_encode($result);
	}
	$conne -> close_conn();
}else {
	$result = array("Code" => "-1", "Msg" => "参数错误");
		echo json_encode($result);
}
?>