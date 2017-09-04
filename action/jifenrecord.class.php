<?php
header("Content-type: text/html; charset=utf-8");
define('CACHEENABLE', true);
include_once "cache.php";
$mUser="";
if(isset($_POST['uid']) && $_POST['uid']!=null){
	$mUser=$_POST['uid'];
}
if($mUser==""){
	$result = array("Code" => "-1", "Msg" => "ID为空");
	echo json_encode($result);
}else {
	if (CACHEENABLE) {
		$cachedir = "./Cache/".$mUser."/";
		//设定缓存目录
		$cache = new Cache($cachedir, 10);
		if($cache -> load()==true)
			exit(0);
		require_once './db/conn.php';
		$conne -> init_conn();
		$select = "select db_jifen_order.j_id,j_price,j_img,j_name,count(*) from db_jifen_goods,db_jifen_order,db_jifen_transaction where db_jifen_transaction.j_jgid=db_jifen_goods.j_id and 
			db_jifen_order.j_id=db_jifen_transaction.j_joid and j_isshow='Y' and j_uid='".$mUser."' group by j_joid";
		$array = $conne -> getRowsArray($select);
		$result=array();
		for($i=0;$i<count($array);$i++){
			$result[$i]=array('id' => $array[$i]['j_id'],'total'=>$array[$i]['j_price'],
			'imgurl'=>$array[$i]['j_img'],
			'name' => $array[$i]['j_name'],'count' => $array[$i]['count(*)']);
		}
		$conne -> close_conn();
		//页面代码开始
		echo json_encode($result);
		//页面代码结束
		$cache -> write(3, json_encode($result));
		//首次运行或缓存过期,生成缓存
		ob_end_flush();
	}
}
?>