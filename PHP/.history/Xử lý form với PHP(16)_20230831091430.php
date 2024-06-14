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
    <h3>Thông tin của bạn</h3>
    Name: 
    <?php echo $_POST["txtName"]; ?> <br>
    Address:
    <?php echo $_POST["txtAddress"]; ?>
</body>
</html>