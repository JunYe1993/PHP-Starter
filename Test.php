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

<form>
	First name:<br>
	<input type="text" name="firstname"><br>
	Last name:<br>
	<input type="text" name="lastname">
	<select name = "box">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select>
	<input type="submit" name="button" value="push">
</form>

</body>
</html>