<?php
$link = mysql_connect("localhost", "root", "");
if(!$link) {
	echo "mysql connect error: ", mysql_error();
	exit;
}
#选择要使用的数据库 
mysql_select_db("db");

#设定编码
mysql_query("set names utf8");
?>