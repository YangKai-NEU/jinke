<?php 
	header("Content-type: text/html; charset=utf-8");
	$bid="";
	$type="";
	if(isset($_POST["bid"])){
		$bid=$_POST["bid"];
	}	
	if(isset($_POST["type"])){
		$type=$_POST["type"];
	}	
	if($bid==""){
		$result=array('code'=>'-1','msg'=>'参数错误');
		echo json_encode($result);
	}else{
		require_once './db/conn.php';
		$conne->init_conn();
		if($type=='1'){
			$select="update db_buyer set b_number=b_number+1 where b_id='".$bid."'";
		}else{
			$select="update db_buyer set b_number=b_number-1 where b_id='".$bid."' and b_number>=2";
		}
		$conne->uidRst($select);
		$result=array('code'=>'1','msg'=>'更新成功');
		echo json_encode($result);
	}
?>