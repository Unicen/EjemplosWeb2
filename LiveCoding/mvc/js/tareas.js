$(document).ready(function(){
  let templateTarea;
  $.ajax({ url: 'js/templates/tareas.mst'}).done( template => templateTarea = template);

  function cargarTareas() {
        $.ajax("api/tareas")
            .done(function(tareas) {
              $('li').remove();
              let rendered = Mustache.render(templateTarea , tareas);
              $('#listaTareas').append(rendered);
            })
            .fail(function() {
                $('#listaTareas').append('<li>Imposible cargar la lista de tareas</li>');
            });
    }

  function crearTarea() {
      let tarea ={
        "titulo": $('#titulo').val(),
        "descripcion": $('#descripcion').val(),
        "completada": $('#completada')[0].checked ? "1" : "0"
      };

      $.ajax({
            method: "POST",
            url: "api/tareas",
            data: JSON.stringify(tarea)
          })
        .done(function(data) {
          let rendered = Mustache.render(templateTarea , data);
          $('#listaTareas').append(rendered);
        })
        .fail(function(data) {
            console.log(data);
            alert('Imposible crear la tarea');
        });
    }

    function borrarTarea(idTarea) {
      $.ajax({
            method: "DELETE",
            url: "api/tareas/" + idTarea
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

  $('#btnCrearTarea').click(function(event){
      event.preventDefault();
      crearTarea();
  });

  $('body').on('click', 'a.js-borrar', function() {
      event.preventDefault();
      let idTarea = $(this).data('idtarea');
      borrarTarea(idTarea);
  });

  cargarTareas();
});
