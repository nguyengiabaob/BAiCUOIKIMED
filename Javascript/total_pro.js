function total_pay(id)
{
   var string = "txtnumberpro"+id;
   var stringtt= 'total_single'+id
   var num= document.getElementById(string).value;
       var xmlhttp= new XMLHttpRequest()
       xmlhttp.onreadystatechange=function() {
           if(this.readyState==4&& this.status== 200)
           {
                alert(this.response)
                document.getElementById(stringtt).innerHTML=this.response; 
                
            }
       }
       xmlhttp.open("GET","../Controller/getpay.php?id="+id+"&number="+num,true);
       xmlhttp.send()
       var xmlhttp2 = new XMLHttpRequest()
       
           xmlhttp2.onreadystatechange=function() {
            if(this.readyState==4&& this.status== 200)
            {
                 document.getElementById('total_product').innerHTML=this.response;
                 document.getElementById('total_paying').innerHTML=this.response; 
                
             }
            }
        xmlhttp2.open("GET","../Controller/getpay_total.php?id="+id+"&number="+num,true);
        xmlhttp2.send()

   

}
// function check_de(id)
// {
//     alert("dasdsadsad")
//     var xmlhttp3 = new XMLHttpRequest()
       
//     xmlhttp3.onreadystatechange=function() {
//      if(this.readyState==4&& this.status== 200)
//      {
       
//          window.location("http://localhost:8080/baicuoiki10/view/shoppingcart.php");
        
//       }
//      }
//  xmlhttp3.open("GET","../Controller/shoppingcart.php?id_de="+id,true);


    
// }