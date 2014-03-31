<?php
	
	//返回数据是xml格式
	header("Content-Type:text/xml;charset=utf-8");
	//不要缓存数据
	header("Cache-Control:no-cache");
	//接受数据
	$username=$_GET['username'];// 这里要和请求方式对应；
	if($username=="x"){
	echo "不可用";//返回给请求页面的
	
	}
	else{
	
	echo "可用";
	}
	

?>
