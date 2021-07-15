<?php
 include "../public/connect.inc";
 $sql_med= " select * from tblmedicines";
 $rs= mysqli_query($con,$sql_med);
 $array_med=[];
 $show_product="";
 $c=0;
if($rs)
{
    while($row=mysqli_fetch_array($rs))
    {
      array_push($array_med,$row["NameMedicine"]);
    }
}

foreach($array_med as $v)
{
  
    $sql= "select NameMedicine, SUM(Number_buying) as total_number from tbldetail_bill where NameMedicine='$v'";
    $rs= mysqli_query($con,$sql);
    if($rs)
    {
        while($row=mysqli_fetch_array($rs))
        {
         
            $num=$row['total_number'];
            $name=$row['NameMedicine'];
        $sql1="update tblmedicines set Num_buying= $num where NameMedicine= '$name'";
        $rs1=mysqli_query($con,$sql1);
        if($rs1)
        {
        
            $c=1;
        }
        }
    }
}
        if($c==1)
        {
            $sql2="select*from tblmedicines where Num_buying <>0 ORDER BY Num_buying DESC"; 
            $rs3= mysqli_query($con,$sql2);
            
            $len=mysqli_num_rows($rs3);
            $show_product.="<div class='carousel-item active col-lg-12'>
                            <div class='row'>";
            //echo $len;
            $n=1;
            if($len<4)
            {
                while($row=mysqli_fetch_array($rs3) and $n<=$len)
            {
                $id=$row['ID_medicines'] ;
                $name=$row["NameMedicine"];
                $price=$row["PriceMedicine"];
                $img=$row['ImgMedicine'];
            $show_product.="
            <div class='col-lg-3'>
            <div class='row'>
            <div class='col-lg-11 showproduct'  style=' display: flex; flex-direction: column; justify-content: center; align-items: center; ' >
            <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
            <img src=$img style='width: 250px; height:280px'>
            <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name</h5></a>
              <h6 style='color: #0a662e;'>Giá : $price VND</h6>
            </div>
            <div style='display: flex; flex-direction: row; margin-bottom: 10px;'>
            <button name='add' class='buttoncart'  style='font-size: 14px; padding: 10px ; margin-left: -1px;'> <i  style ='margin-right: 3px;' class='fas fa-shopping-cart'></i>Cho vào giỏ hàng</button>
        
            <div style=' margin-left:8px;padding-top: 8px;'>
            ";
            if(!empty($_SESSION['username']))
            {
                $show_product.="<a href='paying.php?id_pick=$id' style='font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
            }
            else
            {
                $show_product.="<a href='../admin/login.php' style='font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
            }
            $show_product.="
           </div>
           </div>
            
         </div>
         </div>
         </div>
        "; 
            $n++;
            }
            }
            if($len>=4)
            {
            while( $n<=4)
            {
                 if($row=mysqli_fetch_array($rs3))
                 {
                $id=$row['ID_medicines'];
                $name=$row["NameMedicine"];
                $price=$row["PriceMedicine"];
                $img=$row['ImgMedicine'];
            $show_product.="
            <div class='col-lg-3'>
            <div class='row'>
            <div class='col-lg-11 showproduct' style=' display: flex; flex-direction: column; justify-content: center; align-items: center;'>
            <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
            <img src=$img style='width: 250px; height:280px'>
            <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name</h5></a>
              <h6 style='color: #0a662e;'>Giá : $price VND</h6>
            </div>
            <div style='display: flex; flex-direction: row; margin-bottom: 10px;'>
            <button name='add' class='buttoncart'  style='font-size: 14px; padding: 10px ; margin-left: -1px;'> <i  style ='margin-right: 3px;' class='fas fa-shopping-cart'></i>Cho vào giỏ hàng</button>
        
            <div style=' margin-left:8px; padding-top: 8px;'>
         ";
            if(!empty($_SESSION['username']))
             {
                  $show_product.="<a href='paying.php?id_pick=$id' style=' font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
              }
                 else
                 {
                    $show_product.="<a href='../admin/login.php' style='  font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
                }
         $show_product.="
         </div>
         </div>
         </div>
         </div>              
        </div>
        "; 
                 }
            $n++;
          
            }
        }
        $show_product.="</div>
                        </div>
                         \n";
        if(($len<=8 and $len>4) or $len>8)
        {
            
        $show_product.="<div class='carousel-item col-lg-12'>
        <div class='row'>";
            while($row=mysqli_fetch_array($rs3) and $n<=$len)
            {
                $id=$row['ID_medicines'];
                // var_export(mysqli_fetch_array($rs3));
                $name=$row["NameMedicine"];
                $price=$row["PriceMedicine"];
                $img=$row['ImgMedicine'];
                $show_product.="
                <div class='col-lg-3'>
                <div class='row'>
                    <div class='col-lg-11 showproduct' style=' display: flex; flex-direction: column; justify-content: center; align-items: center; '>
                        <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
                        <img src=$img style='width: 250px; height: 280px'>
                        <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name</h5></a>
                          <h6 style='color: #0a662e;'>Giá $price</h6>
                        </div>
                        <div style='display: flex; flex-direction: row; margin-bottom: 10px;'>
                        <button name='add' class='buttoncart' style='font-size: 14px; padding: 10px ; margin-left: 2px;'> <i  style ='margin-right: 3px;' class='fas fa-shopping-cart'></i>Cho vào giỏ hàng</button>
        
                        <div style='margin-left: 8px; padding-top: 8px;'>
                        ";
                        if(!empty($_SESSION['username']))
                        {
                            $show_product.="<a href='paying.php?id_pick=$id' style=' font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
                        }
                        else
                        {
                            $show_product.="<a href='../admin/login.php' style=' font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
                        }
                        $show_product.="
                       </div>
                       </div>
                       </div>
                       </div>
                     </div>
                   
              ";
              $n++;
            //   echo $n;
            }
            $show_product.="</div>
                            </div>
                            ";
        }
        $show_product.="</div>";
    }


?>