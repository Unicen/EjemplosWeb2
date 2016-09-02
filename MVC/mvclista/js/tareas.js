$(document).ready(function(){

$('#agregarTareaBtn').click(function(){
  event.preventDefault();
  $.post( "index.php?action=guardar_tarea",$("#formTarea").serialize(), function(data) {
    $('#listaTareas').html(data);
    $('#tarea').val('');
});
});

$('.eliminarTareas').click(function(){
event.preventDefault();
$.get( "index.php?action=eliminar_tarea",{ id_tarea: $(this).attr("data-idtarea") }, function(data) {
  $('#listaTareas').html(data);
  $('#tarea').val('');
});

});
});
