
<html>
<head>
</head>
<body>
    <h3>Thông tin của bạn</h3>
    Name: 
    <?php echo $_POST["txtName"]; ?> <br>
    Address:
    <?php echo $_POST["txtAddress"]; ?>
</body>
</html>
<!--
- Trong ví dụ này, form có 2 phần tử text. Dữ liệu trên form sẽ được gửi sang xulyform.php theo phương thức post.
Bây giờ ta sẽ viết trang xulyform.php đơn giản, thực hiện lấy dữ liệu người dùng đã nhập trên form thông qua biến $_POST và xuất ra trình duyệt.
-->