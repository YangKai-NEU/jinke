<?php
header("Content-type: text/html; charset=utf-8");
$mUid="";
$mInfo="";	
$mFenQiId="";
$aid="";
$bank="";
if (isset($_POST['uid']) && $_POST['uid'] != null) {
	$mUid = $_POST['uid'];
}
if (isset($_POST['fenqiid']) && $_POST['fenqiid'] != null) {
	$mFenQiId = $_POST['fenqiid'];
}
if (isset($_POST['info']) && $_POST['info'] != null) {
	$mInfo = $_POST['info'];
}
if (isset($_POST['aid']) && $_POST['aid'] != null) {
	$aid = $_POST['aid'];
}
if (isset($_POST['bank']) && $_POST['bank'] != null) {
	$bank = $_POST['bank'];
}
if($mUid!=""&&$mInfo!=""){
	require_once './db/conn.php';
	$conne -> init_conn();
	$obj = json_decode($mInfo);
	$price=0;
	if(count($obj)==0){
		return;
	}
	for($i=0;$i<count($obj);$i++){
		$price+=$obj[$i]->mPrice*$obj[$i]->mGoodsNum;	
	}
	$time=date('y-m-d H:i:s',time());
	$select="insert into db_order(o_uid,o_fid,o_time,o_price,o_address,o_bank) values('".$mUid."','".$mFenQiId."','".$time."','".$price."','".$aid."','".$bank."')";
	$conne->uidRst($select);
	$select="update db_order set o_leave=(select f_month from db_fenqi where f_id=o_fid) where o_uid='".$mUid."'";
	$conne->uidRst($select);
	$conne->close_rst();
	$select="select max(o_id) from db_order where o_uid='".$mUid."'";
	$array=$conne->getRowsArray($select);
	$mOid=$array[0]['max(o_id)'];
	$conne->close_rst();
	for($i=0;$i<count($obj);$i++){
		$select="insert into db_transaction(t_oid,t_gid,t_number) values('".$mOid."','".$obj[$i]->mGId."','".$obj[$i]->mGoodsNum."')";
		$conne->uidRst($select);
		$conne->close_rst();
		$select="delete from db_buyer where b_id='".$obj[$i]->mId."'";
		$conne->uidRst($select);
		$select="update db_goods set g_sellnumber=g_sellnumber+".$obj[$i]->mGoodsNum.",g_number=g_number-".$obj[$i]->mGoodsNum.
			" where g_id='".$obj[$i]->mGId."'";
		$conne->uidRst($select);
	}
	$conne->close_conn();
	$result=array('code'=>'1','msg'=>'提交成功');
	echo json_encode($result);
}	


?>