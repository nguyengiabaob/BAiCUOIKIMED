function checkeditdetail()
{
    var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    var name =document.frminsertdetail_1.txttensp.value;
    var price= document.frminsertdetail_1.txtprice.value;
    var number= document.frminsertdetail_1.txtnumber.value;
    var lsp= document.frminsertdetail_1.txttenlsp.value;
    var img= document.frminsertdetail_1.txtimages.value;
    var des =document.frminsertdetail_1.txtdes.value;
    if(name=="" || price==""||number==""||lsp==""||img==""|| format.test(name)|| format.test(price)||format.test(number)||format.test(lsp))
    {
        alert("Vui lòng nhập đầy đủ thông tin");
    }
    else
    {
        document.frminsertdetail_1.submit();
    }
}
function erase_edit()
{
   document.frminsertdetail_1.txttenlsp.value="";
   document.frminsertdetail_1.txtnumber.value="";
   document.frminsertdetail_1.txtimages.value="";
   document.frminsertdetail_1.txtprice.value="";
   document.frminsertdetail_1.txttensp.value="";
   document.frminsertdetail_1.txtdes.value="";
}
function checkeditdetail_1()
{
    var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    var name =document.frminsertdetail_1.txttensp.value;
    var price= document.frminsertdetail_1.txtprice.value;
    var number= document.frminsertdetail_1.txtnumber.value;
    var lsp= document.frminsertdetail_1.txttenlsp.value;
    var img= document.frminsertdetail_1.txtimages.value;
    var des =document.frminsertdetail_1.txtdes.value;
    if(name=="" || price==""||number==""||lsp==""|| format.test(name)|| format.test(price)||format.test(number)||format.test(lsp))
    {
        alert("Vui lòng nhập đầy đủ thông tin");
    }
    else
    {
        document.frminsertdetail_1.submit();
    }
}
