<ul>
  {foreach from=$tareas key=index item=tarea}
  <li>
    {if $tarea['finalizada']}
      <s>{$tarea['nombre']}</s>
    {else}
      {$tarea['nombre']}
    {/if}
      {foreach from=$tarea['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="TareaImagen_{$tarea['nombre']}_{$imagen['id_imagen']}"  class="img-thumbnail">
      {/foreach}
      <a class="eliminarTareas" href="#" data-idtarea="{$tarea['id_tarea']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      <a href="index.php?action=realizar_tarea&id_tarea={$tarea['id_tarea']}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
  </li>
  {/foreach}
</ul>
