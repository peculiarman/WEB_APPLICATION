<?php
	$id=$_GET["id"];
	$sql = "SELECT * FROM `infortable` WHERE `Id`='$id'";
                
require('conn.php');
$result = mysql_query($sql);
while ($row=mysql_fetch_array($result)) { 
?>
<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class="search" align="center">Contract</div>
		<table width="100%" frame="void" cellpadding="10%">
<form method="post" action="edited.php">
				<tr align="center"><td>Name:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Name" style="width:80%" value="<?php echo $row['Name']?>"></p></td></tr>
				<tr align="center"><td>Email:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Email" style="width:80%" value="<?php echo $row['Email']?>"></p></td></tr>
				<tr align="center"><td>Phone:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Tel" style="width:80%" value="<?php echo $row['Tel']?>"></p></td></tr>
				<tr align="center"><td>Gender:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="radio" name="Gender"  value="1" >Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" name="Gender"  value="0" />Female</p></td></tr>
				<tr align="center"><td>Birthday:</td></tr>
				<tr align="center" bgcolor="white"><td><p>Month&nbsp&nbsp&nbsp
					<select name="Month">
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
                    <input type="text" name="Day" style="width:10%" value="<?php echo $row['Day']?>">&nbsp&nbsp&nbsp Year&nbsp&nbsp
                    <input type="text" name="Year" style="width:10%" value="<?php echo $row['Year']?>">
				</p></td></tr>
				<tr align="center"><td>Address:</td></tr>
				<tr align="center" bgcolor="white"><td><p><input type="text" name="Address" style="width:80%" value="<?php echo $row['Address']?>"></p></td></tr>
		</table>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input name="ID" type="hidden" value="<?php echo $row['Id']?>" />
				<input type="submit"  value="提交">
		</form>
<?php
}
?>
</body>
</html>
