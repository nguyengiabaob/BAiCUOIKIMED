<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <script>
      $(document).ready(function (){
    // $(document).on('keyup','#medicines',function (){
      
    //     var med= $(this).val();
       
    //     if(med!="")
    //     {
       
    //         $.ajax({
    //             url: "./Controller/searchautocomplete.php",
    //             method: "POST",
    //             data: {med :med},
    //             success: function(data)
    //             {
    //                 $('#listmed').html(data);
    //                 $('#listmed').fadeIn();
                   
                   
                   
    //             }


    //         })
            
    //     }
    //     else
    //     {
    //         $('#listmed').html("");
    //         $('#listmed').fadeOut();
    //     }
    // })
    // $(document).on('click','.auto', function()
    // {
    //     $('#medicines').val($(this).text());
    //     $('#listmed').fadeOut('fast');
    // })
    $(document).on('click','.btn-primary', function(){
    $.ajax({
            url: "./Controller/optionpaying.php",
            method: "POST",
        //     data : {name: name,email:email,phone:phone,address:address,note:note,id:id_one, add:num},
            success: function(data)
             {
              
        //       // if(data==1)
        //       //  alert("Bạn đặt hàng thành công")
        //         alert(data);
                $('#exampleModal').html(data)
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
    background: #f0f0f0;
  }
</style>
  <body>
    <style>
      .buttontrans
      {
        border: solid 1px #f7f8fb; 
        width: 25px; 
        height:25px; 
        border-radius: 50%; 
        padding: 0px; 
        margin: 0px 2px; 
        background-color: #f7f8fb; 
        text-decoration: none; 
        text-align: center;
        font-size: 14px;
        color: #000;
      }
      .buttontrans:hover
      {
        border: solid 1px #0a662e; 
        width: 25px; 
        height:25px; 
        border-radius: 50%; 
        padding: 0px; 
        margin: 0px 2px; 
        background-color: #0a662e; 
        text-decoration: none; 
        text-align: center;
        font-size: 14px;
        color: #fff;
      }
    </style>
      <div style="display: flex; flex-direction: row; position: absolute; left:48%">
          <a class="buttontrans" href=""><<</a>
          <a class='buttontrans'href="">1</a>
        <a class="buttontrans" href="">>></a>
       
      </div>
      <button id="btnpaying" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Đặt hàng </button> 
      <div>
      
      <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
  <div class='modal-content'>
    <div class='modal-header'>
      <center><h5 class='modal-title' id='exampleModalLabel'>Hình thức thanh toán</h5></center>
      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    <!-- </div> -->
    <!-- <div class='modal-body'>
      <p>Bạn hãy chọn hình thức thanh toán</p>
      <br>
      <div>
        <input type='radio' id='pay_off'>
        <label for='offline'>Thanh toán asdasdasd</label><br>
        <label id='flag_off' style='display:none'>0</label><br>
     </div>
     <div>
        <input type='radio' id='pay_onl'>
        <label for='offline'>Thanh toán trực tuyến</label><br>
        <label id='flag_onl' style='display:none' >0</label><br>
     </div> -->
            
         
           
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
          </div>
        </div>
      <i class="far fa-check-circle"></i>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>





<header>
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
          <a style="cursor: pointer" id="logout" style="margin-right: 30px; color:#FFF"><i style="color:#FFF; margin-right:5px; "class="fas fa-shopping-cart    "></i>Thoát </a>
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




  <nav style="background-color: #0a662e; margin-top:5px; height: 64px; z-index:1">
        <ul class="nav nav-tabs" style='height: 64px; z-index:1'>
          <li class="nav-item">
            <a href="./" class="nav-link p-3"><i style="font-size:28px; color: #FFF " class="fa fa-home" aria-hidden="true"></i></a>
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
            <?php
            }?>
              <!-- <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=Tim">Tim</a>
              <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=Tiểu Đường">Tiểu Đường</a> -->
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Action</a>
            </div> -->
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
            <a href="#" class="nav-link p-3" style="font-size:20px;">Liên hệ</a>
          </li>
          
          <li style="margin-left: 500px;">
            
          <form name="frmsearch" class="form-inline my-0 my-lg-2 p-2 ml-5" method="POST" action="./search.php">  
                 <input id="medicines" name="txtmedicines" style="width:300px" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm thuốc... "/> 
                
                 <button style="background-color:#3ea8e6" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i style="color: #FFF"class="fas fa-search"></i></button>
             </form>
             <div id='listmed' style="width: 300px ; margin-left: 50px"></div>
   </li>
        </ul>
       
  </nav>