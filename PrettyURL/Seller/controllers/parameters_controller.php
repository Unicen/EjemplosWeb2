<?php
    require_once("views/parameters_view.php");

    class ParametersController
    {
        function __construct()
        {
            session_start();
            if(!isset($_SESSION['params']))
                $_SESSION['params'] = array();
        }

        function show()
        {
            $params = $_SESSION['params'];

            $view = new ParametersView();
            $view->show($params);
        }

        function add($params)
        {
            $_SESSION['params'] = array_merge($_SESSION['params'], $params);
            $this->show();
        }

        function delete_all()
        {
            $_SESSION['params'] = array();
            $this->show();
        }
    }

?>