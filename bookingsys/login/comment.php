<?php
if(!isset($_POST["submit"])){
        exit("错误执行");
    }//检测是否有submit操作 

include('connect.php');//链接数据库
$req=$_POST['posttxt'];
$username=$_POST['username'];
if ($req)
{
$query="insert into requirement(req_id,user_name,post_time,req) values (null,'$username',now(),'$req')";
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
		echo "评论成功";//成功输出
		echo "
                    <script>
                            setTimeout(function(){window.location.href='welcome.php';},1000);
                    </script>

                ";
	}
}
else{
	echo "Error: 评论不可为空" ;//如果sql执行失败输出错误
		echo "
                    <script>
                            setTimeout(function(){window.location.href='welcome.php';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
}

mysqli_close($con);

?>