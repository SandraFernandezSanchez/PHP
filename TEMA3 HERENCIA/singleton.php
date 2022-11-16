<?php

class Config {
    
    private $nombre;
    private static $instance;

    private function __construct(string $nombre = '') {
        $this->nombre = $nombre;
    }

    static function singleton() {
        if(!isset(self::$instance)) {
            self::$instance = new Config();
        }

        return self::$instance;
    }

    function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    function getnombre() {
        return $this->nombre;
    }
}


$config1 = Config::singleton();
    $config1->setNombre('Sandra');
    // podemos comprobar que el nombre que tiene el primero objeto es 'Sandra'
    echo $config1->getNombre()."<br>";
    
    $config2 = Config::singleton();
    $config2->setNombre('Alex');
    
    // al ser la misma instaciacion se quedan con el nombre que se ha definido por ultima vez
    echo $config1->getNombre()."<br>";
    echo $config2->getNombre()."<br>";
	
	?>
