<?PHP

    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("错误执行");
    }//检测是否有submit操作 

    include('connect.php');//链接数据库
	
    $adminname = $_POST['adminname'];//post获得用户名表单值
    $password = $_POST['password'];//post获得用户密码单值
	

    if ($adminname && $password){//如果用户名和密码都不为空
             $sql = "select * from admin where admin_name = '$adminname' and pswd='$password'";//检测数据库是否有对应的adminname和password的sql
             $result = mysqli_query($con,$sql);//执行sql
             $rows=mysqli_num_rows($result);//返回一个数值
             if($rows){//0 false 1 true
				   session_start();
				   $_SESSION['adminname']=$adminname;
                   header("refresh:0;url=admin_welcome.php");//如果成功跳转至welcome.html页面
                   exit;
             }else{
                echo "用户名或密码错误";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='../admin/admin_login.html';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
             }
             

    }else{//如果用户名或密码有空
                echo "表单填写不完整";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='../admin/admin_login.html';},1000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

mysqli_close($con);
?>
