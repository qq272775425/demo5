<?php
	if(isset($_POST['sub'])){
		$fenshu=$_POST['fenshu'];
		if(!empty($fenshu)){
			if(is_numeric($fenshu)){
				//echo "OK";
				if($fenshu[0]==0){
					echo "<script>alert('输入第一个数字不能为0')</script>";
				}else{
					//echo "OK";
					//输入的分数大于等于一位 小于等于3位
					if(strlen($fenshu)>=1 && strlen($fenshu)<=3){
						if($fenshu<=100){
							if($fenshu>=80 && $fenshu<=100){
								echo "优秀";
							}else if($fenshu>=60 && $fenshu<=80){
								echo "合格";
							}else{
								echo "不合格";
							}
						}else{
							echo "输入的分数越界";
						}
					}else{
						echo "输入的分数越界";
					}
				}
			}else{
				echo "error";
			}
		
		}
	}
?>


<b>输入分数查询成绩</b>
<form action="03-test.php" method="post">
	分数:<input type="text" name="fenshu"><br />
	<input type="submit" name="sub" value="提交查询">
	<input type="reset" name="rst" value="重置分数">
</form>