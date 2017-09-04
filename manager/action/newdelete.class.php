<?php
	header("Content-type: text/html; charset=utf-8");
	session_start();
	$nid="";
	if(isset($_POST['nid'])){
		$nid=$_POST['nid'];
	}
	if($id=""){
		$result=array('code'=>'-1','msg'=>'参数错误');
		echo json_encode($result);
	}else{
		require_once './db/conn.php';
		$conne->init_conn();
		$select="delete from db_news where n_id='".$nid."'";
		$array=$conne->uidRst($select);
		if($array!=-1){
			$result=array('code'=>'1','msg'=>'删除成功');
			echo json_encode($result);
		}else {
			$result=array('code'=>'1','msg'=>'删除失败');
			echo json_encode($result);
		}
	}
?>