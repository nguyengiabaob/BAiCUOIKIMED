<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  href="../Cssmain/Home.css" type="text/css">
 
    <script src="../Javascript/Slide_10.js" ></script>
    <script src="../Javascript/autosearchcompleted.js">  </script>
     <?php
        session_start();
       
    //  include "../Controller/Loadproduct_menu.php";
     ?>
     <script>
    //  $(document).ready(function(){
    //   var path= window.location.href;
    //   $('.nav-item a').each(function(){
    //     if(this.href==path)
    //     {
    //       $(this).addClass('active')
    //     }
      
    //   })
    //    function load_number()
    //   {
    //    var number=Number.parseInt($('#lb_num').html());
      
    //     $.ajax({
    //       url: "../Controller/addshopingcart.php",
    //       method: "POST",
    //       data:{add:1},
    //       success: function (data)
    //       {
            
    //             alert(number)
    //           //  $('#lb_num').html(number+1)
             
    //        }
    //     });
    
    //  }
    //  function load_product ()
    //  {
     
    //    $.ajax({
    //      url:"../Controller/Loadproduct_menu.php",
    //      method: "POST",
        
    //      success: function(data)
    //      {
    //         $('#product_show').html(data);
    //      },
    //      error: function ()
    //      {
    //       alert("Lỗi");
    //      }
    //    })
    //  }
    // //  load_number()
    //    load_product()
      

    //    $(document).on('click','.buttoncart',function(){
    //      var id_add=$(this).data('id2');
    //      var number=Number.parseInt($('#lb_num').html());
   
    // $.ajax({
    //       url: "../Controller/addshopingcart.php",
    //       method: "POST",
    //       data: {id:id_add, add:1},
    //       success: function (data)
    //       {
           
            
    //           if(data==1)
    //           {
    //             alert('Thêm một sản phẩm vào giỏ hàng ');
    //             $('#lb_num').html(number+1);
    //             $('.rounded-circle').html(number+1)
               
    //           }
    //           if(data==0)
    //           {
    //               window.location="http://localhost:8080/baicuoiki10/admin/Login.php";
    //           }
           
    //       }
    //      });
    //  })
    //  });

  

    
  </script>
   <script>

    //  $(document).on('click','#logout',function(){
    //     $.ajax({
    //       url: '../controller/logout.php',
    //       method: 'POST',
    //       success: function(data)
    //       {
    //         if(data==0)
    //         {
    //           window.location="http://localhost:8080/baicuoiki10/admin/login.php";
    //         }
    //       }
    //     })
    //  })
   </script> 
   <style>
     /* .list-unstyled{
      margin-top: 0px;
      background: #fff;
      color: #000;
    }
  .list-unstyled li{
    padding: 12px;
      cursor: pointer;
      color: black;
  }
  .list-unstyled li:hover{
    background: #f0f0f0;
  }
  .nav-item .nav-link
{
    color: #fff;
}
.nav-tabs .nav-link.active
{
    background-color: black;
    color: #FFF;
}
.nav-link:hover
{
  background-color: black;
}
.dropdown:hover .dropdown-menu
{
    display: block;
}
.dropdown:hover 
{
  background-color: black;
}
.dropdown-item:hover
{
  background-color: black;
  color: #FFF
}     */
   </style> 
</head>
<body>
  
  <header>
    <?php
     include "../public/Header.php"
     ?>
  <!-- <div class="slideshow">
    <div class="img_slide" id="abcd" >
   
      <img id="img1" class="slide" src="./Images/slider_1.png"  style="width: 1519px;">
      <img id="img2" class="slide" src="./Images/slider_2.png"  style="width: 1521px;">
      <img id="img3"class="slide" src="./Images/slider_3.png"  style="width: 1515px;">
      <img id="img4"class="slide" src="./Images/slider_4.png"  style="width: 1519px;">
    </div> -->
    <div id="sildeimg" class="carousel slide" data-ride="carousel"  >
      <ol class="carousel-indicators">
        <li data-target="#sildeimg" data-slide-to="0" class="active"></li>
        <li data-target="#sildeimg" data-slide-to="1"></li>
        <li data-target="#sildeimg" data-slide-to="2"></li>
        <li data-target="#sildeimg" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox" >
        <div class="carousel-item active"  >
          <img src="../Images/slider_1.png" alt="First slide" style="width: 1519px; height: 600px;">
        </div>
        <div class="carousel-item" >
          <img src="../Images/slider_2.png"  alt="Second slide" style="width: 1519px; height: 600px;">
        </div>
        <div class="carousel-item" >
          <img src="../Images/slider_3.png" alt="Third slide" style="width: 1519px; height: 600px;">
        </div>
        <div class="carousel-item" >
          <img src="../Images/slider_4.png" alt="fourth slide" style="width: 1519px; height: 600px;">
        </div>

      </div>
     
    </div>
