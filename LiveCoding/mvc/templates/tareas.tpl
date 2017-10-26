<ul class="list-group" id="listaTareas">
  {foreach from=$tareas item=tarea}
      <li class="list-group-item">
        {if $tarea['completado'] }
          <s>{$tarea['titulo']} : {$tarea['descripcion']}</s>
        {else}
            {$tarea['titulo']} : {$tarea['descripcion']}
        {/if}
        <a href="borrarTarea/{$tarea['id_tarea']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        <a href="finalizarTarea/{$tarea['id_tarea']}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
    </li>
  {/foreach}
</ul>
