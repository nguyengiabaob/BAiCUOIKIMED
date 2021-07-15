<!-- <!doctype html>
<html lang="en">
  <head>
    <title>Title</title> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- Bootstrap CSS -->
  <!-- <script>
    
    $(document).ready(function fetch_data()
{
   
   
    $.ajax({
           url: "./View/loadp.php",
           method: "POST",
          success :  function (data)
         {
            // $('#product_shopping').html(data);
           alert(data);
         }
       
     });
   
}); -->
<!-- </script> -->

  <!-- </head> -->

  <?php
   include "../Controller/LoadBest_buying.php"
  ?>
  <style>
    .carousel-control-next-icon {
    background-image : url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ff0000' viewBox='0 0 8 8'%3E%3Cpath d='M1.5 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
    color: black;
    }
  </style>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-10 offset-lg-1">
                  <div class="row">
               
                  <div id="carouselId" class="carousel slide col-lg-12" data-ride="carousel">
                      <div class='carousel-inner' role="listbox">
                         <?=$show_product?>
                      <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev" style="margin-bottom: 100px;" >
                          <span  class="fa fa-chevron-left" aria-hidden="true" style="color: #0a662e; font-size:25px"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next" style="margin-bottom: 100px;">
                      <span  class="fa fa-chevron-right" aria-hidden="true" style="color: #0a662e; font-size:25px" ></span>
                          <span class="sr-only">Next</span>
                      </a>
                    
                  </div>
                </div>
              </div>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
    
</html> -->




 