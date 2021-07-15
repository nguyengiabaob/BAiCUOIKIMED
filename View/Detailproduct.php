<!doctype html>
<html lang="en">
  <head>
 
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../Javascript/control_sl.js"></script>
    
  </head>
  <style>
    .relative li
{
    height: 12px;
    width: 12px;
    border-radius: 50%;
}
.relative .active
{
  background-color: #7cb75d;
}
.buttoncart
{
    border: 1px solid #0a662e;
  
    background-color: #0a662e;
    color: #FFF;
}
.buttonbuying
{
    background-color: red;
    color: #FFF;
    border: 1px solid red;
    /* border-radius: 25px; */
}

  </style>
<script>
  $(document).ready(function(){
      function fetch_data_shopping()
      {
        $.ajax({
          url: "../Controller/addshopingcart.php"


        })
      }
      $(document).on('click','#buying',function(){
         var id_add=$(this).data('id3');
         var add_num= $('#qty').val();
         window.location="/baicuoiki10/view/paying.php?id_pick="+id_add+"&&add="+add_num;
    
         
        })
    


    $(document).on('click','.buttoncart',function(){
         var id_add=$(this).data('id2');
         var number=Number.parseInt($('#lb_num').html());
         var add_num= $('#qty').val();
         
    $.ajax({
          url: "../Controller/addshopingcart.php",
          method: "POST",
          data: {id:id_add, add:add_num},
          success: function (data)
          {
           
            
              if(data==1)
              {
                alert('Thêm một sản phẩm vào giỏ hàng ');
                $('#lb_num').html(number+Number.parseInt(add_num));
                $('.rounded-circle').html(number+Number.parseInt(add_num))
               
              }
             
              if(data==0)
              {
                window.location="http://localhost:8080/baicuoiki10/admin/Login.php";
              
              }
          },
          error: function()
          {
            alert("loi");
          }
         });

     });
  })
    
</script>
 <?php
  session_start();
  
 
?>
  <?php
    include "../public/Header.php";
  ?>
  <?php
    include "../Controller/loaddetailproduct.php";
  ?>
  <body>
  <?php

$show_product="";
$sql1="select * from tblmedicines where Type='$type' and ID_medicines<>$id_product";

$rs1=mysqli_query($con,$sql1);
$len=mysqli_num_rows($rs1);
echo $len;
// $n=0;
// if($rs1)
// {
//   if($row=mysqli_fetch_array($rs1))
//   { $name1=$row["NameMedicine"];
//     $img1=$row["ImgMedicine"];
//     $price1=$row['PriceMedicine']	;
//     $id=$row['ID_medicines'];
    

//   $show_product.="<div class='carousel-item active col-lg-12'>
//                   <div class='row' style='display: flex; align-items: center; '>
//                   <div class='col-lg-2' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
//           <img src='$img1' alt='First slide' width='180px' height='150px'>
//           <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
//           <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
//               </div>
//   ";

//   }
//   if($len==1)
//   {
//     $show_product.="</div>
//                     </div>";
//   }
//   if($len>1)
//   {
//     $n++;
//   while($row=mysqli_fetch_array($rs1) and $n<=3)
//   {   $name1=$row["NameMedicine"];
//       $img1=$row["ImgMedicine"];
//       $id=$row['ID_medicines'];
//       $price1=$row['PriceMedicine']	;
//       $show_product.=" <div class='col-lg-2 offset-lg-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
//       <img src='$img1' alt='First slide' width='180px' height='150px'>
//       <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
//       <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
//     </div>";
//     $n++;
//   }
//   $show_product.="</div>
//                   </div>";
// }

//    if($len>4)
//    {
     
//        if($len%4==0)
//        {
//          $n_setup=($len/5)-1;
//          if($n_setup>3)
//          {
//           $n_setup=3;
//          }
//          $lap=1;
//          while($lap<=$n_setup)
//          {
//           if($row=mysqli_fetch_array($rs1))
//           { $name1=$row["NameMedicine"];
//             $img1=$row["ImgMedicine"];
//             $price1=$row['PriceMedicine']	;
//             $id=$row['ID_medicines'];
      
