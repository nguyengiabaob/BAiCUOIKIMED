<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../Javascript/addshoppingcart.js"> </script>
    <script src="../Javascript/addshoppingcart.js"> </script>
    <link rel="stylesheet"  href="../Cssmain/Pagination.css" type="text/css">
   
  </head>

  <style>

.buttoncart:hover
{
    border: 1px solid #0a662e;
    background-color: #FFF;
    color: black;
    border-radius: 25px;
}
.buttonbuying:hover
{
    border: 1px solid red;
    background-color: #FFF;
    color: black;
    border-radius: 25px;
}
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
    .buttonbuying
{
    background-color: red;
    color: #FFF;
    border: 1px solid red;
    border-radius: 25px;
}
.showproduct
{
display:flex ;
  margin-left: 25px;
  border: 0.05px solid #0a662e;
  margin-bottom: 25px;
  align-items: flex-end;
 
}
.buttoncart
{
    border: 1px solid #0a662e;
    border-radius: 25px;
    background-color: #0a662e;
    color: #FFF;
}

  </style>
  <script>
      $(document).ready(function(){
          function fetch_data()
          {
              var type=$('#get_type').html();
              var page=$('#get_page').html();
              var paget=$('#get_paget').html();

            
              $.ajax({
                  url: "../Controller/Loadproduct_menu_detail.php",
                  method: "GET",
                  data: {type: type,page:page, paget:paget},
                  success: function(data)
                  {
                    if(data==0)
                    {
                      
                      $('#main').html("<div style='height:200px; display: flex; justify-content: center; align-items: center;'><center><h3 style=''>Sản phẩm đã hết hàng</h3></center></div>");
                    }
                    else
                    {
                       $('#main').html(data);
                    }
                  }

              })
          }
          fetch_data();
        
      })
 </script>
  <body>
      <?php
            include "../public/Header.php";
      ?>
       <?php
                if(isset($_GET['type']) and isset($_GET['page']) and isset($_GET['paget']) )
                {
                    $type=$_GET['type'];
                    $page=$_GET['page'];
                    $paget=$_GET['paget'];
                   ?>

                    <span style="display:none" id="get_type"><?=$type?></span>
                    <span style="display:none" id="get_page"><?=$page?></span>
                    <span style="display:none" id="get_paget"><?=$paget?></span>
                   <?php

                }
            ?>
      <div id="main" style='margin-bottom: 30px'>


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