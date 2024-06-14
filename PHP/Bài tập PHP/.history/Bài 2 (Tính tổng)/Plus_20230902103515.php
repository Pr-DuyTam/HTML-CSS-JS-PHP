<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plus</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #6633FF;
            border-radius: 5px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6633FF;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container form input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #6633FF;
            border-radius: 3px;
        }

        .container form input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #6633FF;
            color: #ffffff;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover {
            background-color: #330099;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        .error {
            text-align: center;
            margin-top: 20px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>TÍNH TỔNG</h2>
        <?php
        if (isset($_POST['btnTong'])) {
            $a = $_POST['txtSoNhat'];
            $b = $_POST['txtSoHai'];
            if (is_numeric($a) && is_numeric($b)) {
                $c = $a + $b;
                echo "<div class='result'>Tổng $a + $b = $c</div>";
            } else {
                echo "<div class='error'>Giá trị nhập vào phải là số!</div>";
            }
        }
        ?>
    <form method="POST" action="TinhTong.php">
        Số thứ 1: <input type="text" name="txtSoNhat"/>
        Số thứ 2: <input type="text" name="txtSoHai"/>
        <input type="submit" name="btnTong" value="Tổng">
    </form>
    </div>
</body>
</html>