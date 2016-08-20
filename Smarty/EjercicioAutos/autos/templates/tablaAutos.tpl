{include file="header.tpl"}
<table class="table table-striped">
  <thead>
    <tr>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Puertas</th>
      <th>Motor</th>
      <th>Origen</th>
      <th>Color</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$cars item=car}
    <tr>
      <td>{$car->marca}</td>
      <td>{$car->modelo}</td>
      <td>{$car->puertas}</td>
      <td>{$car->motor}</td>
      <td>{$car->origen}</td>
      <td>{$car->color}</td>
      <td>{$car->precio|currency:"ARS"}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
{include file="footer.tpl"}
