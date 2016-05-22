<?php
	//1:array_values()  LAMP  Linux Apache Mysql PHP
	// NAMP  Ngnix
	//webServer   (虚拟主机(ftp帐号)、VPS、云主机) Robots.txt
	
	/*
	$lamp=array(
		"OS"=>"Linux",
		"webServer"=>"Apache",
		"db"=>"Mysql",
		"language"=>"PHP"
	);
	
	$arr=array();
	$i=0;
	foreach($lamp as $v){
		$arr[$i]=$v;
		$i++;
	}
	
	var_dump($arr); */
	
	//$lamp=array("Linux","Apache","Mysql","PHP");
	//$arr=array_values($lamp);
	//list($a,$b,$c,$d)=$arr;
	//echo $a;
	
	//array_keys()   默认false不全匹配  true要全等匹配
	/*
	$aa=array(
		"html"=>'100',
		"os"=>10,
		"ll"=>array(1,2)
	);
	
	//var_dump($aa);
	
	
	$arr=array_keys($aa,100);
	
	echo "<pre>";
	print_r($arr);
	echo "</pre>";*/
	
	//3:in_array
	
	$lamp=array(
		"OS"=>"Linux",
		"webServer"=>"Apache",
		"db"=>"Mysql",
		"language"=>"PHP",
		"arr"=>array('a','b'),
		"num"=>100
	);
	
	if(in_array('100',$lamp)){
		echo "OK";
	}else{
		echo "error";
	}
	
	//array_key_exists
	//array_flip()  array_reverse
?>











