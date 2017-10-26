$(document).ready(function(){
  let templateTarea;

  $.ajax({ url: 'js/templates/tareas.mst'}).done( template => templateTarea = template);

  function crearTarea(tareas){
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
          url: "api/tareas/" + idTarea
        })
      .done(function() {
         $('#tarea'+idTarea).remove();
      })
      .fail(function() {
          alert('Imposible borrar la tarea');
      });
  }

  function guardarTarea(tarea) {
    $.ajax({
          method: "POST",
          data: tarea,
          url: "api/tareas",
        })
      .done(function(tarea) {
          console.log(tarea);
          crearTarea([tarea]);
      })
      .fail(function() {
          alert("errir");
      });
  }

  function getFormData($form){
      var unindexed_array = $form.serializeArray();
      var indexed_array = {};

      $.map(unindexed_array, function(n, i){
          indexed_array[n['name']] = n['value'];
      });

      return indexed_array;
  }

  $('#refresh').click(function(event){
      event.preventDefault();
      cargarTareas();
    });

  $('#crearForm').submit(function(event){
      event.preventDefault();
      formData =  JSON.stringify(getFormData($(this)));
      guardarTarea(formData);
    });

  $('body').on('click', 'a.borrar', function() {
    idTarea = $(this).data('idtarea');
    borrarTarea(idTarea);
  });

});
