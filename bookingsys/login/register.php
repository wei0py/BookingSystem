<?php
include('connect.php');//链接数据库
$name=$_POST['name'];
$password=$_POST['password'];
$pwd_again=$_POST['pwd_again'];
$tel=$_POST['tel'];
$query = "SELECT * FROM user WHERE user_name = '$name'";
$data = mysqli_query($con,$query);

if($name==""|| $password=="")
{
	echo"用户名或者密码不能为空";
	                echo "
                      <script>
                            setTimeout(function(){window.location.href='../login/register.html';},1000);
                      </script>";
}
else
{
    if (mysqli_num_rows($data) == 0) 
	{
        // 把内容插入数据库
		if($password!=$pwd_again)
		{
    	echo"两次输入的密码不一致,请重新输入！";
		echo "
                      <script>
                            setTimeout(function(){window.location.href='../login/register.html';},1000);
                      </script>";
    	}
		else
		{
			$q="insert into user(user_name,pswd,tel) values ('$name','$password','$tel')";//向数据库插入表单传来的值的sql
			$result=mysqli_query($con,$q);//执行sql
    
			if (!$result)
			{
				die('Error: ' . mysqli_error());//如果sql执行失败输出错误
			}
			else
			{
				echo "注册成功";//成功输出注册成功
                echo "
                      <script>
                            setTimeout(function(){window.location.href='../login/login.html';},1000);
                      </script>";				
			}

        exit();
		}
    } 
	else 
	{
        echo "用户名已被占用，请重新选择用户名";
		echo "
                      <script>
                            setTimeout(function(){window.location.href='../login/register.html';},1000);
                      </script>";
    }
}
mysqli_close($con);
?>
