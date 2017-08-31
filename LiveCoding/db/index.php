<?php
include_once 'tareas.php';
include_once 'libs/Smarty.class.php';
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

function finalizarTarea($params){
  markCompletedTarea($params[0]);
  header('Location: '.HOME);
}

function borrarTarea($params){
  deleteTarea($params[0]);
  header('Location: '.HOME);
}

function agregarTarea(){
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $completada = isset($_POST['completada']) ? $_POST['completada'] : 0;
  insertTarea($titulo, $descripcion, $completada);
  header('Location: '.HOME);
}

function home()
{
  $titulo = 'To Do App';
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/index.tpl');
}

function mostrarTareas()
{
  $tareas = getTareas();
  $smarty = new Smarty();
  $smarty->assign('tareas', $tareas);
  $smarty->display('templates/tareas.tpl');
}
