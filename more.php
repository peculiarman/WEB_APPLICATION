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
				<tr align="center"><td>Name:</td></tr>
				<tr align="center" bgcolor="white"><td><p><?php echo $row['Name']?></p></td></tr>
				<tr align="center"><td>Email:</td></tr>
				<tr align="center" bgcolor="white"><td><p><?php echo $row['Email']?></p></td></tr>
				<tr align="center"><td>Phone:</td></tr>
				<tr align="center" bgcolor="white"><td><p><?php echo $row['Tel']?></p></td></tr>
				<tr align="center"><td>Gender:</td></tr>
				<tr align="center" bgcolor="white"><td><p><?php echo $row['Gender']?></p></td></tr>
                <tr align="center"><td>Month</td></tr>
                <tr align="center" bgcolor="white"><td><p><?php echo $row['Month']?></p></td></tr>
                <tr align="center"><td>Day</td></tr>
                <tr align="center" bgcolor="white"><td><p><?php echo $row['Day']?></p></td></tr>
                <tr align="center"><td>Year</td></tr>
                <tr align="center" bgcolor="white"><td><p><?php echo $row['Year']?></p></td></tr>
				<tr align="center"><td>Address</td></tr>
                <tr align="center" bgcolor="white"><td><p><?php echo $row['Address']?></p></td></tr>
		</table>
<?php
}
?>
</body>
</html>
