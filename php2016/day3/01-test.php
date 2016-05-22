<?php

	//数组的声明
	//1:赋值声明 2：使用array()声明 3:使用第三方的function来进行声明
	/*
	$user[0]=1;
	$user[1]="zhangsan";
	$user[2]=10;
	$user[3]="jian@163.com";
	$user[4]=array(1,2);
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";*/
	
	
	echo "<br />";
	
	$user[]=1;
	$user[]="zhangsan";
	$user[]=10;
	$user[9]="nan";
	$user[2]="jian@163.com";
	$user[]=array(1,2);
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	
	/*
	//数组 array 创建数组方式和循环数组  给数组赋值
	数组 分为 
	关联数组  不能使用for循环轮询foreach
	索引数组 (键名 键值)  键名下标连续 可以使用for循环轮询
	for($i=0;$i<count($arr);$i++){}
	
	登录表  id name pass 
	      1  xiao 1234
	      2  li   3456
	
	$arr=array(1,2,3,'id',true);
	
	$arr=array(
		'id'=>1;
		'name'=>'xiao',
		'pass'=>'1234'
	)
	
	$arr=array(
		'0'=>1,
		'1'=>2
	)*/

?>