$(document).ready(function(){
    $(document).on('click'," button[name='btnsend']",function(){
        alert("sdsadsad")
        var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var name=$("input[name='txtname']").val();
        var email=$("input[name='txtemail']").val();
        var phone= $("input[name= 'txtphone']").val();
        var content=$("textarea[name='txtcontent']").html();
        if((!name.test(format)&& !phone.test(format)&& !content.test(format)) && (name!="")&& phone!=""&& content!="" &&email!="" )
        {
           $("form[name='frmcontact']").submit();
        }
        else
        {
            alert("Xin vui lòng nhập đầy đủ thông tin yêu cầu !");
        }

     })
  
})
