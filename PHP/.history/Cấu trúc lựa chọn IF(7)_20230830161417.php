<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc lựa chọn IF</title>
</head>
<body>
    <?php
/*
- if...else sẽ thực thi công việc nào đó nếu điều kiện là true, ngược lại thì sẽ thực thi công việc khác
- if...elseif...else sẽ lựa chọn thực thi các coong việc tương ứng với nhiều hơn 2 điều kiện.
*/
        $diem = 5;
        if ($diem >= 4)
        {
            echo("Đạt");
        }
        else
        {
            echo"Không đạt";
        }
    ?>
<hr>
<?php
        $sodiem = 8;

        if($sodiem >= 8.5)
        {
            echo"Điểm A";
        }
        elseif($sodiem >=7)
        {
            echo"Điểm B";
        }
        elseif($sodiem >= 5.5)
        {
            echo"Điểm C";
        }
        elseif($sodiem >= 4)
        {
            echo"Điểm D";
        }
        else
        {
            echo"Điểm F";
        }
?>
</body>
</html>