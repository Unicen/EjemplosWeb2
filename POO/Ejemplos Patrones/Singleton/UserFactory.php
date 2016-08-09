<?php
public class Singleton
{
    public $nombre;
    
    private static $_instance = null;
    
    final private function __construct() {
        serlf::$nombre = date("Y-m-d H:i:s");
    }
    
    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
} ?>