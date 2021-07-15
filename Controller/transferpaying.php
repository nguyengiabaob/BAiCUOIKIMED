<?php
if($_POST['id_onl']==1)
{
 echo "<div class='container-fluid'>
 <div class='row'>
     <div class='col-lg-6'>
       <div id='paypal-button'></div>
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
                //  window.alert('Cảm ơn bạn đã mua hàng!');
                fetch_data()
                window.location('http://localhost:8080/baicuoiki10/view/finish.html')
               });
             }
           }, '#paypal-button');
         
         </script>
     </div>
 </div>
 </div>";
         }
//           else if($_POST['id_onl']==1 and $_POST['flag_onl']==1)
//           {
//             echo"";
//           }
else if($_POST['id_off']==0)
{
  echo "<div class='modal-footer'>
  <button id='confrim' type='button' class='btn btn-primary'>Xác nhận</button>
</div>";
}
?>
