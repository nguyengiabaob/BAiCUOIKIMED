<?php
    include "../public/connect.inc";
    $id= $_GET['id'];
    $sql= "delete from tblcontacts where ID=$id";
    $rs=mysqli_query($con,$sql);
    if(!empty($rs))
    {
        echo "<script>alert('Bạn xóa thành công')</script>";
        header("location:http://localhost:8080/baicuoiki10/admin/contacts.php");
    }
?>