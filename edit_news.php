<?php
	header("Content-type: text/html; charset=utf-8");
	$title = $_POST['title'];
	$author = $_POST['author'];
	$content = $_POST['content'];
	$date = $_POST['date'];		
	include_once("news_james.php");
	$con= mysqli_connect('localhost','root','','test1');
	mysqli_query($con,"set names utf8");
	
	if(mysqli_connect_errno($con)){
		echo "连接数据库失败".mysqli_connect_errno();
	}else{
		echo "连接成功";
		$sql = "select * from news where title like '%$title%' or author like '%$author%' or content like '%$content%' or cid like '%$date%'";
		//echo $sql;
		$res = mysqli_query($con,$sql);
		//var_dump($res);
		//var_dump(mysqli_fetch_assoc($res));
		//$row[] = '';
		while($arr=mysqli_fetch_assoc($res)){
			
			$row[] = $arr;
		}
		foreach($row as $key=>$value){
			
			echo $value['title'];
			echo $value['content'];
			echo $value['author'];
			echo $value['cid'];
			echo "<hr/>";
		}
		
		
	}


