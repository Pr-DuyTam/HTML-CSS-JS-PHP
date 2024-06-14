<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc lặp while</title>
</head>
<body>
    <?php // thực hiện lặp lại một khối lệnh trong khi điều kiện là true
        $t = 1; $a = 11;
        while($t <= 5)
        {
            echo"Số $t <br>";
            $t++;
        }

        // do...while luôn thực hiện một khối lệnh, sau đó lặp lại khối lệnh này trong khi điểu kiện vẫn là true
        do{
            echo "Số $a <br>";
            $a++;
        }while ($a <= 15)
    ?>

    <?php
        $m = 10;
    ?>
</body>
</html>