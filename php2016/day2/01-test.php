<?php
	echo "=====使用for循环打印九九乘法表=====";
	echo "<br />";
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo $i." * ".$j." = ".($i*$j)." ";
		}
		
		echo "<br />";
	}
	
	echo "<br />";
	echo "=====使用while循环打印九九乘法表=====";
	echo "<br />";
	$i=1;
	while($i<=9){
		$j=1;
		while($j<=$i){
			echo $i." * ".$j." = ".($i*$j)." ";
			$j++;
		}
		echo "<br />";
		$i++;
	}
	
	
	echo "=====使用do-while循环打印九九乘法表=====";
	echo "<br />";
	$i=1;
	do{
		$j=1;
		while($j<=$i){
			echo $i." * ".$j." = ".($i*$j)." ";
			$j++;
		}
		echo "<br />";
		$i++;
	}while($i<=9);
?>










