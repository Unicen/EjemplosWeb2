<?php

    class ParametersView
    {
        function __construct()
        {

        }

        function show($params)
        {
            echo "Hola, se capturaron los siguientes parametros<br>";
            echo "<br>";
            echo "<ul>";
            foreach( $params as $param )
            {
                echo "<li>".$param."</li>";
            }
            echo "</ul>";
            echo "<br>";

            echo "<form id='params_form'>Agregar parametro: <input type='text' id='param'/><input type='submit'/></form>";
            echo "<form id='borrar_form'><input id='borrar' value='Borrar todos' type='submit'/></form>";
            echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>';
            echo '<script src="../js/params_form.js" crossorigin="anonymous"></script>';
        }

    }
    
?>