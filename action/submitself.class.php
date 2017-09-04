<?php
header("Content-type: text/html; charset=utf-8");
$mInfo="";	
if (isset($_POST['info']) && $_POST['info'] != null) {
	$mInfo = $_POST['info'];
}
if($mInfo!=""){
	require_once './db/conn.php';
	$conne -> init_conn();
	$obj = json_decode($mInfo);
	$price=0;
	if(count($obj)==0){
		return;
	}
	if($obj->mIsStudent=="true"){
		$tmp='Y';
	}else $tmp='N';
	$select="update db_self set 
		s_name='".$obj->mName."',
		s_sex='".$obj->mSex."',
		s_idcard='".$obj->mIdCard."',
		s_address='".$obj->mAddress."',
		s_huji='".$obj->mHuji."',
		s_hunyin='".$obj->mHunyin."',
		s_workspace='".$obj->mWorkSpace."',
		s_workaddress='".$obj->mWorkAddress."',
		s_workphone='".$obj->mWorkPhone."',
		s_lianxiren1='".$obj->mLianxiren1."',
		s_lianxiren2='".$obj->mLianxiren2."',
		s_xuefei='".$obj->mXueFei."',
		s_yueshouru='".$obj->mYueshouru."',
		s_isstudent='".$tmp."'
	 where s_id='".$obj->mId."'";
	$conne->uidRst($select);
	$conne->close_conn();
	$result=array('code'=>'1',"msg"=>"提交成功");
	echo json_encode($result);
}else {
	$result=array('code'=>'-1',"msg"=>"参数错误");
	echo json_encode($result);
}


?>