<?php 
	header("Content-type: text/html; charset=utf-8");
	$data="";
	if(isset($_POST["data"])){
		$data=$_POST["data"];
	}
	if($data==""){
		$result=array('code'=>'-1','msg'=>'参数错误');
		echo json_encode($result);
	}else{
		require_once './db/conn.php';
		$conne->init_conn();
		$obj=json_decode($data);
		for($i=0;$i<count($obj);$i++){
			$select="delete from db_buyer where b_id='".$obj[$i]."'";
			$conne->uidRst($select);
		}
		$result=array('code'=>'1','msg'=>'删除成功');
		echo json_encode($result);
	}
?>