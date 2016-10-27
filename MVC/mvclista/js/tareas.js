$(document).ready(function(){
  function createTareas(tareas){
      for (var i = 0; i < tareas.length; i++) {
        tareas[i].finalizada = tareas[i].finalizada ==0 ? false: true;
      }
       var rendered = Mustache.render(template,{titulo : "Tarea Extra", paquete:tareas});
       $('#listaTareas').html(rendered);

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
      success: createTareas
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
