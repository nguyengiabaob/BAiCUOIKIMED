 function check(){
     Content_check= document.frmgetpassword.txtemail.value;
     if(Content_check.length==0)
     {
         alert('Xin vui lòng nhập email ');
         document.frmLogin.txtemail.focus();
         return;

     }
    document.frmgetpassword.submit();
     
 }