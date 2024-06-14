<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểu dữ liệut</title>
</head>
<body>
    <?php
    // Kiểu chuỗi
        $s1 = "Minh họa";
        $s2 = "các kiểu dữ liệu";
        echo "<h3>" . $s1 . " " . $s2 . "</h3>";

    // kiểu số nguyên
        $s = 10;
        echo "<br>Kiểu của s là: ";
        var_dump($s);

    // Kiểu số thực
        $h = 5.25;
        echo "<br>Kiểu của h là: ";
        var_dump($h);
    ?>
<hr>
    <?php // array:  kiểu mảng, lưu dãy gồm nhiều giá trị trong cùng 1 biến
        $major = array("Công nghệ thông tin", "Kỹ thuật phần mềm", "Sư phạm tin học");
        var_dump($major);
    ?>

</body>
</html>