<?php
/*
	echo $a;
	echo "<b>345</b>";
	echo "<script>alert('rty')</script>";*/
	
	//变量命名
	/*
	1:变量前一样要使用$ 声明和使用的时候都要用$
	2:不能数字开头
	3：不能使用四则运算符
	4：可以使用关键字和保留字  */   //$aaaBbbCcc 驼峰命名法
	
	
	//isset/unset
	if(isset($_POST['sub'])){
		//unset $_POST['shuju'];
		$str=$_POST['shuju'];
		unset($str);
		
		//unset不光可以消亡变量 还可以消亡数组 对象等
		if(!empty($str)){
			echo $str;
		}else{
			echo "变量被消亡";
		}
	}

?>

<form action="03-test.php" method="post">
	数据:<input type="text" name="shuju"><br />
	<input type="submit" name="sub" value="提交">
</form>