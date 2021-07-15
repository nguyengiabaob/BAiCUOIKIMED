$(document).ready(function(){

    $(document).on('click', '#pay_onl', function(){
        var onl= $('#pay_onl').prop("checked");
      
        if (onl==true)
        {
            $('#pay_off').prop("checked",false);
        }
        if(onl==true)
        {
        $.ajax({
            url: "../Controller/transferpaying.php",
            method: "POST",
            data: {id_onl: 1},
            success: function(data)
            {
               
                 $('#show_paying').html(data);
                
            }
        })
    }
    })
    $(document).on('click', "#pay_off", function(){
        
        var off= $('#pay_off').prop("checked");
      
        if (off==true)
        {
            $('#pay_onl').prop("checked",false)
        }
        if(off==true)
        {
        $.ajax({
            url: "../Controller/transferpaying.php",
            method: "POST",
            data: {id_off: 0, id_onl:0},
            success: function(data)
            {
                $('#show_paying').html(data);
               
            }
        })
    }
   
    })
   
})