<?php
	//each()  list() explode()
	/*
	$user=array(
		"id"=>1,
		"name"=>"wangwu",
		"age"=>30,
		"email"=>"aa@bb.com"
	);*/
	
	//$a=each($user); //while+each()
	/*
	echo "<pre>";
	print_r($a);
	echo "</pre>";*/
	/*
	while($arr=each($user)){
		var_dump($arr);
		echo "<br />";
	}*/
	
	//ʹ��list����������
	/*
	list($a,$b,$c) = array(1,2,3);
	echo $a." ".$b." ".$c;*/
	
	//explode($delimiter, $string)
	
	//192.168.0.19-> array(192,168,,0,19)
	
	if(isset($_POST['sub'])){
		$IP=$_POST['IP'];
		$IPS=explode(".",$IP);
		//var_dump($IPS);
		echo count($IPS);
		echo "<br />";
		list($a,$b,$c,$d)=$IPS;
		echo $a;
	}
?>

<b>IP��ַ����</b>
<form action="06-test.php" method="post">
	����IP��ַ:<input type="text" name="IP"><br />
	<input type="submit" name="sub" value="�ύ">
</form>