//           $show_product.="<div class='carousel-item col-lg-12'>
//                           <div class='row' style='display: flex; align-items: center;'>
//                           <div class='col-lg-2' style='margin-left: 40px;  justify-content: center; display: flex; flex-direction: column; align-items: center;'>
//                           <img src='$img1' alt='First slide' width='180px' height='150px'>
//                           <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
//                           <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
//                       </div>
//           ";
//            $n++;
//           }
//            while($row1=mysqli_fetch_array($rs1)and $n<=$n+3)
//            {
//             $name1=$row["NameMedicine"];
//             $img1=$row["ImgMedicine"];
//             $price1=$row['PriceMedicine']	;
//             $id=$row['ID_medicines'];
//               $show_product.=" <div class='col-lg-2 offset-lg-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
//               <img src='$img1' alt='First slide' width='180px' height='150px'>
//               <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
//               <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
//             </div>
//               ";
//               $n++;
//            }
//            $show_product.="</div>
//            </div>";
//            $lap++;
//          }
//        }
//        else
//        {
//         //  $lap=$len/5-1;
         
//          if($len%4!=0)
//          {
//            $n1=$len%4*4;
//            $n2=1;
//            if($n2<=$n1)
//            {
//             if($row=mysqli_fetch_array($rs1))
//           { $name1=$row["NameMedicine"];
//             $img1=$row["ImgMedicine"];
//             $price1=$row['PriceMedicine']	;
//             $id=$row['ID_medicines'];
      
//           $show_product.="<div class='carousel-item  col-lg-12'>
//                           <div class='row' style='display: flex; align-items: center;'>
//                           <div class='col-lg-2' style='margin-left: 40px;  justify-content: center; display: flex; flex-direction: column; align-items: center;'>
//                           <img src='$img1' alt='First slide' width='180px' height='150px'>
//                           <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
//                           <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
//                       </div>
//           ";
//             $n++;
//           }
//             while($row1=mysqli_fetch_array($rs1))
//            {
//             $name1=$row["NameMedicine"];
//             $img1=$row["ImgMedicine"];
//             $price1=$row['PriceMedicine']	;
//             $id=$row['ID_medicines'];
//               $show_product.=" <div class='col-lg-2 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
//               <img src='$img1' alt='First slide' width='180px' height='150px'>
//               <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
//               <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
//             </div>
//               ";
//               $n++;
//            }
//            $show_product.="</div>
//            </div>";
//            }
//          }
      //    else if($len%5!=0 and $lap==0)
      //    {
      //      $lap2=($len%5)*5;
      //      if($lap2>1)
      //      {
             
      //       if($row=mysqli_fetch_array($rs1))
      //     { $name1=$row["NameMedicine"];
      //       $img1=$row["ImgMedicine"];
      //       $price1=$row['PriceMedicine']	;
      //       $id=$row['ID_medicines'];
      
      //     $show_product.="<div class='carousel-item col-lg-12'>
      //                     <div class='row' style='display: flex; align-items: center;'>
      //                     <div class='col-lg-1.5' style='margin-left: 40px;  justify-content: center; display: flex; flex-direction: column; align-items: center;'>
      //                     <img src='$img1' alt='First slide' width='180px' height='150px'>
      //                     <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
      //                     <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
      //                 </div>
      //     ";
      //     $n++;
      //     }
      //       $l=1;
      //       while($row1=mysqli_fetch_array($rs1)and $l<=$lap2-1)
      //       {
      //        $name1=$row["NameMedicine"];
      //        $img1=$row["ImgMedicine"];
      //        $price1=$row['PriceMedicine'];	
      //        $id=$row['ID_medicines'];
      //          $show_product.=" <div class='col-lg-1.5 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
      //          <img src='$img1' alt='First slide' width='180px' height='150px'>
      //          <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
      //          <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
      //        </div>
      //          ";
      //          $n++;
      //          $l++;
      //       }
      //       $show_product.="</div>
      //       </div>";

      //      }
      //      else
      //      {
      //       if($row=mysqli_fetch_array($rs1))
      //       { $name1=$row["NameMedicine"];
      //         $img1=$row["ImgMedicine"];
      //         $price1=$row['PriceMedicine']	;
      //         $id=$row['ID_medicines'];
        
      //       $show_product.="<div class='carousel-item  col-lg-12'>
      //                       <div class='row' style='display: flex; align-items: center;'>
      //                       <div class='col-lg-1.5' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
      //                       <img src='$img1' alt='First slide' width='180px' height='150px'>
      //                       <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
      //                       <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
      //                   </div>
      //                   </div>
      //                   </div>
      //       ";
      //      }
      //    }
      //  }
