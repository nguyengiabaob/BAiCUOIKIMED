function checkLogin(){
    username	=	document.frmLogin.txtusername.value;
    if(username.length==0){
        alert("Xin vui lòng nhập tài khoản!");
        document.frmLogin.txtusername.focus();
        return;
    }
    document.frmLogin.submit();
}
