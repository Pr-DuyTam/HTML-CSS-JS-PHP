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
	$so = $_POST['txtSo'];
	if(is_numeric($so))
	{
		$so = (double)$so;
		if($so % 2 == 0)
			echo "<div class='result'>$so là số chẵn</div>";
		else
			echo "<div class='result'>$so là số lẻ</div>";
	}
	else
		echo "<div class='result'>$so không phải là số</div>";
}
?>

<form method="post" action="Bai3.php">
	Nhập vào số nguyên:
	<input type="text" name="txtSo" />
	<input type="submit" name="btnKT" value="Kiểm tra chẵn lẻ" />
</form>
</body>
</html>