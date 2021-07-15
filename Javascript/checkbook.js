$(document).ready(function(){
    
   
        $(document).on('click'," button[name='btnbook']",function(){
            var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
            var format_email=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var name_book=$("input[name='txtname_b']").val();
            var email=$("input[name='txtemail_b']").val();
            var phone= $("input[name= 'txtphone_b']").val();
            var date =$("input[name= 'txtdate']").val();
            var content=$("textarea[name='txtsymptom']").val();
            
            
            if(name_book!="" && email!="" && content!=""  && phone!="" && date!="" )
            {
              
               if(!format.test(name_book)&&!format.test(phone)&& !format.test(content) && format_email.test(email) &&!isNaN(phone) )
               {
                  $.ajax({
                      url:"../Controller/booking.php",
                      method: "POST",
                      data: {txtname_b: name_book, txtemail_b: email,txtphone_b:phone, txtdate:date,txtsymptom:content },
                    success: function(data)
                    {
                        if(data==1)
                        {
                            alert("Lịch Hẹn đã được đặt")
                            $('#close_modal').trigger('click')
                         
                        }
                        
                    }
                  })
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
    
