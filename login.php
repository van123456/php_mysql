<?php
//连接数据库
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myDB";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}        
$name = $_POST['name'];
$email = $_POST['email'];  
//根据条件查找
$check_query = mysqli_query($conn,"SELECT * FROM login");
//将返回值转化成数组
$test=mysqli_fetch_array($check_query);
if ($row = $test){
        if($row["email"]==$email and $row["name"]==$name){ 
                echo "登录成功";
                include "login_1.js";
}
        else{
                echo "登录失败";
}   
    
}
else{
        echo "没有读取数据库";
}
$conn->close();
?>
