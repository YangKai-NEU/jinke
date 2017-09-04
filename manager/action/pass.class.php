<?php
	header("Content-type: text/html; charset=utf-8");
	session_start();
	$oid="";
	$pass="";
	if(isset($_POST['oid'])){
		$oid=$_POST['oid'];
	}
	if(isset($_POST['pass'])){
		$pass=$_POST['pass'];
	}
	if($oid==""||$pass==""){
		$result=array('code'=>'-1','msg'=>'参数错误');
		echo json_encode($result);
	}else{
		require_once './db/conn.php';
		$conne->init_conn();
		$select="update db_order set o_pass='".$pass."' where o_id='".$oid."'";
		$array=$conne->uidRst($select);
		$conne->close_conn();
		if($array==-1){
			$result=array('code'=>'-1','msg'=>'更新失败');
			echo json_encode($result);
		}else{
			$result=array('code'=>'1','msg'=>'更新成功');
			echo json_encode($result);
		}
	}
?>