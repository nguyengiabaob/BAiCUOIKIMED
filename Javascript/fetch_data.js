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