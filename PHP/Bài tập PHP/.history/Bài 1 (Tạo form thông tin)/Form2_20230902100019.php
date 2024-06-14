<!DOCTYPE html>
<html>
	<head>
		<title>Untitled Document</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">
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
			}
			
			.container table {
				width: 100%;
			}
			
			.container th, .container td {
				padding: 10px;
				border-bottom: 1px solid #6633FF;
			}
			
			.container td input[type="text"] {
				width: 100%;
				padding: 5px;
				border: 1px solid #6633FF;
				border-radius: 3px;
			}
			
			.container td input[type="submit"], .container td input[type="reset"] {
				padding: 5px 10px;
				border: none;
				border-radius: 3px;
				background-color: #6633FF;
				color: #ffffff;
				cursor: pointer;
			}
			
			.container td input[type="submit"]:hover, .container td input[type="reset"]:hover {
				background-color: #330099;
			}
			
		</style>
		<script language="Javascript">

		</script>
	</head>

	<body>
		<div class="container">
			<h2>THÔNG TIN SINH VIÊN</h2>
			<form name="f" method="POST" action="xulyform2.php">
				<table>
					<tr>
						<td>Mã số SV</td>
						<td><input type="text" name="txtMSSV" /></td>
					</tr>
					<tr>
						<td>Họ tên</td>
						<td><input type="text" name="txtHoTen" /></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="btnGui" value="Gửi" />
							<input type="reset" name="btnXoa" value="Xóa" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>