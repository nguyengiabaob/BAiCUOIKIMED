<?php
session_start();
include "../public/connect.inc";
if(isset($_POST['content']))
{
$sql="";
$content=$_POST['content'];
$sql="select * from tblmedicines where NameMedicine LIKE'%$content%'";
$show="
<div class='bk_img'>
        <h1>Kết quả tìm kiếm<h1>
      </div>
      <div style='margin-top: 25px'>
            <h3 style='color: #0a662e; display: flex; justify-content: center; line-height: 45px; font-weight: 700; '>Kết quả Tìm kiếm</h3>

    </div>
        <div class='line' >
        </div>";
$n=1;
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0)
{
  $show.="
        <div class='container-fluid' style='margin-top: 100px;'>
            <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='row'>";
    $total=mysqli_num_rows($rs);
    $pagesize=12;
    $pos =(!isset($_GET['page']))?0: ($_GET['page']-1)*$pagesize;
    $n=1;
    $sql1="select*  from tblmedicines  where NameMedicine LIKE'%$content%' limit $pos, $pagesize";
    $rs1=mysqli_query($con,$sql1);

    // echo "có dữ liệu ";
    while($row=mysqli_fetch_array($rs1))
        {
            $id=$row["ID_medicines"];
            $name=$row['NameMedicine'];
            $price=$row['PriceMedicine'];
            $img=$row['ImgMedicine'];
            $show.=" 
            <div class='col-lg-3'>
            <div class='row'>
            <div class='col-lg-11 showproduct' style=' display: flex; flex-direction: column; justify-content: center; align-items: center; ' >
            <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
            <img src='$img' style='width: 280px; height:280px'>
              <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name</h5></a>
              <h6 style='color: #0a662e;'>Giá : $price VND</h6>
            </div>
            <div style='display: flex; flex-direction: row; margin-bottom: 10px;'>
            
            
             <button  class='buttoncart' data-id2=$id  style='font-size: 14px; padding: 10px ; margin-left: 5px;'> <i  style ='margin-right: 3px;' class='fas fa-shopping-cart'></i>Cho vào giỏ hàng</button>
        
           <div style='margin-left:8px; padding-top: 8px;'>
           ";
           if(!empty($_SESSION['username']))
           {
             $show.="<a href='paying.php?id_pick=$id&&add=1' style=' font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
           }
           else
           {
             $show.="<a href='../admin/login.php' style='  font-size: 14px; text-decoration:none; padding :10px'  class='buttonbuying'>Mua Ngay</a>";
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

        $show.="
        </div>
    </div>
</div>
</div>";
    echo $show;
}
// else
// {
//    echo 0;
// }
}
?>