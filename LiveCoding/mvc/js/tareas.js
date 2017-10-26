$(document).ready(function(){

  function crearTarea(tarea){
     var element = '<li id="tarea' + tarea.id_tarea + '"class="list-group-item">'
     if(tarea.completado == 1)
       element += '<s>' + tarea.titulo + ':' + tarea.descripcion + '</s>';
     else
       element += tarea.titulo + ':' + tarea.descripcion;
     element += '<a href="borrarTarea/' + tarea.id_tarea + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
     element += '<a href="finalizarTarea/' + tarea.id_tarea + '"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>'
     element += '</li>';
     return element;
   }

  function cargarTareas() {
        $.ajax("api/tareas")
            .done(function(tareas) {
              //console.log(tareas);
              $('li').remove();
              for (var key in tareas) {
                $('#listaTareas').append(crearTarea(tareas[key]));
              }

            })
            .fail(function() {
                $('#listaTareas').append('<li>Imposible cargar la lista de tareas</li>');
            });
    }

  $('#refresh').click(function(event){
      event.preventDefault();
      cargarTareas();
  })
  cargarTareas();
});
