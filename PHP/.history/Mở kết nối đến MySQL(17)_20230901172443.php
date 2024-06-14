<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mở kết nối đến SQL </title>
</head>
<body>
    <?php
    $severname = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($severname , $username , $password);

    if($conn->connect_errno)
    {
        die("Lỗi kết nối: " . $conn->connect_error);
    }
    echo"Kết nối thành công";
    ?>
    <?php
        $conn->close();
    ?>
</body>
</html>