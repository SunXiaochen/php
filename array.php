<?php 

	# array: 数组 有效的控制资源 - 存储一堆数据的集合

	/*
		下标数组: 下标以0开始
		关联数组: 关联以第一个名字开头
	*/

	# 下标数组
	// $people = array("kevin","henry","hemiah");
	// echo $people[1];//"henry"
	#echo $people[3];// 数组越界

	// $ids = [23,56,42];
	// echo $ids[2];

	$cars = ["honda","toyota","BYD"];
	// $cars[3] = "BWM";
	// echo $cars[3];

	// echo count($cars);

	#打印数组的方法
	// print_r($cars);

	#万能打印方法
	// var_dump($cars);

	# 关联数组
	// $people = array("henry"=>35,"bukcy"=>25,"emily"=>20);
	// echo $people["emily"];

	// $ids = [22=>"henry",25=>"bukcy"];
	// echo $ids[22];
	// $ids[35] = "emily";
	// echo $ids[35];

	#观察
	// $cars[] = "bence";
	// $ids[] = "john";
	// print_r($cars);

	// print_r($ids);

	// $people[] = 55;
	// print_r($people[0]);

	#多维数组
	$cars = array(
		array("honda",20,10),
		array("dz",20,20),
		array("ford",15,10)
	);

	echo $cars[2][1];




	
 ?>


















