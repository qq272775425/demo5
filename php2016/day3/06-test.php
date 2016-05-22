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
	
	//使用list来遍历数组
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

<b>IP地址分离</b>
<form action="06-test.php" method="post">
	输入IP地址:<input type="text" name="IP"><br />
	<input type="submit" name="sub" value="提交">
</form>


