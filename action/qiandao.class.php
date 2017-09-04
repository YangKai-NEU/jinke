<?php
$mUserId = "";
if (isset($_POST['user_id'])) {
	$mUserId = $_POST['user_id'];
}
if ($mUserId != "") {
	require_once './db/conn.php';
	$conne -> init_conn();
	$select="select * from db_user where u_id='" . $mUserId . "'";
	$array=$conne->getRowsArray($select);
	$mDate = date("Y-m-d h:i:s");
	if(count($array)==0){
		$result = array('code' => '-1', 'msg' => '该用户不存在');
		echo json_encode($result);
	}else {
		$record_time=$array[0]['u_lastqiandaotime'];
		if(substr($record_time,0,10)==substr($mDate,0,10)){
			$result = array('code' => '-1', 'msg' => '今天已签到，请明日再来');
			echo json_encode($result);
		}else{
			$select = "update db_user set u_lastqiandaotime='" . $mDate . "',u_jifen=u_jifen+1 where u_id='" . $mUserId . "'";
			$array = $conne -> uidRst($select);
			$select="insert into db_jifen_record(jr_time,jr_uid,jr_event,jr_number) 
				values('".$mDate."','".$mUserId."','每日签到','1')";
			$conne->uidRst($select);
			$conne -> close_conn();
			if($array!=-1){
				$result = array('code' => '1', 'msg' => '签到成功', 'time' => $mDate);
				echo json_encode($result);
			}else {
				$result = array('code' => '-1', 'msg' => '签到失败');
				echo json_encode($result);
			}
		}
	}
} else {
	$result = array('code' => '-1', 'msg' => '参数错误');
	echo json_encode($result);
}
?>