// window.onload= function ()
// {     
//     show_slide();
   
    
  
// }
// var current=0;
// function show_slide()
// {
// var number_image=document.getElementsByClassName("slide").length;
// var show= document.getElementById("abcd");
//         if(current<number_image)
//         {

//             show.style.transform ="translate3d("+-current*(100+0.2)+"%,0,0)";
//             current++;
//         }

//         else
//         {
//             current=0;
//             show.style.trasnform ="translate3d(0%,0,0)";

//         }
//         setTimeout("show_slide()",5000);
      
// }
$('.carousel').carousel({
   interval: 2000
  })
add_submit()
{
   document.frmadd_shopping.submit();
}
