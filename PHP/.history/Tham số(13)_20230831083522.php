<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tham số</title>
</head>
<body>
    <?php
        function chao($name)
        {
            echo "你好：$name! <br>";
        }
        // gọi hàm
        chao("Peter");
        chao("Duy Tâm");
    ?>
</body>
</html>
<!--
    - Ta có thể đưa thông tin vào hàm thông qua các tham số. Tham số được đặt
    trong dấu ngoặc sau tên hàm, và được dùng tương tự như biến. Nếu hàm có nhiều
    tham số thì phân cách nhau bởi dấu phẩy.
-->