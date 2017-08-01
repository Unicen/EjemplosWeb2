
$("#params_form").on("submit", function()
{
    $.ajax({
    url: "add/"+$("#param").val(),
    }).done( function(data) {
        $( document ).html( data );
    });
});

$("#borrar_form").on("submit", function()
{
    $.ajax({
    url: "deleteall/",
    }).done( function(data) {
        $( document ).html( data );
    });
});
