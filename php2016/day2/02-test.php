<?php
	echo "=====第一种九九乘法表=====";
	echo "<br />";
	echo "<table border='1' width='800'>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j)." ";
			echo "</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";

	echo "<br />";
	
	echo "=====第一种九九乘法表=====";
	echo "<br />";
	//先把行打出来 打出来之前把table套入
	echo "<table border='1' width='800'>";
	//打行
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		
			//先打空格列
			for($k=1;$k<=9-$i;$k++){
				echo "<td>";
				echo "&nbsp";
				echo "</td>";
			}
			
			//再打计算式列
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo $i." * ".$j." = ".($i*$j)." ";
				echo "</td>";
			}
		
		
		echo "</tr>";
	}
	echo "</table>";
?>









