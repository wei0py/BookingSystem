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
	color: #6600FF;
}
.STYLE1 {
	font-family: "微软雅黑";
	font-size: 13px;
}
.STYLE2 {font-family: "微软雅黑"; font-size: 15px; font-weight:600;}
.STYLE3 {font-family: "微软雅黑"; font-size: 16px; font-weight:600; color:red;}
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
        <td height="30" bgcolor="#D0DFFF" align="center"><a name="order_review"><strong>路线查询结果</strong></a></td>
      </tr>
      <tr>
        <td height="400" valign="top" align="center" bgcolor="#FFFFFF">

<?php
include('connect.php');//链接数据库
$start_place=$_POST['start_place'];
$arrive_place=$_POST['arrive_place'];
$date=$_POST['date'];
$query1="select * from term where start_place='$start_place' and arrive_place='$arrive_place'";
$query2="select location,route_id,date,term.start_time from (`order` left join term on `order`.term_id=term.term_id and `order`.start_time=term.start_time) where (start_place='$start_place' or arrive_place='$arrive_place') and date='$date'";
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
echo "<p class='STYLE2'>线路详情</p>";
if (mysqli_num_rows($result1)<1)
	{
		echo "<p class='STYLE3'>无此路线，请重新输入</p>" ;//如果sql执行失败输出错误
	}
else
	{
		$row=mysqli_num_rows($result1);
		$cols=mysqli_num_fields($result1);
		echo "<p class='STYLE1'>共计".$row."行".$cols."列</p>";
		echo "<table border='1' cellspaceing='0' cellpadding='8' bordercolor='black' class='collapse'><tr>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>线路编码</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>起始地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>目的地点</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>路线号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>价格(元)</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发时间</th>";
		echo "</tr>";
		
		while($rows1=mysqli_fetch_array($result1))
		{
			echo "<tr>";
			for($i=0;$i<$cols;$i++)
			{
				echo "<td class='STYLE1' align='center'>$rows1[$i]</td>";
			}
			echo "</tr>";
		}
		echo "</table>";


echo "<p class='STYLE2'>已选座位说明</p>";
if(mysqli_num_rows($result2)<1)
{
	echo "<p class='STYLE3'>全部座位可选</p>" ;

}
else{
		$cols2=mysqli_num_fields($result2);
		echo "<table border='1' cellspaceing='0' cellpadding='8' bordercolor='black' class='collapse'><tr>";
		echo "<th class='STYLE3' bgcolor='#D0DFFF'>已选座位</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>路线号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发日期</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>出发时间</th>";
		echo "</tr>";
		
		while($rows2=mysqli_fetch_array($result2))
		{
			echo "<tr>";
			for($i=0;$i<$cols2;$i++)
			{
				echo "<td class='STYLE1' align='center'>$rows2[$i]</td>";
			}
			echo "</tr>";

		}
		echo "</table>";
}

	}
mysqli_close($con);
?>


		
		</td>
      </tr>
    </table></td>
</table>	