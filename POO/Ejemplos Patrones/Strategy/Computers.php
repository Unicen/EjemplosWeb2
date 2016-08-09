<?php
class Computer_Mac extends Computer
{
    public function __construct() {
        $this->type = new ComputerType_Laptop;
        $this->platform = new ComputerPlatform_Mac;
    }
    public function identify() {
        echo "I am a mac.";
    }
}
class Computer_PC extends Computer
{
    public function __construct() {
        $this->type = new ComputerType_Desktop;
        $this->platform = new ComputerPlatform_Windows;
    }
    public function identify() {
        echo "I'm a PC ";
    }
}

class Computer_Server extends Computer
{
    public function __construct() {
        $this->type = new ComputerType_Server;
        $this->platform = new ComputerPlatform_Ubuntu;
    }
    public function identify() {
        echo "I am Ubuntu, one of a multitude of flavors of linux.";
    }
}
