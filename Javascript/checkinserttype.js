function checkintype()
{
    var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    var name=document.frminsertype.txttenlsp.value;
    if(name=="" || format.test(name))
    {
        alert("xin vui lòng nhập tên loại sản phẩm");
    }
    else
    {
        document.frminsertype.submit();
    }
}
function erase()
{
   document.frminsertype.txttenlsp.value="";
}
function erase_edit()
{
   document.frmedittype.txttenlsp.value="";
   document.frmedittype.txtsoluong.value="";
}
function edittype(main_name,main_number)
        {   
        
            var format =/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
            var name1=document.frmedittype.txttenlsp.value;
            var number= document.frmedittype.txtsoluong.value;
            // if(name1=="" || number=="")
            // {
            //     document.frmedittype.txttenlsp.value=main_name;
            //     document.frmedittype.txtsoluong.value=main_number;
            // }
            // else
            if(format.test(number)||format.test(name1)||Number.isInteger(Number(number))==false)
            {
                alert("Xin vui lòng nhập lại thông tin");
            }
            else if(name1!==main_name||number!==main_number)
            {
             document.frmedittype.submit();
            
            }
    
        }
