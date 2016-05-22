<?php
	//PHP中的函数声明
	//function aa(){}  无参函数  function bb(参数1,参数2....){} 有参
	//function 函数 过程   有return叫函数 没有return的叫过程
	//return是function的最后一条执行语句
	function aa($cols){  //调用function的堆栈前 保存栈地址0x3d5c2b
		echo $cols;
		$b=10;
		echo "<br />";
		return $b;  //ret 0x3d5c2b+1
		$a=0;
		$a=$a+$cols;
		echo $a;
	}
	
	
	aa(3);   //保存函数的入口地址  call base addresss  OD
?>

