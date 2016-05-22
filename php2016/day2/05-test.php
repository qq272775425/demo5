<?php
	if(isset($_GET['sub'])){
		$num1=$_GET['num1'];
		//var_dump($num1);
		//die();
		$num2=$_GET['num2'];
		$ysf=$_GET['ysf'];
		if($num1 && $num2){
			//计算两个数值 + - × / %
			$sum=0;
			switch($ysf){
				case '+' :
					$sum=$num1+$num2;
					break;
				case '-' :
					$sum=$num1-$num2;
					break;
				case '*' :  
					$sum=$num1*$num2;
					break;
				case '/' :
					$sum=$num1/$num2;
					break;
				case '%' :
					$sum=$num1%$num2;
					break;
				
			}
		}
	}
?>

<html>
	<head>
		
	</head>
	
	<body>
		<table align='center' width='500' border='1'>
		<caption><h1>计算器</h1></caption>
		<form action="05-test.php">
			<tr>
				<td><input type="text" name="num1"></td>
				<td>
					<select name='ysf'>
						<option value="+">+</option>
						<option value="-" selected>-</option>
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
					echo '<tr><td colspan="5">';
					
					echo $sum;
					
					echo "</td></tr>";
				}
			?>
			</form>
		</table>
	</body>
</html>




