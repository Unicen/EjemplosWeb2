{include file="header.tpl" title=foo}
 <div class="menu">
 	<a href="index.php" >Indice</a>
 </div>
 <div class="container">
  <h1>Datos Personales</h1>

	{foreach key=pid item=persona from=$personas}
	  <div>
	  	<strong>Apellido: </strong>{$persona.Apellido|capitalize:true}
	  	<strong>Nombre: </strong>{$persona.Nombre|capitalize:true}
	  	<div>
		  	<strong>Sueldo: </strong> <p>{$persona.IngresosMensuales|string_format:"%.2f"}</p>
			<strong>Mail: </strong> <p>{$persona.Mail}</p>
	  	</div>
	  	<a href="index.php?action=editarPersonas&id={$persona.id}" >Editar</a>
	  </div>
	{/foreach}
  
</div>

{include file="footer.tpl"}




