<?php
header("Content-type: text/html; charset=utf-8");
$username="";
$pwd="";
if(isset($_POST["username"])&&isset($_POST["password"])){
	$username=$_POST["username"];
	$pwd=$_POST["password"];
}
if($username==""||$pwd==""){
	$result=array('code'=>'-1','参数错误');
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne->init_conn();
	$select="select * from db_manager where m_username='".$username."' and m_password='".$pwd."'";
	$array=$conne->getRowsArray($select);
	if(count($array)==0){
		$result=array('code'=>'-1','msg'=>'用户名或密码错误');
		echo json_encode($result);
	}else {
		$result=array('code'=>'1','msg'=>'登录成功','mId'=>$array[0]['m_id'],'mUsername'=>$array[0]['m_username'],
			'mLastLoginTime'=>$array[0]['m_lastlogintime'],'mIsAdmin'=>$array[0]['m_isadmin']);
		echo json_encode($result);
	}
	$conne->close_conn();	
}
?>