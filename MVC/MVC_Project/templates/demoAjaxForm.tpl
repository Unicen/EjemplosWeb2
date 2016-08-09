{include file="header.tpl" title=foo}

<script>

	function keyPressUser(){
		var valor = $('#user').val();
		$.ajax({
		url: 'index.php?action=demoAjax&ajaxMode=valorUser',
		dataType: 'JSON',
		data: { username : valor},
		type: "GET",
		success: function(data) {
			alert(data.intento.nro);
		}
		});
		
	}


	function limpiarContador(){
		$.ajax({
		url: 'index.php',
		dataType: 'JSON',
		type: "POST",
		data: {
			action: 'demoAjax',
			ajaxMode: 'limpiarContador',
		},
		success: function(data) {
			$('#div_limpieContador').html(data.codigoHTML);
		}
		});
		
	}

</script>


 <div class="container">
  <h1>Sistema de Viviendas</h1>
  <h2>Formulario AJAX</h2>

	<form method="post" action="index.php?action=demoAjax&ajaxMode=Submit">
        <p><input type="text" id="user" name="user" value="" onkeypress="keyPressUser()" placeholder="Username or Email"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
        <p><input type="submit" name="commit" value="Login"></p>
        <p><input type="button" onClick="limpiarContador()" name="limpiar" value="Limpiar Contador"></p>
        <div id="div_limpieContador"></div>
    </form>
  	
</div>

{include file="footer.tpl"}




