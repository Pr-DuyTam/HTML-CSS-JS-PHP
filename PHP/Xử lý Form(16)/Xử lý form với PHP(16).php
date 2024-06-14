<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý form với PHP</title>
</head>
<body>
    <form action="xulyform.php" method="post">
        <table>
            <tr>
                <td>
                    Name: 
                </td>
                <td>
                    <input type="text" name="txtName">
                </td>
            </tr>

            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="text" name="txtAddress">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Gửi">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<!--
    Để thu thập dữ liệu từ form, trong PHP có các biến toàn cục $_GET, $_POST hỗ trọ lấy giá trị của các phần tử trên form thông qua phương thức truyền gửi dữ liệu get, post tương ứng.
-->