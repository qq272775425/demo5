<?php
	/*
	PHP中的预定义全局数组 $_POST $_GET $_FILES $_COOKIE $_SESSION
	$_SERVER*/
	
	/*
	$arr=array(1,2);   //全局数组
	
	function aa(){
		global $arr;
		print_r($arr);
	}
	
	aa();*/

	//var_dump($_GET);
	$_GET=array(1,2);
	function aa(){
		print_r($_GET);
	}
	
	aa();
?>















