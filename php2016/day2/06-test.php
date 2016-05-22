<?php

	if(isset($_GET['sub'])){
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		$ysf=$_GET['ysf'];
		$sum=0;
		switch($ysf){
			case "+" :
				$sum=$num1+$num2;
				break;
		}
	}
?>

<html>
	<head>
		<title>计算器</title>
	</head>
	<body>
		<!-- 
			1:HTML结构  table->form->tr->4 td
			          3 td ->input 1 td select->5 option
			-->
			
		<table align='center' border='1' width='500'>
			<caption><h1>计算器</h1></caption>
			<form action="06-test.php">
				<tr>
					<td><input type="text" name="num1" value=<?php if(isset($_GET['num1'])) echo $_GET['num1'];?>></td>
					<td>
						<select name="ysf">
							<option value="+">+</option>
							<option value="-">-</option>
							<option value="*">×</option>
							<option value="/">/</option>
							<option value="%">%</option>
						</select>
					</td>
					<td><input type="text" name="num2"></td>
					<td><input type="submit" name="sub" value="计算"></td>
				</tr>
				<?php
					if(isset($_GET['sub'])){
						echo "<tr><td colspan='5'>";
						echo "tyui";
						echo "</td></tr>";
					}
				?>
			</form>
			
		</table>
	</body>

</html>







