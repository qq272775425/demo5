<?php
	//array_filter
	/*
	$arr=array(1,2,3,4,5,-6,7,8,9,-9,10,-11,12);
	
	$arr1=array_filter($arr,"myfun");
	
	function myfun($n){
		if($n>0){
			return true;
		}else{
			return false;
		}
	}
	
	echo "<pre>";
	print_r($arr1);
	echo "</pre>";*/
	
	//array_slice();
	
	$lamp=array("Linux","Apache","Mysql","PHP");
	
	echo "<pre>";
	print_r(array_slice($lamp,1,2));
	echo "</pre>";
	
	//array_splice()  array_combine()
	
?>









