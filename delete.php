<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete_success </title>
</head>

<body>
<?php
$id=$_GET["id"];
$sql = "DELETE FROM `infortable` WHERE `Id`='$id'";

//调用conn.php文件，执行数据库操作                
require('conn.php'); 

if(mysql_query($sql))
{
        echo '<div class="div" style="color:red; font-size:36px" >Delete Success!</div>';
}
?>
</body>
</html>