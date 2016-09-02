<ul>
  {foreach from=$tareas key=index item=tarea}
  <li>
    {if $tarea['finalizada']}
      <s>{$tarea['nombre']}</s>
    {else}
      {$tarea['nombre']}
    {/if}
      <a class="eliminarTareas" href="#" data-idtarea="{$tarea['id_tarea']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      <a href="index.php?action=realizar_tarea&id_tarea={$tarea['id_tarea']}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
  </li>
  {/foreach}
</ul>
