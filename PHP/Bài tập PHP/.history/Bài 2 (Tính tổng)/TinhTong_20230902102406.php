<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng</title>
</head>
<body>
    <?php
        if(isset($_POST['btnTong'])) // isset(): kiểm tra một phần tử của mảng đã tồn tại hay chưa để thực thi việc xử lý dữ liệu liên quan đến nó.
        {
            $a = $_POST['txtSonhat'];
            $b = $_POST['txtSohai'];
            if(is_numeric($a) && is_numeric($b)) //is_numeric(mixed $var): kiểm tra 1 biến có phải là số không
            {
                $c = $a + $b;
                echo "$Tổng $a +$b = $c";
            }else{
                echo "Giá trị nhập vào phải là số!";
            }
        }
    ?>
    <form method="POST" action="TinhTong.php">
        Số thứ nhất:
        <input type="text" name="txtSonhat"/>
        Số thứ hai:
        <input type="text" name="txtSohai"/>
        <input type="submit" name="btnTong" value="Tổng"/>
    </form>
</body>
</html>