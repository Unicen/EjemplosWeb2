{include file="header.tpl"}
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Tareas</h1>
          {include file="tareas.tpl"}
          <form action="agregarTarea" method="post">
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la tarea">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <textarea name="descripcion" id="descripcion" name="descripcion" rows="8" cols="50"></textarea>
            </div>
            <div class="form-group">
              <label for="completada">Completada</label>
              <input type="checkbox" id="completada" name="completada" value="1">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
          </form>
        </div>
      </div>
{include file="footer.tpl"}
