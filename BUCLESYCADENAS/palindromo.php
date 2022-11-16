<?php

include('funciones01.php');
//variables que necesitaremos
$cadena = "";
$vocales = 0;
$consonantes = 0;
$palindromo = false;
$envio = false;
$vacio=false;

if(isset($_GET['palabra'])) {
    $cadena = $_GET['palabra'];
    $envio = true;
    $vocales = cuentaNumVocales($cadena);
    $consonantes = cuentaNumConsonantes($cadena);
    $palindromo = esPalindromo($cadena);
	if ($_GET['palabra'] == ""){
		echo "error no has metido ninguna palabra";
		$vacio=true;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>analizador de palabras</h1>
    <div>
        <form>
            Palabra: <input type="text" name="palabra" placeholder="Tu palabra" value="<?=$cadena?>">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php if($envio && $vacio==false){ ?>
        <ul>
            <li>Vocales: <?=$vocales?></li>
            <li>Consonantes: <?=$consonantes?></li>
            <li>PalÃ­ndromo: <?=($palindromo)?'SÃ­':'No'?></li>
        </ul>
    <?php } ?>
		
</body>
</html>
