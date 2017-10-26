<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form id="crearForm" action="guardarTarea" method="post" enctype="multipart/form-data">
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
        <input type="hidden" id="completada" name="completada" value="0">
        <input type="checkbox" id="completada" name="completada" value="1">
      </div>
      <button type="submit" class="btn btn-default" id="crearTarea">Crear</button>
    </form>
  </div>
</div>
