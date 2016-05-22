<?php
	//声明二维数组
	$user=array(
		array(1,"zhangsan",10,"male"),
		array(2,"lisi",20,"male"),
		array(3,"wangwu",30,"female")
	);
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	
	echo "<br />";
	echo $user[1][2];
	echo "<br />";
	$arr=$user[0];
	
	for($i=0;$i<count($arr);$i++){
		//echo $arr[$i]."<br />";
		echo "\$arr[$i]"." = ".$arr[$i]."<br />";
	}

	/*
	使用for循环遍历数组
	1:for  for...in  
	2:PHP下尽量不使用for做轮询
	3:for 必须是索引数组 并且下标是连续的
	4:foreach是首选*/
?>









