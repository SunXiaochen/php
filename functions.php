<?php 
	# function: 函数 - 具有某一功能的代码块
	
	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/

	#变量要先定义

	//定义函数	
	//php中函数大小写不敏感
	function SImplefunction(){
		#echo "Hello World!";
	}
	#调用函数
	simpleFunction();
	#有参数 无返回值
	function buy($money="20块钱"){
		#echo $money."给了";
	}
	#buy("30块钱");
	#buy("10块钱");

	# 多参数 有返回值
	function sumValue($num1,$num2=10){
		$sum = $num1 + $num2;
		return $sum;
	}
	$x = sumValue(5);
	#echo $x;
	#无参数 有返回值
	function buyDrink(){
		return "饭后的饮料";
	}
	#echo buyDrink();

	#函数传引用
	$myNum = 10;
	function addFive(&$num){
		//return echo $num +5;
		// $myNum = 20;
		$num +=5;

	}
	addFive($myNum); # 拿到了myNum的引用,改变了内存中的数值 所以是15
	echo $myNum;

?>