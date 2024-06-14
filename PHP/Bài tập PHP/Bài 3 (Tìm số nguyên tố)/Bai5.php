<!DOCTYPE html>
<html>
	<head></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if(isset($_POST['btnKT']))
			{
				$so = $_POST['txtSo1'];
				if (is_numeric($so))
				{
					if($so <= 0)
						echo "$so Không phải là số nguyên tố";
					else
					{
						$dem = 0;
						$chuoi = "";
						for($i = 1; $i < $so; $i++)
						{
							if(KiemTraSNT($i) == true)
							{
								$chuoi .= "$i ";
								$dem++; 
							}
						}
						echo "Có $dem số nguyên tố < $so là ";
						echo "$chuoi";
					}
				}
			}
			function KiemTraSNT($a)
			{
				if ($a <= 0 )
					return false;
				else
				{
					for($i = 2; $i <= $a / 2; $i++)
					{
						if($a % $i ==0)
						return false;
					}
				}
				return true;
			}
		?>
		<form method="POST" action="Bai5.php">
			Nhập số n: <input type="text" name="txtSo1" size="5" />			
			<input type="submit" name="btnKT" value="Tìm số nguyên tố" />
		</form>
	</body>
</html>