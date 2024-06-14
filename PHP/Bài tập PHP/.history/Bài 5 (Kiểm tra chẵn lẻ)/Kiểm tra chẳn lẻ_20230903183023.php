<!DOCTYPE html>
<html>
	<head>
		<title>Bài 03</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if(isset($_POST['btnKT']))
			{
				$so = $_POST['txtSo'];
				if(is_numeric($so))
				{
					$so = (double)$so;
					if($so % 2==0)
						echo"$so là số chẵn";
					else
						echo"$so là số lẻ";
				}
				else
					echo "$so không phải là số";
			}
		?>
		<form method="post" action="Bai3.php">
			Nhập vào số nguyên:
			<input type="text" name="txtSo" />
			<input type="submit" name="btnKT" value="Kiểm tra chẵn lẻ" />
		</form>
	</body>
</html>