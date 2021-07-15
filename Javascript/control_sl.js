function control_slminus()
{
    value_sl=document.getElementById("qty").value;
    if(value_sl>1)
    {
        value_sl-=1;
        document.getElementById("qty").value=value_sl
    }
  
}

function control_sladd()
{
    value_add=document.getElementById("qty").value;
    if(value_add<100)
    {
        
        value_add = Number.parseInt(value_add) +1
        document.getElementById("qty").value=value_add
    }
   
   
}