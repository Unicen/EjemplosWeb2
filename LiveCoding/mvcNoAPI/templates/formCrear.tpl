{include file="header.tpl"}
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form action="guardarTarea" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo"  value="{$titulo}" placeholder="Titulo de la tarea">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" name="descripcion" rows="8" cols="50">{$descripcion}</textarea>
      </div>
      <div class="form-group">
        <label for="imagen">Imagen</label>
        <input type="file" id="imagenes" name="imagenes[]" multiple>
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
