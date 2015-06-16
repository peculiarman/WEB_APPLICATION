<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档 </title>
</head>

<body>
<?php
include("connect.php");
$result = mysql_query("select * from user where username='".$_POST["username"]."'");

$row = mysql_fetch_row($result);


if(!$row[0]&&$_POST['password']==$_POST['password2']){
	mysql_query("insert into user(username,password,account,email,lastdate) values('".$_POST["username"]."','".$_POST["password"]."','".$_POST["account"]."','".$_POST["email"]."',now())");
	
	echo "注册成功！5秒后跳至登陆界面...";
        echo "<meta http-equiv=\"refresh\" content=\"5;url='login.php'\">";
		}
else {
	echo "用户名已存在！请重新注册。5秒后跳至注册界面...";
	echo "<meta http-equiv=\"refresh\" content=\"5;url='zhuce.php'\">";
	}

?>

</body>
</html>