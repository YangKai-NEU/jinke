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
	$select="select b_id,b_gid,g_imgurl,g_name,g_price,b_number from db_buyer,db_goods where db_buyer.b_gid=db_goods.g_id 
		and b_uid='".$uid."'";
	$array=$conne->getRowsArray($select);
	if($array==-1){
		$result = array("Code" => "-1", "Msg" => "内部错误");
		echo json_encode($result);
	}else {
		$result = array();
		for($i=0;$i<count($array);$i++){
			$result[$i]=array("id"=>$array[$i]["b_id"],"gid"=>$array[$i]["b_gid"],"name"=>$array[$i]["g_name"],"imgurl"=>$array[$i]["g_imgurl"],
			"price"=>$array[$i]["g_price"],"number"=>$array[$i]["b_number"]);
		}
		echo json_encode($result);
	}
	$conne->close_conn();
}
?>