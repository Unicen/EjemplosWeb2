{include file="header.tpl"}
  {foreach from=$cars item=car}
    <ul>
      <li>Marca: {$car->marca}</li>
      <li>Modelo: {$car->modelo}</li>
      <li>Puertas: {$car->puertas}</li>
      <li>Motor: {$car->motor}</li>
      <li>Origen: {$car->origen}</li>
      <li>Color: {$car->color}</li>
    </ul>
  {/foreach}
{include file="footer.tpl"}
