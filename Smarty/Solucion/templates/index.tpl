{include file="header.tpl" title=foo}

 <div class="container">
  <h1>Lista de Personas</h1>
  
  <table class="table table-striped">
  
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
	  <th>Edad</th>
    </tr>
  </thead>
  <tbody>
 {foreach $personas as $persona}    
	<tr>
      <td>{$persona.Nombre}</td>
      <td>{$persona.Apellido}</td>
	  <td>{$persona.Edad}</td>
    </tr>
 {/foreach}
  </tbody>
</table>
</div>

{include file="footer.tpl"}




