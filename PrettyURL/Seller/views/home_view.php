<?php

    class HomeView
    {
        function __construct()
        {

        }

        function show($params)
        {
            echo "Hola!<br>";
            echo "<a href='../parameters/show'>Vea el ejemplo con parametros.</a>";
        }

    }
    
?>