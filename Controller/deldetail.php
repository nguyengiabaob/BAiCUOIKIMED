<?php
include "../public/connect.inc";
    $id= $_GET['id'];
    $number=0;
    $type="";
    $sql="select * from tblmedicines where ID_medicines =$id";
    $rs=mysqli_query($con,$sql);
    if($row=mysqli_fetch_array($rs))
    {
        $number=$row['Number'];
        $type=$row["Type"];
    }
    $before_number=0;
    $sql2="select * from tbltype where Name_type ='$type'";
    $rs2=mysqli_query($con,$sql2);
    if($row=mysqli_fetch_array($rs2))
    {
        $before_number=$row['Number'];
       
    }
    $sql1= "delete from tblmedicines where ID_medicines =$id";
    $rs1=mysqli_query($con,$sql1);
    if(!empty($rs1))
    {
        $before_number-=$number;
        $sql="update tbltype set Number= $before_number where Name_type='$type'";
        echo "<script>alert('Bạn xóa thành công')</script>";
        if(isset($_GET['ID']))
        {
            $ID=$_GET['ID'];
            header("location:http://localhost:8080/baicuoiki10/admin/detail.php?ID=$ID");
        }
        else if(isset($_GET['NAME']))
        {
            $NAME=$_GET['NAME'];
            header("location:http://localhost:8080/baicuoiki10/admin/detail.php?ID=1&&NAME=$NAME");
        }
        // header("location:http://localhost:8080/baicuoiki10/admin/detail.php");
    }
?>