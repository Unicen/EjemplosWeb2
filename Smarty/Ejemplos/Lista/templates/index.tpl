{include file="header.tpl" title=foo}

 <div class="container">
  <h1>Lista de Personas</h1>
  <ul>
 {section name=lnombres loop=$Nombre}
	<li>{$Nombre[lnombres]} {$Apellido[lnombres]}</li>
 {/section}
</ul>
</div>

{include file="footer.tpl"}




