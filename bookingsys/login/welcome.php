<?php session_start(); $username=$_SESSION['username']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Welcome to BCIA Booking system</title>
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
	font-size: 12px;
}
.STYLE2 {font-family: "微软雅黑"; font-size: 14px; font-weight:600;}
body {
	margin-top: 10px;
}
.mytxt {
    color:#333;
    line-height:normal;
    font-family:"Microsoft YaHei",Tahoma,Verdana,SimSun;
    font-style:normal;
    font-variant:normal;
    font-size-adjust:none;
    font-stretch:normal;
    font-weight:normal;
    margin-top:0px;
    margin-bottom:0px;
    margin-left:0px;
    padding-top:4px;
    padding-right:4px;
    padding-bottom:4px;
    padding-left:4px;
    font-size:12px;
    outline-width:medium;
    outline-style:none;
    outline-color:invert;
    border-top-left-radius:3px;
    border-top-right-radius:3px;
    border-bottom-left-radius:3px;
    border-bottom-right-radius:3px;
    text-shadow:0px 1px 2px #fff;
    background-attachment:scroll;
    background-repeat:repeat-x;
    background-position-x:left;
    background-position-y:top;
    background-size:auto;
    background-origin:padding-box;
    background-clip:border-box;
    background-color:rgb(255,255,255);
    margin-right:8px;
    border-top-color:#ccc;
    border-right-color:#ccc;
    border-bottom-color:#ccc;
    border-left-color:#ccc;
    border-top-width:1px;
    border-right-width:1px;
    border-bottom-width:1px;
    border-left-width:1px;
    border-top-style:solid;
    border-right-style:solid;
    border-bottom-style:solid;
    border-left-style:solid;
}
.mytxt:focus {
     border: 1px solid #fafafa;
    -webkit-box-shadow: 0px 0px 6px #007eff;
     -moz-box-shadow: 0px 0px 5px #007eff;
     box-shadow: 0px 0px 5px #007eff;   
    
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
<table width="950" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
  <tr>
    <td height="20"><table width="950" height="10" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="center" bgcolor="#D0DFFF"><a href="#welcome.php">首页</a></td>
        <td height="20" align="center" bgcolor="#D0DFFF"><a href="#route_search">路线查询</a></td>
        <td height="20" align="center" bgcolor="#D0DFFF"><a href="#ticket_book">车票购买</a></td>
        <td height="20" align="center" bgcolor="#D0DFFF"><a href="#order_review">订单查询</a></td>
        <td height="20" align="center" bgcolor="#D0DFFF"><a href="#comment">问题反馈</a></td>
        <td height="20" align="center" bgcolor="#D0DFFF"><a href="logout.php">登出</a></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="950" height="5" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="335"><table width="320" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
      <tr>
        <td height="30" bgcolor="#D0DFFF"><strong>机场巴士</strong></td>
      </tr>
      <tr>
        <td height="300" valign="bottom" bgcolor="#FFFFFF">
		  <p><img src="images/ex_bus.jpg" width="179" height="134" hspace="4" vspace="8" align="center" /></p>
          <p class="STYLE1">市区旅客可方便乘坐市内机场巴士往返首都机场与方庄、北京南站、北京站、公主坟、中关村、上地奥运村、北京西站、回龙观、通州、王府井金宝街、石景山、燕郊、昌平等地，
		  周边城市旅客可乘坐省际机场巴士往返机场与天津、秦皇岛、廊坊、保定、唐山、沧州和赤峰等地。</p>
		  <p class="STYLE1">如需前往机场或顺义地区，请查看空港巴士页面</p>
		</td>
      </tr>
    </table></td>
    <td><table width="320" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
      <tr>
        <td height="30" bgcolor="#D0DFFF"><strong>计价方式</strong></td>
      </tr>
      <tr>
        <td height="300" valign="bottom" bgcolor="#FFFFFF">
          <p class="STYLE2">市内机场巴士：</p>
          <p class="STYLE1">票价：根据站点设置实行阶梯票价，共分为20元、25元、30元三档</p>
          <p class="STYLE2">省际机场巴士：</p>
          <p class="STYLE1">自2014年1月1日起，旅客乘坐首都机场省际机场巴士时需携带有效身份证件购票和乘车。</p>
          <ul>
            <li class="STYLE1">
           北京-天津： 82元/人 （单程）</li>
            <li class="STYLE1">
              北京-秦皇岛：140元/人 （单程）</li>
            <li class="STYLE1">
              北京-廊坊：45元/人 （单程）</li>
            <li class="STYLE1">
              北京-保定：100元/人 （单程）</li>
            <li class="STYLE1">
              北京-唐山：100元/人 （单程）</li>
            <li class="STYLE1">
              北京-沧州：100元/人 （单程）</li>
            <li class="STYLE1">
              北京-赤峰：150元/人 （单程）</li>
			  
          </ul></td>
      </tr>
    </table></td>
    <td><table width="300" height="250" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc">
      <tr>
        <td align="center" bgcolor="#EAEAEA"><img src="images/bus_route.jpg" width="270" height="214" vspace="8" align="middle" /></td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="950" height="5" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="235"><table width="950" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" align="center">
      <tr>
        <td height="30" bgcolor="#D0DFFF" align="center"><a name="route_search"><strong>路线查询</strong></a></td>
      </tr>
      <tr>
        <td height="200" valign="center" bgcolor="#FFFFFF">
		  <form method="post" action="route_search.php" target="new">
                <p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;起始地点：
				<select type=text name="start_place" class="mytxt">
<?php
				include('connect.php');
				$query="select distinct start_place from term";
				$result=mysqli_query($con,$query);
				while($rows=mysqli_fetch_array($result))
				{
				    echo "
					<option value={$rows[0]}>{$rows[0]}</option>
					"; 
				}
?>
				</select>
				</p>			
				<p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;目的地点：
				<select type=text name="arrive_place" class="mytxt">
<?php
				include('connect.php');
				$query="select distinct arrive_place from term";
				$result=mysqli_query($con,$query);
				while($rows=mysqli_fetch_array($result))
				{
				    echo "
					<option value={$rows[0]}>{$rows[0]}</option>
					"; 
				}
?>			

				</select>
				</p>				
				<p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;出发日期：<input type=date name="date" class="mytxt date-picker">

				</p>								
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="搜索">
				<input type="reset" value="清除"></p>
          </form>
		</td>
      </tr>
    </table></td>
</table>	

<table width="950" height="5" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="335"><table width="950" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" align="center">
      <tr>
        <td height="30" bgcolor="#D0DFFF" align="center"><a name="ticket_book"><strong>车票购买</strong></a></td>
      </tr>
      <tr>
        <td height="300" valign="top" bgcolor="#FFFFFF">
		  <form method="post" action="ticket_booking.php">
  		        <p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;用户名：
				<select type=text name="username" class="mytxt">
				
<?php
				    echo "
					<option value={$username}>{$username}</option>
					"; 

?>
				</select></p>
                <p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;起始地点：
				<select type=text name="start_place" class="mytxt">
<?php
				include('connect.php');
				$query="select distinct start_place from term";
				$result=mysqli_query($con,$query);
				while($rows=mysqli_fetch_array($result))
				{
				    echo "
					<option value={$rows[0]}>{$rows[0]}</option>
					"; 
				}
?>
				</select></p>
				<p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;目的地点：
				<select type=text name="arrive_place" class="mytxt">
<?php
				include('connect.php');
				$query="select distinct arrive_place from term";
				$result=mysqli_query($con,$query);
				while($rows=mysqli_fetch_array($result))
				{
				    echo "
					<option value={$rows[0]}>{$rows[0]}</option>
					"; 
				}
?>				
				</select></p>		
								
				<p class='STYLE2'>&nbsp;&nbsp;&nbsp;&nbsp;座位选择：
				<select type=text name='location' class='mytxt'>
<?php
				include('connect.php');
				$query="select location from seats";
				$result=mysqli_query($con,$query);
				while($rows=mysqli_fetch_array($result))
				{
				    echo "
					<option value={$rows[0]}>{$rows[0]}</option>
					"; 
				}
?>	

				</select></p>					
						
				<p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;出发日期：<input type=date name="date" class="mytxt date-picker"></p> 
				<p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;出发时间：
				<select type=text name="start_time" class="mytxt">
<?php
				include('connect.php');
				$query="select distinct start_time from term";
				$result=mysqli_query($con,$query);
				while($rows=mysqli_fetch_array($result))
				{
				    echo "
					<option value={$rows[0]}>{$rows[0]}</option>
					"; 
				}
?>			

				</select></p>					
				<p class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="确定">
				<input type="reset" value="清除"></p>
          </form>
		  <p class="STYLE1" align="center">Please choose the time after:</p>   <p id="time" class="STYLE1" align="center"></p>
<script>     
document.getElementById('time').innerHTML=new Date().toLocaleString();     
setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();",1000);  
</script>
		</td>
      </tr>
    </table></td>
</table>	
<table width="950" height="5" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="135"><table width="950" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" align="center">
      <tr>
        <td height="30" bgcolor="#D0DFFF" align="center"><a name="order_review"><strong>订单查询</strong></a></td>
      </tr>
      <tr>
        <td height="100" valign="center" align="center" bgcolor="#FFFFFF">
		  <form method="post" action="order_review.php" target="new">
  		        <p class="STYLE2">用户名：<textarea cols="10" rows="1" name="username" readonly="readonly"><?php session_start(); echo $_SESSION['username']; ?></textarea></p>
				<p><input type="submit" name="submit" value="搜索">
				<input type="reset" value="清除"></p>
          </form>
		</td>
      </tr>
    </table></td>
</table>	

<table width="950" height="5" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="235"><table width="950" border="0" cellpadding="0" cellspacing="1" bgcolor="#cccccc" align="center">
      <tr>
        <td height="30" bgcolor="#D0DFFF" align="center"><a name="comment"><strong>问题反馈</strong></a></td>
      </tr>
      <tr>
        <td height="200" valign="center" align="center" bgcolor="#FFFFFF">
		  <form name="login" action="comment.php" method="post">
		        <p align="center" class="STYLE2">用户名：<textarea cols="10" rows="1" name="username" readonly="readonly"><?php session_start(); echo $_SESSION['username']; ?></textarea></p>
				<p class="STYLE2"><label>发表评论</label></p>
				<textarea cols="100" rows="10" name="posttxt" class="mytxt"></textarea>
                <p align="center"><input type="submit" name="submit" value="评论">
				<input type="reset" value="清除"></p>
          </form>
<hr style="border:1px dashed #000; height:1px; width:80%">
<p align="center" class="STYLE2">已发表评论</p>
<?php
include('../admin/connect.php');//链接数据库
$query1="select * from requirement where user_name='$username' order by post_time";
$result1=mysqli_query($con,$query1);
if (mysqli_num_rows($result1)<1)
	{
		echo "<p align='left' class='STYLE3'>无评论</p>" ;//如果sql执行失败输出错误
	}
else
	{
		$row=mysqli_num_rows($result1);
		$cols=mysqli_num_fields($result1);
		echo "<p class='STYLE1'>共计".$row."行".$cols."列</p>";
		echo "<DIV align='center' style='BORDER-RIGHT: #cccccc 0px solid; BORDER-TOP: #cccccc 0px solid; 
		SCROLLBAR-FACE-COLOR: #ffffff; FONT-SIZE: 12px; SCROLLBAR-HIGHLIGHT-COLOR: #cccccc; OVERFLOW: auto; 
		BORDER-LEFT: #cccccc 0px solid; WIDTH: 950px; SCROLLBAR-SHADOW-COLOR: #ffffff; COLOR: black; 
		SCROLLBAR-3DLIGHT-COLOR: #ffffff; LINE-HEIGHT: 20px; SCROLLBAR-ARROW-COLOR: #cccccc; SCROLLBAR-TRACK-COLOR: #ffffff; 
		BORDER-BOTTOM: #cccccc 0px solid; SCROLLBAR-DARKSHADOW-COLOR: #cccccc; SCROLLBAR-BASE-COLOR: #ffffff; HEIGHT: 200px'>";
		echo "<table border='1' cellspaceing='0' cellpadding='8' bordercolor='black' class='collapse'><tr>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>评论号</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>用户名</th>";
		echo "<th class='STYLE1' bgcolor='#D0DFFF'>评论时间</th>";
		echo "<th width='500' class='STYLE1' bgcolor='#D0DFFF'>评论内容</th>";
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
		echo "</table></div>";
	}
mysqli_close($con);
?>		  

		</td>
      </tr>
    </table></td>
</table>	

<table width="950" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td align="right" bgcolor="#D0DFFF">更多信息:<a href="http://www.bcia.com.cn/traffic/airbus/">http://www.bcia.com.cn/traffic/airbus/</a></td>
  </tr>
</table>
<p>&nbsp;</p>
<script>
            var defaultDate = document.querySelectorAll('.date-picker');
            for (var i = 0; i<defaultDate.length; i++) {
                defaultDate[i].valueAsDate = new Date();
            }
</script>
<script>
    $(document).ready(function () {
        var time = new Date();
        var day = ("0" + time.getDate()).slice(-2);
        var month = ("0" + (time.getMonth() + 1)).slice(-2);
        var today = time.getFullYear() + "-" + (month) + "-" + (day);
        $('#date_info').val(today);
    })
</script>
</body>
</html>

