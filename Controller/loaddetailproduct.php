<?php
    include "../public/connect.inc";
    $id= $_GET['id_pro'];
    $name="";
    $des="";
    $price= 0;
    $img="";
    $type="";
    $number="";

    $sql="select * from tblmedicines where ID_medicines=$id";
    $rs=mysqli_query($con,$sql);
    if($rs)
    {
        if($row=mysqli_fetch_array($rs))
        {
            $name=$row['NameMedicine'];
            $id_product=$row['ID_medicines'];
            $price=$row["PriceMedicine"];
            $img=$row["ImgMedicine"];
            $type=$row["Type"];
            $number=$row["Number"];
            $des=$row['description'];
        }
    }
?>