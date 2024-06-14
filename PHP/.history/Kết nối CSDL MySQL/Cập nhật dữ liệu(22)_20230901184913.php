<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật dữ liệu</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlsv";

        $conn = new mysqli($severname,$username,$password,$dbname);
        if($conn->connect_error){
            die("Lỗi kết nối: " . $conn->connect_error);
        }
        $sql = "UPDATE sinhvien SET hoten='Nguyễn Khánh Duy Tâm' WHERE mssv='DTH205967'";
        if ($conn->query($sql)
    ?>
</body>
</html>