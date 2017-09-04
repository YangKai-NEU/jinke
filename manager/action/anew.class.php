<?php
	header("Content-type: text/html; charset=utf-8");
	session_start();
	$htmlData = '';
	$title="";
	if(isset($_POST['news-title'])){
		$title=$_POST['news-title'];
	}
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}
	}
	if($title==""){
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('标题不能为空');";
		echo "window.history.go(-1);";
		echo "</script>";
	}else if($htmlData==""){
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('内容不能为空');";
		echo "window.history.go(-1);";
		echo "</script>";
	}else {
		require_once './db/conn.php';
		$conne->init_conn();
		$time=date('y-m-d H:i:s',time());
		$select="insert into db_news(n_title,n_content,n_time) values('".$title."','".$htmlData."','".$time."')";
		$conne->uidRst($select);
		$conne->close_conn();
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('提交成功');";
		echo "window.history.go(-1);";
		echo "</script>";
	}
?>