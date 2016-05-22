<?php
	//用来处理上传文件 处理文件后缀
	//var_dump($_FILES);
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		//echo $sfile[name];
		$str=$sfile[name];
		$arr=explode(".",$str);
		//var_dump($arr);
		$num=count($arr)-1;
		$hou=$arr[$num];
		
		$arr1=array('exe','bmp','txt');
		foreach($arr1 as $v){
			if($v==$hou){
				echo "<script>alert('上传后缀文件违法')</script>";
				break;
			}else{
				echo "<script>alert('上传成功')</script>";
				break;
			}
		}
		
		//var_dump($sfile);
		/*
		echo "<pre>";
		print_r($sfile);
		echo "</pre>";*/
	}

?>

<form action="07.test.php" method="post" enctype="multipart/form-data">
	上传文件:<input type="file" name="sfile"><br />
	<input type="submit" name="sub" value="上传">
</form>