<?php
	echo "=====��һ�־žų˷���=====";
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
	
	echo "=====��һ�־žų˷���=====";
	echo "<br />";
	//�Ȱ��д���� �����֮ǰ��table����
	echo "<table border='1' width='800'>";
	//����
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		
			//�ȴ�ո���
			for($k=1;$k<=9-$i;$k++){
				echo "<td>";
				echo "&nbsp";
				echo "</td>";
			}
			
			//�ٴ����ʽ��
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo $i." * ".$j." = ".($i*$j)." ";
				echo "</td>";
			}
		
		
		echo "</tr>";
	}
	echo "</table>";
?>









