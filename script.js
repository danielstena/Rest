function saveHoroscope(){
    $.ajax({
        url: "addHoroscope.php",
        method: "POST",
        data:{
           "personnr": $("#personalNumber").val()
        },
        success: function(results){
            $("#content").html(results);
        }   
    });
};
function runGet(){
    $.ajax({
        url: "gethoroscope.php",
        method: "POST",
        success: function(results){
            $("#wrapper").html(results);
        }
    });
};   