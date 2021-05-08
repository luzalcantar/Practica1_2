$(document).ready(function() {

        $.ajax({
            url: "proceso/exportar.php",
            success: function(response)
            {
                $("#txtRespuesta").text(response);
                console.log(response);
            }
        });

});