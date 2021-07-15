<?php
 $show= "
 <div class='modal-dialog' role='document'>
   <div class='modal-content'>
     <div class='modal-header'>
       <center><h5 class='modal-title' id='exampleModalLabel'>Hình thức thanh toán</h5></center>
       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
       </button>
     </div>
     <div class='modal-body'>
       <p>Bạn hãy chọn hình thức thanh toán</p>
       <br>
       <div>
         <input type='radio' id='pay_off'>
         <label for='offline'>Thanh toán trực tiếp</label><br>
         <label id='flag_off' style='display:none'>0</label><br>
      </div>
      <div>
         <input type='radio' id='pay_onl'>
         <label for='offline'>Thanh toán trực tuyến</label><br>
         <label id='flag_onl' style='display:none' >0</label><br>
      </div>
      <div id='show_paying'>";

$show.=" </div>
</div>
";
echo $show

?>