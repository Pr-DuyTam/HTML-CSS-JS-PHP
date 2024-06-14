<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trị trả về</title>
</head>
<body>
    <?php // Để hàm trả về một giá trị, ta dùng câu lệnh return
        function plus($a,$b)
        {
            $tong = $a + $b;
            return $tong; // trả về $tong
        }
        echo "12092002 + 14062004 =  " . plus(12092002,14062004);
    ?>
</body>
</html>