<?php
header("Content-type: text/html; charset=utf-8");
$uid = "";
if (isset($_POST['uid']) && $_POST['uid'] != null) {
	$uid = $_POST['uid'];
}
if($uid==""){
	$result = array("Code" => "-1", "Msg" => "参数错误");
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne -> init_conn();
	$select="select db_self.* from db_self,db_user where s_id=u_sid and u_id='".$uid."'";
	$array=$conne->getRowsArray($select);
	if($array==-1){
		$result = array("Code" => "-1", "Msg" => "内部错误");
		echo json_encode($result);
	}else {
		if(count($array)>0){
			$result=array('id'=>$array[0]['s_id'],'name'=>$array[0]['s_name'],'sex'=>$array[0]['s_sex'],
				'idcard'=>$array[0]['s_idcard'],'address'=>$array[0]['s_address'],'huji'=>$array[0]['s_huji'],
				'city'=>$array[0]['s_city'],'hunyin'=>$array[0]['s_hunyin'],'workspace'=>$array[0]['s_workspace'],
				'workaddress'=>$array[0]['s_workaddress'],'workphone'=>$array[0]['s_workphone'],
				'lianxiren1'=>$array[0]['s_lianxiren1'],'lianxiren2'=>$array[0]['s_lianxiren2'],
				'xuefei'=>$array[0]['s_xuefei'],'yueshouru'=>$array[0]['s_yueshouru'],
				'isstudent'=>$array[0]['s_isstudent']);
		}
		echo json_encode($result);
	}
	$conne->close_conn();
}
?>