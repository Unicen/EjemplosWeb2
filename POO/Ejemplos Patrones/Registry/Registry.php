<?php
class Registry
{
    protected static $_register = array();
    public static function set($label, $value) {
        if (!isset(self::$_register[$label])) {
            self::$_register[$label] = $value;
        }
    }
    
    public static function get($label) {
        if (isset(self::$_register[$label])) {
            return self::$_register[$label];
        }
    }
}
?>