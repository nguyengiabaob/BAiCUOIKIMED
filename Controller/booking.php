<?php
include "../public/connect.inc";
if(isset($_POST['txtname_b']))
{
    $name=$_POST['txtname_b'];
    $email=$_POST['txtemail_b'];
    $phone=$_POST['txtphone_b'];
    $date=$_POST['txtdate'];
    $symptom=$_POST['txtsymptom'];
    $sql="insert into tblcontacts (name_customer,email_customer,phone_customer,date,content,type) values('$name','$email','$phone','$date','$symptom', 'Lịch hẹn')";
    $rs=mysqli_query($con,$sql);
    if($rs)
    {
       echo 1;
    }
    else
    {
        echo 0;
    }
}
?>