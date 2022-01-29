
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
	color: #FF0000;
}
.STYLE1 {
	font-family: "微软雅黑";
	font-size: 13px;
}
.STYLE2 {font-family: "微软雅黑"; font-size: 15px; font-weight:600;}
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
<table width="950" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td bgcolor="#cccccc"><img src="images/banner-traffic.jpg" width="950" height="163" /></td>
  </tr>
</table>
<table width="950" height="5" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="435"><table width="950" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" align="center">
      <tr>
        <td height="30" bgcolor="#D0DFFF" align="center"><a name="order_review"><strong>订单查询结果</strong></a></td>
      </tr>
      <tr>
        <td height="400" valign="top" align="center" bgcolor="#FFFFFF">

<?php
if(!isset($_POST["submit"])){
        exit("错误执行");
    }//检测是否有submit操作 

include('connect.php');//链接数据库
// $req=$_POST['posttxt'];
$username=$_POST['username'];
if ($username)
{
$query="select order_id,user_name,location,date,term.start_place,term.arrive_place,term.start_time, price,status,order_time,paymethod_id from (`order` left join term on `order`.term_id=term.term_id and `order`.start_time=term.start_time) where user_name='$username'";
$result=mysqli_query($con,$query);//执行sql

if (!$result)
	{
		echo "Error: " ;//如果sql执行失败输出错误
		echo "
                    <script>
                            setTimeout(function(){window.location.href='welcome.php';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
	}
else
	{
		$row=mysqli_affected_rows($con);
		$cols=mysqli_num_fields($result);
		echo "<p class='STYLE1'>共计".$row."行".$cols."列</p>";
		echo "<DIV align='center' style='BORDER-RIGHT: #cccccc 0px solid; BORDER-TOP: #cccccc 0px solid; 
		SCROLLBAR-FACE-COLOR: #ffffff; FONT-SIZE: 12px; SCROLLBAR-HIGHLIGHT-COLOR: #cccccc; OVERFLOW: auto; 
		BORDER-LEFT: #cccccc 0px solid; WIDTH: 950px; SCROLLBAR-SHADOW-COLOR: #ffffff; COLOR: black; 
		SCROLLBAR-3DLIGHT-COLOR: #ffffff; LINE-HEIGHT: 20px; SCROLLBAR-ARROW-COLOR: #cccccc; SCROLLBAR-TRACK-COLOR: #ffffff; 
		BORDER-BOTTOM: #cccccc 0px solid; SCROLLBAR-DARKSHADOW-COLOR: #cccccc; SCROLLBAR-BASE-COLOR: #ffffff; HEIGHT: 400px'>";
		echo "<table border='1' cellspaceing='0' cellpadding='8' bordercolor='black' class='collapse'><tr>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>订单号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>用户名</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>座位号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>乘车日期</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>目的地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发时间</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>价格(元)</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>订单状态</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>订单时间</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>支付方式</th>";
		echo "</tr>";
		while($rows=mysqli_fetch_array($result))
		{
			echo "<tr>";
			for($i=0;$i<$cols;$i++)
			{
				echo "<td class='STYLE1' align='center'>$rows[$i]</td>";
			}
			echo "</tr>";

		}
		echo "</table></div>";
	}
}
else{
	echo "Error: " ;//如果sql执行失败输出错误
		echo "
                    <script>
                            setTimeout(function(){window.location.href='welcome.php';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
}

mysqli_close($con);

?>		
		
		</td>
      </tr>
    </table></td>
</table>	
</body>
</html>