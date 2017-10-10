<?php 
	#loops: 循环 - 让项目制作的更高效

	#根据某个条件,重复执行某段代码
	
	/*
		- For
		- While
		- Do...While
		- Foreach
	*/

	# For 循环
	# @params - init,condition,inc
	// for($i=0;$i<10;$i++){
	// 	echo ($i+1)."<br>";
	// }

	#While 循环
	#@params - condition
	// $i = 0;
	// while ($i < 10) {
	// 	echo $i."<br>";
	// 	$i++;
	// }

	# do...while
	#@params - condition

/*	$i = 0;
	do{
		echo $i."<br>";
		$i++;
	}While($i < 10);*/

	# foreach 循环 下标数组
	$people = array("henry","bucky","emily");
	foreach($people as $person){
		echo $person;
		echo "<br>";

	}

	#foreach 循环 关联数组
	$people = array(
		"henry"=>"henry@gmail.com",
		"bucky"=>"bucky@gmail.com",
		"emily"=>"emily@gmail.com"
	);

	foreach ($people as $key => $value) {
		echo $key.":".$value;
		echo "<br>";
	}


	
	/*
		练习1
		打印1~100之间7的倍数
		打印1~100之间个位为7的数
		打印1~100之间十位为7的数
		打印1~100之间个位不为7,十位不为7,以及不是7的倍数

		练习2
		打印九九乘法表

	*/









?>