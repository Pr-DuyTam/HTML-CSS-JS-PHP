<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc lựa chọn switch</title>
</head>
<body>
    <?php // Thực thi các công việc khác nhau tùy vào những điều kiện khác nhau
        $color = "red";
        switch($color)
        {
            case "red": echo "Màu đỏ"; break;
            case "blue": echo "Màu xanh"; break;
            case "black": echo "Màu đen"; break;
            
            default: echo "Khác";
        }
    ?>
</body>
</body>
</html> 