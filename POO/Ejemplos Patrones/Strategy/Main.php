<?php
include "Strategy.php";

class Computer_Identifier
{
    public function __construct() {
        $mac = new Computer_Mac;
        $mac->identify();
        $mac->openTerminal();
        $mac->closeTerminal();
        $mac->gotoNext();
        $pc = new Computer_PC;
        $pc->identify();
        $pc->openTerminal();
        $pc->closeTerminal();
        $pc->gotoNext();
        $linux = new Computer_Server;
        $linux->identify();
        $linux->transport();
    }
}

$comps = new Computer_Identifier();

?>