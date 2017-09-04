<?php
header("Content-type: text/html; charset=utf-8");
$uid = "";
$initpwd="";
$newpwd="";
if(isset($_POST["uid"])){
	$uid=$_POST["uid"];
}
if(isset($_POST["oldpwd"])){
	$initpwd=$_POST["oldpwd"];
}
if(isset($_POST["newpwd"])){
	$newpwd=$_POST["newpwd"];
}
if($uid==""||$initpwd==""||$newpwd==""){
	$result=array('code'=>'-1','msg'=>'参数错误');
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne -> init_conn();
	$select="select * from db_user where u_id='".$uid."' and u_pwd='".$initpwd."'";
	$array=$conne->getRowsArray($select);
	if(count($array)==0){
		$result=array('code'=>'-1','msg'=>'原始密码输入错误');
		echo json_encode($result);
	}else{
		$select="update db_user set u_pwd='".$newpwd."' where u_id='".$uid."'";
		$conne->uidRst($select);
		$result=array('code'=>'1','msg'=>'密码修改成功');
		echo json_encode($result);
	}
}
?>