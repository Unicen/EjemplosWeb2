<?php
interface ComputerType {
    public function transport();
}

class ComputerType_Laptop implements ComputerType
{
    public function transport() {
        echo "Transporting . . . Put the laptop in the bag and no one get shurt. ";
    }
}

class ComputerType_Desktop implements ComputerType
{
    public function transport() {
        echo "Transporting . . . Get the boxes, load it up, move it . ";
    }
}

class ComputerType_Server implements ComputerType
{
    public function transport() {
        echo "Transporting . . . Seriously ? Yeah, right . Transport this!";
    }
}
?>