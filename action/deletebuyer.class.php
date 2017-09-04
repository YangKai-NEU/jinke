<?php 
	header("Content-type: text/html; charset=utf-8");
	$bid="";
	$type="";
	if(isset($_POST["bid"])){
		$bid=$_POST["bid"];
	}
	if($bid==""){
		$result=array('code'=>'-1','msg'=>'参数错误');
		echo json_encode($result);
	}else{
		require_once './db/conn.php';
		$conne->init_conn();
		$select="delete from db_buyer where b_id='".$bid."'";
		$conne->uidRst($select);
		$result=array('code'=>'1','msg'=>'删除成功');
		echo json_encode($result);
	}
?>