//      }
//    } 
// }
  if($len%4==0 and $len>0)
  {
    $len1=$len/4;
    if($len1>3)
    {
      $len1=3;
    }

    if($rs1)
    {
      if($row=mysqli_fetch_array($rs1))
  { $name1=$row["NameMedicine"];
    $img1=$row["ImgMedicine"];
    $price1=$row['PriceMedicine']	;
    $id=$row['ID_medicines'];
    

  $show_product.="<div class='carousel-item active col-lg-12'>
                  <div class='row' style='display: flex; align-items: center; '>
                  <div class='col-lg-2' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
          <img src='$img1' alt='First slide' width='180px' height='150px'>
          <a href='../view/Detailproduct.php?id_pro=$id'><h6>$name1</h6></a>
          <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
              </div>
  ";

  }
  $n=0;
   while ($n<3)
   {
     if($row=mysqli_fetch_array($rs1))
     {
    $n++;   
    $name1=$row["NameMedicine"];
    $img1=$row["ImgMedicine"];
    $price1=$row['PriceMedicine']	;
    $id=$row['ID_medicines'];
    $show_product.=" <div class='col-lg-2 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
                  <img src='$img1' alt='First slide' width='180px' height='150px'>
                  <a href='../view/Detailproduct.php?id_pro=$id'><h6>$name1</h6></a>
                  <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                </div>";
    
     }     
   }
   $show_product.="</div>
                  </div>";
    
    $count=0;
    if($len1>1)
    {
    while($count<$len1-1)
    {
      if($row=mysqli_fetch_array($rs1))
      { $name1=$row["NameMedicine"];
        $img1=$row["ImgMedicine"];
        $price1=$row['PriceMedicine']	;
        $id=$row['ID_medicines'];
        
    
      $show_product.="<div class='carousel-item col-lg-12'>
                      <div class='row' style='display: flex; align-items: center; '>
                      <div class='col-lg-2' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
              <img src='$img1' alt='First slide' width='180px' height='150px'>
              <a href='../view/Detailproduct.php?id_pro=$id'><h6>$name1</h6></a>
              <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                  </div>
      ";
    
      }
      $n=0;
      while ($n<3)
      {
        if($row=mysqli_fetch_array($rs1))
        {
       $n++;   
       $name1=$row["NameMedicine"];
       $img1=$row["ImgMedicine"];
       $price1=$row['PriceMedicine']	;
       $id=$row['ID_medicines'];
       $show_product.=" <div class='col-lg-2 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
                     <img src='$img1' alt='First slide' width='180px' height='150px'>
                     <a href='../view/Detailproduct.php?id_pro=$id'><h6>$name1</h6></a>
                     <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                   </div>";
       
        }     
      }
  $show_product.="</div>
                 </div>";
                 $count++;
    }
    
 } 
}
  }
  else
  if($len>4&&$len%4!=0)
  {
    if($row=mysqli_fetch_array($rs1))
    { $name1=$row["NameMedicine"];
      $img1=$row["ImgMedicine"];
      $price1=$row['PriceMedicine']	;
      $id=$row['ID_medicines'];
      
  
    $show_product.="<div class='carousel-item active col-lg-12'>
                    <div class='row' style='display: flex; align-items: center; '>
                    <div class='col-lg-2' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
            <img src='$img1' alt='First slide' width='180px' height='150px'>
            <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
            <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                </div>
    ";
  
    }
    $n=0;
    while ($n<3)
    {
      if($row=mysqli_fetch_array($rs1))
      {
     $n++;   
     $name1=$row["NameMedicine"];
     $img1=$row["ImgMedicine"];
     $price1=$row['PriceMedicine']	;
     $id=$row['ID_medicines'];
     $show_product.=" <div class='col-lg-2 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
                   <img src='$img1' alt='First slide' width='180px' height='150px'>
                   <a href='../view/Detailproduct.php?id_pro=$id'><h6>$name1</h6></a>
                   <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                 </div>";
     
      }     
    }
     $show_product.="</div>
                    </div>";

      $len2=$len/4-1;
      $count_1=0;
      if($len2>=1)
      {
      while($count_1<$len2)
      {
        if($row=mysqli_fetch_array($rs1))
        { $name1=$row["NameMedicine"];
          $img1=$row["ImgMedicine"];
          $price1=$row['PriceMedicine']	;
          $id=$row['ID_medicines'];
          
      
        $show_product.="<div class='carousel-item active col-lg-12'>
                        <div class='row' style='display: flex; align-items: center; '>
                        <div class='col-lg-2' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
                <img src='$img1' alt='First slide' width='180px' height='150px'>
                <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
                <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                    </div>
        ";
      
        }
        $n=0;
        while ($n<3)
        {
          if($row=mysqli_fetch_array($rs1))
          {
         $n++;   
         $name1=$row["NameMedicine"];
         $img1=$row["ImgMedicine"];
         $price1=$row['PriceMedicine']	;
         $id=$row['ID_medicines'];
         $show_product.=" <div class='col-lg-2 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
                       <img src='$img1' alt='First slide' width='180px' height='150px'>
                       <a href='../view/Detailproduct.php?id_pro=$id'><h6>$name1</h6></a>
                       <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                     </div>";
         
          }     
        }
     $show_product.="</div>
     </div>";
        $count_1++;
      }
      }
      $len3=$len%4*4;
      if($row=mysqli_fetch_array($rs1))
      { $name1=$row["NameMedicine"];
        $img1=$row["ImgMedicine"];
        $price1=$row['PriceMedicine']	;
        $id=$row['ID_medicines'];
        
    
      $show_product.="<div class='carousel-item active col-lg-12'>
                      <div class='row' style='display: flex; align-items: center; '>
                      <div class='col-lg-2' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
              <img src='$img1' alt='First slide' width='180px' height='150px'>
              <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
              <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                  </div>
      ";
    
      }
      if($len3==1)
      {
        $show_product.="</div>
        </div>";
      }
      else
      {
        $n=0;
        while ($n<$len3-1)
        {
          if($row=mysqli_fetch_array($rs))
          {
          $name1=$row["NameMedicine"];
    $img1=$row["ImgMedicine"];
    $price1=$row['PriceMedicine']	;
    $id=$row['ID_medicines'];
         $show_product.=" <div class='col-lg-2 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
                       <img src='$img1' alt='First slide' width='180px' height='150px'>
                       <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
                       <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                     </div>";
                     $n++;
          }
        }
      }
    }
    else if($len>0 and$len<4)
    {
      if($row=mysqli_fetch_array($rs1))
      { $name1=$row["NameMedicine"];
        $img1=$row["ImgMedicine"];
        $price1=$row['PriceMedicine']	;
        $id=$row['ID_medicines'];
        
    
      $show_product.="<div class='carousel-item active col-lg-12'>
                      <div class='row' style='display: flex; align-items: center; '>
                      <div class='col-lg-2' style='margin-left: 40px; justify-content: center; display: flex; flex-direction: column; align-items: center;'>
              <img src='$img1' alt='First slide' width='180px' height='150px'>
              <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
              <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                  </div>
      ";
    
      }
      if($len==1)
      {
        $show_product.="</div>
        </div>";
      }
       else{
        $n=0;
        while ($n<$len3-1)
        {
          if($row=mysqli_fetch_array($rs))
          {
          $name1=$row["NameMedicine"];
    $img1=$row["ImgMedicine"];
    $price1=$row['PriceMedicine']	;
    $id=$row['ID_medicines'];
         $show_product.=" <div class='col-lg-2 offset-sm-1' style=' justify-content: center; display: flex; flex-direction: column; align-items: center;'>
                       <img src='$img1' alt='First slide' width='180px' height='150px'>
                       <a href='../view/Detailproduct.php?id_pro=$id'><h5>$name1</h5></a>
                       <h6 style='color: #0a662e;'>Giá : $price1 VND</h6>
                     </div>";
                     $n++;
          }
        }
    }
    }

  
