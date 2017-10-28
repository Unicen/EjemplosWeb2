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

  $('#refresh').click(function(event){
      event.preventDefault();
      cargarTareas();
  });

  cargarTareas();
});
