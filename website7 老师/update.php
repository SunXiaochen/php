<?php 

	/* 操作数据库
	 * 1.链接数据库
	 * 2.执行sql语句
	 * 3.获取数据并使用
	 * 4.断开连接
	 */
	function updateData($sql){
		# 连接数据库
		$mysqli = new mysqli("localhost","root","","people");
		# 测试是否链接成功
		if ($mysqli->connect_errno) {
			die($mysqli->connect_error);
		}

		# 设置utf8
		$mysqli->query("set names utf8");
		# 执行sql语句
		$result = $mysqli->query($sql);

		if ($result) {
			echo "更新成功!";
		}else{
			echo "更新失败!";
		}

		# 断开连接
		$mysqli->close();
	}

	# 准备sql语句
	$sql = "UPDATE customers SET name='孙帅',email='ss@gmail.com' WHERE id = 6";
	updateData($sql);
 ?>