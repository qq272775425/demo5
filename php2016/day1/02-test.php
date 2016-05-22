<?php


	$str="www.163.com/系大大.rmvb";
	$str1=base64_encode($str);
	//echo $str1;
	$str2="thunder://".$str1;
	echo $str2;
	
	//iconv_substr($str, $offset)
	/*
	if($_POST['sub']){
		$pass=$_POST['pass'];
		//echo $pass;
		$pass1=md5($pass);
		
		//md5(md5(pass)+salt);  //salt随机生成
		echo $pass1;
	}*/

	//thunder://shkjfhsdjkhfdskjh==
	
	// 827ccb0eea8a706c4c34a16891f84e7b
	// a14b1bbaad4c127657d9c8d907fc6a75
	
?>


<form action="02-test.php" method="post">
	用户名:<input type="text" name="username"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">
</form>