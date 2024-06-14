<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các lệnh xuất (echo + print)</title>
</head>
<body>
<!-- lệnh xuất echo -->
    <?php // xuất chuỗi
        echo("<h1>PHP</h1>");
        echo("lệnh echo<br>");
        echo"Xuất ", "chuỗi ", "có ", "nhiều ". "tham số";

    ?>
    <?php
        $t = "PHP";
        $a = 5;
        $b = 10;
        $kq = $a + $b;
        echo "<h1>" . $t . "</h1>";
        echo $a . " + " . $b . " = " . $kq;
    ?>

<!-------------------------------------------------------------------------->

<!-- lệnh xuất print -->
    <?php // Xuất chuỗi

    ?>
</body>
</html>
<!--
    Để xuất kết quả ta dùng: "echo" và "print"
    + echo: không có giá trị trả về, có thể nhận nhiều tham số
    + print: trả về giá trị 1 (nên có thể dùng trong các biểu thức), chỉ nhận 1 tham số
-->
