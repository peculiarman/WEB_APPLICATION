<?php
//设置表单变量 
$name  = $_POST["Name"];
$email  = $_POST["Email"];
$tel     = $_POST["Tel"];
$sex   = $_POST["Gender"];
$address   = $_POST["Address"];
$birthday_year    = $_POST["Year"];
$birthday_month    = $_POST["Month"];
$birthday_day    = $_POST["Day"];
$birthday    = $birthday_year.$birthday_month.$birthday_day;

//需要执行的SQL语句(这里是插入数据功能)
$sql = "INSERT INTO `infortable`
                (`Name` ,`Gender` , `Month`, `Day` , `Year` , `Email` , `Tel` ,  `Address`  ) 
                VALUES
                ('$name','$sex' ,'$birthday_month' ,'$birthday_day' ,'$birthday_year', '$email', '$tel',  '$address')";

//调用conn.php文件进行数据库操作
require('conn.php');

if(mysql_query($sql)) {
	echo 'success!'; 
} else {
	//插入失败
	echo 'fail!';
}
?>