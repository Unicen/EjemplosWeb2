<?php

//Computer

abstract class Computer
{
    public $type;
    public $platform;
    abstract public function identify();
    public function transport() {
        $this->type->transport();
    }
    public function openTerminal() {
        $this->platform->terminal();
    }
    public function closeTerminal() {
        echo "Close the terminal: type e - x - i - t, hit < enter > \n";
    }
    public function setComputerType(ComputerType $type) {
        $this->type = $type;
    }
    public function setPlatform(ComputerPlatform $platform) {
        $this->platform = $platform;
    }
    public function gotoNext() {
        echo "Moving on . . . \n";
    }
}

//Computer Type
interface ComputerType {
    public function transport();
}

class ComputerType_Laptop implements ComputerType
{
    public function transport() {
        echo "Transporting . . . Put the laptop in the bag and no one get shurt. \n";
    }
}

class ComputerType_Desktop implements ComputerType
{
    public function transport() {
        echo "Transporting . . . Get the boxes, load it up, move it . \n";
    }
}

class ComputerType_Server implements ComputerType
{
    public function transport() {
        echo "Transporting . . . Seriously ? Yeah, right . Transport this!\n";
    }
}

//Computer Platform
interface ComputerPlatform {
    public function terminal();
}
class ComputerPlatform_Mac implements ComputerPlatform
{
    public function terminal() {
        echo "Open the termina: Go to applications->terminal. \n";
    }
}

class ComputerPlatform_Ubuntu implements ComputerPlatform
{
    public function terminal() {
        echo "Open the terminal: Go to applications->accessories->terminal. \n";
    }
}
class ComputerPlatform_Windows implements ComputerPlatform
{
    public function terminal() {
        echo "Open the terminal: I am not smart enough to have a terminal but . . . \n";
    }
}

//Computer Instances

class Computer_Mac extends Computer
{
    public function __construct() {
        $this->type = new ComputerType_Laptop;
        $this->platform = new ComputerPlatform_Mac;
    }
    public function identify() {
        echo "I am a mac.\n";
    }
}
class Computer_PC extends Computer
{
    public function __construct() {
        $this->type = new ComputerType_Desktop;
        $this->platform = new ComputerPlatform_Windows;
    }
    public function identify() {
        echo "I'm a PC \n";
    }
}

class Computer_Server extends Computer
{
    public function __construct() {
        $this->type = new ComputerType_Server;
        $this->platform = new ComputerPlatform_Ubuntu;
    }
    public function identify() {
        echo "I am Ubuntu, one of a multitude of flavors of linux.\n";
    }
}
?>