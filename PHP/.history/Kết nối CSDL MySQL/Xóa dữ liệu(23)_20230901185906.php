<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa dữ liệu</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlsv";

        $conn = new mysqli($severname,$username,$password,$dbname);
        if ($conn->connect_error)
        {
            die("Lỗi kết nối: " . $conn->connect_error);
        }
        $sql = "DELETE FROM sinhvien WHERE mssv='DTH205967'";
        if ($conn->query($sql) == true)
        {
            echo "Đã xóa thành công";
        }else
        {
            echo"Lỗi xóa: ".$conn->error;
        }
        $conn->close();
    ?>
</body>
</html>
<!--
    Để xóa dữ liệu, ta dùng câu lệnh DETELE cú pháp:
        DELETE FROM table_name
        WHERE some_column = some_value
-->