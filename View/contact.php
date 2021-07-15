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
    <script src="../Javascript/checkcontact.js"></script>
 
   <script>
     $(document).ready(function(){
    $(document).on('click'," button[name='btnsend']",function(){
        var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var format_email=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        var name=$("input[name='txtname']").val();
        var email=$("input[name='txtemail']").val();
        var phone= $("input[name= 'txtphone']").val();
        var content=$("textarea[name='txtcontent']").val();

      
        if(name!="" && email!="" && content!=""  && phone!="")
        {
          
           if(!format.test(name)&&!format.test(phone)&& !format.test(content) && format_email.test(email) &&!isNaN(phone) )
           {
              $("form[name='frmcontact']").submit();
              alert("có")
           }
           else
           {
            alert("Thông tin không hợp lệ !");
           }
        }
        else
        {
            alert("Xin vui lòng nhập đầy đủ thông tin yêu cầu !");
        }

     })
  
})

  </script>
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
    .btn-primary
    {
      background-color: #0a662e
    }
    .btn-primary:hover
    {
      background-color:white;
      color: black;
      border: 1px solid #0a662e
    }
</style>

  </head>
  <body>
    <?php
      include "../public/Header.php";
      include "../Controller/contact.php";
    ?>
    
<div class="bk_img">
      <h1 style="color: white;  font-weight: 700;">Thông Tin Liên Hệ<h1>
</div>
<div style='margin-top: 25px'>
            <h3 style='color: #0a662e; display: flex; justify-content: center; line-height: 45px; font-weight: 700; '>Thông Tin Liên Hệ</h3>

    </div>
        <div class='line' >
        </div>
      <div class="container-fluid" style="margin-top: 25px"> 
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
        <iframe class="col-lg-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.120967221466!2d106.6646647!3d10.770641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6105c80945754d!2zQ8O0bmcgVHkgVE5ISCBNVFYgRMaw4bujYyBQaOG6qW0gVHJ1bmcgxq_GoW5nIDEgQ1BDIDE!5e0!3m2!1svi!2s!4v1626251347649!5m2!1svi!2s" width="1280" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <div style='margin-top: 25px'>
            <h3 style='color: #0a662e; display: flex; line-height: 45px; font-weight: 700; '>Gửi yêu cầu cho chúng tôi</h3>

    </div>
        </div>
      </div>
        </div>
        <div class="container-fluid" style ="margin-top: 50px;">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <form name="frmcontact" method="POST" action="contact.php">
              <div class="row">

             

               
            
                  <div class="col-lg-4">
                      
                        <input name="txtname"  class="form-control" style="height: 60px; margin-bottom: 25px;" class="col-lg-11" placeholder="Họ và Tên ">
                   </div>
                 
                  <div class="col-lg-4">
                   
                      <input name="txtemail" class="form-control" style="height: 60px; margin-bottom: 25px;" class="col-lg-11 offset-lg-1 " placeholder="Email " type="email">
                    </div>
              
                <div class="col-lg-4">
                  
                    <input name="txtphone"  class="form-control" style="height: 60px; margin-bottom: 25px;"class="col-lg-11 offset-lg-1" placeholder="số điện thoại" type="tel">
                  
              </div>
                  
              </div>
              
              <textarea name="txtcontent" class="col-lg-12 form-control"style=" height: 100px; margin-top:50px ;" placeholder="Nội dung"  ></textarea>
              <div style=" margin-top:25px;  ">
                <button style="margin-top:25px; margin-bottom:25px" type="button" name="btnsend" id="send" class="btn btn-primary">Gửi liên hệ</button>
              </div>
            
            </form>
            
          </div>
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