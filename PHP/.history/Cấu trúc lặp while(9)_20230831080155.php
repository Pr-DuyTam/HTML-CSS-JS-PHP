<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc lặp while</title>
</head>
<body>
    <?php // thực hiện lặp lại một khối lệnh trong khi điều kiện là true
        $x = 1; $y = 11;
        while($x <= 5)
        {
            echo"Số $x <br>";
            $x++;
        }

        // do...while luôn thực hiện một khối lệnh, sau đó lặp lại khối lệnh này trong khi điểu kiện vẫn là true
        do{
            echo "Số $y <br>";
            $y++;
        }while ($y <= 15)
    ?>
</body>
</html>