<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo database</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
    
        $conn = new mysqli($severname ,$username , $password);
        if($conn->connect_error)
        {
            die("Lỗi kết nối: " . $conn->connect_error);
        }
// Tạo database
        $sql = "CREATE DATABASE qlsv";
        if ($conn->query($sql) == TRUE)
        {
            echo "Tạo database thành công";
        }
        else
        {
            echo "Lỗi tạo database: " . $conn->error;
        }
        $conn->close();
    ?>
</body>
</html>