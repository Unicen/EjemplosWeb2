<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#index',
      'home'=> 'TareasController#index',
      'tareas' => 'TareasController#index',
      'palabrasProhibidas' => 'PalabrasProhibidasController#index',
      'agregarPalabraProhibida' => 'PalabrasProhibidasController#create',
      'guardarPalabraProhibida' => 'PalabrasProhibidasController#store',
      'agregarTarea'=> 'TareasController#create',
      'guardarTarea'=> 'TareasController#store',
      'borrarTarea' => 'TareasController#destroy',
      'finalizarTarea' => 'TareasController#finish',
    ];

}

 ?>
