<?php
	if(isset($_POST['sub'])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$query=get_name_by_pass($name,$pass);
		if($query){
			echo "OK";
		}else{
			echo "error";
		}
	}
	
	function get_name_by_pass($name,$pass){
		if($name=="admin" && $pass="12345"){
			return true;
		}else{
			return false;
		}
	}

?>

<center>
<form action="13-test.php" method="post">
	ำรปงร๛:<input type="text" name="name"><br />
	รÜย๋:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="login">
</form>
</center>
