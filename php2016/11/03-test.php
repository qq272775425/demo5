<?php
	if(isset($_POST['sub'])){
		$fenshu=$_POST['fenshu'];
		if(is_numeric($fenshu)){
			//echo "OK";
			//echo $fenshu[0];
			for($i=0;$i<strlen($fenshu);$i++){
				if($fenshu[$i]=="."){
					echo "小数";
					break;
				}
			}
			//echo "OK";
			if($fenshu<0){
				echo "负数";
			}else{
				if(strlen($fenshu)>4){
					echo "数据越界";
				}else if(strlen($fenshu)==3){
					if($fenshu[0] !==1){
						echo "百分位只能为1";
					}
				}else{
					//写基础功能代码
				}
			}
		}else{
			echo "error";
		}
	}

?>

<b>输入分数查询成绩</b>
<form action="03-test.php" method="post">
	分数:<input type="text" name="fenshu"><br />
	<input type="submit" name="sub" value="提交查询">
	<input type="reset" name="rst" value="重置分数">
</form>