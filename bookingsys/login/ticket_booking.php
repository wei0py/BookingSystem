<?php
include('connect.php');//链接数据库
$username=$_POST['username'];
$start_place=$_POST['start_place'];
$arrive_place=$_POST['arrive_place'];
$date=$_POST['date'];
$start_time=$_POST['start_time'];
$location=$_POST['location'];
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
        <td height="30" bgcolor="#D0DFFF" align="center"><a name="order_review"><strong>购票页面</strong></a></td>
      </tr>
      <tr>
        <td height="400" valign="top" align="center" bgcolor="#FFFFFF">


<?php
$query1="select * from term where start_place='$start_place' and arrive_place='$arrive_place' and start_time='$start_time'";
$query2="select * from (`order` left join term on `order`.term_id=term.term_id and `order`.start_time=term.start_time) where (start_place='$start_place' or arrive_place='$arrive_place') and date='$date' and start_time='$start_time' and location='$location'";
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
$now=date("Y-m-d");
if(strtotime($date)<strtotime($now))
{
		echo "<p class='STYLE3'>请正确选择出发日期与时间</p>" ;
		echo "
                    <script>
                            setTimeout(function(){window.location.href='welcome.php';},2000);
                    </script>

                ";// 2秒后跳转到登录页面重试;

}
else
{
if (mysqli_num_rows($result1)<1)
	{
		echo "<p class='STYLE3'>无此路线，请重新选择</p>" ;
		echo "
                    <script>
                            setTimeout(function(){window.location.href='welcome.php';},2000);
                    </script>

                ";// 2秒后跳转到登录页面重试;
	}
else
	{
		if(mysqli_num_rows($result2)>0)
		{
			echo "<p class='STYLE3'>座位已占用，请重新选择</p>";
			echo "
                    <script>
                            setTimeout(function(){window.location.href='welcome.php';},2000);
                    </script>

                ";//2秒后跳转到登录页面重试;
		}
		else
		{
		echo "<p class='STYLE2'>信息确认</p>";
		$row=mysqli_num_rows($result1);
		$cols=mysqli_num_fields($result1);
		echo "<p class='STYLE1'>共计".$row."行".$cols."列</p>";
		echo "<table border='1' cellspaceing='0' cellpadding='8' bordercolor='black' class='collapse'><tr>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>购票用户</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>线路编码</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>起始地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>目的地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>路线号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>价格(元)</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发时间</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>座位号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发日期</th>";		
		echo "</tr>";
		echo "<tr>";
		echo "<th class='STYLE1' align='center'>".$username."</th>";
		
		while($rows1=mysqli_fetch_array($result1))
		{
			for($i=0;$i<$cols;$i++)
			{
				echo "<td class='STYLE1' align='center'>$rows1[$i]</td>";
			}
		}
		echo "<th class='STYLE1' align='center'>".$location."</th>";
		echo "<th class='STYLE1' align='center'>".$date."</th>";
		echo "</tr>";
		echo "</table>";
		session_start();
		$_SESSION['user_name']=$username;
		$_SESSION['start_place']=$start_place;
		$_SESSION['arrive_place']=$arrive_place;
		$_SESSION['date']=$date;
		$_SESSION['start_time']=$start_time;
		$_SESSION['location']=$location;
		$_SESSION['price']=$rows1[4];
		echo "<form method='post' action='booking_confirm.php'>
				<p class='STYLE2'>&nbsp;&nbsp;&nbsp;&nbsp;支付方式：
				<select type=text name='paymethod'>
				<option value='1'>Paypal</option>
				<option value='2'>Alipay</option>
				<option value='3'>creditcard</option>
				</select></p>
  		    	<p><input type='submit' name='submit' value='确定购买'>
				</p>
          </form>		";
		}
	}
}
mysqli_close($con);
?>
  

		
		</td>
      </tr>
    </table></td>
</table>	
</body>
</html>