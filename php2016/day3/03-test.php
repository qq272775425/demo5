<?php
	//������ά����
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
	ʹ��forѭ����������
	1:for  for...in  
	2:PHP�¾�����ʹ��for����ѯ
	3:for �������������� �����±���������
	4:foreach����ѡ*/
?>









