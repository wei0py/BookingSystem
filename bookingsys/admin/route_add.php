<?php
include('connect.php');//链接数据库
$term_id=$_POST['term_id'];
$start_place=$_POST['start_place'];
$arrive_place=$_POST['arrive_place'];
$price=$_POST['price'];
$route_id=$_POST['route_id'];
$start_time=$_POST['start_time'];

?>
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
$query="insert into term values ('$term_id','$start_place','$arrive_place','$route_id','$price','$start_time')";
$result1=mysqli_query($con,$query);

if (!$result1)
	{
		echo "<p class='STYLE3'>error</p>" ;
		echo "
                    <script>
                            setTimeout(function(){window.location.href='admin_welcome.php';},2000);
                    </script>

                ";// 2秒后跳转到主页面重试;
	}
else
	{

		echo "<p class='STYLE3'>成功添加一条记录</p>";
		echo "<table border='1' cellspaceing='0' cellpadding='8' bordercolor='black' class='collapse'><tr>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>线路编码</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>起始地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>目的地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>路线号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>价格(元)</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发时间</th>";
		echo "</tr>";
		echo "<tr>";		
		echo "<th class='STYLE1' align='center'>".$term_id."</th>";
		echo "<th class='STYLE1' align='center'>".$start_place."</th>";
		echo "<th class='STYLE1' align='center'>".$arrive_place."</th>";
		echo "<th class='STYLE1' align='center'>".$route_id."</th>";
		echo "<th class='STYLE1' align='center'>".$price."</th>";
		echo "<th class='STYLE1' align='center'>".$start_time."</th>";
		echo "</tr>";
		echo "</table>";
					echo "
                    <script>
                            setTimeout(function(){window.location.href='admin_welcome.php';},3000);
                    </script>

                ";//3秒后跳转到主页面重试;

	}

mysqli_close($con);
?>
</body>
</html>