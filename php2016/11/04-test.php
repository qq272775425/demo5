<?php
	if(isset($_POST['sub'])){
		$rows=$_POST['rows'];
		$cols=$_POST['cols'];
		echo "<center><b>�û���̬������.��".$_POST['cols'].",��".$_POST['rows']."</b></center>";
		$color="";
		echo "<table border='1' width='200' height='200'>";
		for($i=0;$i<$rows;$i++){
			if($i % 2 ==0){
				$color="yellow";
			}else{
				$color="blue";
			}
			echo "<tr bgColor=".$color.">";
			for($j=1;$j<$cols;$j++){
				echo "<td>".$j."</td>";
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