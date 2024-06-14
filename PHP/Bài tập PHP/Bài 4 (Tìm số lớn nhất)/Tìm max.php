<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số lớn nhất</title>
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
if(isset($_GET['btnKT']))
{
	$a = $_GET['txtSo1'];
	$b = $_GET['txtSo2'];
	$c = $_GET['txtSo3'];
	if(is_numeric($a) && is_numeric($b) && is_numeric($c))
	{
		$max = max($a, $b, $c);
		echo "<div class='result'>Số lớn nhất của $a, $b, $c là $max</div>";
	}
	else
	{
		echo "<div class='result'>Giá trị nhập vào phải là số!</div>";
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