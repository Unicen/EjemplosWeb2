<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'home'=> 'index',
      'agregarTarea'=> 'create',
      'guardarTarea'=> 'store',
      ''=> 'index',
      'borrarTarea' => 'borrarTarea',
      'finalizarTarea' => 'finalizarTarea',
      'tareas' => 'mostrarTareas',
    ];

}

 ?>
