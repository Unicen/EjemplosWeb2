$(document).ready(function(){
  function createTarea(tarea){

       if(tarea.finalizada == 0)
           tarea.finalizada = false;
       else
         tarea.finalizada = true;
       var rendered = Mustache.render(template,tarea);
       $('#listaTareas').append(rendered);

  }
  var template;
  $.ajax({ url: 'js/templates/tarea.mst',
   success: function(templateReceived) {
     template = templateReceived;
   }
 });

$('#refresh').click(function(event){
  event.preventDefault();
  $.ajax(
    {
      method:"GET",
      dataType: "JSON",
      url: "api/tarea",
      success: function(receivedData){
        $("#listaTareas").html("");
        var html = "";
        for (var i = 0; i < receivedData.length; i++) {
          html += createTarea(receivedData[i]);
        }
        html += "";
      }
    }
  )
});
// $('#agregarTareaBtn').click(function(){
//   event.preventDefault();
//   $.post( "index.php?action=guardar_tarea",$("#formTarea").serialize(), function(data) {
//     $('#listaTareas').html(data);
//     $('#tarea').val('');
// });
// });

$('.eliminarTareas').click(function(){
event.preventDefault();
$.get( "index.php?action=eliminar_tarea",{ id_tarea: $(this).attr("data-idtarea") }, function(data) {
  $('#listaTareas').html(data);
  $('#tarea').val('');
});

});
});
