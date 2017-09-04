<?php
	session_start();
	if(isset($_SESSION['C_USER'])&&$_SESSION['C_USER']!=NULL){
		$_SESSION['C_USER']=NULL;
	}
	$result=array('code'=>'1','msg'=>'注销成功');
	echo json_encode($result);
?>