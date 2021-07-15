<?php
session_start();
include "../public/connect.inc";
if(isset($_GET['type']))
{
$sql="";
$title="";
$type=$_GET['type'];
if($type=='all')
{
$sql="select * from tblmedicines";
$title="Tất cả các sản phẩm";
}
else{
  $sql="select * from tblmedicines where Type='$type'";
  $title=$type;
}
$sql1="";
$show="
<div class='bk_img'>
        <h1 style='color: white;font-weight: 700; '>$title<h1>
      </div>
      <div style='margin-top: 25px'>
            <h3 style='color: #0a662e; display: flex; justify-content: center; line-height: 45px; font-weight: 700; '>$title</h3>

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

    if($type=='all')
    {
    $sql1="select*  from tblmedicines limit $pos, $pagesize";
    }
    else
    {
      $sql1="select*  from tblmedicines where Type='$type' limit $pos, $pagesize";
    }
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
    
    if(isset($_GET['paget']) and isset($_GET['page']) )
    { $paget=$_GET['paget'];
    $show.="<div style='display: flex; flex-direction: row; position: absolute; left:48%'>";
    
    if($_GET['page']!=1)
    {
      $page_prev=$_GET['page']-1;
      if( $page_prev%3==0)
      {
      $paget_pratice=$page_prev-2;
      $show.="<a href='./menu_product.php?page=$page_prev&&paget=$paget_pratice&&type=$type' class='buttontrans'><<</a>";
      }
      else
      {
        $show.=" <a href='./menu_product.php?page=$page_prev&&paget=$paget&&type=$type' class='buttontrans'><<</a>";
      }
    }
    $cpage=0;
    for( $i=$_GET['paget'] ;$i<=ceil($total/$pagesize)and $cpage<=3;$i++)
    {
      if($i==$_GET['page'])
      {
        $show.=" <a style='color:#FFF' class='buttontrans_pick' >$i</a>";
      }
      else
      {
      $show.=" <a href='./menu_product.php?page=$i&&paget=$paget&&type=$type' class='buttontrans' >$i</a>";
      }

      $cpage++;
    }

    if($_GET['page']+1<=ceil($total/$pagesize) and isset($_GET['page']))
    {
      $page_next=$_GET['page']+1;
      if($_GET['page']%3==0)
      {
      
      $show.=" <a href='./menu_product.php?page=$page_next&&paget=$page_next&&type=$type' class='buttontrans'>>></a>";
      }
      else
      {
        $show.=" <a href='./menu_product.php?page=$page_next&&paget=$paget&&type=$type' class='buttontrans' >>></a>";
      }
    }
$show.="</div>";
  }
    echo $show;
}
else
{
   echo 0;
}
}
?>