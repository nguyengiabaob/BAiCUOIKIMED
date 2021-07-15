<?php

if(isset($_POST['txtpassword']))
{
    $user_name=$_POST['txt_username'];
    $f_name=$_POST['txt_firstName'];
    $l_name=$_POST['txt_lastName'];
    $email=$_POST['txt_email'];
    $pass=md5($_POST['txtpassword']);
    include "../public/connect.inc";
    $sql="insert into tblusers(Username,FirstName,LastName,Email,Password) values('$user_name','$f_name','$l_name','$email','$pass')";
    $rs= mysqli_query($con,$sql);
    if($rs)
    {
        echo "<script>alert('Bạn đã đăng ký thành công')</script>";
        sleep(5);
        header("location:login.php");
    }
    
}
?>