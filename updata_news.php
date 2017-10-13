<?php
	header("Content-type: text/html; charset=utf-8");
	$con= mysqli_connect('localhost','root','','test1');
	mysqli_query($con,"set names utf8");
	if(mysqli_connect_errno($con)){
		echo "连接数据库失败".mysqli_connect_errno();
	}else{
		echo "连接成功";
		
			
	}
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		var_dump($id);
		$sql2 = "select * from news where id=$id";
		var_dump($sql2);
		$r = mysqli_query($con,$sql2);
		var_dump($r);
		$va+ = mysqli_fetch_assoc($r);
		include_once('up_news'.'.html');
	}
	
	
	if($_POST){
		$id = $_POST['id'];
		var_dump($id);
		$title = $_POST['title'];
		$author = $_POST['author'];
		$content = $_POST['content'];
		// $date = $_POST['date'];
		$sql = "update news set title='$title' where id=$id";
		echo $sql;
		$res = mysqli_query($con,$sql);
		var_dump($res);
		if($res){
			echo "<script>alert('修改成功');window.location.href='news_oyx.php'</script>";
		}
	}
	
