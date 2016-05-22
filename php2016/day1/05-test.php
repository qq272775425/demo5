<?php 
	if(isset($_POST['sub'])){
		$year=$_POST['year'];
		//var_dump($year);
		$year=(int)$year;
		//var_dump($year);
		if(is_numeric($year)){
			//echo "OK";
			if($year==0){
				echo "<script>alert('输入年份非法')</script>";
			}else{
				if(strlen($year)<=4 && strlen($year)>=1){
					$len=strlen($year);
					if($len==4){
						$n1=substr($year,0,1);
						//echo $n1;
						//die();
						if($n1==1 or $n1==2){
							//echo "4";
							if($year %400==0 or ($year%4==0 and $year%100!=0) ){
								echo $year."是闰年";
							}else{
								echo $year."不是闰年";
							}
						}else{
							echo "error";
						}
					}else{
						//echo "3";
						if($year %400==0 or ($year%4==0 and $year%100!=0) ){
							echo $year."是闰年";
						}else{
							echo $year."不是闰年";
						}
					}
					
					//echo $n1;
				}else{
					echo "<script>alert('输入年份非法')</script>";
				}
			}
		}else{
			echo "<script>alert('输入年份非法')</script>";
		}
	}
?>


<form action="05-test.php" method="post">
	请输入年份:<input type="text" name="year"><br />
	<input type="submit" name="sub" value="提交">
</form>