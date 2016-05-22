<?php
	$one="#####";
	$two="one";
	$three="two";
	$four="three";
	
	echo $four."<br />";
	echo $$four."<br />";  //可变变量
	
	//值和址的不同
	$one=10;  // 0x2d4b5c
	//$two=$one; //  0x321c2d
	$two=&$one;
	
	$one=100;
	$two="hello";
	echo $one."<br />";
	echo $two."<br />";
	
	
	$a=10;
	$b=$a++ + ++$a; //22
	//echo $b;
	$c=--$b - $b--; //0
	//echo $c;
	$d=++$c - --$b; //-18
	echo $d;
	
	echo "<br />";
	
	//运算符  .=  ==  === && || ~  & |   
	//bit  1byte=4bit 8bit 16bit --CPU位数
	//? :--  true?1:0  @  ->  ::  ``
	
	$name="tom";
	$age=27;
	$height=1.75;
	echo '我的名字是:{$name}';
	echo "<br />";
	//echo '我的名字是:$name';
	echo "\$name==$name";  //$name=tom
	echo "<br />";
	echo '$name'."==$name";

	/*
	PHP有几种类型（8种类型）
	1：四种标量类型
	整型:int  浮点型 float double real
	bool  STRING_CAST
	2:两种复合类型
	array OBJECT
	3:两种特殊类型
	null resource
	
	string ---int  ((int)$a  settype gettype)
	int ---string (加双引号)
	array---STRING(toString(),foreach--.=字符串)
	string---array(substr()---push array)
	string--OBJECT serialize
	object--string unserialize */
	
	//自定义常量
	//define("常量名","常量值");
	
	echo __LINE__;
	
?>












