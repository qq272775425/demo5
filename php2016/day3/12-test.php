<?php
	//PHP�еĺ�������
	//function aa(){}  �޲κ���  function bb(����1,����2....){} �в�
	//function ���� ����   ��return�к��� û��return�Ľй���
	//return��function�����һ��ִ�����
	function aa($cols){  //����function�Ķ�ջǰ ����ջ��ַ0x3d5c2b
		echo $cols;
		$b=10;
		echo "<br />";
		return $b;  //ret 0x3d5c2b+1
		$a=0;
		$a=$a+$cols;
		echo $a;
	}
	
	
	aa(3);   //���溯������ڵ�ַ  call base addresss  OD
?>

