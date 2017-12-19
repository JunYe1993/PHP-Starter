<!DOCTYPE html>
<html>
<body>


<?php 
	$h = $_GET["h"];  //取得網址列傳來的變數h 
	$w = $_GET["w"];  //取得網址列傳來的變數w 

	if($h==""){  //如果$h的內容為空字串 
		$h = 1.72;  //身高（單位：公尺） 
	} 

	if($w==""){  //如果$w的內容為空字串 
		$w = 60;  //體重（單位：公斤） 
	} 

	echo "您的BMI=".$w/($h*$h);  //輸出您的BMI
	echo '<br>';
?> 

<?php
	echo "今天是";
	echo date("Y年m月d日 H:i:s");
?>

</body>
</html>