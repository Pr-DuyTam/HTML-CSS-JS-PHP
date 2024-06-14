<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ khóa static</title>
</head>
<body>
    <?php
    function dem()
    {
        static $x = 0;
        echo $x . "<br>";
        $x ++;
    }
    dem();
    dem();
    dem();
    dem();
    ?>
</body>
</html>
<!-- Khi một hàm thực hiện hoàn tất thì các biến của nó sẽ bị hủy.
Nếu ta muốn không bị hủy, thì dùng "static" khi khai báo biến lần đầu. Mỗi lần hàm được gọi thì biến 
sẽ mang giá trị mà nó lưu giữ ở lần gọi gần nhất.