<article>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-lg-6" style="margin-top: 100px;">
          <h2 style="color: #0a662e; font-weight: 700; font-family: Roboto ,sans-serif;padding: 15px;">
            Về Chúng Tôi
          </h2>
          <p style="font-family: Roboto ,sans-serif; margin-top: 25px; padding: 15px;  margin-right: 150px;">
            
					
					
					   Thủ đô Budapest của nước Hungary, một đất nước nhỏ bé nằm ở Trung Âu với khoảng 10 triệu dân nhưng lại có bề dầy thành tích về khoa học công nghệ, nhất là về hoá dược phẩm và thuốc men (16 giải Nobel). Công ty NAVITA ra đời từ chiếc nôi khoa học công nghệ này vào những tháng đầu năm 2015 với những sản phẩm đầu tiên về bảo vệ sức khỏe, chống lão hóa và làm đẹp từ gốc, được chiết xuất hoàn toàn 100% từ thảo dược theo công nghệ hiện đại, tiêu...
					
				
          </p>
          <div >
            <a id="xemthem" style="text-decoration: none;"   href="./introduction.php"> Xem thêm</a>
          </div>
      </div>
        <div class="col-lg-6" >
          <img src="https://bizweb.dktcdn.net/100/345/472/themes/739162/assets/video1.png?1621478640809" style="max-width: 100%;">
        </div>
    </div>
  </div>
  <?php
  // include "../Controller/addshopingcart.php";
  ?>
  <div class="container-fluid" style="margin-top: 100px;">
      <center><h1 style="color: #0a662e; font-weight: bolder;">SẢN PHẨM CỦA MỘC THẢO LAN</h1></center>
     <div class="row" style="margin-top: 50px;">
      <div class="col-lg-10 offset-lg-1">
        <div id='product_show' class="row">
          <!-- <div class='col-lg-2.5 showproduct' >
             <div style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
             <img src="./Images/VinaGout.jpg" style="width: 280px;">
               <h5>VinaGout Thái Dương</h5>
               <h6 style='color: #0a662e;'>Giá : 65000 VND</h6>
             </div>
             <div style='display: flex; flex-direction: row; margin-bottom: 10px;'>
              <div class='buttoncart' style='padding: 8px; '>
             
              <a style='font-size: 14px;'> <i  style ='margin-right: 3px;' class='fas fa-shopping-cart'></i>Cho vào giỏ hàng</a>
            </div>
            <div class='buttonbuying 'style='margin-left: 12px; padding: 8px;'>
                <a style=' margin: 15px; font-size: 14px;'>Mua Ngay</a>
            </div>
            </div>
             
          </div>
          <div class="col-lg-2.5 showproduct"  >
            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <img src="./Images/VinaGout.jpg" style="width: 280px;">
              <h5>VinaGout Thái Dương</h5>
              
            </div>
            <div style="display: flex; flex-direction: row; ">
             <div class="buttoncart" style="padding: 8px;">
            
             <a style="font-size: 14px;"> <i  style ="margin-right: 3px;" class="fas fa-shopping-cart"></i>Cho vào giỏ hàng</a>
           </div>
           <div class="buttonbuying" style="margin-left: 15px; padding: 8px;">
               <a style="margin: 15px;font-size: 14px;">Mua Ngay</a>
           </div>
           </div>
            
         </div>
         <div class="col-lg-2.5 showproduct"  >
          <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <img src="./Images/VinaGout.jpg" style="width: 280px;">
            <h5>VinaGout Thái Dương</h5>
            
          </div>
          <div style="display: flex; flex-direction: row; ">
           <div class="buttoncart" style="padding: 8px;">
          
           <a style="font-size: 14px;"> <i  style ="margin-right: 3px;" class="fas fa-shopping-cart"></i>Cho vào giỏ hàng</a>
         </div>
         <div class="buttonbuying" style="margin-left: 15px; padding: 8px;">
             <a style="margin: 15px;font-size: 14px;">Mua Ngay</a>
         </div>
         </div>
          
       </div>
       <div class="col-lg-2.5 showproduct"  >
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <img src="./Images/VinaGout.jpg" style="width: 280px;">
          <h5>VinaGout Thái Dương</h5>
         
        </div>
        <div style="display: flex; flex-direction: row; ">
         <div class="buttoncart" style="padding: 8px;">
        
         <a style="font-size: 14px;"> <i  style ="margin-right: 3px;" class="fas fa-shopping-cart"></i>Cho vào giỏ hàng</a>
       </div>
       <div class="buttonbuying" style="margin-left: 15px; padding: 8px;">
           <a style="margin: 15px;font-size: 14px;">Mua Ngay</a>
       </div>
       </div>
        
     </div>
     <div class="col-lg-2.5 showproduct"  >
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
      <img src="./Images/VinaGout.jpg" style="width: 280px;">
        <h5>VinaGout Thái Dương</h5>
        
      </div>
      <div style="display: flex; flex-direction: row; ">
       <div class="buttoncart" style="padding: 8px;">
      
       <a style="font-size: 14px;"> <i  style ="margin-right: 3px;" class="fas fa-shopping-cart"></i>Cho vào giỏ hàng</a>
     </div>
     <div class="buttonbuying" style="margin-left: 15px; padding: 8px;">
         <a style="margin: 15px;font-size: 14px;">Mua Ngay</a>
     </div>
     </div>-->
      
   </div> 
        </div>
      </div>

  </div>
  <div style="margin-top:10px;" >
        <center><a id="xemthem" style="text-decoration: none; ;"   href="./menu_product.php?type=all&&page=1&&paget=1"> Xem thêm</a></center>
  </div>
  <div style="margin-top: 50px">

    <center><h1 style="color: #0a662e; font-weight: bolder;">Sản Phẩm Bán Nhiều Nhất</h1><center>
  </div>
  
    <?php
     include "../Style_product.php";
    ?>
</div>
</article>
<?php
include "./Footer.php";
?>
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>