<?php
$id=$_POST["ID"];
$name=$_POST["Name"];
$email=$_POST["Email"];
$tel=$_POST["Tel"];
$sex=$_POST["Gender"];
$address=$_POST["Address"]; 
$day=$_POST["Day"];
$year=$_POST["Year"];
$month=$_POST["Month"];
$sql = "UPDATE `infortable` SET  
                `Name`  = '$name',
                `Email`     = '$email',
                `Tel`   = '$tel',
                `Gender`   = '$sex',
                `Address`    = '$address',
				`Day` =  '$day',
				`Month` =  '$month',
				`Year` =  '$year'
                
                WHERE `infortable`.`Id` ='$id'";

//调用conn.php文件，执行数据库操作                
require('conn.php'); 
if(mysql_query($sql))
{
	echo 'Success!';
}
?>