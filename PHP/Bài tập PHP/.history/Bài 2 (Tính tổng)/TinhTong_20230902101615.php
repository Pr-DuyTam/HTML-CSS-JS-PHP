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

        }
    ?>
    <form method="POST" action="TinhTong.php">
        Số thứ nhất:
        <input type="text" name="txtSo1"/>
        Số thứ hai:
        <input type="text" name="txtSo2"/>
        <input type="submit" name="btnTong" value="Tổng"/>
    </form>
</body>
</html>