<?php
/* Smarty version 3.1.30, created on 2017-09-01 00:34:45
  from "/Applications/XAMPP/xamppfiles/htdocs/EjemplosWeb2/LiveCoding/db/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a88f057399b8_26383748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3f22ce80c5a5760b415579f3e23e3123c007070' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/EjemplosWeb2/LiveCoding/db/templates/index.tpl',
      1 => 1504217993,
      2 => 'file',
    ),
    'c430c35f8e8f8ad307dd6f639c83a290600bc30f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/EjemplosWeb2/LiveCoding/db/templates/header.tpl',
      1 => 1504216609,
      2 => 'file',
    ),
    'a14550b4c12e312cc8b04947246002151df9641a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/EjemplosWeb2/LiveCoding/db/templates/footer.tpl',
      1 => 1504216682,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 10,
),true)) {
function content_59a88f057399b8_26383748 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To Do App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Tareas</h1>
          <ul class="list-group">
                        		<li class="list-group-item">
                                        SADAS : dasdsa
                                    <a href="borrarTarea/23"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        SDF... : fdsfsddsf
                                    <a href="borrarTarea/25"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        FDSFDS : fsdfsd
                                    <a href="borrarTarea/26"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        FDSFDS : fsdfsd
                                    <a href="borrarTarea/27"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        ASD... : fsdfsdfsd
                                    <a href="borrarTarea/28"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                      <s>SAD... : dasda</s>
                                    <a href="borrarTarea/29"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        DAS... : sa dasdas
                                    <a href="borrarTarea/30"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                      <s>SADASD : asdasda</s>
                                    <a href="borrarTarea/31"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        EST... : sadasd
                                    <a href="borrarTarea/32"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        123123 : 12321312
                                    <a href="borrarTarea/33"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
                        		<li class="list-group-item">
                                        123... : 
                                    <a href="borrarTarea/34"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </li>
            

<!-- /*%%SmartyNocache:6781404959a88d28346a09_06355449%%*/<?php echo '<?php'; ?>
 echo '<?php echo '<?php'; ?>

          ';<?php echo '?>'; ?>
/*/%%SmartyNocache:6781404959a88d28346a09_06355449%%*/foreach ($tareas as $tarea) {
            if ($tarea['completado']){
              echo '<li class="list-group-item"><s>'.$tarea['titulo'].': '.$tarea['descripcion'].'</s><a href="borrarTarea/'.$tarea['id_tarea'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>';
            }
            else{
              echo '<li class="list-group-item">'.$tarea['titulo'].': '.$tarea['descripcion'].'</s><a href="borrarTarea/'.$tarea['id_tarea'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a><a href="finalizarTarea/'.$tarea['id_tarea'].'"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></a></li>';
            }

          }
/*%%SmartyNocache:6781404959a88d28346a09_06355449%%*/<?php echo '<?php'; ?>
 echo '<?php echo '?>'; ?>
';<?php echo '?>'; ?>
/*/%%SmartyNocache:6781404959a88d28346a09_06355449%%*/ -->
          </ul>
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
</div><!-- /.container -->
</body>
</html>

<?php }
}
