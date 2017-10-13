<?php
	
	//header("Content-type: text/html; charset=utf-8");
	// connect to mysql
	
	$connect = mysqli_connect('localhost', 'root', '', 'test1') or die('something wrrong....');
	mysqli_query($connect, "set charset utf8");
	
	$sql = "select * from news";
	
	$result = mysqli_query($connect, $sql);
	
	$news = array();
	while($row=mysqli_fetch_assoc($result)) {
		
		$news[] = $row;
	}

	//print_r($news);
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<title>新闻列表</title>
		<style>
			*{margin:0 auto;}
			body{text-align:center;}
			table{width:90%;}
			thead{ margin-top: 40px;}
			thead td {font-weight: bolder; font-size: 20px; border:3px solid black;}
			tbody td{border-bottom: 2px solid #9c8;}
		</style>
	</head>
	<body>
		<div style="text-align: right; width: 90%;padding: 30px 30px;">
			<a href="add_news.html">添加新闻</a> | 
			<a href="edit_news.html">搜索新闻</a> 
		<div>
		<div>
		<form action="" method="post">
			<table>
				<thead>
					<td>标题</td>
					<td>作者</td>
					<td>内容</td>
					<td>日期</td>
					<td>操作</td>
				</thead>
				<tbody>
				<?php foreach($news as $new): ?>
				<tr>
					<td><?php echo $new['title'];?></td>
					<td><?php echo $new['author'];?></td>
					<td><?php echo $new['content'];?></td>
					<td><?php echo $new['cid'];?></td>
					<td>
						
						<a href="updata_news.php?id=<?php echo $new['id']; ?>">修改</a>
						<a href="">删除</a>
					</td>
				</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		
		</div>
	</body>
	
	
</html>
