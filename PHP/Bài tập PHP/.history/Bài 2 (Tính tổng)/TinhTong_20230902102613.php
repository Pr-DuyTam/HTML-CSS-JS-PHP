<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng</title>
</head>
<body>
    <?php
        if(isset($_POST['btnTong']))
        {
            $a =$_POST['txtSo1'];
            $b =$_POST['txtSo2'];
            if(is_numeric($a) && is_numeric($b))
            {
                $c = $a +$b;
                echo "Tổng $a + $b = $c";
            }else
            {
                echo "Giá trị nhập vào phải là số!";
            }
        }
    ?>
    <form method="POST" action="XuLy.php">
        Số thứ 1: <input type="text" name="txtSo1"/>
        Số thứ 2: <input type="text" name="txtSo2"/>
        <input type="submit" name="btnTong" value="Tổng">

    </form>
</body>
</html>