<?php
/*
	echo $a;
	echo "<b>345</b>";
	echo "<script>alert('rty')</script>";*/
	
	//��������
	/*
	1:����ǰһ��Ҫʹ��$ ������ʹ�õ�ʱ��Ҫ��$
	2:�������ֿ�ͷ
	3������ʹ�����������
	4������ʹ�ùؼ��ֺͱ�����  */   //$aaaBbbCcc �շ�������
	
	
	//isset/unset
	if(isset($_POST['sub'])){
		//unset $_POST['shuju'];
		$str=$_POST['shuju'];
		unset($str);
		
		//unset��������������� �������������� �����
		if(!empty($str)){
			echo $str;
		}else{
			echo "����������";
		}
	}

?>

<form action="03-test.php" method="post">
	����:<input type="text" name="shuju"><br />
	<input type="submit" name="sub" value="�ύ">
</form>