?>
<style>
   .bk_img
    {   display:flex ;
        justify-content: center;
        align-items: center;
        height: 250px;
        background-image: url("../Images/mau.png");
       
    }
    .line
    {
        content :" ";
        background: #0a662e;
        width: 60px;
        height: 3px;
        border-radius: 2px;
        left : 48%;
        position: absolute;
    
    }
</style>
<div class="bk_img">
      <h1 style="color: white;font-weight: 700; ">Chi tiết sản phẩm<h1>
</div>
<div style='margin-top: 25px'>
            <h3 style='color: #0a662e; display: flex; justify-content: center; line-height: 45px; font-weight: 700; '>Chi tiết sản phẩm</h3>

    </div>
        <div class='line' >
        </div>
      <div style="margin-top: 80px"> 
          <div class="container-fluid">
          
              <div class="row">
                 <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src=<?=$img?> height="400px" width="400px">
                        
                        </div>
                        <div class="col-lg-6">
                          <h3 style="color: #0a662e "><?=$name?></h3>
              
                          <div style="margin-top: 50px; height: 60px; border-top: #dedede 1px dashed; border-bottom: #dedede 1px dashed; align-content: center; display: flex; align-items: center; color: red; justify-content: flex-start;" >
                            <h4><?=$price?> VND</h4>
                          </div>
                          <div style="margin-top: 15px; display: flex;">
                            <label style="font-weight: 500; font-size: 15; ">SỐ LƯỢNG</label>
                            <button style="border: 1px #dedede solid; width: 40px; margin-left: 50px;"  onclick="control_slminus()">-</button>
                            <input type="text" name="number" value="1" id="qty" style="border: 1px #dedede solid; text-align: center; width: 50px;">
                            <button style="border: 1px #dedede solid; width: 40px;" onclick="control_sladd()" >+</button>
                          </div>
                          <div class=" col-lg-12" style="margin-top: 50px;">
                            <div class="row">
                              
                              <button class="col-lg-6 buttoncart "  data-id2=<?=$id?>  style='font-size: 14px; height: 50px; margin-bottom: 50px'> <i  style ='margin-right: 3px;' class='fas fa-shopping-cart'></i>Cho vào giỏ hàng</button>
                            <?php      
                              if(!empty($_SESSION['username']))
           {
              
           echo"<button id='buying' data-id3=$id style='font-size: 14px; text-decoration:none;margin-left:5px; height: 50px; display: flex; align-items: center; justify-content: center;  color: white;'  class='buttonbuying col-lg-3 col-md-12 col-sm-12 col-xs-12'>Mua Ngay</Button>";
           }
           else
           {
             echo"<a href='../admin/login.php' style=' font-size: 14px; text-decoration:none; margin-left:5px ;height: 50px; display: flex; align-items: center; justify-content: center;   color: white;'  class='buttonbuying col-lg-3 col-md-12 col-sm-12 col-xs-12'>Mua Ngay</a>";
           }
           ?>

                              <!-- <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" style="display: flex; background-color: red; color: white; align-items: center; justify-content: center; height: 50px ;margin-left:5px ">
                                <a>Mua ngay</a>
                            </div> -->
                          </div>
                          </div>
                        </div>
                    </div>
                 </div>
              </div>
          </div>
      </div>
      <div>
          <div style=" margin-top:25px">
          <h3 class="ml-3" style="font-weight:700;  border-bottom: #0a662e 0.5px solid;">Mô tả</h3>
          <div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <div class="row"> 
                <div style=" font-size: 18px;">
                     <?=$des?>
                  </div>
               </div>  
              </div>

            </div>
          </div>
        
      </div>
      <div >
          <center><h1>Các Sản phẩm Khác</h1></center>
        <div id="carouselId" class="carousel slide" data-ride="carousel" style="background-color:#ececec">
         
          <div class="carousel-inner" role="listbox" style="height: 300px; display: flex; align-items: center;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 ">
                <?=$show_product?>


            <!-- <div class="carousel-item active col-lg-12">
              <div class="row" style="display: flex; align-items: center;">
              <div class="col-lg-1.5" style="margin-left: 40px;">
              <img src="../Images/VinaGout.jpg" alt="First slide" width="180px" height="150px">
            </div>
            <div class="col-lg-1.5 offset-sm-1">
              <img src="../Images/VinaGout.jpg" alt="First slide"  width="180px" height="150px">
            </div>
            <div class="col-lg-1.5 offset-sm-1">
              <img src="../Images/VinaGout.jpg " alt="First slide" width="180px" height="150px">
            </div>
            <div class="col-lg-1.5 offset-sm-1 ">
              <img src="../Images/VinaGout.jpg" alt="First slide"width="180px" height="150px">
            </div>
            <div class="col-lg-1.5 offset-sm-1">
              <img src="../Images/VinaGout.jpg" alt="First slide" width="180px" height="150px">
            </div>
            </div>

          </div>  -->
             <!-- <div class="carousel-item col-lg-1.5" >
              <img data-src="../Images/VinaGout.jpg" alt="Second slide">
            </div>
            <div class="carousel-item col-lg-1.5">
              <img data-src="../Images/VinaGout.jpg" alt="Third slide">
            </div>
            <div class="carousel-item col-lg-1.5">
              <img data-src="../Images/VinaGout.jpg" alt="Third slide">
            </div>
            <div class="carousel-item col-lg-1.5">
              <img data-src="../Images/VinaGout.jpg" alt="Third slide">
            </div>
          </div>
          </div>
          </div>
          </div> -->
          
        </div>
        </div>
      </div>
      </div>
      
      <ol class="carousel-indicators relative " >
            <li data-target="#carouselId" data-slide-to="0" class="active" ></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
          </ol> 
      </div>
      </div>
      <?php
          include "./Footer.php";
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>