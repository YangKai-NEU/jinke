<?php
header("Content-type: text/html; charset=utf-8");
$isAll="";
$cacheFile="";
if(isset($_POST['isall'])){
	$isAll=$_POST['isall'];
}
if(isset($_POST['cachefile'])){
	$cacheFile=$_POST['cachefile'];
}
if($isAll==""||$cacheFile==""){
	$result=array('code'=>'-1','msg'=>'参数错误');
	echo json_encode($result);
}else {
	if($isAll=='Y'){
		$array=array();
		$pos=0;
		$file=scandir("../../action/Cache");
		for($i=0;$i<count($file);$i++){
			if (strpos($file[$i],".")) {
	            $array[$pos]="../action/Cache/".$file[$i];
	            $pos++;
	        }else if($file[$i] != "." && $file[$i] != ".."){
	        	$subfiles=scandir("../../action/Cache/".$file[$i]);
				for($j=0;$j<count($subfiles);$j++){
					if($subfiles[$j] != "." && $subfiles[$j] != ".."){
						$array[$pos]="../action/Cache/".$file[$i].'/'.$subfiles[$j];
	           			$pos++;
					}
				}
	        }
		}
		for($i=0;$i<count($array);$i++){
			unlink("../".$array[$i]);
		}
		$result=array('code'=>'1','msg'=>'删除成功');
		echo json_encode($result);
	}else{
		unlink("../".$cacheFile);
		$result=array('code'=>'1','msg'=>'删除成功');
		echo json_encode($result);
	}
}


?>