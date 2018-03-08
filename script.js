function saveHoroscope(){
    $.ajax({
        url: "addHoroscope.php",
        method: "POST",
        data:{
           "personnr": $("#personalNumber").val()
        },
        success: function(){
            runView();
        }   
    });
};

function updateHoroscope(){
    $.ajax({
        url: "updateHoroscope.php",
        method: "PUT",
        data:{
           "personnr": $("#personalNumber").val()
        },
        success: function(results){
            $("#content").html(results);

            // runView();
        }   
    });
};

//Funktion för att radera det sparade horoskopet.
function eraseHoroscope(){
    $.ajax({
        url: "deleteHoroscope.php",
        method: "DELETE",
        success: function(results){
            $("#content").html(results);
        }   
    });
};

function runView(){
    $.ajax({
        url: "viewHoroscope.php",
        method: "GET",
        success: function(results){
            $("#content").append(results);
        }
    });
};   