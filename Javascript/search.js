$(document).ready(function(){
    function fetch_data_search(){
        var content= $('#get_name').html();
        
        if(content!="")
        {
            $.ajax({
                url: "../Controller/resultsearch.php",
                method: "POST",
                data: {content: content},
                success: function (data)
                {
                    if(data=="")
                    {
                      
                      $('#main').html("<div style='height:200px; display: flex; justify-content: center; align-items: center;'><center><h3 >Không tìm thấy kết quả phù hợp</h3></center></div>");
                    }
                    else
                    {
                       $('#main').html(data);
                    }
                }
            })
        }
    }
    fetch_data_search();
})