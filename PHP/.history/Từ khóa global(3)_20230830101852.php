<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ khóa global</title>
</head>
<body>
    <?php
    $so1 = 2;
    $so2 = 100;
    function tinh()
    {
        global $so1, $so2; 
        $so2 = $so1 + $so2;

    }
    tinh();
    echo $so2;
    ?>
</body>
</html>
<!--
    Phạm vi khả dụng của biến là trong hàm chứa nó, còn biến được khai báo bên ngoài hàm thì chỉ được truy cập
    ở phạm vi ngoài hàm. Nếu ở trong một hàm mà muốn dùng biến bên ngoài ta có thể khai báo thêm từ khóa "global"
-->