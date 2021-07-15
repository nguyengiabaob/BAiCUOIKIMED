<?php
session_start();
if(isset($_POST['txtusername']))
{
    include "../public/connect.inc";
    $username=$_POST['txtusername'];
    $pass=md5($_POST['txtpassword']);
    $sql= "select * from tblUsers where Username='$username' and Password='$pass'";
    $result= mysqli_query($con, $sql);
    echo "<script>alert('$pass')</script>";
    if(mysqli_num_rows($result)>0)
    {
        if($row=mysqli_fetch_array($result))
        {
            $_SESSION['username']=$username;
            if($row['Level']==1)
            {
               
                header('Location:index.php');
            }
            else
            {
                unset($_SESSION['item_cart']);
                header('Location:../View/Home.php');
            }
        }
        
    }
    else
    {
        echo "<script>alert('Tài khoản hoặc mật khẩu không tồn tại')</script>";
    }
}
?>