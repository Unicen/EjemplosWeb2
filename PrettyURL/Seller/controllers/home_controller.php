<?php
    require_once("views/home_view.php");

    class HomeController
    {
        function __construct()
        {

        }

        function show($params)
        {
            $view = new HomeView();
            $view->show($params);
        }
    }

?>