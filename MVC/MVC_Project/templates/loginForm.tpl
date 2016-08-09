{include file="header.tpl" title=foo}

 <div class="container">
  <h1>Sistema de Viviendas</h1>
  <h2>Formulario</h2>

	<form method="post" action="index.php?action=login">
        <p><input type="text" name="user" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
        <p><input type="submit" name="commit" value="Login"></p>
    </form>
  	
</div>

{include file="footer.tpl"}




