{include file="../header.tpl"}
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form action="guardarPalabraProhibida" method="post">
      <div class="form-group">
        <label for="palabra">Palabra Prohibida</label>
        <input type="text" class="form-control" id="palabra" name="palabra" placeholder="Palabra a Prohibir">
      </div>
      <button type="submit" class="btn btn-default">Crear</button>
    </form>
  </div>
</div>
{include file="../footer.tpl"}
