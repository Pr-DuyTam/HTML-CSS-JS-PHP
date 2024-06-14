<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn dữ liệu</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlsv";
    // Tạo kết nối
    $conn = new mysqli($severname,$username,$password,$dbname);
    // kiểm tra kết nối
    if ($conn->connect_error)
    {
        die("Lỗi kết nối: " . $conn->connect_error);
    }

    $sql ="select * from sinhvien";
    $result = $conn->connect_error;

    if ($result->num_rows > 0)
    {
        // xuất từng dòng dữ liệu
        while($row = $result->fetch_assoc())
        {
            echo "MSSV: " . $row["mssv"]. "- Họ tên: " . $row["hoten"] . "<br>";
        }
    }else
    {
        echo "Không có dữ liệu"
    }
    ?>
</body>
</html>