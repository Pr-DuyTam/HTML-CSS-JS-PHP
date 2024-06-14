<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
		margin-bottom: 20px;
	}

	form {
		margin-bottom: 20px;
	}

	input[type="text"] {
		padding: 5px;
		width: 100px;
	}

	input[type="submit"] {
		padding: 5px 10px;
		background-color: #4CAF50;
		border: none;
		color: white;
		cursor: pointer;
	}

	.result {
		margin-top: 20px;
	}
</style>
    </style>
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