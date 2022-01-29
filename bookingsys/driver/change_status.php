<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Booking system</title>
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.STYLE1 {
	font-family: "微软雅黑";
	font-size: 13px;
}
.STYLE2 {font-family: "微软雅黑"; font-size: 15px; font-weight:600;}
.STYLE3 {font-family: "微软雅黑"; font-size: 18px; font-weight:600; color:red;}
body {
	margin-top: 10px;
}
.collapse
{
	border-collapse:collapse;
}
-->
</style></head>
<body>
<?php
include('connect.php');//链接数据库
session_start();
$orderid=$_POST['order_id'];
$query="update `order` set status='yes' where order_id='$orderid'";
$result=mysqli_query($con,$query);
if(!$result)
{
	echo "error";
			echo "
                    <script>
                            setTimeout(function(){window.location.href='driver_welcome.php';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到主页面重试;

}
else
{
	echo "		<p class='STYLE3'>确认订单成功！订单已使用</p>";
				echo "
                    <script>
                            setTimeout(function(){window.location.href='driver_welcome.php';},3000);
                    </script>

                ";//如果错误使用js 3秒后跳转到主页面重试;

}

?>
</body>
</html>