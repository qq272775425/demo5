<?php
	if(isset($_POST['sub'])){
		$rows=$_POST['rows'];
		$cols=$_POST['cols'];
		
		echo "<b>"."�û���̬������"."�� ".$rows." ,�� ".$cols."</b>";
		echo "<table border='1' width='200' height='200'>";
		$color="";
		for($i=0;$i<$rows;$i++){
			if($i%2==0){
				$color='red';
			}else{
				$color='blue';
			}
			echo "<tr bgColor=".$color.">";
			for($j=0;$j<$cols;$j++){
				echo "<td>";
				echo $j;
				echo "</td>";
			}
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>


<b>�����������ɱ��</b>
<form action="04-test.php" method="post">
	������:<input type="text" name="rows"><br />
	������:<input type="text" name="cols"><br />
	<input type="submit" name="sub" value="���ɱ��">
	<input type="reset" name="rst" value="��������">
</form>