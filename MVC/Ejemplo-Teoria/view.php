<?php
class View
{
     
    public function output($string){
        echo "<html><head><title>Hello World!</title></head><a href='index.php?nombre=Nacho'>" . $string . "</a></html>";
    }
}
?>