<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../Javascript/total_pro.js"></script>

    <!-- <script src="../Javascript/fetch_data.js"> -->
<!-- </script> -->
  <script>
      $(document).ready(function(){
    function fetch_data() {
$.ajax({
       url: "../Controller/shoppingcart_1.php",
       method: "POST",
      success :  function (data)
     {
         $('#main').html(data);
       
     }
   
 });
}
fetch_data()
$(document).on('click','.del',function(){
   var id_pick = $(this).data('id1')
   var result= confirm("Bạn có muốn xóa sản phẩm này không ?")
   if(result==true)
   {
   
    $.ajax({
        url: '../Controller/shoppingcart_1.php',
        method: "POST",
        data:{id:id_pick},
        success: function(data){
            alert("Sản phẩm đã xóa")
            fetch_data()
        }
    });
}
});
});


  </script>  
</head>

  <style>
      #xemthem
      {
        background-color: #0a662e;
    padding-left: 45px;
    padding-right: 45px;
    padding-top: 15px;
    padding-bottom: 15px;
  
    
    color: #FFF;
    border-radius: 25px;
      }
  </style>
  <body>
      <?php
       include "../public/Header.php";

       
      ?>
    <diV style="margin-top:55px;" id="main">

     </div>

<?php
       include "./Footer.php";

       
      ?>

      <!-- <div class="container-fluid">
          <div class="row">
              <div class="col-lg-10 offset-lg-1">
                 
                    <table class="table" >
                        <thead>
                            <tr style="background-color: #0a662e; color: white;">
                                <th style="border-right: white solid 0.5px;">STT</th>
                                <th style="text-align: center; border-right: white solid 0.5px;">Tên sản phẩm </th>
                                <th  style="border-right: white solid 0.5px; text-align: center;">Giá</th>
                                <th  style="border-right: white solid 0.5px; text-align: center;">Số lượng</th>
                                <th style="border-right: white solid 0.5px; text-align: center;">Thành tiền</th>
                                <th style="border-right: white solid 0.5px; text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody id="product_shopping" style="border: #bebebe solid 1px;">
                       -->
        <!-- session_start();
        $tong=0;
        if(!empty($_SESSION['item_cart']))
        {
        var_export($_SESSION['item_cart']);

        
        foreach ($_SESSION['item_cart'] as $v)
        {
                $id_detail=$v['id'];
              $tong+= $v['Price']*$v['add'];

  
                 <form method="post" id="<$id_detail?>" action="shoppingcart.php?id_de=<$id_detail?>">
                            <tr >
                                <td  style="vertical-align: middle;" scope="row"><p>1</p></td>
                                <td style="display: flex;align-items: center; justify-content: center;">
                                   
                                        <img src="../Images/VinaGout.jpg" style="width: 150px;"> 
                                        <h5 ><$v['name']?></h5>
                                        <input  style="display:none" name="txtname" value="<$id_detail?>">


                                </td>
                                <td style="vertical-align: middle;"><center><p><['Price']?></p></center></td>
                                <td style="vertical-align: middle;"><center><input type="number" name="txtnumberpro" min=0 id="<'txtnumberpro'.$id_detail?>" class="form-control" style="width: 80px;" value="<$v['add']?>" onchange="total_pay(<$v['id']?>)"></center></td>
                                
                                <td style="vertical-align: middle;"><center><p id=<'total_single'.$id_detail?>><$v['Price']*$v['add']?></p></center></td>
                                <td style="vertical-align: middle;"><center><a onclick="check_de(<$id_detail?>)"><i class="fas fa-trash-alt "></i></a></center></td>
                            </tr>
                 </form> -->
                
                            <!-- <tr >
                                <td  style="vertical-align: middle;" scope="row"><p>1</p></td>
                                <td style="display: flex;align-items: center; justify-content: center;">
                                   
                                        <img src="../Images/VinaGout.jpg" style="width: 150px;"> 
                                        <h5>VinaGout Thái Dương</h5>
                                    


                                </td>
                                <td style="vertical-align: middle;"><center><p>655000</p></center></td>
                                <td style="vertical-align: middle;"><center><input type="number" name="txtnumberpro" class="form-control" style="width: 80px;"></center></td>
                                
                                <td style="vertical-align: middle;"><center><p>655000</p></center></td>
                                <td style="vertical-align: middle;"><center><a><i class="fas fa-trash-alt    "></i></a></center></td>
                            </tr> -->
    
    
<!-- }
}   -->
    
                        <!-- </tbody>
                    </table>
                    
              </div>
          </div>
      </div>
      <div class="container-fluid" style="margin-top: 50px;">
          <div class="row">
              <div class="col-lg-10 offset-lg-1">
                  <div class="row">
              <div class="col-lg-7 " style="margin-bottom: 50px;">
                <a id="xemthem" style="text-decoration: none; ;"   href="Gioithieu.html">Tiếp tục mua hàng</a>
              </div>
              <div class="col-lg-5">
                    <table class="table" style="border: #bebebe solid 1px">
                        
                        <tbody>
                            <tr>
                                <td scope="row" style="border-right: #bebebe solid 1px ">Tổng giá sản phẩm</td>
                                <td id="total_product"><tong?></td>
                                
                            </tr>
                            <tr>
                                <td scope="row"  style="border-right: #bebebe solid 1px ">Tiền vận chuyển</td>
                                <td>Tính khi thanh toán</td>
                               
                            </tr>
                            <tr>
                                <td scope="row"  style="border-right: #bebebe solid 1px ; font-weight: bolder;">TỔNG TIỀN THANH TOÁN</td>
                                <td id="total_paying">$tong?></td>
                               
                            </tr>
                          
                        </tbody>
                    </table>
                        
                       <div class="col-lg-12" style="background-color: #0a662e; text-align: center; height: 50px; display: flex; align-items: center; justify-content: center; color: #FFF;">
                            <a >THANH TOÁN NGAY</a>
                       </div>
                    
              </div>
            </div>
          </div>
        </div> -->
      <!-- </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>