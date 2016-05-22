<?php
	if(isset($_POST[sub])){
		//var_dump($_POST);
		
		
		$str=implode(",",$_POST);
		
		list($a,$b,$c,$d)=explode(",",$str);
		$str1=$a.",".$b.",".$c;
		echo $str1;
		//var_dump($str);
		/*
		for($i=0;$i<count($str)-1;$i++){
			$str1.=$str[$i];
		}
		
		echo $str1;*/
	}

?>


<form action="10-test.php" method="post">
	标题:<input type="text" name="title"><br />
	内容:<input type="text" name="content"><br />
	日期:<input type="text" name="date"><br />
	<input type="submit" name="sub" value="提交">	
</form>