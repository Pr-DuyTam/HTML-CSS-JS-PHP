<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo bảng</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlsv";
    //Tạo kết nối
        $conn = new mysqli($severname,$username,$password,$dbname);
    // Kiểm tra kết nối
        if($conn->connect_error)
        {
            die("Lỗi kết nối: " . $conn->connect_error);
        }
    // Tạo bảng
        $sql = "CREATE DATABASE sinhvien(mssv Char(9) Primary key, hoten varchar(50) not null)";
        if($conn->query($sql) == true) 
        {
            echo"Tạo bảng thành công";
        }
        else
        {
            echo"Lỗi tạo bảng: " . $conn->error;
        }
        $conn->close();
            ?>
</body>
</html>