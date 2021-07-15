<?php

 include "../public/connect.inc";
 if(isset($_POST['med']))
 {
    $med= $_POST['med'];
    $output="";
    $sql= "select * from tblmedicines where NameMedicine LIKE '%$med%'";
    $rs= mysqli_query($con,$sql);
    $output="<ul class ='list-unstyled'>";
    if($rs)
    {
        
        while($row=mysqli_fetch_array($rs))
        {

            $output.="<li class='auto'>".ucwords($row['NameMedicine'])."</li>";

        }
    }
    else
    {
        $output="<li>Không tìm thấy kết quả</li>";
    }
    $output.="</ul>";
    echo $output;
 }

?>