<?php
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
        echo "Closet he terminal: type e - x - i - t, hit < enter >";
    }
        public function setComputerType(ComputerType $type) {
            $this->type = $type;
        }
        public function setPlatform(ComputerPlatform $platform) {
            $this->platform = $platform;
        }
        public function gotoNext() {
            echo "Moving on . . . ";
        }
    }
?>