<?php
	echo "==============��ӡ���б߿�ľžų˷���=================";
	echo "<table align='center' width='800' border='1'>";
	
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo "$i"." * "."$j"." = ".($i*$j)." "; 
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	echo "<br />";
	
	echo "==============��ӡ���б߿�ĵ��žų˷���=================";
	echo "<table align='center' border='1' width='800'>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo "$i"." * "."$j"." = ".($i*$j)." "; 
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	
	echo "==============��ӡ���б߿�ĵ��ո�žų˷���=================";
	echo "<table align='center' border='1' width='800'>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		for($k=1;$k<=9-$i;$k++){
			echo "<td>"."&nbsp;"."</td>";
		}
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo "$i"." * "."$j"." = ".($i*$j)." "; 
			echo "</td>";
		}
		echo "</tr>";
	}
	
	echo "</table>";
	echo "<br />";
	
	echo "==============��ӡ���б߿�ĵ��ո�žų˷���=================";
	echo "<table align='center' border='1' width='800'>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($k=1;$k<=9-$i;$k++){
			echo "<td>"."&nbsp;"."</td>";
		}
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo "$i"." * "."$j"." = ".($i*$j)." "; 
			echo "</td>";
		}
		echo "</tr>";
	}
	
	echo "</table>";
	
	
	
	
?>





