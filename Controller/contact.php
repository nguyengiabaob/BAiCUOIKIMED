<?php
include "../public/connect.inc";
if(isset($_POST['txtname']))
{
    $name=$_POST['txtname'];
    $email=$_POST['txtemail'];
    $phone=$_POST['txtphone'];
    $context=$_POST['txtcontent'];
    $sql="insert into tblcontacts (name_customer,email_customer,phone_customer,content,type) values('$name','$email','$phone','$context', 'Liên hệ')";
    $rs=mysqli_query($con,$sql);
    if($rs)
    {
        echo"<script>alert('Yêu cầu của bạn đã được gửi đi')</script>";
    }
}
?>