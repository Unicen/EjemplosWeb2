<ul class="list-group">
  {foreach from=$tareas item=tarea}
      <li class="list-group-item">
        {if $tarea['completado'] }
          <s>{$tarea['titulo']|truncate:6|upper} : {$tarea['descripcion']}</s>
        {else}
            {$tarea['titulo']|truncate:6|upper} : {$tarea['descripcion']}
        {/if}
        <a href="borrarTarea/{$tarea['id_tarea']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    </li>
  {/foreach}
</ul>
