<?php
	//���������ϴ��ļ� �����ļ���׺
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
				echo "<script>alert('�ϴ���׺�ļ�Υ��')</script>";
				break;
			}else{
				echo "<script>alert('�ϴ��ɹ�')</script>";
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
	�ϴ��ļ�:<input type="file" name="sfile"><br />
	<input type="submit" name="sub" value="�ϴ�">
</form>