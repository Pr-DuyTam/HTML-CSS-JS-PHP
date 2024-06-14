<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ khóa static</title>
</head>
<body>
    <?php
    function dem()
    {
        static $x = 0;
        echo $x . "<br>";
        $x ++;
    }
    dem();
    dem();
    dem();
    ?>
</body>
</html>