//注册模块
<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

    $username=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
    //
    //数据存到session，初始化格式可能有点问题
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['userid'];

    include('connect.php');//链接数据库
    $q="insert into user(id,username,password) values (null,'$name','$password')";//向数据库插入表单传来的值的sql
    $reslut=mysql_query($q,$con);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{
        echo "注册成功";//成功输出注册成功
    }

    

    mysql_close($con);//关闭数据库

?>

