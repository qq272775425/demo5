<?php

	//函数命名 驼峰命名法
	//函数不能重名
	

	table(5,6);
	function table($rows,$cols){
		echo "<table align='center' border='1' width='500'>";
		echo "<caption><h1>隔行变色</h1></caption>";
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


