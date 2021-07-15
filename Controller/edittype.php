<?php
    include "../public/connect.inc";
    if(isset($_POST['txttenlsp']))
    {
        $name=$_POST['txttenlsp'];
        $number=$_POST['txtsoluong'];
        $id=$_POST['txtid'];
        $sql="update tbltype set Name_type='$name', Number=$number where ID_type=$id";
        $rs=mysqli_query($con,$sql);
        if(!empty($rs))
        {
            echo "<script>alert('Bạn cập nhật thành công $id')</script>";
            
        }
    }
?>