<div class="container">
	<?php 
        #检查是否存在data的name属性

	    /*if(filter_has_var(INPUT_POST, "data")){
	    	// echo "data 存在";
	    	$email = $_POST["data"];
	    	// echo $email;

	    	# 过滤掉不合法的字符
	    	$email = filter_var($email,FILTER_SANITIZE_EMAIL);
            echo $email;
	    	#验证是否是一个有效的邮箱
	    	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                  echo "邮箱合法";
	    	}else{
	    		echo "邮箱不合法";
	    	}
	    }else{
	    	echo "data 不存在!";
	    }*/

	    # 练习：验证一个变量中的值，是否是合法的整型
	    $var = 23;
	    if(filter_var($var,FILTER_VALIDATE_INT)){
	    	// echo "合法的整型";
	    }else{
	    	// echo "不合法的整型";
	    }

	    # 获取字符串中的所有数值
	    $var = "hhkljljoioi34534lk53";
	    # var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

	    # 特殊字符
	    $var = "<script>alert(1)</script>";
	    # echo $var;
	    # echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);

	    #验证数组中每个元素
	    $filters = array(
             "data"=>FILTER_VALIDATE_EMAIL,
             "data2"=>array(
                   'filter' => FILTER_VALIDATE_INT,
                   'options' => array(
                       'min_range' => 1,
                       'max_range' => 150
                   )
             )
	    );
	    # print_r(filter_input_array(INPUT_POST,$filters))
	   
          
         # 把form表单中input的内容，第一个input一定是email
	     # 第二个input一定是数值，并且数值不能小于1，大于150
	     $email = $_POST["data"];
	     $num = $_POST["data2"];
	     // if(filter_has_var(INPUT_POST, "data")){
		     /*if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	              echo $email."邮箱合法";
		     }else{
		     	echo " ";
		     } 
		 // }
		     echo "<br>";
		     if(filter_var($num<150&&$num>1,FILTER_VALIDATE_INT)){
		     	echo $num."输入正确";
		     }else{
		     	echo " ";
		     }
		 */

		 # filter_var_array — 获取多个变量并且过滤它们 
        $arr = array(
             "name"=>"henry",
             "age"=>"30",
             "email"=>"henry@gmail.com"
        );
      
        $filters = array(
             "name" => array(
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords",   
             ),
             "age" => array(
             	 "filter" => FILTER_VALIDATE_INT,
                 "min-range" =>1,
                 "max-range" =>100
             ),
             "email"=>FILTER_VALIDATE_EMAIL,
        );
        print_r(filter_var_array($arr,$filters));
	    /*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL 
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT 整型
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters / 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
			<input type="text" name="data" class="form-control">
			<br>
			<input type="text" name="data2" class="form-control">
			<br>
			<!-- button:submit :表示后面类型 -->
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>