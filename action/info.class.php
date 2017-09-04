<?php
header("Content-type: text/html; charset=utf-8");
$uid = "";
$type = "";
if (isset($_POST['uid'])) {
	$uid = $_POST['uid'];
}
if (isset($_POST['type'])) {
	$type = $_POST['type'];
} 
if ($uid == "" && $type == "") {
	$result = array("Code" => "-1", "Msg" => "参数错误");
	echo json_encode($result);
} else {
	//type=1:个人分期；type=2:企业分期。
	if ($type == "1") {
		require_once "./db/conn.php";
		$conne -> init_conn();
		$select = "select * from db_user,db_self where u_id='".$uid."' and u_id=s_id";
		$array = $conne -> getRowsArray($select);
		if (count($array) == 0) {
			$result = array("Code" => "-1", "Msg" => "参数错误");
			echo json_encode($result);
		} else {
			$result = array("Code" => "1", "Msg" => "登录成功", 
				"id" => $array[0]["s_id"],
				"name" => $array[0]["s_name"], 
				"sex" => $array[0]["s_sex"], 
				"idcard" => $array[0]["s_idcard"], 
				"address" => $array[0]["s_address"],
				"huji" => $array[0]["s_huji"], 
				"city" => $array[0]["s_city"], 
				"hunyin" => $array[0]["s_hunyin"], 
				"workspace" => $array[0]["s_workspace"], 
				"workaddress" => $array[0]["s_workaddress"], 
				"workphone" => $array[0]["s_workphone"], 
				"lianxiren1" => $array[0]["s_lianxiren1"],
				"lianxiren2" => $array[0]["s_lianxiren2"],
				"xuefei" => $array[0]["s_xuefei"],
				"yueshouru" => $array[0]["s_yueshouru"],
				"isstudent" => $array[0]["s_isstudent"]);
			echo json_encode($result);
		}
	} else {
		require_once "./db/conn.php";
		$conne -> init_conn();
		$select = "select * from db_user,db_qiye where u_id='".$uid."' and u_id=q_id";
		$array = $conne -> getRowsArray($select);
		if (count($array) == 0) {
			$result = array("Code" => "-1", "Msg" => "参数错误");
			echo json_encode($result);
		} else {
			$result = array("Code" => "1", "Msg" => "登录成功", 
				"mId" => $array[0]["q_id"], 
				"mName" => $array[0]["q_name"], 
				"mSex" => $array[0]["q_sex"], 
				"mBirth" => $array[0]["q_birth"], 
				"mIdCard" => $array[0]["q_idcard"], 
				"mAddress" => $array[0]["q_address"], 
				"mHuji" => $array[0]["q_huji"], 
				"mPhone" => $array[0]["q_phone"], 
				"mWorkSpace" => $array[0]["q_workspace"], 
				"mWorkAddress" => $array[0]["q_workaddress"], 
				"mWorkPhone" => $array[0]["q_workphone"], 
				"mLianxiren1" => $array[0]["q_lianxiren1"], 
				"mLianxiren2" => $array[0]["q_lianxiren2"]);
			echo json_encode($result);
		}
	}
}
$conne -> close_conn();
?>