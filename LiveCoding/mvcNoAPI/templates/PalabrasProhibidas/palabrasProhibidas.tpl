<ul class="list-group">
  {foreach from=$palabras_prohibidas item=palabraProhibida}
      <li class="list-group-item">
        {$palabraProhibida['palabra']}
        <a href="borrarPalabraProhibida/{$palabraProhibida['id_palabra_prohibida']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    </li>
  {/foreach}
</ul>
