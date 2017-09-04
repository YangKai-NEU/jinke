<?php
header("Content-type: text/html; charset=utf-8");
$uid="";
$aid="";
$order="";
if(isset($_POST['uid'])){
	$uid=$_POST['uid'];
}
if(isset($_POST['order'])){
	$order=$_POST['order'];
}
if(isset($_POST['aid'])){
	$aid=$_POST['aid'];
}
if($uid==""||$aid==""||$order==""){
	$result=array('code'=>'-1','msg'=>'参数错误');
	echo json_encode($result);
}else {
	require_once './db/conn.php';
	$conne -> init_conn();
	$obj = json_decode($order);
	if(count($obj)==0){
		return;
	}
	$time=date('y-m-d H:i:s',time());
	$select="insert into db_jifen_order(j_uid,j_address,j_submittime) values(
		'".$uid."','".$aid."','".$time."')";
	$conne->uidRst($select);
	$joid="";
	$conne->close_rst();
	$select="select max(j_id) from db_jifen_order where j_uid='".$uid."'";
	$array=$conne->getRowsArray($select);
	$joid=$array[0]['max(j_id)'];
	$price=0;
	for($i=0;$i<count($obj);$i++){
		$select="insert into db_jifen_transaction(j_joid,j_jgid,j_number) values(
			'".$joid."','".$obj[$i]->mId."','".$obj[$i]->mBuyNum."')";
		$conne->uidRst($select);
		$price+=($obj[$i]->mJifen*$obj[$i]->mBuyNum);
		$select="update db_jifen_goods set j_sellnumber=j_sellnumber+".$obj[$i]->mBuyNum.",j_number=j_number-".$obj[$i]->mBuyNum." where j_id='".$obj[$i]->mId."'";
		$conne->uidRst($select);
	}
	$select="update db_user set u_jifen=u_jifen-".$price." where u_id='".$uid."'";
	$conne->uidRst($select);
	$select="update db_jifen_order set j_price='".$price."' where j_id='".$joid."'";
	$conne->uidRst($select);
	$result=array('code'=>'1','msg'=>'提交成功');
	echo json_encode($result);
}

?>