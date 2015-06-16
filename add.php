<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档 </title>
</head>

<body>
<form method="post" action="add2.php">
				<tr align="center"><td>Name:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Name" style="width:80%"></p></td></tr>
				<tr align="center"><td>Email:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Email" style="width:80%"></p></td></tr>
				<tr align="center"><td>Tel:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Tel" style="width:80%"></p></td></tr>
				<tr align="center"><td>Gender:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="radio" name="Gender"  value="1" >Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" name="Gender" value="0" />Female</p></td></tr>
				<tr align="center"><td>Birthday:</td></tr>
				<tr align="center" bgcolor="white"><td><p>Month&nbsp&nbsp&nbsp
					<select name="Month" >
						<option value="1">January
						<option value="2">February
						<option value="3">March
						<option value="4">April
						<option value="5">May
						<option value="6">June
						<option value="7">July
						<option value="8">August
						<option value="9">September
						<option value="10">October
						<option value="11">November
						<option value="12">December
					</select>
					&nbsp&nbspDay&nbsp&nbsp
                    <input type="text" name="Day" style="width:10%" >&nbsp&nbsp&nbsp Year&nbsp&nbsp
                    <input type="text" name="Year" style="width:10%" >
				</p></td></tr>
				<tr align="center"><td>Address:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Address" style="width:80%"></p></td></tr>
		</table>
				<input type="submit" value="提交">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="reset" value="重新輸入">
			</form>
</body>
</html>