<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div class="search" align="center">WELCOME！</div>
<div align="center">

</form>
</div>
<form action="login.php" method="post">
<input type="submit" name="submit" value="EXIT" /><br />
</form>
<form action="zhuce.php" method="post">
<input type="submit" name="submit" value="我要注册" /><br /><br />
</form>

欢迎<?php echo $_COOKIE["account"]; ?>登陆本系统
<br /><br />
<form action="add.php" method="post">
<input type="submit" name="submit" value="添加" /><br />
  </input>
</a></div>
<br /><br />
<?php
require('page.php');
?>

</body>
</html>