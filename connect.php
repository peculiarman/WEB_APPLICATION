<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>


<body> 
<?php
$link = mysql_connect('localhost','root','') or die("数据库连接失败！");//连接数据库
mysql_select_db('liuyanban',$link);
mysql_query("set names utf8");
?>
</body>
</html>