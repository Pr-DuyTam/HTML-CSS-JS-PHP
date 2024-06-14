<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc lặp foreach</title>
</head>
<body>
    <?php // được dùng để lặp trên một mảng
        $major = array("Công nghệ thông tin" , "Sư phạm Ngữ Văn" , "Ngôn ngữ Anh");
// array: là một kiểu cấu trúc dữ liệu cho phép bạn lưu trữ nhiều phần tử của kiểu dữ liệu tương tự nhau dưới một biến duy nhất
        foreach($major as $n)
        {
            echo "$n <br>";
        }
    ?>
</body>
</html>