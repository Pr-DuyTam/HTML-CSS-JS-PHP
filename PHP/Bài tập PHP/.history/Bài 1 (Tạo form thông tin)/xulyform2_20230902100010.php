<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    // Kiểm tra xem form đã được gửi đi hay chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra xem các trường dữ liệu đã được gửi đi hay chưa
        if (isset($_POST["txtMSSV"]) && isset($_POST["txtHoTen"])) {
            $mssv = $_POST["txtMSSV"];
            $hoTen = $_POST["txtHoTen"];

            // Kiểm tra xem các trường dữ liệu có rỗng hay không
            if (!empty($mssv) && !empty($hoTen)) {
                echo "<h2>THÔNG TIN SINH VIÊN</h2>";
                echo "MSSV: " . $mssv . "<br/>";
                echo "Họ tên: " . $hoTen;
            } else {
                echo "Vui lòng nhập đầy đủ thông tin.";
            }
        } else {
            echo "Có lỗi xảy ra. Vui lòng thử lại.";
        }
    } else {
        echo "Không có dữ liệu được gửi đi.";
    }
    ?>
</body>
</html>