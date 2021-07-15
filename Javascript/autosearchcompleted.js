$(document).ready(function (){
    $(document).on('keyup','#medicines',function (){
      
        var med= $(this).val();
       
        if(med!="")
        {
            $.ajax({
                url: "../Controller/searchautocomplete.php",
                method: "POST",
                data: {med :med},
                success: function(data)
                {
                    $('#listmed').html(data);
                    $('#listmed').fadeIn();
                   
                }


            })
            
        }
        else
        {
            $('#listmed').html("");
            $('#listmed').fadeOut();
        }
    })
    $(document).on('click','.auto', function()
    {
        $('#medicines').val($(this).text());
        $('#listmed').fadeOut('fast');
    })
})