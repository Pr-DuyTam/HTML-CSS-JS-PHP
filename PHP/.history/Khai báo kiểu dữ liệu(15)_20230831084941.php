<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khai báo kiểu dữ liệu</title>
</head>
<body>
    <?php
        function plus(int $a, int $b) : int
        {
            return $a - $b;
        }
        echo "14062004 - 12092002 = " . plus(14062004,12092002);
    ?>
</body>
</html>