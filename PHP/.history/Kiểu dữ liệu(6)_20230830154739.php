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
        $x = 10;
        echo "<br>Kiểu của x là: ";


    // Kiểu số thực
        $y = 5.25;
        echo "<br>Kiểu của y là: ";

    ?>
<hr>
    <?php // array:  kiểu mảng, lưu dãy gồm nhiều giá trị trong cùng 1 biến
        $major = array("Công nghệ thông tin", "Kỹ thuật phần mềm", "Sư phạm tin học");
        var_dump($major);
        // Kiểu mảng
    ?>
<hr>
    <?php
        class student 
        {
            function student()
            {
                $this->khoa = "Information Technology";
            }
        }
        // Tạo mới một đối tượng
        $st = new student();
        // Lấy thuộc tính của đối tượng
        echo $st->khoa;
    ?>
</body>
</html>