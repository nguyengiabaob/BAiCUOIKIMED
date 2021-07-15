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
    $(document).on('keyup','#medicines',function (){
      
        var med= $(this).val();
       
        if(med!="")
        {
            $.ajax({
                url: "./Controller/searchautocomplete.php",
                method: "POST",
                data: {med :med},
                success: function(data)
                {
                    $('#listmed').html(data);
                    $('#listmed').fadeIn();
                   
                }


            })
            
        }
        else
        {
            $('#listmed').html("");
            $('#listmed').fadeOut();
        }
    })
    $(document).on('click','.auto', function()
    {
        $('#medicines').val($(this).text());
        $('#listmed').fadeOut('fast');
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
          .carousel
          {
          
          }
          .carousel-item
          {
            z-index: -1;
          }
      </style>
       <nav style="background-color: #7cb75d; margin-top:5px; height: 64px; z-index:2">
        <ul class="nav nav-tabs" style='height: 64px; z-index:2'>
          <li class="nav-item">
            <a href="#" class="nav-link p-3 active"><i style="font-size:28px; " class="fa fa-home" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" style="font-size:20px;" class="nav-link  p-3 active">Giới thiệu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle p-3"  style="font-size:20px;"data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=Xương Khớp">Xương Khớp</a>
              <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=Tim">Tim</a>
              <a class="dropdown-item" href="http://localhost:8080/baicuoiki10/View/menu_product.php?type=Tiểu Đường">Tiểu Đường</a>
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
            <a href="#" class="nav-link p-3 active" style="font-size:20px;">Liên hệ</a>
          </li>
          
          <li style="margin-left: 500px;">
            
          <form name="frmsearch" class="form-inline my-0 my-lg-2 p-2 ml-5" method="POST" action="./search.php">  
                 <input  id="medicines" name="txtmedicines" style="width:300px" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm thuốc... "/> 
                
                 <button style="background-color:#3ea8e6" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i style="color: #FFF"class="fas fa-search"></i></button>
             </form>
             <div id='listmed' style="width: 300px ; margin-left: 50px; positon: absolute; display: block; z-index:1"></div>
   </li>
        </ul>
       
  </nav>
        <div style=" position: relative; z-index:-1">
          <img src="./Images/slider_1.png">
        </div>
    <!-- <div id="sildeimg" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#sildeimg" data-slide-to="0" class="active"></li>
          <li data-target="#sildeimg" data-slide-to="1"></li>
          <li data-target="#sildeimg" data-slide-to="2"></li>
          <li data-target="#sildeimg" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" >
            <img src="./Images/slider_1.png" alt="First slide" style="width: 1519px; height: 600px;">
          </div>
          <div class="carousel-item">
            <img src="./Images/slider_2.png"  alt="Second slide" style="width: 1519px; height: 600px;">
          </div>
          <div class="carousel-item">
            <img src="./Images/slider_3.png" alt="Third slide" style="width: 1519px; height: 600px;">
          </div>
          <div class="carousel-item">
            <img src="./Images/slider_4.png" alt="fourth slide" style="width: 1519px; height: 600px;">
          </div>
  
        </div>
       
      </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>