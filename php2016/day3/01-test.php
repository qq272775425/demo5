<?php

	//���������
	//1:��ֵ���� 2��ʹ��array()���� 3:ʹ�õ�������function����������
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
	//���� array �������鷽ʽ��ѭ������  �����鸳ֵ
	���� ��Ϊ 
	��������  ����ʹ��forѭ����ѯforeach
	�������� (���� ��ֵ)  �����±����� ����ʹ��forѭ����ѯ
	for($i=0;$i<count($arr);$i++){}
	
	��¼��  id name pass 
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