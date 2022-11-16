<?php 


class Circulo{
    private const PI = 3.14;
    private $radio;

    public function __construct($radio=0){
        $this->radio=$radio;
    }

    public function setRadio($radio){
        $this->radio = $radio;
    }

    public function getRadio(){
        return $this->radio;
    }

    public function area(){
        return (self::PI * pow($this->radio,2));
    }
} 

    $circulo1 = new Circulo();

    $circulo1->setRadio(5);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Circulo</title>
</head>
<body>
    <h3>El area del circulo es: <?= $circulo1->area(); ?></h3>
</body>
</html>
