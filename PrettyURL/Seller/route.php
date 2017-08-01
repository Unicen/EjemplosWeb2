<?php
    require_once("controllers/home_controller.php");
    require_once("controllers/parameters_controller.php");

    $params = array_filter(explode("/",$_GET["params"]));
    
    # Verifico que existan controlador y acción:
    switch(count($params))
    {
        case 0:
            # Si no hay controlador, vamos a home.
            header("Location: ./home/show");
            exit();
            break;
        case 1:
            # Si no hay hacción voy a show
            header("Location: ./show");
            exit();
            break;
    }
    

    # Saco el primer elemento del arreglo y lo guardo como controller.
    $controller = array_shift($params);

    # Creo el controlador seleccionado:
    switch($controller)
    {
        case "home":
            $controller = new HomeController();
            break;
        case "parameters":
            $controller = new ParametersController();
            break;
        default:
            echo "404";
            break;
    }

    # Saco el siguiente elemento del arreglo y lo guardo como acción.
    $action =  array_shift($params);
    # Llamo la acción elegída.
    switch($action)
    {
        case "show":
            $controller->show();
            break;
        case "add":
            $controller->add($params);
            break;
        case "deleteall":
            $controller->delete_all();
            break;
        default:
            echo "404";
            break;
    }

?>