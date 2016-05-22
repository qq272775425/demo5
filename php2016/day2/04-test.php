<?php
	if(isset($_POST['sub'])){
		$rows=$_POST['rows'];
		$cols=$_POST['cols'];
		
		echo "<b>"."用户动态输出表格"."行 ".$rows." ,列 ".$cols."</b>";
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


<b>输入行列生成表格</b>
<form action="04-test.php" method="post">
	输入行:<input type="text" name="rows"><br />
	输入列:<input type="text" name="cols"><br />
	<input type="submit" name="sub" value="生成表格">
	<input type="reset" name="rst" value="重置行列">
</form>