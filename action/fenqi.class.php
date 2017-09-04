<?php
header("Content-type: text/html; charset=utf-8");
include_once "cache.php";
$mUser="";
if(isset($_POST['uid']) && $_POST['uid']!=null){
	$mUser=$_POST['uid'];
}
if($mUser==""){
	$result = array("Code" => "-1", "Msg" => "ID为空");
	echo json_encode($result);
}else {
	$cachedir = "./Cache/".$mUser."/";
	//设定缓存目录
	$cache = new Cache($cachedir, 10);
	if($cache -> load()==true)
		exit(0);
	require_once './db/conn.php';
	$conne -> init_conn();
	$select = "select o_id,o_price,g_name,g_imgurl,f_month,f_ratio,o_leave,count(*) from db_order,db_transaction,
		db_goods,db_fenqi where o_id=t_oid and g_id=t_gid and o_uid='".$mUser."' and o_fid=f_id and o_leave>0 and 
		o_isshow='Y' group by t_oid";
	$array = $conne -> getRowsArray($select);
	$result=array();
	for($i=0;$i<count($array);$i++){
		$result[$i]=array('id' => $array[$i]['o_id'],'name'=>$array[$i]['g_name'],
		'count'=>$array[$i]['count(*)'],
		'price' => $array[$i]['o_price'],'month' => $array[$i]['f_month'],
		'imgurl' => $array[$i]['g_imgurl'],'leave' => $array[$i]['o_leave'],
		'ratio' => $array[$i]['f_ratio']);
	}
	$conne -> close_conn();
	//页面代码开始
	echo json_encode($result);
	//页面代码结束
	$cache -> write(3, json_encode($result));
	//首次运行或缓存过期,生成缓存
	ob_end_flush();
}
?>