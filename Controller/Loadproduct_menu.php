<?php
session_start();
include "../public/connect.inc";
$sql="select * from tblmedicines";
$n=1;
$rs=mysqli_query($con,$sql);
$show="";
if(mysqli_num_rows($rs)>0)
{
    
    // echo "có dữ liệu ";
    while($row=mysqli_fetch_array($rs) and $n<=12)
        {
            $id=$row["ID_medicines"];
            $name=$row['NameMedicine'];
            $price=$row['PriceMedicine'];
            $img=$row['ImgMedicine'];
            $show.=" 
            <div class='col-lg-3'>
            <div class='row'>
            <div class='col-lg-11 showproduct ' style=' display: flex; flex-direction: column; justify-content: center; align-items: center; '  >
            <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
            <img src='$img' style='width: 250px; height:280px'>
              <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name</h5></a>
              <h6 style='color: #0a662e;'>Giá : $price VND</h6>
            </div>
            <div style='display: flex; flex-direction: row; margin-bottom: 10px;'>
            
            
             <button  class='buttoncart' data-id2=$id  style='font-size: 14px; padding: 10px ; margin-left: 1px;'> <i  style ='margin-right: 3px;' class='fas fa-shopping-cart'></i>Cho vào giỏ hàng</button>
        
           <div style='margin-left: 12px; padding-top: 8px;'>
           ";
           if(!empty($_SESSION['username']))
           {
             $show.="<a href='paying.php?id_pick=$id&&add=1' style=' font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
           }
           else
           {
             $show.="<a href='../admin/login.php' style=' font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
           }

           $show.="  
           </div>
           </div>
           </div>
           </div>
           </div>
           \n
           ";
            $n++;
        }
    echo $show;
}
else
{
    // echo " không có dữ liệu ";
}
?>