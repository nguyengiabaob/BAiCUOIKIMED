<?php
include "../public/connect.inc";
if(isset($_POST['txttenlsp']))
{
    $name=$_POST['txttenlsp'];
    $sql="insert into tbltype (Name_type,Number) values('$name',0)";
    $rs=mysqli_query($con,$sql);
    if(!empty($rs))
    {
        echo "<script>alert('Thêm thành công')</script>";
    }
}

?>