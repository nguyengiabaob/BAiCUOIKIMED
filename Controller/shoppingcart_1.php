<?php
// session_start();

// // if(isset($_POST['txtname']))
// //{ 
  
//     $id_de= $_REQUEST['id_de'];
//     // echo"<script>alert('dassadsadsad')</script>";
   
//     foreach ($_SESSION['item_cart'] as $k=>$v)
//     {
//         if($v['id']==$id_de)
//         {
//             unset($_SESSION['item_cart'][$k]);
//         }
        
//     }
session_start();
$tong=0;
$output="
<div class='container-fluid'>
<div class='row'>
    <div class='col-lg-10 offset-lg-1'>
       
          <table class='table' >
              <thead>
                  <tr style='background-color: #0a662e; color: white;'>
                      <th style='border-right: white solid 0.5px;'>STT</th>
                      <th style='text-align: center; border-right: white solid 0.5px;'>Tên sản phẩm </th>
                      <th  style='border-right: white solid 0.5px; text-align: center;'>Giá</th>
                      <th  style='border-right: white solid 0.5px; text-align: center;'>Số lượng</th>
                      <th style='border-right: white solid 0.5px; text-align: center;'>Thành tiền</th>
                      <th style='border-right: white solid 0.5px; text-align: center;'></th>
                  </tr>
              </thead>
              <tbody id='product_shopping' style='border: #bebebe solid 1px;'>


";

        if(!empty($_SESSION['item_cart']))
        {
        // var_export($_SESSION['item_cart']);

        $n=1;
        foreach ($_SESSION['item_cart'] as $v)
        {
            $id_detail=$v['id'];
            $tong+= $v['Price']*$v['add'];
            $name=$v['name'];
            $add=$v['add'];
            $price=$v['Price'];
            $tt=$price*$add;

            $output.="<tr>
            <td  style='vertical-align: middle;' scope='row'><p id='$'>$n</p></td>
            <td style='display: flex;align-items: center; justify-content: center;'>
               
                    <img src='../Images/VinaGout.jpg' style='width: 150px;'> 
                    <h5 >$name</h5>
                    <input  style='display:none' id='txtname$n' value='$id_detail'>


            </td>
            <td style='vertical-align: middle;'><center><p>$price</p></center></td>
            <td style='vertical-align: middle';><center><input onchange='total_pay($id_detail)' type='number' name='txtnumberpro' min=0 id='txtnumberpro$id_detail' class='form-control' style='width: 80px;' value='$add'></center></td>
            
            <td style='vertical-align: middle;'><center><p id='total_single$id_detail'>$tt</p></center></td>
            <td style='vertical-align: middle;'><center><a class='del' data-id1='$id_detail' ><i class='fas fa-trash-alt '></i></a></center></td>
        </tr>";
        $n++;
        }
        
    }
    $output.="
    </tbody>
    </table>
    
    </div>
    </div>
    </div>
    <div class='container-fluid' style='margin-top: 50px;'>
    <div class='row'>
    <div class='col-lg-10 offset-lg-1'>
    <div class='row'>
    <div class='col-lg-7 ' style='margin-bottom: 50px;'>
    <a id='xemthem' style='text-decoration: none; '   href='./Home.php'>Tiếp tục mua hàng</a>
    </div>
    <div class='col-lg-5'>
    <table class='table' style='border: #bebebe solid 1px'>
        
        <tbody>
            <tr>
                <td scope='row' style='border-right: #bebebe solid 1px '>Tổng giá sản phẩm</td>
                <td id='total_product'>$tong</td>
                
            </tr>
            <tr>
                <td scope='row'  style='border-right: #bebebe solid 1px '>Tiền vận chuyển</td>
                <td>Tính khi thanh toán</td>
               
            </tr>
            <tr>
                <td scope='row'  style='border-right: #bebebe solid 1px ; font-weight: bolder;'>TỔNG TIỀN THANH TOÁN</td>
                <td id='total_paying'>$tong</td>
               
            </tr>
          
        </tbody>
    </table>
        
       <a href='./paying.php' class='col-lg-12' style='background-color: #0a662e; text-align: center; height: 50px; display: flex; align-items: center; justify-content: center; color: #FFF;'>
            <p>THANH TOÁN NGAY</p>
       </a>
    
</div>
</div>
</div>
</div>
</div>";


 echo $output;

if(isset($_POST['id']))
{
    $id= $_POST['id'];
    foreach($_SESSION['item_cart'] as $k=>$v)
    {
        if($v['id']==$id)
        {
            unset($_SESSION['item_cart'][$k]);
        }
    }
}

    
?>