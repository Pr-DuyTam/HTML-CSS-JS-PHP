<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form thông tin</title>
    <style type="text/css">
        table{
            border: 1px groove #6633FF;
            padding: 1px;
        }
        th, td{
            padding: 3px;
        }
    </style>
    <script language="Javascrip">

    </script>
</head>
<body>
    <form action="xylyform.php" name="f" method="POST">
        <table align="center">
            <tr>
                <td colspan="2" align="center">THÔNG TIN SINH VIÊN</td>
            </tr>

            <tr>
                <td>Mã số SV</td>
                <td><input type="text" name="txtMSSV"></td>
            </tr>

            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="txtHoTen"></td>
            </tr>

            <tr>
                <td align="center" colspan="2">
                    <input type="submit" name="btnGui" value="Gửi"/>
                    <input type="reset" name="btnXoa" value="Xóa"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>