<div class="container">
	<?php 
        // echo $_GET["sbqname"];
	    //先判断是否存在 检查sbqname是否能获取到
		//$_GET
	    /*if(isset($_GET["sbqname"]) && isset($_GET["sbqemail"])){
	    	// echo $_GET["sbqname"];
	    	$name = $_GET["sbqname"];
	    	$email = $_GET["sbqemail"];
	    	echo $name.":".$email;
	    }*/
	    //$_POST
	    /*if(isset($_POST["sbqname"]) && isset($_POST["sbqemail"])){
	    	// echo $_POST["sbqname"];
	    	$name = $_POST["sbqname"];
	    	$email = $_POST["sbqemail"];
	    	if(!empty($name) && !empty($email)){
	    		echo $name.":".$email;
	    	}
	    	print_r($_POST);
	    }*/
	    // $_REQUEST
	    if(isset($_REQUEST["sbqname"]) && isset($_REQUEST["sbqemail"])){
	    	// echo $_REQUEST["sbqname"];
	    	$name = $_REQUEST["sbqname"];
	    	$email = $_REQUEST["sbqemail"];
	    	if(!empty($name) && !empty($email)){
	    		echo $name.":".$email;
	    	}
	    	print_r($_REQUEST);
	    }
	    #查询url地址后面的参数
	    echo $_SERVER['QUERY_STRING'];
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- 提交到get_post.php  method不写的话默认是GET方法 里面可以小写可以大写 -->
		<form action="get_post.php" method="GET">
			<br>
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="sbqname">
			</div>
            <br>
			<div class="form-group">
				<label for="">Email</label>
				<!-- 会验证是不是email -->
				<input type="email" class="form-control" name="sbqemail">
			</div>
			<br>
			<!-- btn-primary 样式7种中的一种  btn-block 撑满整行样式-->
			<!-- submit 事件是系统写好的提交  如果写的话就是重写事件 -->
            <input type="submit" value="提交" class="btn btn-primary btn-block">
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=小仙女"; ?>" class="btn btn-success btn-block">
					小仙女
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=小滑稽"; ?>" class="btn btn-info btn-block">
					小滑稽     
				</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>
	</div>
</body>
</html>