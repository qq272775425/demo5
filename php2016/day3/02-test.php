<?php
	//�������������  PHP�л��������Ӱ�������±������
	/*
	$user['id']=1;
	$user[]=66;
	$user['name']="zhangsan";
	$user['age']=10;
	$user[]=77;
	$user['sex']="nan";
	$user['email']="jian@163.com";
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	
	echo "<br />";
	echo $user['age'];*/
	
	/*
	$this->load->view('1.php',$data);
	$this->load->vars('2.php',$a);
	$data=array(
		'age'=>$a
	)*/
	
	//ʹ��array����������
	//$user=array(1,"zhangsan",10,"nan","jian@163.com");
	//var_dump($user);
	//������������
	$user=array();
	$user1=array('�ղ���','������','����');
	for($i=0;$i<count($user1);$i++){
		$user[$i]=$user1[$i];
	}
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";

?>











