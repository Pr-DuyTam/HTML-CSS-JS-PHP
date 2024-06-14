<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['btnTong']))
        {
            $a =$_POST['txtSoNhat'];
            $b =$_POST['txtSoHai'];
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
    <form method="POST" action="TinhTong.php">
        Số thứ 1: <input type="text" name="txtSoNhat"/>
        Số thứ 2: <input type="text" name="txtSoHai"/>
        <input type="submit" name="btnTong" value="Tổng">

    </form>
</body>
</html>