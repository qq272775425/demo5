<?php
	if(isset($_POST['sub'])){
		$fenshu=$_POST['fenshu'];
		if(is_numeric($fenshu)){
			//echo "OK";
			//echo $fenshu[0];
			for($i=0;$i<strlen($fenshu);$i++){
				if($fenshu[$i]=="."){
					echo "С��";
					break;
				}
			}
			//echo "OK";
			if($fenshu<0){
				echo "����";
			}else{
				if(strlen($fenshu)>4){
					echo "����Խ��";
				}else if(strlen($fenshu)==3){
					if($fenshu[0] !==1){
						echo "�ٷ�λֻ��Ϊ1";
					}
				}else{
					//д�������ܴ���
				}
			}
		}else{
			echo "error";
		}
	}

?>

<b>���������ѯ�ɼ�</b>
<form action="03-test.php" method="post">
	����:<input type="text" name="fenshu"><br />
	<input type="submit" name="sub" value="�ύ��ѯ">
	<input type="reset" name="rst" value="���÷���">
</form>