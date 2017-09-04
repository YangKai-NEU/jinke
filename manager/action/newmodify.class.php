<?php
	header("Content-type: text/html; charset=utf-8");
	session_start();
	$content = '';
	$title="";
	$nid="";
	if(isset($_POST['news-title'])){
		$title=$_POST['news-title'];
	}
	if(isset($_POST['news-id'])){
		$nid=$_POST['news-id'];
	}
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$content = stripslashes($_POST['content1']);
		} else {
			$content = $_POST['content1'];
		}
	}
	if($content==""||$title==""||$id=""){
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('参数错误');";
		echo "window.history.go(-1);";
		echo "</script>";
	}else{
		require_once './db/conn.php';
		$conne->init_conn();
		$time=date('Y-m-d H:i:s',time());
		$select="update db_news set n_title='".$title."',n_content='".$content."',n_time='".$time."' where n_id='".$nid."'";
		$array=$conne->uidRst($select);
		if($array!=-1){
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('提交成功');";
			echo "window.location.href='../anews.php';";
			echo "</script>";
		}else {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('提交失败');";
			echo "window.location.href='../anews.php';";
			echo "</script>";
		}
	}
?>