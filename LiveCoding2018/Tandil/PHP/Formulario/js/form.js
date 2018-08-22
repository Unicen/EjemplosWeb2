$("#formulario").submit(function() {
  event.preventDefault();
  let data = $(this).serialize();
  console.log(data);
  $.post("form.php", data, function(response) {
    $("#data").html(response);
  });
});
