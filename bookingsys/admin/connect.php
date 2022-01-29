<?php
    $server="localhost";//主机
    $db_username="root";//你的数据库用户名
    $db_password="zhangbuyu163";//你的数据库密码

    $con = mysqli_connect($server,$db_username,$db_password,'bookingsys');//链接数据库
    if(!$con){
        die("can't connect".mysqli_error());//如果链接失败输出错误
    }
    
?>