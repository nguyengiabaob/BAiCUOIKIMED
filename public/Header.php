<header>
<script>
$(document).ready(function(){
  var path= window.location.href;
 
      $('.nav-item a').each(function(){
        if(this.href==path)
        { 
          $(this).addClass('active')
        }
        
      })
      function load_product ()
     {
     
       $.ajax({
         url:"../Controller/Loadproduct_menu.php",
         method: "POST",
        
         success: function(data)
         {
            $('#product_show').html(data);
         },
         error: function ()
         {
          alert("Lỗi");
         }
       })
     }
    //  load_number()
       load_product()
      

       $(document).on('click','.buttoncart',function(){
         var id_add=$(this).data('id2');
         var number=Number.parseInt($('#lb_num').html());
   
    $.ajax({
          url: "../Controller/addshopingcart.php",
          method: "POST",
          data: {id:id_add, add:1},
          success: function (data)
          {
           
            
              if(data==1)
              {
                alert('Thêm một sản phẩm vào giỏ hàng ');
                $('#lb_num').html(number+1);
                $('.rounded-circle').html(number+1)
               
              }
              if(data==0)
              {
                  window.location="http://localhost:8080/baicuoiki10/admin/Login.php";
              }
           
          }
         });
     })
//  $('.nav-item a').each(function)
//  {
//    if(this.href==path)
//    {
//      $(this).addclass('active');
//    }
//  }
$(document).on('click','#logout',function(){
   $.ajax({
     url: '../controller/logout.php',
     method: 'POST',
     success: function(data)
     {
       if(data==0)
       {
         window.location="http://localhost:8080/baicuoiki10/admin/login.php";
       }
     }
   })
})

})
</script> 

<style>
  .list-unstyled{
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
    background: #0a662e;
    color:#FFF;
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
}
.dropdown
{
  height: 64px;
}
}
</style>
<script src="../Javascript/autosearchcompleted.js" >

</script>
  <div style="background-color:  #0a662e; display: flex;  justify-content: flex-end ; height: 40px; align-items: center;"  >
  <?php
        if(empty($_SESSION['username']))
        {
        ?>
          <a href="../admin/login.php" style="margin-right: 50px;color:#FFF;"><i style="color:#FFF; margin-right:5px;" class="fas fa-user-circle 
          "></i>Đăng nhập </a>
          
      
    <?php
    }
    else
    {
      ?>
          <a  style="margin-right: 50px;color:#FFF;"><i style="color:#FFF; margin-right:5px;" class="fas fa-user-circle 
          "></i> Xin chào, <?=$_SESSION['username']?> </a>
          <a style="cursor: pointer; color:#FFF; margin-right: 50px" id="logout"><i style="color:#FFF; margin-right:5px; " class="fas fa-sign-out-alt    "></i>Thoát </a>
     <?php 
    }
    ?>
  </div>
  <div id=" container_logo " class="container-fluid" >
    <div  class="row">
    <div class="col-lg-3 col-md-12  col-sm-12 col-xs-12">
    <img style="width :200px; margin-left: 100px;" src="../Images/logo.jpg">
    </div>
    <div class="col-lg-9 row"  style="display: flex; flex-direction: row; justify-content: center;align-items: center; ">
      <div class="col-lg-3" style="display: flex; flex-direction: row;">
        <i style="font-size: 40px; color: #0a662e;" class="fas fa-truck"></i>
        <p class="ml-3"><font style="font-weight: bold;">Miễn phí vận chuyển</font><br>Đơn hàng từ 2 triệu VNĐ</p>
      </div>
      <div class="col-lg-3" style="display: flex; flex-direction: row;">
        <i style="font-size: 40px; color: #0a662e;" class="fas fa-mobile-alt    "></i>
        <p class="ml-3"><font style="font-weight: bold;">Đặt hàng nhanh</font><br>Gọi ngay: +84 888355655  
          </p>
      </div>
      <div class="col-lg-3" style="display: flex; flex-direction: row;">
        <i style="font-size: 40px; color: #0a662e;" class="fas fa-headset    "></i>
        <p class="ml-3"><font style="font-weight: bold;">Tư vấn 24/7</font><br>Đăng ký tư vấn miễn phí 
          </p>
      </div>
      <?php
        $number_pro=0;
            if(!empty($_SESSION['item_cart']))
            {
              foreach($_SESSION['item_cart'] as $k=> $v)
              {
                $number_pro+=$v['add'];
              }
            }

        ?>
      <div class="col-lg-3" style="display: flex; flex-direction:column;">
        <span class="rounded-circle " style="background-color: #3d6427; width: 20px; margin-left: 30px; color: #FFF; text-align: center; z-index: 1;"><?=$number_pro?></span>
        <div >
        <?php
          if(empty($_SESSION['username']))
          {
        ?>
        <a href="../admin/login.php" style="display: flex; flex-direction: row ; margin-top: -10px; text-decoration: none ; color: #000000">
       
       <i  style="font-size: 40px; color: #0a662e;" class="fa fa-shopping-cart" aria-hidden="true"></i>
     
       
       <p class="ml-4"><font style="font-weight: bold;">Giỏ hàng</font><br><label>(</label><label id="lb_num"><?=$number_pro?></label>) Sản phẩm   
         </p>
         </a>
         <?php
         }
         else
         {
           ?>
           <a href="./shoppingcart.php" style="display: flex; flex-direction: row ; margin-top: -10px; text-decoration: none ; color: #000000">
      
       <i  style="font-size: 40px; color: #0a662e;" class="fa fa-shopping-cart" aria-hidden="true"></i>
     
       
       <p class="ml-4"><font style="font-weight: bold;">Giỏ hàng</font><br><label>(</label><label id="lb_num"><?=$number_pro?></label>) Sản phẩm   
         </p>
         </a>
         <?php
         }
         ?>
       </div>
     </div>
    
  <div>
  </header>
  
  <nav style="background-color: #0a662e; margin-top:5px;">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="./" class="nav-link p-3"><i style="font-size:28px; " class="fa fa-home" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a href="./introduction.php" style="font-size:20px;" class="nav-link  p-3">Giới thiệu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle p-3"  style="font-size:20px;" href="./menu_product.php?type=all&&page=1&&paget=1" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
            <div class="dropdown-menu">
            <?php
              include '../public/connect.inc';
              $sql="select * from tbltype ";
              $rs =mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array($rs))
              {
                $type=$row['Name_type'];
            ?>
              <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=<?=$type?>&&page=1&&paget=1"><?=$type?></a>
              <!-- <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=Tim&&page=1&&paget=1">Tim</a>
              <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=Tiểu Đường&&page=1&&paget=1">Tiểu Đường</a> -->
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Action</a>
            </div> -->
              <?php
              }
              ?>
            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle p-3" style="font-size:20px;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tin tức</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Action</a>
            </div>
          </li> -->
          <li class="nav-item">
            <a href="./contact.php" class="nav-link p-3" style="font-size:20px;">Liên hệ</a>
          </li>
          
          <li style="margin-left: 500px;">
            
            <form name="frmsearch" class="form-inline my-0 my-lg-1 p-2 ml-5" method="POST" action="./search.php">  
                 <input id="medicines" name="txtmedicines" style="width:300px" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm thuốc... "/> 
                 <button style="background-color:#3ea8e6" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i style="color: #FFF"class="fas fa-search"></i></button>
             </form>
             <div id='listmed' style="width:300px; margin-left: 52px;  display: block; position: absolute; z-index: 1 ; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);"></div>
          
   </li>
        </ul>
       
  </nav>