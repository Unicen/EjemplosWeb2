$(document).ready(function(){
  let templateTarea;

  $.ajax({ url: 'js/templates/tareas.mst'}).done( template => templateTarea = template);

  function crearTarea(tareas){
    debugger;
    let rendered = Mustache.render(templateTarea ,{arreglo:tareas});
    $('#listaTareas').append(rendered);
  }

  function cargarTareas(){
    $.ajax( "api/tareas" )
    .done(function(tareas) {
      $('li').remove();
      crearTarea(tareas);
    })
    .fail(function() {
        $('#listaTareas').append('<li>Imposible cargar la lista de tareas</li>');
    });
  }

function borrarTarea(idTarea) {
  $.ajax({
        method: "DELETE",
        url: "api/tarea/" + idTarea
      })
    .done(function() {
       $('#tarea'+idTarea).remove();
    })
    .fail(function() {
        alert('Imposible borrar la tarea');
    });
  }

  $('#refresh').click(function(event){
      event.preventDefault();
      cargarTareas();
    });

  $('body').on('click', 'a.borrar', function() {
    idTarea = $(this).data('idtarea');
    borrarTarea(idTarea);
  });

});
