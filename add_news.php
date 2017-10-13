<?php
	
	$title = $_POST['title'];
	$author = $_POST['author'];
	$content = $_POST['content'];
	$date = $_POST['date'];	
	
	
	$con= mysqli_connect('localhost','root','','test1');
	mysqli_query($con,"set names utf8");
	
	if(mysqli_connect_errno($con)){
		echo "连接数据库失败".mysqli_connect_errno();
	}else{
		echo "连接成功";
		$sql = "insert into news(content,author,cid) values('$content','$author','$date')";
		echo $sql;
		$res = mysqli_query($con,$sql);
		var_dump($res);
		
		
		
	}
