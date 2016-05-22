<?php
	$info=array(
		'USER'=>array(
			array(1,"zhangsan",10,"nan"),
			array(2,"lisi",20,"nan"),
			array(3,"wangwu",30,"nan")
		),
		'SCORE'=>array(
			array(1,200,90,80),
			array(2,56,67,87),
			array(3,56,43,47)
		),
		'Connect'=>array(
			array(1,110,'aa@bb.com'),
			array(2,120,'cc@bb.com'),
			array(3,130,'dd@bb.com')
		)
	);
	
	foreach($info as $tablename=>$table){
		echo "<table align='center' width='500' border='1'>";
		echo "<caption>".$tablename."</caption>";
		foreach($table as $row){
			echo "<tr>";
				foreach($row as $col){
					echo "<td>";
					echo $col;
					echo "</td>";
				}
				
			echo "</tr>";
		}
		
		echo "</table>";
	}

?>









