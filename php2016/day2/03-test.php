<?php
	if(isset($_POST['sub'])){
		$fenshu=$_POST['fenshu'];
		if(!empty($fenshu)){
			if(is_numeric($fenshu)){
				//echo "OK";
				if($fenshu[0]==0){
					echo "<script>alert('�����һ�����ֲ���Ϊ0')</script>";
				}else{
					//echo "OK";
					//����ķ������ڵ���һλ С�ڵ���3λ
					if(strlen($fenshu)>=1 && strlen($fenshu)<=3){
						if($fenshu<=100){
							if($fenshu>=80 && $fenshu<=100){
								echo "����";
							}else if($fenshu>=60 && $fenshu<=80){
								echo "�ϸ�";
							}else{
								echo "���ϸ�";
							}
						}else{
							echo "����ķ���Խ��";
						}
					}else{
						echo "����ķ���Խ��";
					}
				}
			}else{
				echo "error";
			}
		
		}
	}
?>


<b>���������ѯ�ɼ�</b>
<form action="03-test.php" method="post">
	����:<input type="text" name="fenshu"><br />
	<input type="submit" name="sub" value="�ύ��ѯ">
	<input type="reset" name="rst" value="���÷���">
</form>