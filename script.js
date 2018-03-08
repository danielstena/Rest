

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
    $("#saveMyHoroscopeDiv").hide();
    $("#updateMyHoroscopeDiv").show();
    $("#eraseDiv").show();
    
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
    $("#saveMyHoroscopeDiv").show();
    $("#updateMyHoroscopeDiv").hide();
    $("#eraseDiv").hide();
};

function runView(){
    $.ajax({
        url: "viewHoroscope.php",
        method: "GET",
        success: function(results){
            $("#content").html(results);
        }
    });
};   