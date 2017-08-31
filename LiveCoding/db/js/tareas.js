$(document).ready(function(){

  $.ajax({
      url: "http://localhost/EjemplosWeb2/LiveCoding/db/tareas",
      success: function(result){
        for (var i = 0; i < 1000000000; i++) {
        }
        $("#tareas").html(result);
      }
  });

});
