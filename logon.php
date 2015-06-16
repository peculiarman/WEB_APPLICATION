<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("connect.php");
$result = mysql_query("select * from user where account='".$_POST["account"]."'");
$row = mysql_fetch_assoc($result);
if($_POST["password"]==$row["password"]){
	
	setcookie("account",$_POST["account"],time()+36000000,"/");  //设置cookie 保存用户名
echo"用户名和密码正确，请稍候5秒...";
echo"<meta http-equiv=\"refresh\" content=\"5;url='INDEX.php'\">";
}
else{echo "用户名和密码错误！请重新登陆！5秒之后自动跳转至登陆界面。。。";
echo"<meta http-equiv=\"refresh\" content=\"5;url='login.php'\">";
}
?>
</body>
</html>