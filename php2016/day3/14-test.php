<?php

	//�������� �շ�������
	//������������
	

	table(5,6);
	function table($rows,$cols){
		echo "<table align='center' border='1' width='500'>";
		echo "<caption><h1>���б�ɫ</h1></caption>";
		$color="";
		for($i=0;$i<$rows;$i++){
			if($i%2==0){
				$color="red";
			}else{
				$color="green";
			}
			echo "<tr bgColor=".$color.">";
				for($j=0;$j<$cols;$j++){
					echo "<td>";
					echo $j;
					echo "</td>";
				}
			echo "</tr>";
		}
	}

	table(4,3);
	
	
?>


