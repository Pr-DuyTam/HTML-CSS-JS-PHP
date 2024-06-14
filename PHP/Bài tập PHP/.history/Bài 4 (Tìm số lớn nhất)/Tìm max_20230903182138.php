<!DOCTYPE html>
<html>
	<head>
		<title>Tìm số lớn nhất</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if(isset($_POST['btnKT']))
			{
				$a = $_GET['txtSo1'];
				$b = $_GET['txtSo2'];
				$c = $_GET['txtSo3'];
				if(is_numeric($a) && is_numeric($b) && is_numeric($c))
				{
					$max = max($a, $b, $c);
					echo"Số lớn nhất của $a, $b, $c là $max";
				}
				else
				{
					echo"Giá trị nhập vào phải là số!";
				}
			}
		?>
		<form method="get" action="Bai4.php">
			Số thứ 1: <input type="text" name="txtSo1" size="5" />
			Số thứ 2: <input type="text" name="txtSo2" size="5" />
			Số thứ 3: <input type="text" name="txtSo3" size="5" />
			<input type="submit" name="btnKT" value="Tìm số lớn nhất" />
		</form>
	</body>
</html>