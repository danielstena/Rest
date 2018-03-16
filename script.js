

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

    // Flytta dom till if satsen om det finns info i session
    
};



function updateHoroscope(){
    $.ajax({
        url: "updateHoroscope.php",
        method: "PUT",
        data:{
           "personnr": $("#personalNumber").val()
        },
        success: function(results){
           
            if(results == "true"){
                runView();
            }

        }   
    });
};

//Funktion för att radera det sparade horoskopet.
function eraseHoroscope(){
    $.ajax({
        url: "deleteHoroscope.php",
        method: "DELETE",
        success: function(results){
            if(results == "true"){
                $("#content").html("Ditt horoskop är nu borta");
            }
            else{
                $("#content").html("Det finns inget horoskop sparat");
            }
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
        if(results != ""){
            $("#saveMyHoroscopeDiv").hide();
            $("#updateMyHoroscopeDiv").show();
            $("#eraseDiv").show();
           
        }
        else{
            $("#updateMyHoroscopeDiv").hide()
            $("#eraseDiv").hide();
            alert("Du måste ange personnr")
        };
        

        }
    });
};   