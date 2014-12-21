<html>
<?php
require "c:/etc/config.php";
	$id=$_POST['id'];
	$passwd=$_POST['passwd'];
	$conn=mysql_connect('localhost','root','takming');
	$sql="select * from user_profile where id='{$id}'";
	$res=mysql_query($sql) or die("Can't find data");
	$row=mysql_fetch_array($res);
	$loginSuccess=false;
	if ($row && $row['passwd'])
	{
		if (md5($passwd)==$row['passwd'])
		{
			$loginSuccess=true;
		}
	}
	if($loginSuccess)
	{
		echo "登入成功！";
	}
	else
	{
		echo "登入失敗！請檢查帳號密碼";
	}
?>
</html>