<?php
	$one="#####";
	$two="one";
	$three="two";
	$four="three";
	
	echo $four."<br />";
	echo $$four."<br />";  //�ɱ����
	
	//ֵ��ַ�Ĳ�ͬ
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
	
	//�����  .=  ==  === && || ~  & |   
	//bit  1byte=4bit 8bit 16bit --CPUλ��
	//? :--  true?1:0  @  ->  ::  ``
	
	$name="tom";
	$age=27;
	$height=1.75;
	echo '�ҵ�������:{$name}';
	echo "<br />";
	//echo '�ҵ�������:$name';
	echo "\$name==$name";  //$name=tom
	echo "<br />";
	echo '$name'."==$name";

	/*
	PHP�м������ͣ�8�����ͣ�
	1�����ֱ�������
	����:int  ������ float double real
	bool  STRING_CAST
	2:���ָ�������
	array OBJECT
	3:������������
	null resource
	
	string ---int  ((int)$a  settype gettype)
	int ---string (��˫����)
	array---STRING(toString(),foreach--.=�ַ���)
	string---array(substr()---push array)
	string--OBJECT serialize
	object--string unserialize */
	
	//�Զ��峣��
	//define("������","����ֵ");
	
	echo __LINE__;
	
?>












