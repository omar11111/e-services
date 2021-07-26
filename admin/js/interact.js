$(document).ready(function(){
 
    $("input[type=text]").on("click", function(){

        $(this).prev("label").css({
            "top": "-20px"
        })

    });
  
});