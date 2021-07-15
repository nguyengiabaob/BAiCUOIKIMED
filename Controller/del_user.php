<?php
    include "../public/connect.inc";
    $id= $_GET['id'];
    $sql= "delete from tblusers where ID_user=$id";
    $rs=mysqli_query($con,$sql);
    if(!empty($rs))
    {
        echo "<script>alert('Bạn xóa thành công')</script>";
        header("location:http://localhost:8080/baicuoiki10/admin/user.php");
    }
?>