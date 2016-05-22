<?php
	//关联数组的声明  PHP中混合声明不影响索引下标的声明
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
	
	//使用array来进行声明
	//$user=array(1,"zhangsan",10,"nan","jian@163.com");
	//var_dump($user);
	//批量声明数组
	$user=array();
	$user1=array('勒布朗','安东尼','库里');
	for($i=0;$i<count($user1);$i++){
		$user[$i]=$user1[$i];
	}
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";

?>











