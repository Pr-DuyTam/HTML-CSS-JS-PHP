<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlsv";

    // Tạo kết nối
        $conn = new mysqli($severname,$username,$password,$dbname);
    // Kiểm tra kết nối
        if($conn->connect_error)
        {
            die("Lỗi kết nối: " . $conn->connect_error);
        }
    // Chèn dữ liệu
        $sql = "INSERT INTO sinhvien(mssv,hoten)
        VALUES('DTH205967', 'Nguyễn Khánh Duy Tâm')";
        if($conn->query($sql)==true)
    ?>
</body>
</html>