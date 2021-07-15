$(document).ready(function(){

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
     });