<?php
	//1:array_values()  LAMP  Linux Apache Mysql PHP
	// NAMP  Ngnix
	//webServer   (��������(ftp�ʺ�)��VPS��������) Robots.txt
	
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
	
	//array_keys()   Ĭ��false��ȫƥ��  trueҪȫ��ƥ��
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











