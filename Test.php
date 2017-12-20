<!DOCTYPE html>
<html>
<body>

<?php
	// .在PHP裡扮演連結的效果 data用法(記得改SERVER時區)
	echo "今天是".date("Y年m月d日 H:i:s").'<br>';
?>

<?php
	$num = rand(1,2);
	echo "<a href = SubTest.php?n=$num>SportonMark</a>";
	echo "<img src = Pic/MARK0$num.png width = 255 height = 295 />".'<br>';
?>

<?php 
	session_start();
	$_SESSION['temp'] = 1;
?>

<form action="SubTest.php">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	<input type="submit">
</form>

</body>
</html>