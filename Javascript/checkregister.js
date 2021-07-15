function checkRegister()
{
    var username=document.frmregister.txt_firstName.value;
    var first_name=document.frmregister.txt_firstName.value;
    var last_name=document.frmregister.txt_lastName.value;
    var email=document.frmregister.txt_email.value;
    var password=document.frmregister.txtpassword.value;
    var repeatPassword=document.frmregister.txt_repeatPassword.value;
    if(first_name.length==0||last_name.length==0||email.length==0||password.length==0||repeatPassword.length==0||username.length==0)
    {
        alert('Xin vui lòng nhập đầy đủ thông tin');
    }
    else if(repeatPassword!== password)
    {
        alert('Xác nhận mật khẩu không chính xác')
    }
    else
    {
        document.frmregister.submit();
        
    }
}