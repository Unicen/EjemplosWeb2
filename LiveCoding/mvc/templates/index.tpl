{include file="header.tpl"}
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Tareas</h1>
          <a href="palabrasProhibidas">Lista de Palabras Prohibidas</a>
          <button id="refresh" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
           </button>
          {include file="tareas.tpl"}
        </div>
      </div>

{include file="formCrear.tpl"}
{include file="footer.tpl"}
