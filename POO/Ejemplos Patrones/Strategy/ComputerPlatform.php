<?php
interface ComputerPlatform {
    public function terminal();
}
class ComputerPlatform_Mac implements ComputerPlatform
{
    public function terminal() {
        echo "Open the termina: Go to applications->terminal. ";
    }
}

class ComputerPlatform_Ubuntu implements ComputerPlatform
{
    public function terminal() {
        echo "Open the terminal: Go to applications->accessories->terminal. ";
    }
}
class ComputerPlatform_Windows implements ComputerPlatform
{
    public function terminal() {
        echo "Open the terminal: I am not smart enough to have a terminal but . . . ";
    }
}
?>