<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <?php
    session_start();
  ?>
  <script>
    $(document).ready(function(){
      $(document).on('click','#btnpaying',function(){
     
      //  var formatemail=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      //  var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
      //  var email= $("input[name='txtemail']").val();
      //  var name=$("input[name='txtname']").val();
      //  var address=$("input[name='txtaddress']").val();
      //  var phone=$("input[name='txtphone']").val();
      //  var note=$("textarea[name='txtnote']").val();
      //  var emailerror=  $("label[name='emailerror']")
      //  var nameerror=  $("label[name='nameerror']")
      //  var addresserror=  $("label[name='addresserror']")
      //  var phoneerror=  $("label[name='phoneerror']")
      //  var noteerror=  $("label[name='noteerror']")
      
 
      //  if(name==""||format.test(name)|| !isNaN(name))
      //  {
      //   $("label[name='nameerror']").html("<i style='margin-right: 5px ' class='fa fa-exclamation' aria-hidden='true'></i>Vui lòng nhập họ tên"); 

      //  }
      //  else
      //  {
      //   $("label[name='nameerror']").html("");
      //  }
      
     
      // //  //email
      //   if(email=="")
      //   {
      //     emailerror.html("<i style='margin-right: 5px ' class='fa fa-exclamation' aria-hidden='true'></i>vui lòng nhập email")
      //   }
      //   else if(!formatemail.test(email))
      //   {
      //     emailerror.html("<i style='margin-right: 5px ' class='fa fa-exclamation' aria-hidden='true'></i>Email chưa đúng định dạng");

      //   }
      //   else
      //   {
      //     emailerror.html("");
      //   }
      //   if(address==""||format.test(address)|| !isNaN(address))
      //  {
      //   addresserror.html("<i style='margin-right: 5px ' class='fa fa-exclamation' aria-hidden='true'></i>Vui lòng nhập địa chỉ")

      //  }
      //  else
      //  {
      //   addresserror.html("")
      //  }
      //  if(phone==""||format.test(phone)|| isNaN(phone))
      //  {
      //   phoneerror.html("<i style='margin-right: 5px ' class='fa fa-exclamation' aria-hidden='true'></i>Vui lòng nhập số điện thoại")

      //  }
      //  else
      //  {
      //   phoneerror.html("")
      //  }
      //  if(format.test(note)|| !isNaN(note))
      //  {
      //   noteerror.html("<i style='margin-right: 5px ' class='fa fa-exclamation' aria-hidden='true'></i>Vui lòng nhập lại ghi chú")

      //  }
      //  else{
      //   noteerror.html("")
      //  }
      //  if( noteerror.html()==""&&  phoneerror.html()==""&& emailerror.html()==""&&  addresserror.html()==""&&nameerror.html()=="")
      // {

        // if($('#id_one').html()!=='undefined')
        // {
        //   var id_one= $('#id_one').html();
          $.ajax({
            url: "./test.php",
            method: 'POST',
            // data : {name: name,email:email,phone:phone,address:address,note:note,id:id_one},
            success: function(data)
            {
              if(data==1)
               alert("Bạn đặt hàng thành công")
            }
          })
        // }
          // $.ajax({
          //   url: "./test.php",
          //   method: 'POST',
          //   // data : {name: name,email:email,phone:phone,address:address,note:note},
          //   success: function(data)
          //   {
          //     if(data==1)
          //      alert("Bạn đặt hàng thành công")
          //   }
          // })
    //  }
      })
      
     
    });
     
  </script>
  <style>
    .btn-primary
    {
      background-color: #f36464;
      width: 150px;
    }
    .btn
    {
      border: none;
    }
  </style>
  <body style="background-color: #f9f5f5">
      <div class="container-fluid">
          <div class="row">
              <div  class="col-lg-12">
                <div class="col-lg-11 offset-lg-1">
                  <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 ">
                    <img src="../Images/logo.jpg" width="120px" style="margin-top: 50px; margin-bottom: 30px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Thông tin khách hàng </h4>
                            <table  style="border: 1px solid white;">
                               
                                    <tr>
                                        <td scope="row"><input name="txtemail" type="email" style="width: 400px;" class="form-control" width="auto" placeholder="Email"><label style="color: red" name="emailerror"></label></td>
                                        
                                    </tr>
                                    <tr>
                                        <td scope="row"><input name="txtname" type="text" class="form-control" style="width: 400px;" placeholder="Họ và tên"><label name="nameerror" style="color: red"></label></td>
                                        
                                    </tr>
                                    <tr>
                                        <td scope="row"><input name="txtphone" type="tel" class="form-control" style="width: 400px;" placeholder="Số điện thoại"><label style="color: red"name="phoneerror"></label></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <td scope="row"><input name="txtaddress" type="text" class="form-control"style="width: 400px;" placeholder="Địa chỉ"><label style="color: red" name="addresserror"></label></td>
                                        
                                    </tr>
                                    <tr>
                                        <td scope="row"><textarea name="txtnote" style="width: 400px;" placeholder="Ghi chú"></textarea><label style="color: red" name="noteerror"></label></td>
                                        
                                    </tr>
                              
                            </table>    
                        </div>
                      </div>
                    </div>
                    <?php
                        // session_start();
                        include "../public/connect.inc";
                        $id_pick="";
                        $num=0;
                        $number="";
                        $name="";
                        $price="";
                        $img="";
                        $total=0;
                        $all=0;

                        if(!empty($_GET['id_pick']) and !empty($_GET['add']))
                        {
                          $id_pick=$_GET['id_pick'];
                          $num=$_GET['add'];

                        }
                        else
                        if(!empty($_SESSION['item_cart']))
                        {
                            foreach($_SESSION['item_cart'] as $k=> $v)
                            {
                              $num+=$v['add'];
                            }
                        }
                      
                    ?>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12" style="background-color:#0a662e40;">
                            <div style="border-bottom: 1px solid #a9a9a9 ">
                              <center><h4>Đơn hàng (<?=$num?> sản phẩm)</h4></center>
                            </div>
                            <div style="overflow: auto; border-bottom: #a9a9a9 solid 1px; height: 300px;">
                              <table  >
                                <thead>
                                  <tr>
                                    <th style="width: 300px;  visibility: hidden;">Ảnh sản phẩm</th>
                                    <th style="width: 300px; visibility: hidden;">Tên sản phẩm</th>
                                    <th style="width: 300px; visibility: hidden;">Giá sản phẩm</th>
                                  </tr >
                                </thead>
                                <tbody >
                                <?php
                                     
                                          if(!empty($_GET['id_pick']) and !empty($_GET['add']))
                                     { $sql="select*from tblmedicines where ID_medicines=$id_pick";
                                      $rs=mysqli_query($con,$sql);
                                      if($rs)
                                      {
                                        $row=mysqli_fetch_array($rs);
                                        $id_choosen=$id_pick;
                                        $name=$row["NameMedicine"];
                                        $price=$row['PriceMedicine'];
                                        $img=$row['ImgMedicine'];
                                        $all=$row['PriceMedicine']*$_GET['add'];
                                        $total=$all;
                                      }
                                          
                                ?>
                                  <!-- Vòng lặp -->
                                  <tr style="height: 100px;">
                                    <td style="text-align: center;" scope="row">
                                      <img src=<?=$img?> width="80px" style="border-radius: 30%;"><sup style=" background-color:#0a662e ; border-radius: 50%; padding-left: 10px; padding-right: 10px; padding-top: 8px; padding-bottom: 8px; margin-left: -15px; vertical-align: text-top;  color: white;"><?=$num?></sup>
                                    </td>
                                    <td style="text-align: center;"><p style="font-size: 18px;"><?=$name?></p></td>
                                    <td style="text-align: center;"><p><?=$price*$num?></p></td>
                                    <td id="id_one" style ="display: none"><?=$id_choosen?></td>
                                  </tr>
                                 
                              <?php
                        }
                        else if(!empty($_SESSION['item_cart']))
                        {
                            foreach($_SESSION['item_cart'] as $k=>$v)
                            {
                              $name=$v['name'];
                              $price=$v['Price'];
                              $img=$v['img'];
                              $number=$v['add'];
                              $all +=$number* $price;
                              $total=$all;

                              ?>  
                              <tr style="height: 100px;">
                                    <td style="text-align: center;" scope="row">
                                      <img src=<?=$img?> width="80px" style="border-radius: 30%;"><sup style=" background-color:#0a662e ; border-radius: 50%; padding-left: 10px; padding-right: 10px; padding-top: 8px; padding-bottom: 8px; margin-left: -15px; vertical-align: text-top;  color: white;"><?=$number?></sup>
                                    </td>
                                    <td style="text-align: center;"><p style="font-size: 18px;"><?=$name?></p></td>
                                    <td style="text-align: center;"><p><?=$price?></p></td>
                                  </tr>

                        <?php
                            }
                        }
                              
                              ?>   
                                  
                                </tbody>
                              </table>
                            </div>
                            <div style="margin-top: 15px; border-bottom: solid 1px #a9a9a9">
                              <table >
                                <th style="text-align: center; width: 300px;">

                                </th>
                                <th style="text-align: center; width: 600px;">

                                </th>
                                <tr style="text-align: center; height: 50px;">
                                    <td>Tổng Giá Sản Phẩm </td>
                                    <td><?=$all?> </td>
                                </tr>
                                <tr style="text-align: center;height: 50px;">
                                  <td>Phí Vận chuyển </td>
                                  <td>-</td>
                              </tr>
                              
                              </table>
                            </div>
                            <div>
                              <table >
                                <th style="text-align: center; width: 300px;">

                                </th>
                                <th style="text-align: center; width: 600px;">

                                </th>
                                <tr style="text-align: center; height: 50px;">
                                    <td style="font-size: 20px;">Tổng cộng </td>
                                    <td style="font-size: 20px;"><?=$total?> </td>
                                </tr>
                                <tr style="text-align: center;height: 50px;">
                                  <td><a  href="./shoppingcart.php"style="background-color: #0a662e; padding: 5px; border-radius: 15px; color: white;">Quay về giỏ hàng </a> </td>
                                  <td><button id="btnpaying" type="button" class="btn btn-primary"  data-target="#exampleModal">Đặt hàng </button>  </td>
                              </tr>
                              
                              </table>
                            </div>

                        </div>
                        
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hình thức thanh toán</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Bạn hãy chọn hình thức thanh toán</p>
                                <br>
                                <div class="container-fluid">
                                  <div class="row">
                                      <div class="col-lg-6">
                                        <div id="paypal-button"></div>
                                        <script>
                                            paypal.Button.render({
                                              // Configure environment
                                              env: 'sandbox',
                                              client: {
                                                sandbox: 'AawC898A0hVBlepcbW9UDX_e4pvIDpNSn72Mqt0I5qlz2IeEs7rUwCdrJuGHz8gD8MVr2RnVgnccUiv0',
                                                production: 'demo_production_client_id'
                                              },
                                              // Customize button (optional)
                                              locale: 'en_US',
                                              style: {
                                                size: 'small',
                                                color: 'gold',
                                                shape: 'pill',
                                              },
                                          
                                              // Enable Pay Now checkout flow (optional)
                                              commit: true,
                                          
                                              // Set up a payment
                                              payment: function(data, actions) {
                                                return actions.payment.create({
                                                  transactions: [{
                                                    amount: {
                                                      total: '0.01',
                                                      currency: 'USD'
                                                    }
                                                  }]
                                                });
                                              },
                                              // Execute the payment
                                              onAuthorize: function(data, actions) {
                                                return actions.payment.execute().then(function() {
                                                  // Show a confirmation message to the buyer
                                                  window.alert('Cảm ơn bạn đã mua hàng!');
                                                });
                                              }
                                            }, '#paypal-button');
                                          
                                          </script>
                                      </div>
                                  </div>
                                </div>
                                
                                  
                            </div> 
                             
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div> -->
                            </div>
                          </div>
                        </div>
                   
                        </div>
                        <!-- <div class="col-lg-5">
                            <h4>Thanh toán</h4>
                            <div id="paypal-button"></div>
                            <script>
                                paypal.Button.render({
                                  // Configure environment
                                  env: 'sandbox',
                                  client: {
                                    sandbox: 'AawC898A0hVBlepcbW9UDX_e4pvIDpNSn72Mqt0I5qlz2IeEs7rUwCdrJuGHz8gD8MVr2RnVgnccUiv0',
                                    production: 'demo_production_client_id'
                                  },
                                  // Customize button (optional)
                                  locale: 'en_US',
                                  style: {
                                    size: 'small',
                                    color: 'gold',
                                    shape: 'pill',
                                  },
                              
                                  // Enable Pay Now checkout flow (optional)
                                  commit: true,
                              
                                  // Set up a payment
                                  payment: function(data, actions) {
                                    return actions.payment.create({
                                      transactions: [{
                                        amount: {
                                          total: '0.01',
                                          currency: 'USD'
                                        }
                                      }]
                                    });
                                  },
                                  // Execute the payment
                                  onAuthorize: function(data, actions) {
                                    return actions.payment.execute().then(function() {
                                      // Show a confirmation message to the buyer
                                      window.alert('Cảm ơn bạn đã mua hàng!');
                                    });
                                  }
                                }, '#paypal-button');
                              
                              </script>
                        </div> -->
                   

                </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>