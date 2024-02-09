<?php

class staticc {
    public static $angka = 1;

    public static function get() {
        echo self::$angka++ ."<br>";
    }
}

echo staticc::$angka; 
echo "<br>";
staticc::get(); 
staticc::get(); 
staticc::get(); 
staticc::get(); 
staticc::get(); 
staticc::get(); 
?>