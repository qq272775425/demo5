<?php
	/*
	foreach方式
	foreach(数组变量名 as 下标变量名=>值的变量名){}
	foreach(数组变量名 as 值的变量名){}*/
	
	//$arr=array(1,2,3,4);
	/*
	$user=array(
		"name"=>"zhangsan",
		"age"=>30,
		"sex"=>"nan",
		"email"=>"jian@163.com"
	);
	
	foreach($user as $v){
		echo $v."<br />";
	}*/
	
	$user1=array(1,
		"name"=>"zhangsan",
		"age"=>40,
		"email"=>"xx@er.com"
	);
	
	foreach($user1 as $k=>$v){
		echo "\$user1[$k]"." = ".$v."<br />";
	}

?>







