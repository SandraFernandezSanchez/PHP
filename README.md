github nacho,dani fernandez y jason y mario 

Jitsi meet para conectarnos y compartir pantalla
Github jorgeduenaslerin

REPASO PIRAMIDES JAVA

 
public static void main(String[] args) {
for (int i = 1;i <= 7;i++) {
for(int j = 1;j < i;j++)
System.out.print(" ");
for(int j = 1;j <=7-i;j++) 
System.out.print( j );
System.out.println();
}
}

en triangulo sería

 

public class MyClass {
    public static void main(String[] args) {
        
        
        int numFilas = 4;
       
        System.out.println();
        for(int numBlancos = 0, numAsteriscos = (numFilas*2)-1; numAsteriscos>0; numBlancos++, numAsteriscos -= 2){
             
            //Espacios en blanco
            for(int i=0; i < numBlancos; i++){
                System.out.print(" ");
            }
             
            //Asteriscos
            for(int j=numAsteriscos; j > 0; j--){
                System.out.print("*");
            }
            System.out.println();
        }
    }   


}


EJERCICIOS

⦁	Escriba "Hola mundo!" de forma dinámica con la instrucción echo
⦁	Escriba "Hola mundo!" usando una variable para almacenar la cadena
⦁	Escriba después de "Hola mundo!" "Esta página ha sido programada por "
⦁	Modifica la página para que escriba la parte "Esta página..." en cursiva y "tu nombre" en cursiva y negrita. NOTA: Puedes utilizar el operador "." para concatenar la salida
	
<?php
	$nombre='Jorge'; //los nombres se pueden declarar con comillas dobles o simples 
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Document</title>
	    <link rel="stylesheet" href="estilo4.css">
	</head>
	<body>
	    <h1>¡Hola mundo!</h1>
	    <p>Esta página ha sido progrmada por <span><?=$nombre?></span></p>
	</body>
	</html>

tambien se podría poner echo " esta página ha sido programada por $nombre" o bien echo 'esta pagina ha sido programada por' . $nombreb
En el estilo4.css:
bodyp {
	    font-style: italic;
	}

	
	body > p > span{
	    font-weight: bold;
	}





NOTA: Localhost:8000
Name nos vale en el lado del servidor y el id para cliente

⦁	Utilice 3 variables: $nombre, $r, $pi. Al visitar la página establecerá el valor de las variables, escribirá un mensaje de bienvenida y escribirá el área y el perímetro de la circunferencia. NOTA: Utiliza un fichero css para dar estilo a cada parte.
<?php 
	$nombre='Jorge';
	$r = 0;
	$error = false;
	// $_GET Información de la cabecera
	if (isset($_GET['radio'])) {
	    $r = $_GET['radio'];
	    if ($r == "") {
	        $r = 0;
	        $error = true;
	    }
	} else {
	    $r = 0;
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
	    <h1>Bienvenido a la calculadora <?=$nombre?></h1>
	    <div>
	        <?php if ($error) { ?>
	            <h3>Eres un poco manazas. Mete un número</h3>
	        <?php } ?>
	        <form action="practica5.php" method="get">
	            Radio: <input type="number" step="0.001" name="radio" id="" value="<?=$r?>"><br>
	            <input type="submit" value="Calcular">
	        </form>
	    </div>
	    <div>
	        <p>Área: <?= (1*$r*$r*M_PI) ?></p>
	        <p>Longitud: <?= (2*$r*M_PI)?></p>
	    </div>
	</body>
	</html>

Nota: si pones div>2*p te escribe la estructura de un div con dos p dentro

⦁	Declare 2 variables, después produzca la suma, resta, multiplicación, división, resto y muestre la salida de aplicar el operador ++ y -- NOTA: ¿Qué variables hemos definido?
print_r(get_defined_vars())

if isset(

div
<form>
dime la primera var <input type name="var1" value="<?=$var1?>
dime la segunda var
div 
la suma es <?=(


⦁	Elabore un programa que imprima la figura de un tri ngulo rect ngulo ajustada a la izquierda, formada por asteriscos. El lado del tri ngulo se lee como dato.
<body>
<?php
$N=$_GET['N'];
for ($i=1;$i<=$N;$i++){
    for ($j=1;$j<=$i;$j++){
        print "* ";
    }
    print "<BR>\n ";
}
?> 
</body>

<html>
 <body>
   <?php
    
   $n1=$_GET[a];
   
   for ($b=1;$b<=$n1;$b++)
   {for ($a=1;$a<=$b;$a++)
   {echo '*';}
    echo '<br>';
   }

  ?>
 </body>
</html>


<html>
    <head>
        <title></title>    <body>
        <div>
       <?php 
           for($i=1;$i<=$altura;$i++){
            echo "<p style='background-color:rgb( " . rand(1,300) . " ," . rand(1,300) . ", " . rand(1,300) . " );'>";
            for($j=1;$j<=$i;$j++){echo "*";}
            echo "</p>";
        }
 
       ?>
       </div>
    </body>
</html>


⦁	Imprima una pirámide de asteriscos, tamaño definido por una variable $n

⦁	Imprima una pirámide de colores NOTA: Utiliza css para definir elementos que tengan ancho fijo y un asterisco en el centro. NOTA2: Utiliza la siguiente función php para pintar colores aleatorios, debes sobrescribir la propiedad background-color del elemento html a través de la etiqueta style.
<?php 
$enviado=false;
$altura=0;

if(isset($_POST['altura'])){
    $enviado=true;
    $altura=$_POST['altura'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($enviado==true) { ?>
        <meta http-equiv="refresh" content="1; url=index.php?altura=<?=altura?>">
    <?php } ?> 
    <title>Pirámide</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="contenido">
        <?php if($enviado == false) { ?>
            <h1>Introduce la altura de la pirámide</h1>
            <form action="index.php" method="post">
                <input type="number" name="altura" id="">
                <input type="submit" value="Generar">
            </form>
        <?php } else { ?>
            <h1>Pirámide</h1>
            <p>
            <?php 
                for($a=1;$a<=$altura;$a++){
                    for($c=1;$c<=$a;$c++){
                        echo 
            echo "<p style='background-color:rgb( " . rand(1,300) . " ," . rand(1,300) . ", " . rand(1,300) . " );'>";
            for($j=1;$j<=$i;$j++){echo "*";}
            echo "</p>";
                                    }
            ?>
            </p>
        <?php } ?>
    </div>    
</body>
</html>


Echo gettype($i)
String * 2= entero
“1” * ”2” es un numero
2* 11hola es 22 con un warning pero si pones el 11 detrás de hola te pone error
-1.3e3 es -1.3 por 10 elevado a 3
1 mas bob111 es 1 porque no puede coger el bob…


Print_r(get_defined_vars) devuelve arrays vacíos porque las cookies están vacias
Print_r de forma recursiva puedo imprimir el get defined vars
Get_defined_vars devuelve un array. Tu lo puedes coger y procesarlo

-s localhost:8000 es para ejecutar el entorno de desarrollo se pone al principio 
Var_dump($i,$y) recibe parámetros y devuelve int(3) int(4) solo lo muestra

Is_array devuelve 1 que es true o nada porque lo falso lo convierte a una cadena vacia
Echo(is_integer($i))?’si’:’no’;

Isset devuelve un bool y recibe un mixed

Comillas dobles se resuelven var
“$nom trabaja en $dir”
$quijote=<<<EOS
En un lugar 
De la mancha
EOS
Si decimos echo $quijote nos devuelve la frase entera y tambien resuelve variables
Echo $nombre{0} devuelve J de Jorge




⦁	EN CARPETA
Crea una página web con un formulario que envía los datos por get. El formulario permitirá al usuario introducir una cadena de texto y tendrá un botón enviar.
	El formulario mantendrá el valor introducido por el usuario.(poner value en el input text)

Cuando el usuario envé información, debajo del formulario aparecerá un div. Con una lista sin orden de elementos. ul Los elementos erán los siguientes:

número de vocales: -XX-
número de consonantes: -XX-
palíndromo: -sí o no-
Bonus CSS

la página tendrá un color de fondo. style background-color
el formulario tendrá borde y estará centrado dentro de la página. border y text align center
Cuando se vea desde un móvil o tablet la página será responsive y ocupará todo el ancho.

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
        <form action="palindromo.php">
            Palabra: <input type="text" name="palabra" placeholder="Tu palabra" value="<?=$cadena?>">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php if($envio && $vacio==false){ ?>
        <ul>
            <li>Vocales: <?=$vocales?></li>
            <li>Consonantes: <?=$consonantes?></li>
            <li>Palíndromo: <?=($palindromo)?'Sí':'No'?></li>
        </ul>
    <?php } ?>
		
</body>
</html>

<?php 


$palindromo=false;

function cuentaNumVocales($cadena) {
	$i=0;
	$vocales=0;
    for ($i=0;$i<strlen($cadena);$i++){
		if ( ($cadena{$i}=='a') || ($cadena{$i}=='e') || ($cadena{$i}=='i') || ($cadena{$i}=='o') || ($cadena{$i}=='u') || ($cadena{$i}=='A') || ($cadena{$i}=='E') || ($cadena{$i}=='I') || ($cadena{$i}=='O') || ($cadena{$i}=='U')){
			$vocales++;
		}
	}
		return $vocales;

}

function cuentaNumConsonantes($cadena) {
	$consonantes=0;
    for ($i=0;$i<strlen($cadena);$i++){
		if ( ($cadena{$i}!='a') && ($cadena{$i}!='e') && ($cadena{$i}!='i') && ($cadena{$i}!='o') && ($cadena{$i}!='u') && ($cadena{$i}!='A') && ($cadena{$i}!='E') && ($cadena{$i}!='I') && ($cadena{$i}!='O') && ($cadena{$i}!='U') ){
			$consonantes++;
		}
		
}
return $consonantes;
}

function esPalindromo($cadena) {
    $car="";
	$cadenareves="";
	
	for ($i=strlen($cadena)-1;$i>=0;$i--){
		$car=$cadena{$i};
		$cadenareves=$cadenareves . $car;
	} 
	
   if ($cadena==$cadenareves) {
	$palindromo=true;
	}else{
	$palindromo=false;
	}

return $palindromo;
}

?>



⦁	EN CARPETA
tabla de multiplicar
<?php 
// Esto es un comentario
/* Esto es un comentario multilínea */
$num = 7;
$hasta = 15;
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
    <table>
        <thead>
            <tr>
                <th>Tabla del <?=$num?></th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < $hasta; $i++) { ?> 
                <tr>
                    <td><?=$num?> x <?=$i?></td>
                    <td><?=$num*$i?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

⦁	EN CARPETA
si un numero es primo o no
<?php
$num_filas = 10;
$num_columnas = $num_filas;
$n=0;

function esPrimo($n){
    if ($n == 0 || $n == 1){
        return true;
    } else {
        $esprimo = true;
        $c = 2;
        while($esprimo && $c <= ($n/2)) {
            if(($n % $c) == 0 ){
                $esprimo = false;
            }
            $c++;
        }
        return $esprimo;
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
    <style>
        table, tr, td {
            border-collapse: collapse;
            border: 1px solid black;
        }
        table {
            text-align: center;
            width: 300px;
            margin: 0 auto;
        }
        .esprimo {
            background-color: #FF00FF;
        }
    </style>
</head>
<body>
    <table>
        <?php for($i = 0; $i < $num_filas; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < $num_columnas; $j++) { 
                    $num_actual = $i*10+$j;
                    ?> 
                    <td <?= (esPrimo($num_actual))?'class="esprimo"':'' ?>><?=$num_actual?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>


ARRAYS
clave valor asociados

$array = array (
1=>0,
2=>3);

o bien lo declaro con un [ sin poner array

echo array [1] me devuelve 0


echo no sabe pintar unn array entonces si la primera clave tiene otro array:
echo $array ["hola"][1] me devuelve el primer elemento del array hola que esta asociado con un 1 y es a
si no le doy la clave usa claves numericas por defecto
si pongo un array como en java puedo usar desdde el indice 0
ej array es 1,2,3,4
acedo a array posicion 0 y me da 1
si le digo array de los valores a,b,c con clave 6 y d
las claves son 0,1,6 y 7
var dump array devuelve las claves




⦁	EN CARPETA array multidimensional con nuestras clases




<html>
<head>
</head>
<body>
<center>
<table bgcolor="pink" border>
<?php

$array=array(
array("", "Lunes", "Martes" , "Miercoles", "Jueves", "Viernes"),
array("16:00-16:55", "DWEC", "ITGS", "DIW", "EIE", "DWES"),
array("16:55-17:50", "DWEC", "DAW", "DIW", "DAW", "DWES"),
array("17:50-18:45", "DWEC", "DAW", "DIW", "DAW", "DWES"),
array("18:45-19:10", "recreo", "recreo","recreo","recreo","recreo" ),
array("19:10-20:05","EIE", "DIW", "DWES", "DWES", "DWEC"),
array("20:05-21:00", "EIE", "DIW", "DWES", "DWES", "DWEC"),
array("21:00-21:50", "ITGS", "DIW", "DWES", "DWES", "DWEC") 
);


for($i=0;$i<count($array);$i++){
	echo "<tr>";
	for($j=0;$j<count($array[$i]);$j++){
		echo "<th>";
		echo $array[$i][$j];
		echo "</th>";
	}
	echo "</tr>";
};
?>
</table>
</center>
</body>
</html>


<html>
<head>
</head>
<body>
<center>
<table bgcolor="orange" border>
<?php

$array=array(
array("", "Lunes", "Martes" , "Miercoles", "Jueves", "Viernes"),
array("16:00-16:55", "DWEC", "ITGS", "DIW", "EIE", "DWES"),
array("16:55-17:50", "DWEC", "DAW", "DIW", "DAW", "DWES"),
array("17:50-18:45", "DWEC", "DAW", "DIW", "DAW", "DWES"),
array("18:45-19:10", "recreo", "recreo","recreo","recreo","recreo" ),
array("19:10-20:05","EIE", "DIW", "DWES", "DWES", "DWEC"),
array("20:05-21:00", "EIE", "DIW", "DWES", "DWES", "DWEC"),
array("21:00-21:50", "ITGS", "DIW", "DWES", "DWES", "DWEC") 
);


foreach($array as $fila) {
	echo "<tr>";
	foreach($fila as $casilla){
		echo "<th>";
		echo $casilla;
		echo "</th>";
	}
	echo "</tr>";
};
?>
</table>
</center>
</body>
</html>




FUNCIONES ARRAYS

⦁	array_walk
<?php
$frutas = array("d" => "limón", "a" => "naranja", "b" => "banana", "c" => "manzana");

function test_alter(&$elemento1, $clave, $prefijo)
{
    $elemento1 = "$prefijo: $elemento1";
}

function test_print($elemento2, $clave)
{
    echo "$clave. $elemento2<br />\n";
}

echo "Antes ...:\n";
array_walk($frutas, 'test_print');

array_walk($frutas, 'test_alter', 'fruta');
echo "... y después:\n";

array_walk($frutas, 'test_print');
?>
El resultado del ejemplo sería:

Antes ...:
d. limón
a. naranja
b. banana
c. manzana
... y después:
d. fruta: limón
a. fruta: naranja
b. fruta: banana
c. fruta: manzana


function myfunction(&$value,$key)// todos los valores
{
$value="yellow";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
print_r($a);
?>
  imprime todos 
 
En este ejemplo vamos a imprimir todas las ciudades.

<?php

// Diccionario
$apartamentos = [
    [
        'precio/noche' => 40,
        'ciudad' => 'Valencia',
        'wifi' => True,
        'pagina web' => 'https://hotel.com'
    ],
    [
        'precio/noche' => 87,
        'ciudad' => 'Calpe',
        'wifi' => True,
        'pagina web' => 'https://calpe.com'
    ],
    [
        'precio/noche' => 67,
        'ciudad' => 'Valencia',
        'wifi' => False,
        'pagina web' => 'https://denia.com'
    ],
    [
        'precio/noche' => 105,
        'ciudad' => 'Benidorm',
        'wifi' => False,
        'pagina web' => 'https://benidorm.com'
    ]
];

array_walk($apartamentos, function ($apartamento, $posicion) {
    echo $apartamento['ciudad'] . PHP_EOL;
});

/*
Valencia
Calpe
Valencia
Benidorm
*/


⦁	array_reduce
array_reduce() aplica iterativamente la función callback a los elementos de array, con el propósito de reducir el array a un solo valor.
<?php
function suma($carry, $item)
{
    $carry += $item;
    return $carry;
}

function producto($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "suma")); // int(15)
var_dump(array_reduce($a, "producto", 10)); // int(1200), ya que: 10*1*2*3*4*5
var_dump(array_reduce($x, "suma", "No hay datos a reducir")); // string(22) "No hay datos a reducir"
?>


array_reduce (array, nombrefuncion, valoracumulador)

function x(Nombreacumulador,Cadavalordelarray)

el primer parametro es un acumulador, el segundo son los valores del array y el tercero opcional es el valor dl primer parametro que si se omite este será de valor 0

En este ejemplo vamos calcular cual es la media del precio por noche.

es importante enternder el acumulador:
por cada array pequeño d factura que a su vez contiene un array con tres posiciones(nombre, cantidad y producto):
array_reduce ($factura, 'total');
function total($acumulador, $filafactura){
    return $acumulador + $filafactura[1]*$filafactura[2]; // hace el producto por cada fila y lo incorpora a acumulador
}

⦁	array_filter
filtra un criterio a los valores dl array
<!DOCTYPE html>
<html>
<body>

<?php
function impar($var)
{
    // Retorna siempre que el número entero sea impar
    return ($var % 2 != 0); // o bien $var & 1
}

function par($var)
{
    // Retorna siempre que el número entero sea par
    return ($var % 2 == 0);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Impar :\n";
print_r(array_filter($array1, "impar"));
echo "Par:\n";
print_r(array_filter($array2, "par"));
?>


se pueden usar com parametro las keys en vez de los valores:


<?php

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));



o las dos cosas primero el valor y despues la key



var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));
?>


En este ejemplo filtraremos $apartamentos para quedarnos con los que están en Valencia.

<?php

// Diccionario
$apartamentos = [
    [
        'precio/noche' => 40,
        'ciudad' => 'Valencia',
        'wifi' => True,
        'pagina web' => 'https://hotel.com'
    ],
    [
        'precio/noche' => 87,
        'ciudad' => 'Calpe',
        'wifi' => True,
        'pagina web' => 'https://calpe.com'
    ],
    [
        'precio/noche' => 67,
        'ciudad' => 'Valencia',
        'wifi' => False,
        'pagina web' => 'https://denia.com'
    ],
    [
        'precio/noche' => 105,
        'ciudad' => 'Benidorm',
        'wifi' => False,
        'pagina web' => 'https://benidorm.com'
    ]
];


$todosLosApartamentosValencia = array_filter($apartamentos, function ($apartamento) {
    return $apartamento['ciudad'] === 'Valencia';
});

var_dump($todosLosApartamentosValencia);

/*
array(2) {                                                                  
  [0]=>                                                                     
  array(4) {                                                                
    ["precio/noche"]=>   
    int(40)
    ["ciudad"]=>
    string(8) "Valencia"
    ["wifi"]=>
    bool(true)
    ["pagina web"]=>
    string(17) "https://hotel.com"
  }
  [2]=>
  array(4) {
    ["precio/noche"]=>
    int(67)
    ["ciudad"]=>
    string(8) "Valencia"
    ["wifi"]=>
    bool(false)
    ["pagina web"]=>
    string(17) "https://denia.com"
  }
}



⦁	array_map
En este ejemplo vamos a reducir el precio por noche en 1.

<?php

// Diccionario
$apartamentos = [
    [
        'precio/noche' => 40,
        'ciudad' => 'Valencia',
        'wifi' => True,
        'pagina web' => 'https://hotel.com'
    ],
    [
        'precio/noche' => 87,
        'ciudad' => 'Calpe',
        'wifi' => True,
        'pagina web' => 'https://calpe.com'
    ],
    [
        'precio/noche' => 67,
        'ciudad' => 'Valencia',
        'wifi' => False,
        'pagina web' => 'https://denia.com'
    ],
    [
        'precio/noche' => 105,
        'ciudad' => 'Benidorm',
        'wifi' => False,
        'pagina web' => 'https://benidorm.com'
    ]
];

$apartamentosMasBaratos = array_map(function ($apartamento) {
    return array_merge($apartamento, ['precio/noche' => $apartamento['precio/noche'] - 1]);
}, $apartamentos);

var_dump($apartamentosMasBaratos);
/*
array(4) {
  [0]=>
  array(4) {
    ["precio/noche"]=>
    int(39)
    ["ciudad"]=>
    string(8) "Valencia"
    ["wifi"]=>
    bool(true)
    ["pagina web"]=>
    string(17) "https://hotel.com"
  }
  [1]=>
  array(4) {
    ["precio/noche"]=>
    int(86)
    ["ciudad"]=>
    string(5) "Calpe"
    ["wifi"]=>
    bool(true)
    ["pagina web"]=>
    string(17) "https://calpe.com"
  }
  [2]=>
  array(4) {
    ["precio/noche"]=>
    int(66)
    ["ciudad"]=>
    string(8) "Valencia"
    ["wifi"]=>
    bool(false)
    ["pagina web"]=>
    string(17) "https://denia.com"
  }
  [3]=>
  array(4) {
    ["precio/noche"]=>
    int(104)
    ["ciudad"]=>
    string(8) "Benidorm"
    ["wifi"]=>
    bool(false)
    ["pagina web"]=>
    string(20) "https://benidorm.com"
  }
}
*/
⦁	array_replace($arrayoriginal,$arraynuevo,$arraymasnuevo)

 

⦁	array_walk_recursive
igual qe array_walk pero para matrices  multidimensionales
 


⦁	array_diff_key
te da las claves que no estan en comun lo contrario a intersect

⦁	array_merge junta dos arrays sin repetir las claves,va sustituyendo los valores por los nuevos en las claves repetidas
guarda el orden del primer array
 
⦁	
 

⦁	array_rand($array,cantidad)
 

coge claves aleatorias, no valores. para acceder al valor necesito acceder a traves del array principal y especificarle la clave es decir $a en la posicion de la clave aleatoria que yo quiera 

para crear num aleatorios:
-un numero entre 0 y 5 
$numero_aleatorio = mt_rand(0,5);


Ejercicio sobre funciones de arrays 04
Visita la página de funciones de array en php. Busca varias funciones y genera un enunciado en el que las tengas que usar.


1 Jorge (Profe) Funciones: array_walk, array_map, array_filter, array_reduce

$personas = [ ["Jorge", 1], ["Bea", 0], ["Paco", 1], ["Amparo", 0], ];

⦁	Utiliza alguna de las funciones para generar un array de cadenas indicando el nombre de la persona y cómo tratarle con formalidad. Si el valor entero detrás del nombre es un 1 Hay que poner "Señor ", si es 0 hay que poner "Señora "

$resultado = ["Señor Jorge", "Señora Bea", "Señor Paco", "Señora Amparo"];

--

<?php 
    $personas = [
        ["Jorge",1],
        ["Bea",0],
        ["Paco",1],
        ["Amparo",0],
    ];

    
    $array = array_map(function($item){//array map devuelve un array unidimensional
        return (($item[1]==0)?'Señora':'Señor') . " " . $item[0] . " ";
    }, $personas);
    print_r($array)

    

?>

$comida = [ 0 => ["Banana", 3, 56], 1 => ["Chuleta", 1, 256] 2 => ["Pan", 1, 90] ]

⦁	Utiliza la función map_reduce para calcular la cantidad de calorías de la comida anterior.

--
/**
     * Ejercicio 2 con un array reduce calcula el total de calorias
     */
    $comida = [
        ["Banana", 3, 56],
        ["Chuleta", 1, 256],
        ["Pan", 1, 90]
    ];
	
	function calcularCalorias($acumulador, $valor){// valor es cada array pequeño
	$acumulador+=$valor[1]*$valor[2];
	return $acumulador;
		
	}
	$totalCalorias=array_reduce($comida, 'calcularCalorias');
	

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= print_r($resultado) ?></p>
    <p>El total de calorías es: <?= $totalCalorias ?></p>
    <p>Los hombres son: <?php print_r($listadoHombres) ?></p>
    <p>Las mujeres son: <?= print_r($listadoMujeres) ?></p>
</body>

⦁	Con el array de personas anterior, utiliza el array_filter para sacar un listado de Hombre y otro listado de mujeres.
/**
     * Ejercicio 3 saca un listado de mujeres y otro de hombres con todos los datos del ejercicio 1
     */
	 function hombres($arraypeque){
		 return $arraypeque[1]==1;
	 }
	 $listadoHombres=array_filter($personas, 'hombres');
	 
	 ?>


⦁	Javi ඞ, Anabel ඞ y Román ඞ🔪 Funciones: array_intersect, array_search y array_replace. Enunciado: Designa dos arrays con varios números. Algunos de ellos deberán coincidir entre ambas arrays. A continuación: * Crea un tercer array que contenga los números en común de los primeros dos.(intersect) Habrá posiciones nulas. * Crea un cuarto array con las posiciones que le falten al anterior y un número asignado a cada una, y júntalo con el anterior. * Buca el índice de un valor en el array final (por ejemplo el del valor 13) * Finalmente, imprime todos los arrays que has generado para ver los cambios. ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⣶⣿⣿⣷⣶⣄⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⣾⣿⣿⡿⢿⣿⣿⣿⣿⣿⣿⣿⣷⣦⡀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⡟⠁⣰⣿⣿⣿⡿⠿⠻⠿⣿⣿⣿⣿⣧⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⣾⣿⣿⠏⠀⣴⣿⣿⣿⠉⠀⠀⠀⠀⠀⠈⢻⣿⣿⣇⠀⠀⠀ ⠀⠀⠀⠀⢀⣠⣼⣿⣿⡏⠀⢠⣿⣿⣿⠇⠀⠀⠀⠀⠀⠀⠀⠈⣿⣿⣿⡀⠀⠀ ⠀⠀⠀⣰⣿⣿⣿⣿⣿⡇⠀⢸⣿⣿⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣿⣿⡇⠀⠀ ⠀⠀⢰⣿⣿⡿⣿⣿⣿⡇⠀⠘⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⢀⣸⣿⣿⣿⠁⠀⠀ ⠀⠀⣿⣿⣿⠁⣿⣿⡇⠀⠀⠻⣿⣿⣿⣷⣶⣶⣶⣶⣿⣿⣿⣿⠃⠀⠀⠀ ⠀⢰⣿⣿⡇⠀⣿⣿⣿⠀⠀⠀⠀⠈⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠁⠀⠀⠀⠀ ⠀⢸⣿⣿⡇⠀⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠉⠛⠛⠛⠉⢉⣿⣿⠀⠀⠀⠀⠀⠀ ⠀⢸⣿⣿⣇⠀⣿⣿⣿⠀⠀⠀⠀⠀⢀⣤⣤⣤⡀⠀⠀⢸⣿⣿⣿⣷⣦⠀⠀⠀ ⠀⠀⢻⣿⣿⣶⣿⣿⣿⠀⠀⠀⠀⠀⠈⠻⣿⣿⣿⣦⡀⠀⠉⠉⠻⣿⣿⡇⠀⠀ ⠀⠀⠀⠛⠿⣿⣿⣿⣿⣷⣤⡀⠀⠀⠀⠀⠈⠹⣿⣿⣇⣀⠀⣠⣾⣿⣿⡇⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠹⣿⣿⣿⣿⣦⣤⣤⣤⣤⣾⣿⣿⣿⣿⣿⣿⣿⣿⡟⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠻⢿⣿⣿⣿⣿⣿⣿⠿⠋⠉⠛⠋⠉⠉⠁⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠉⠁sus :0 amogus gugel crum version powered by VSNote© kekw :v


<?php
    $array1 = [
        1,
        2,
        3,
        4,
        234,
        23,
        12,
        43,
    ];
    $array2 = [
        453,
        5,
        87,
        12,
        43,
        1,
        2,
        3,
    ];
    $array3 = array_intersect($array1, $array2);

    $array4 = array_diff($array1, $array3);

    print_r($array1);
    echo "<br>";
    print_r($array2);
    echo "<br>";
    print_r($array3);
    echo "<br>";
    print_r($array4);
    echo "<br>";
    print_r(array_merge($array3, $array4));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enunciado Repelente</title>
</head>
<body>
    
</body>
</html>

⦁	Xing , Marcos.

Funciones: array_walk, array_map, array_replace

Extra: https://www.php.net/manual/es/function.password-hash.php

$usuarios = [
	"jorge" => "1234",
	"amparo" => "admin",
	"mary" = > "",
]
Enunciado: Crea una array bidimesional que guarda nombre de usuario y contraseña de usuario en texto claro. array_walk ejecuta una funcion predefinida mostrando nombre de usuario y contraseña
Enunciado: Utilizando las funciones de contraseñas y la función array_map. Genera un array nuevo con los usuarios y su contraseña en formato hash.

Enunciado: En base al ejercicio anterior cambia la función para que los usuarios sin contraseña tenga la contraseña "tmp2022"

Enunciado: Haz un filtrado de usuarios sin contraseña, utiliza array_replace para establecer en el array original $usuariosla contraseña de los usuarios que no tenían.
<?php

$usuarios = [
	"jorge" => "1234",
	"amparo" => "admin",
	"mary" => " "
	];
	
function caminar($valor, $indice){
echo $indice . " ".  $valor;
echo "<br>";
}
array_walk($usuarios,'caminar');
function vacios($val){
	return $val==" ";
}
$sincontra=array_filter($usuarios,'vacios');
print_r($sincontra);

$new=array_map('nueva',$sincontra);
function nueva ($valor){
	$valor="tmp22";
	return $valor;
}
print_r($new);

$usuarios2=array_replace($usuarios,$new);
print_r($usuarios2);


?>
⦁	Arturo Fernández Funcion array_merge

"rojo"); $a2=array("b"=>"añil", "c"=>"violeta"); $a3=array("d"=>"verde""f"=>"naranja"); $a4=array("i"=>"azul"); $a5=array("g"=>"azul", "h"=>"blanco"); ?>


<?php

$a1=array("a"=>"rojo"); 
$a2=array("b"=>"añil", "c"=>"violeta"); 
$a3=array("a"=>"verde","f"=>"naranja"); 
$a4=array("c"=>"azul"); 
$a5=array("g"=>"azul", "f"=>"blanco"); 

$new=array_merge($a1,$a2,$a3,$a4,$a5);
print_r($new);

?>
⦁	Mario, Jason, Daniel Con el siguiente array de productos, crea una lista de la compra en la que puedas seleccionar la cantidad de productos que quieres adquirir y te muestre el precio total por producto (array_reduce)y el total de la factura(array_sum): $productos = [ "naranja" => 1.2, "manzana" => 1.5, "pera" => 1.8, "platano" => 0.8, "kiwi" => 0.75, "macarrones" => 0.5, "arroz" => 0.75, "salchichas" => 1, "patatas_fritas" => 3, "paninis" => 1.5, "leche_6_uds" => 5, "pizza_jamon_serrano" => 2.59, "helado_chocolate" => 2.99 ]; Funciones: array_sum (opcional => array_push)

array_sum: ej: array_sum(array $array): int|float devuelve la suma de los valores de un array.
array_push: ej: array_push(array &$array, mixed ...$values): int añade un elemento a la última posición del array

<?php 
$productos = [
    "naranja" => 1.2,
    "manzana" => 1.5,
    "pera" => 1.8,
    "platano" => 0.8,
    "kiwi" => 0.75,
    "macarrones" => 0.5,
    "arroz" => 0.75,
    "salchichas" => 1,
    "patatas_fritas" => 3,
    "paninis" => 1.5,
    "leche_6_uds" => 5,
    "pizza_jamon_serrano" => 2.59,
    "helado_chocolate" => 2.99
];

function pintaOutInputs($precio, $nombre){
    echo "<span>$nombre ($precio €)</span> <input name='$nombre' type='number' value=0><br>";
}

function pintaFactura($filafactura){
    echo "<tr><td>$filafactura[0]</td><td>$filafactura[1]</td><td>$filafactura[2]</td><td>" .$filafactura[1]*$filafactura[2] . "</td></tr>";
}

function total($acumulador, $filafactura){
    return $acumulador + $filafactura[1]*$filafactura[2];
}

$comprando = false;
if(count($_GET)>0) {
    $comprando = true;

    echo "<br>GET: ";
    print_r($_GET);

    // Solo los que tengan un número positivo
    $cantidad = array_filter($_GET, function ($v) {return $v > 0; } );
    echo "<br>Cantidad: ";
    print_r($cantidad);

    // Selecciona de la lista de productos los comprados
    $precios = array_intersect_key($productos, $cantidad);
    echo "<br>Obtén precios: ";
    print_r($precios);

    // Similar a ZIP: packs de <nombre>, <cantidad>, <precio>
    $factura = array_map(null, array_keys($cantidad), $cantidad, $precios);
    echo "<br>Cremallera: ";
    print_r($factura);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form > span {
            display: inline-block;
            width: 15em;
        }

        form > input[type='submit'] {
            margin-left: 15em;
        }

        table, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php if(!$comprando) { ?>
        <h1>¡¡¡Ofertas!!!</h1>
        <form>
            <?php array_walk($productos, 'pintaOutInputs') ?>
            <input type="submit" value="¡Compra!">
        </form>
    <?php } else { ?>
        <h1>¡¡¡Comprando!!!</h1>
        <table>
            <tr><td>Producto</td><td>Cantidad</td><td>Precio</td><td>Subtotal</td></tr>
            <?php array_walk($factura, 'pintaFactura') ?>
            <tr><td colspan=4><?= array_reduce($factura, 'total') ?></td></tr>
        </table>
        <a href="ejercicio5.php">Volver a calcular</a>
    <?php } ?>
</body>
</html>

⦁	Alex y Dani

Crea un array con 20 números aleatorios. A continuación, ordénalo, quítale la primera mitad de los números y pónselos al final. Muestra todos los pasos por pantalla.


Tienes que usar las siguientes funciones

array_slice — Extract a slice of the array array_push — Push one or more elements onto the end of array sort — Sorts array in place by values in ascending order.4 rand — Generate a random integer

<?php

$new=[];
for ($i=0;$i<20;$i++){
$aleat=mt_rand(0,9);
array_push($new,$aleat);
}
sort($new);
print_r($new);
php_eol;
$primera=array_slice($new,0,count($new)/2);
$segunda=array_slice($new,count($new)/2);
print_r($primera);
print_r($segunda);
php_eol;
for($i=0;$i<count($primera);$i++){//recorro primera
	array_push($segunda,$primera[$i]);
}
print_r($segunda);

?>

 

array_push el segundo parametro tiene que ser uno o varios datos, no se puede poner otro array. hay que ir recorriendo el array que queramos meter y meter uno a uno por indice

⦁	Nacho. Función: array_rand array_rand(array $array, int $num = 1): mixed array: El array de entrada. num: Especifica cuántas entradas deberían seleccionarse. Dados dos arrays unidimensionales, uno de tareas[] y otro de personas[], asigna de manera aleatoria una tarea a cada persona. Si ya le echas valor, crea un arraybidimensional de tareas_diarias[dia][tarea] y haz un organigrama donde asignes tareas a cada persona durante la semana
<?php
    $tareas = [
        "Limpiar",
        "Cocinar",
        "Poner la mesa",
        "Recoger la mesa",
        "Lavar y guardar los platos",
        "Lavar la ropa",
        "Doblar y guardar la ropa limpia"
    ];

    $personas = [
        "Daniel",
        "Mario",
        "Jason",
        "Erick"
    ];

    $tareas_asignadas = [];

    foreach ($tareas as $tarea) {//recorro el array de tareas
        //$tareas_asignadas[$tarea] = $personas[array_rand($personas, 1)];
  $tareas_asignadas[$tarea] = $personas[mt_rand(0,count($personas)-1)];
    }

    print_r($tareas_asignadas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enunciado Nacho</title>
</head>
<body>
   </body>
</html>

⦁	Doryan - Nataly - Antonio Funciones (array_merge, array_replace_recursive, in_array) -Array_merge() enunciado: Tenemos que guardar los datos de 4 arrays de personas(cada persona es $personaN) los datos de cada persona son: nombre,apellido,telefono y correo. Junta todos los array de personas en uno llamado $personas e imprimelos en una tabla.

Array_replace_recursive: $personas=[ "25","22 ","24 ","29 ", "26","23","20","19","26","19","20","23"]; Con el array dado remplaza las edades menores de 23 por un array de colores cada vez que sea asi. hUna vez cambiado los que tengan 26 años se cambiaran por otro array: $p26=["mayor","26"]

Array_splice: hacer una clase con el numero de clase y la zona. Luego en el medio del array coloca el numero de identificacion de 10 niños en una tabla.

in_array: Crea una función que reciba como 1º parámetro un array, como 2º parámetro un valor y como 3º parámetro un mensaje de error. La función debe usar la función in_array para comprobar si el array contiene el valor especificado y si es el caso devolver la posición del array en el que tiene el valor, de lo contrario debe devolver el mensaje de error especificado (incluído si el array está vacío).

<?php
    $persona1 = [
        "nombre" => "Jason",
        "apellidos" => "Londoño Barreto",
        "telefono" => "111222333",
        "email" => "jason@mail.com"
    ];
    $persona2 = [
        "nombre" => "Mario",
        "apellidos" => "Sanchez Luque",
        "telefono" => "333222111",
        "email" => "mario@mail.com"
    ];
    $persona3 = [
        "nombre" => "Luis Daniel",
        "apellidos" => "Casado Guimaraes",
        "telefono" => "123123123",
        "email" => "daniel@mail.com"
    ];
    $persona4 = [
        "nombre" => "Jovani",
        "apellidos" => "Vazquez",
        "telefono" => "321321321",
        "email" => "jovani@bendicione.com"
    ];

   $personas = array_merge([$persona1],[$persona2],[$persona3],[$persona4]);

    print_r($personas);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enunciado Doryan Antonio Nataly</title>
</head>
<body>

</body>
</html>




<?php
/*

function cambiar($valor){
	if($valor=="23"){
		$valor=["blanco","negro"];
		return $valor;
	}else if($valor=="26"){
		$valor="25";
		return $valor;
	}
	
}
$personas=["25","26","23","20","23"]; 

//primero que me de la clave de los que tienen 23

$final=array_map($personas,'cambiar');

print_r($final);
*/
$personas=["25","26","23","20","23"];
function cambiar2(&$valor,$indice){
	if($valor=="23"){
		$valor=["blanco","negro"];
		
	}
	
}
array_walk($personas,'cambiar2');

print_r($personas);
?>

 

 



⦁	Fausto Obama - Sergio - Henry:
Funciones: - in_array: Permite verificar si una cadena concreta se encuentra en la matriz pasada como parámetro junto al valor a buscar. Devuelve un dato de tipo Boolean. Estructura: << in_array(mixed $needle, array $haystack, bool $strict = false): bool >>

explode: Permite pasar una cadena o texto a una matriz según el delimitador que definamos. Devuelve un array. Estructura: << explode(string $separator, string $string, int $limit = PHP_INT_MAX): array >>
 
convierte cadena a array separados por el delimitador que es el primer parametro


array_unique: Esta función permite revisar valores duplicados de una matriz y eliminarlos. Devuelve un array con valores únicos. Estructura: array_unique(array $array, int $flags = SORT_STRING): array

Enunciados:

a) Dado un texto o párrafo concreto:

$parrafo= <<<EOF En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo científico acerca de los fotones de luz y sus propiedades Bose describe ciertas reglas para determinar si dos fotones deberían considerarse idénticos o diferentes Esta se llama la condensado' de Bose - Einstein Einstein aplica estas reglas a los átomos preguntándose cómo se comportarían los átomos de un gas si se les aplicasen estas reglas EOF;

Verificar si existe una palabra pasada por formulario en el parrafo, y mostrar alguna frase del párrafo que la contenga.

b) Dada una cadena o frase: $frase="Mateo, Marcos, Lucas, Pedro, Max, Philip, Lucer, Robert, Maximiliano, Roberto, Pedro, Wenceslao, Teodoro, Mateo, Felipe, Petra, Lucer, Jose, Armando, Simón, Nicéforo, Jose, Felipe";
<?php
if (isset($_GET['palabra'])){
$palabra=$_GET['palabra'];
}
$parrafo="En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo científico acerca de los fotones de luz y sus propiedades Bose describe ciertas reglas para determinar si dos fotones deberían considerarse idénticos o diferentes Esta se llama la condensado de Bose - Einstein Einstein aplica estas reglas a los átomos preguntándose cómo se comportarían los átomos de un gas si se les aplicasen estas reglas";
$array=explode(" ",$parrafo);
function buscar($palabra,$array){
if (in_array($palabra,$array)){
	$indice=array_search($palabra,$array);
	echo $array[$indice-1] . " " .$palabra. " ". $array[$indice+1];
}
}

?>

<html>
<head>
</head>
<body>
<form action="in_array.php" method="get">
introduce una palabra: <input type="text" id="palabra" name="palabra"></input>
<p> la frase sería: <?=buscar($palabra,$array);?> </p>
</form>
</body>
</html>
Eliminar los valores duplicados que puedan existir en la cadena y mostrar la cadena original y sin duplicados.
array_unique($frase)

⦁	Franco Array_filter En una lista de digitos del 1 al 20, filtrar y mostrar las posiciones de los números pares e impares.

<?php
$array=[1,2,3,4,5,6,7,8,9,10];
$numerosPares=array_filter($array,'pares');
function pares($num){
return $num%2==0;
}
var_dump($numerosPares);
$numerosImpares=array_filter($array,'impares');
function impares($num){
return $num%2!=0;
}
var_dump($numerosImpares);

?>



⦁	Crea una página web que genere 3 números aleatorios "mt_rand()", con sentencias condicionales los asigna a tres variables: mayor, mediano y pequeño. Después los mostrará en h1, h2 y h3 respectivamente.
<?php

    $random1 = mt_rand(1,100);
    $random2 = rand(1,100);
    $random3 = rand(1,100);

if ($random1>$random2 && $random1> $random3) {
	if ($random2>$random3) {
	$mayor=$random1;
	$mediano=$random2;
	$pequeño=$random3;
	echo "<h1> $mayor es mayor que $mediano y este es mayr que $pequeño </h1>";
	}else{
	$mayor=$random1;
	$mediano=$random3;
	$pequeño=$random2;
	echo "<h1> $mayor es mayor que $mediano y este es mayr que $pequeño </h1>";
	}
}else if ($random2>$random1 && $random2> $random3) {
	if ($random1>$random3) {
	$mayor=$random2;
	$mediano=$random1;
	$pequeño=$random3;
	echo "<h1> $mayor es mayor que $mediano y este es mayr que $pequeño </h1>";
	}else{
	$mayor=$random2;
	$mediano=$random3;
	$pequeño=$random1;
	echo "<h1> $mayor es mayor que $mediano y este es mayr que $pequeño </h1>";
	}
}else if ($random3>$random1 && $random3> $random2) {
	if ($random1>$random2) {
	$mayor=$random3;
	$mediano=$random1;
	$pequeño=$random2;
	echo "<h1> $mayor es mayor que $mediano y este es mayr que $pequeño </h1>";
	}else{
	$mayor=$random3;
	$mediano=$random2;
	$pequeño=$random1;
	echo "<h1> $mayor es mayor que $mediano y este es mayr que $pequeño </h1>";
	}
}

⦁	Crea una página web que recorra una variable de tipo cadena accediendo a cada letra y escriba cada una en un h4. Usa for
<?php
if (isset($_GET['cadena'])){
    $cadena = $_GET['cadena'];

    for($i = 0; $i < strlen($cadena); $i++){
        $letra = substr($cadena,$i,1);
//$letra=$cadena[$i];
        echo "<h4>$letra</h4>";
    }
}else{
?>

<body>
<form action="calentamiento2.php" method="get">
dime una palabra para extaer todas sus letras: <input type="text" name="cadena"> </input>

</body>
<?php } ?>

⦁	Crea una web similar a la anterior pero que pare al finalizar la cadena o al encontrar el carácter 'a', tanto minúscula como mayúscula. Usa While


<?php

if (isset($_GET['cadena'])){
    $cadena = $_GET['cadena'];
	$encontrado=false;

    for($i=0;$i<=strlen($cadena) && $encontrado==false;$i++){
        
		$letra = substr($cadena,$i,1);
        echo "<h4>$letra</h4>";
		if($letra=='a' || $letra=='A'){$encontrado=true;}
		
    }
	 
 

}else{
	
?>

<body>
<form action="prueba.php" method="get">
dime una palabra para extaer todas sus letras: <input type="text" name="cadena"> </input>

</body>
	<?php }?>

Crea una página web que escriba span con números aleatorios entre 0 y 100, el proceso parará cuando el número acabe en 17 o sea primo.
<?php

    $numero = 0;

    $primo = false;

    function esPrimo($numero){
        for($i = 2; $i < $numero; $i++){
            if(($numero % $i) == 0){
                return false;
            }
        }
        return true;
    }

    do{

        $numero = rand(1,100);

        if(esPrimo($numero)){
            $primo = true;
			echo "<span> el numero primo es $numero </span> <br>";
        }else{
            $primo = false;
            echo "<span> $numero </span> <br>";
        }

    }while($numero != 17 && $primo == false)
    ?>
    
⦁	Crea una función que escriba lo parámetros recibidos por la URL en una tabla.

index.php?valor=estoy&act=recorriendo&un=array

Table	Valor
valor	estoy
act	recorriendo
un	array

⦁	[15 min] Crea una función que sume todos los números entre dos parámetros dados: inicio y fin. PRUEBAS: Escribe una web que llame a la función 10 veces con números aleatorios entre 0 y 20.


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
<?php
    function suma($n,$m){
		$acc=0;
        if($n>$m){ //si el primero es mayor entonces este sera el fin y tiene que ser m asi que se cambian
            $aux=$m;
            $m=$n;
            $n=$aux;
        }
        for($i=$n;$i<=$m;$i++){
            $acc+=$i;
        }
        return $acc;
    }

for($j=0;$j<10;$j++){
    
    echo suma(mt_rand(0,20),mt_rand(0,20))." <br> ";
}


?>
⦁	[15 min] Crea una función que concatene todas las cadenas pasadas como parámetro utilizando el primer parámetro como seprador. PRUEBAS: Escribe una web que llame a la función 3 veces con cadenas.

echo concatena(" ", "Hola", "mundo", "!"); // Hola mundo !
echo concatena(".", "Esto", "son", "varias", "cadenas", "puntos"); //Esto.son.varias.cadenas.puntos



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej7
    </title>
</head>
<body>
    <!--[15 min] Crea una función que concatene todas las cadenas pasadas como 
    parámetro utilizando el primer parámetro como seprador. 
    PRUEBAS: Escribe una web que llame a la función 3 veces con cadenas.-->


<?php 
        function concatenar ($sep,...$texto){
			$new="";
			for($i=0;$i<count($texto);$i++){
			$new=$new.$texto[$i].$sep;	
			}
			return $new;
		}
		echo concatenar(".","hola","que","tal");
?>

</body>
</html>

⦁	[25 min] Crea una función que genere un array asociativo que contenga tipo y parametro. revisar porque no deja repetir clave con el tipo
Funciones: gettype, array_key_exists o in_array o isset
$analisis = analizParámetros(3, "h", 'hola', [1,2,3], [1], "h");
print_r($analisis)
Imprime:

[
  'int' => 1,
  'string' => 3,
  'array' => 2
]



-en este caso cuenta los tipos de cada parametro y escribe arrays asociativos con el total de cada uno

<?php
 function analizadorTipo(...$varios) {
        $array = [];
        foreach($varios as $value) {
		
            if(!array_key_exists(gettype($value), $array)) {
                $array[gettype($value)]=1;
            } else {
                $array[gettype($value)]+=1;
            }
        }

        return $array;
    }
print_r(analizadorTipo("a",1,'a',[1,2,3],2,3,4,3,3,4));

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 8</title>
</head>
<body>

<!--Crea una función que genere un array asociativo que
 contenga información de los parámetros. La función irá descubriendo los tipos
gettype, array_key_exists o in_array o isset
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 8</title>
</head>
<body>

<!--Crea una función que genere un array asociativo que
 contenga tipo=>valor
-->
    <?php
        function crearArray15($primer,...$varArgs){
            $array=[];
			
			
            foreach ($varArgs as  $value) {
				$array[gettype($primer)]=$primer;
                $array[gettype($value)]=$value;
               
            }
            return $array;
        }
        print_r(crearArray15("hola",2,"pez",4.8,[1,2,3,4]));

    ?>
    
</body>
</html>


⦁	[10 min]
Crea una función que reciba dos variables cualesquiera e intercambie su valor. Las variables tendrá ese valor fuera de la función(usar &). PRUEBA: Crea una web en la que se muestre cómo se comporta esta función con variables de distinto tipo.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ 9</title>
</head>
<body>

<!--Crea una función que reciba dos variables cualesquiera e intercambie su valor.
 Las variables tendrá ese valor fuera de la función. 
PRUEBA: Crea una web en la que se muestre cómo se comporta esta función con variables de distinto tipo-->
    <?php
    $var1="Hola";
    $var2=5;
    
    function intercabiarValor(&$var1,&$var2){
        
        $aux="";
        $aux=$var1;
        $var1=$var2;
        $var2=$aux;
        

    }
    intercabiarValor($var1,$var2);
    
    echo("$var1 y $var2");
    ?>
</body>
</html>

⦁	[10 min]
Crea una función que genera un array aleatorio con parámetros variables

Por defecto generará 10 valores entre 0 y 10(mt_rand(0,10))
Puedes especificar el número de valores como primer parámetro,
Puedes especificar el valor máximo como segundo parámetro
o Puedes especificar número de valores, máximo y mínimo
aleatorio(); // [n,n,n,n,n,n,n,n,n,n]
aleatorio(5) // [n,n,n,n,n]
aleatorio(5,50)
aleatorio(5,50,-50)


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ 10</title>
</head>
<body>
    <!--
        Crea una función que genera un array aleatorio con parámetros variables
    Por defecto generará 10 valores entre 0 y 10
    Puedes especificar el número de valores como primer parámetro,
    Puedes especificar el valor máximo como segundo parámetro
    o Puedes especificar número de valores, máximo y mínimo
    -->

    <?php 
        function generarArray($numValores=10,$max=10,$min=0){
	$array=[];
            for ($i=0; $i < $numValores; $i++) { 
            $array[$i]=mt_rand($min,$max);
        }
             return $array;
    }

    print_r(generarArray());//como no le paso parametros usa los de defecto de la funcion
    print_r(generarArray(7,5,4));

?>

</body>
</html>

⦁	Crea una función que reciba un array con distintos tipos de valores de tal forma que:

Si son enteros: el primer entero sea elevado al cuadrado, el segundo entero sea elevado al cubo y así sucesivamente con los números enteros.
Si el valor es un double lo convertirá a su valor negativo (si es negativo al positivo)
Si es una cadena cambiará las mayúsuclas por minúsculas y viceversa.
En caso de no estar entre estos valores lo dejará sin modificar.

<?php

//si son enteros, double o string se modifica
function modificarArr(...$arr){
	$cont=2;
    foreach($arr as &$value){
        if (gettype($value) == "integer") {
            $value = pow($value,$cont);
            $cont++;
        }else if (gettype($value) == "string"){
            for($i = 0;$i < strlen($value);$i++){
                if(!esMayus($value[$i])){
                    $value[$i] = strtoupper($value[$i]);
                }else{
                    $value[$i] = strtolower($value[$i]);
                }
            }
        }else if (gettype($value) == "float"){
            $value *= -1;
        }
    }
	return $arr;
}


function esMayus($a){

    $resul = false;

    if($a == strtoupper($a)){
        $resul = true;
    }

    return $resul;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 11</title>
    <style>
        body{
            background-color: lightgray;
        }
        p{
            text-align: center;
            color:red;
        }
        span{
            color: blue;
        }
    </style>
</head>
<body>
    <?php 
        
		print_r(modificarArr(3, "hOlA", 'hola', 4, 5, [1], "PEPE"));
		
    ?>
</body>
</html>
⦁	Crea una función que reciba un array con información de un usuario y escriba un formulario relleno. En este caso solo utiliza campos de texto o enteros

 

NOTA: Utiliza las funciones array_map o array_walk

Ejemplo
$yo = [
  "nombre" => "Jorge Dueñas Lerín",
  "dirección" => "Calle falsa número 1234"
  "teléfono" => "91 123 45 67",
  "población" => "Madrid",
  "edad" => 23,
]
format_form_user($yo);
Imprime:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 12</title>
    <link rel="stylesheet" href="ej12.css"/>
</head>
<body>
    <!-- Crea una función que reciba un array con información de un usuario 
    y escriba un formulario relleno. En este caso solo utiliza campos de texto o enteros-->
<?php


$yo = [
    "nombre" => "Nacho Bize Font",
    "dirección" => "Calle falsa número 1234",
    "teléfono" => "91 123 45 67",
    "población" => "Madrid",
    "edad" => 27,
];


function rellenarForm($datos){?>
    <form id="datosPersonales" action="ej12.php">
    <?php foreach($datos as $key => $values){
             if(gettype($values)=="string"){?>

                 <label for=<?=$key?>><?=$key?></label> <br>
                <input name=<?=$key?> value=<?=$values?> type="text"></input>
                 <br>
             <?php
            }elseif(gettype($values)=="integer"){?>

                <label for=<?=$key?>><?=$key?></label> <br>
                <input  label=<?=$key?> name=<?=$key?> value=<?=$values?> type="number"></input> <br>
 <?php }
    }
        ?>
        </form>
    <?php 
} 
    
    rellenarForm($yo);
    ?>



</body>
</html>


⦁	Crea una función para escribir select de HTML, la función recibe un asociativo con el nombre y el value, también recibe el elemento seleccionado. como un entero
 

/*** 
$opciones = [
  "Madrid" => 28,
  "Sevilla" => 17,
  "Cáceres" => 56,
]
***/
function genera_select(array $opciones, int seleccionada = -1)
{
  ...
}
<?php 

$opciones = [
    "Madrid" => 28,
    "Sevilla" => 17,
    "Cáceres" => 56,
];

function generaSelect(array $opciones, int $seleccionada = -1) { ?>
    <select>
        <?php foreach($opciones as $clave => $valor) { ?>
            <option value="<?= $clave ?>" <?php if($valor == $seleccionada) echo "selected"; ?>><?= $clave ?></option>
        <?php } ?>
    </select>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ej 13</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                background-color: lightgrey;
            }
            #centro{
                border-radius: 5px black;
                margin-top: 3%;
                font-weight: 600;
            }
            option{
                margin-left: 20%;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="centro">
                <div class="card">
                    <div class="card-body" id="sombra">
                    <?php
                        generaSelect($opciones, 2);
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </body>
</html>




FUNCIONES JASON 

<?php 

    $frase = "Hola buenas soy jason";

    function esPrimo($num){
        if ($num == 0 || $num == 1){
            return true;
        } else {
            $esprimo = true;
            $cont = 2;
            while($esprimo && $cont <= ($num/2)) {
                if(($num % $cont) == 0 ){
                    $esprimo = false;
                }
                $cont++;
            }
            return $esprimo;
        }
    }

    function mayorMenor() {
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);
        $num3 = mt_rand(0, 100);

        $mayor;
        $mediano; 
        $menos;

        if ($num1 > $num2 & $num1 > $num3) :
            $mayor = $num1;
            if ($num2 > $num3) :
                $mediano = $num2;
                $menor = $num3;
            else : 
                $mediano = $num3;
                $menor = $num2;
            endif;
        elseif ($num2 > $num1 & $num2 > $num3) :
            $mayor = $num2;
            if ($num1 > $num3) :
                $mediano = $num1;
                $menor = $num3;
            else : 
                $mediano = $num3;
                $menor = $num1;
            endif;
        elseif ($num3 > $num1 & $num3 > $num2) :
            $mayor = $num3;
            if ($num1 > $num2) :
                $mediano = $num1;
                $menor = $num2;
            else : 
                $mediano = $num2;
                $menor = $num1;
            endif;
        endif;

        echo "<h1>$mayor</h1> <h2>$mediano</h2> <h3>$menor</h3>";
    }

    function forFrase($cadena) {
        for($i=0; $i< strlen($cadena); $i++) {
            echo "<h4>{$cadena[$i]}</h4>";
        }
    }

    function whileFrase($cadena) {
        $i = 0;
        while($i < strlen($cadena)) {
            echo "<h4>{$cadena[$i]}</h4>";
            $i++;
        }
    }

    function a($cadena) {
        $i = 0;
        while($i < strlen($cadena) && ($cadena[$i] != 'a' && $cadena[$i] != 'A')) {
            echo "<h4>{$cadena[$i]}</h4>";
            $i++;
        }
    }

    function randomHastaPrimo() {
        do {
            $num = mt_rand(0,100);
            echo "<span>$num</span> ";
        } while(!esPrimo($num) && $num != 17);
    }

    function url() {
        if (!empty($_GET)) :
?>
        <table>
            <tr><th>Table</th><th>Valor</th></tr>
        <?php foreach ($_GET as $key => $value) : ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
<?php  
        endif;
    }

    function sumaEntre($inicio, $fin) {
        $carry = 0;

        if ($inicio < $fin) {
            for ($i=$inicio+1; $i < $fin; $i++) { 
                $carry += $i;
            }
        } elseif ($inicio > $fin) {
            for ($i=$fin+1; $i < $inicio; $i++) { 
                $carry += $i;
            }
        }

        return $carry;
    }

    function concatena($separador, ...$cadenas) {
        //$separador = $cadenas[0];
        $carry = '';

        foreach($cadenas as $key => $palabra) {
            $carry .= $palabra.$separador;
        }

        return trim($carry, $separador);
    }

    function analizParametros(...$varios) {
        $array = [];
        foreach($varios as $key => $value) {
            if(!array_key_exists(gettype($value), $varios)) {
                $array[gettype($value)] = 1;
            } else {
                $array[gettype($value)]++;
            }
        }

        return $array;
    }

    function swapValues(&$var1, &$var2) {
        $aux = $var1;
        $var1 = $var2;
        $var2 = $aux;
    }

    function genArray($num = 10, $max = 10, $min = 0) {
        for ($i=0; $i<$num; $i++) {
            $array[$i] = mt_rand($min, $max);
        }

        return $array;
    }

    function modificarValoresTipo(&$valores) {
        $pow = 2;

        foreach ($valores as &$valor) {
            if (is_int($valor)) {
                $valor = pow($valor, $pow);
                $pow++;
            } elseif (is_float($valor)) {
                $valor *= -1;
            } elseif (is_string($valor)) {
                $valor = strtolower($valor) ^ strtoupper($valor) ^ $valor;
            }
        }
    }

    function generarForm($value, $key) {
?>
    <form method="post" id="datos-personales">
        <?php if(is_string($value)) : ?>
            <label for="<?= $key ?>"><?= ucfirst($key) ?></label><br><input type="text" name="<?= $key ?>" id="<?= $key ?>" value="<?= $value ?>"><br><br>
        <?php elseif(is_int($value)): ?>
            <label for="<?= $key ?>"><?= ucfirst($key) ?></label><br><input type="number" name="<?= $key ?>" id="<?= $key ?>" value="<?= $value ?>"><br><br>
        <?php endif; ?>
    </form>
<?php
    }

    function generaSelect(array $opciones, int $seleccionada = -1) {
?>
    <select name="provincias" id="provincias">
        <?php foreach($opciones as $key => $value) : ?>
            <option value="<?= $key ?>" <?= ($value == $seleccionada)?"selected":""; ?> ><?= $key ?></option>
        <?php endforeach; ?>
    </select>
<?php
    }

    function imprimeTabulado($cosas, $tab = 0) {
        $aux = '';
        for($i = 0; $i < $tab; $i++) $aux .= '_';

        foreach ($cosas as $key => $value) {
            if (is_array($value)) {
                echo $aux.gettype($value)."<br>";
                imprimeTabulado($value, ($tab + 5));
            } else {
                echo  $aux.$value."<br>";
            }
        }
    }

    function invertirCadena($cadena, $index = 0) {
        if (!empty($cadena[$index])) {
            invertirCadena($cadena, $index + 1);
        }
        echo $cadena[$index];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 3</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h1>-- Condicionales</h1>
    <?php mayorMenor() ?>

    <h1>-- Bucles</h1>
    <?php forFrase($frase) ?>
    <br><br>
    <?php whileFrase($frase) ?>
    <br><br>
    <?php a($frase) ?>
    <br><br>
    <?php randomHastaPrimo() ?>
    <br><br>
    <?php url() ?>

    <h1>-- Funciones</h1>
    <?php for ($i=0; $i < 10; $i++) { 
        echo "<p>".sumaEntre(mt_rand(0,20), mt_rand(0,20))."</p>";
    } ?>
    <br><br>
    <?php 
        echo concatena(" ", "Hola", "mundo", "!")."<br>";
        echo concatena(".", "Esto", "son", "varias", "cadenas", "puntos"); 
    ?>
    <br><br>
    <?php
        $analisis = analizParametros(3, "h", 'hola', [1,2,3], [1], "h");
        print_r($analisis);
    ?>
    <br><br>
    <?php
        $var1 = 1;
        $var2 = 2;
        echo "var1: $var1 || var2: $var2 <br>";
        swapValues($var1, $var2);
        echo "var1: $var1 || var2: $var2<br>";

        $var1 = "hola";
        $var2 = 2;
        echo "var1: $var1 || var2: $var2 <br>";
        swapValues($var1, $var2);
        echo "var1: $var1 || var2: $var2 <br>"; 
    ?>
    <br>
    <?php
        print_r(genArray());
        echo "<br>";
        print_r(genArray(5));
        echo "<br>";
        print_r(genArray(5,50));
        echo "<br>";
        print_r(genArray(5,50,-50));
    ?>
    <br><br>
    <?php
        $array = [
            "Hola",
            3,
            3.4,
            -1.2,
            2,
            "Que Tal"
        ];
        
        print_r($array);
        echo "<br>";
        modificarValoresTipo($array);
        print_r($array);
    ?>
    <br><br>
    <?php
        $yo = [
            "nombre" => "Jorge Dueñas Lerín",
            "dirección" => "Calle falsa número 1234",
            "teléfono" => "91 123 45 67",
            "población" => "Madrid",
            "edad" => 23,
        ];

        array_walk($yo, "generarForm");
    ?>
    <br><br>
    <?php
        $opciones = [
            "Madrid" => 28,
            "Sevilla" => 17,
            "Cáceres" => 56,
        ];

        generaSelect($opciones);
        echo "<br><br>";
        generaSelect($opciones, 17);
    ?>
    <h3>Ejercicio 14</h3>
    <?php
        $cosas = [
            3,
            "frutas"  => ["a" => "naranja", "b" => [1, 2], "c" => "manzana"],
            "números" => [1, 2, 3, 4, 5, 6],
            "hoyos"   => ["primero", 5 => "segundo", "tercero"],
            "asd"
        ];

        imprimeTabulado($cosas);
    ?>

    <h3>Ejercicio 15</h3>
    <?php
        invertirCadena('Jason');
    ?>

</body>
</html>


⦁	OBJETOS
https://diego.com.es/programacion-orientada-a-objetos-en-php
https://www.logicbig.com/tutorials/misc/php/php-oop-cheat-sheet.html

⦁	Crea la clase Círculo con el método setRadio y el método getRadio y getArea. Tendrá una propiedad privada para almacenar el radio. Tendrá una constante privada para almacenar PI
Necesitas definir el fichero con la clase por un lado y por otro la página que lo usa.

creo el fichero cirulo.php
<?php class Circulo{
    private const PI = 3.14;
    private $radio;

    public function __construct(){
        $this->radio;
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
} ?>


<?php
    require('Circulo.php');

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



constantes y metodos static se llaman con self::


⦁	Crea la clase CuentaBancaria
Atributos:

numerocuenta
nombre
saldo
Los números de cuenta se crearán de forma consecutiva después del 100001. Debes utilizar elementos estáticos

Métodos:

constructor con todos los parámetros y valores por defecto ('anónimo', saldo 0)
ingresar(float)
retirar(float)
saldo():float
transferir(CuentaBancaria, cantidad)
unir(CuentaBancaria):
La cuenta que recibe el mensaje coge el saldo de la que es pasada como parámetro
La cuenta que es pasada como parametro se queda con saldo 0 y numerocuenta -1. Indicando que ya no útil
$cuentaA->unir($cuentaB)
bancarrota(): Asigna el saldo a cero
mostrar: muestra un div con la información en varios span. Utiliza clases css por si luego le quieres dar estilo


-en cuentabancaria.php
<?php

class CuentaBancaria {

    private static $numeroCuenta = 100001;
    private $nombre;
    private $saldo;

    function __construct(string $nombre="anonimo", float $saldo = 0) { // hay que poner tipos
        $this->numeroCuenta = self::$numeroCuenta++; //porque es static
        $this->nombre = $nombre;
        $this->saldo = $saldo;
    }

    function ingresar(float $cantidad) {
        $this->saldo += $cantidad;
    }

    function retirar(float $cantidad) {
        $this->saldo-=$cantidad;
    }

    function saldo() {
        return $this->saldo;
    }

    function transferir($cuenta, float $cantidad) {
        $this->saldo -= $cantidad;//porque cuando pongo pringado.tranferir el es el que pierde asi que this.saldo
        $cuenta->saldo += $cantidad; //a la cuenta a la que vaya destinado el saldo digo que su saldo ha aumentado
    }

    function unir($cuenta) {
        $this->saldo += $cuenta->saldo;
        $cuenta->saldo = 0;
        $cuenta->numeroCuenta = -1;
    }

    function bancaRota() {
        $this->saldo = 0;
    }

    function mostrar() {
        return "<div class='cuenta'><span class='numero__cuenta'>Datos de la cuenta: ".$this->numeroCuenta."</span><br><span class='titular'>Titular: ".$this->nombre."</span><br><span class='saldo'>Saldo: ".$this->saldo."</span></div>";
    }
}




Crea una página con tres cuentas:

Milloneti, saldo 1000000
Agapito, saldo 30345
Pobretón, saldo -10000
Haz que el Milloneti tenga 100 retiradas de 1000 euros Haz que Agapito tenga un ingreso de 1200 euros Muestra el saldo de las 3 cuentas. Solo el saldo. Pobretón ha hackeado el banco y ha conseguido unir la cuenta del Milloneti a la suya. Agapito es buena persona y decide transferir la mitad de su salario a Milloneti para que rehaga su vida. Muestra el detalle (método mostrar) de las 3 cuentas.


-en objetos.php

<?php

    require('./clases/cuentaBancaria.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases y objetos php</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <section>
        <h2>Clase CuentaBancaria</h2>
        <?php 
            $cuenta1 = new CuentaBancaria('Milloneti', 1000000);
            $cuenta2 = new CuentaBancaria('Agapito', 30345);
            $cuenta3 = new CuentaBancaria('Pobretón', 10000);

            for($i = 0; $i < 100; $i++) {
                $cuenta1->retirar(1000);
            }
            
            $cuenta2->ingresar(1200);

            print "Cuenta 1: ".$cuenta1->saldo()."<br>Cuenta 2: ".$cuenta2->saldo()."<br>Cuenta 3: ".$cuenta3->saldo()."<br>";

            $cuenta3->unir($cuenta1);

            $cuenta2->transferir($cuenta1, ($cuenta2->saldo())/2);
        ?>
        <br>
        <?= $cuenta1->mostrar() ?>
        <br>
        <?= $cuenta2->mostrar() ?>
        <br>
        <?= $cuenta3->mostrar() ?>
    </section>
</body>
</html>




⦁	Coche y coche con remolque
Crea una clase Coche. Tendrá atributos (privados):

matricula
marca
carga
Métodos (públicos):

pintarInformación.
Escribe: Coche: <matrícula>, <marca> con carga: <carga>
getters y setters
Crea una clase CocheConRemolque Tendrá atributo (privado):

capacidad remolque
Método (público):

getter y setter de capacidad remolque
Los mismos métodos. (Heredados)
pintarInformación.
Escribe: Coche: <matrícula>, <marca> con carga: <carga> y remolque de <remolque>
Crea una clase CocheGrúa, que hereda de Coche Atributo (privado):

cocheCargado
Método (público):

cargar(Coche)
descargar()
pintarInformación.
Escribe:
-Coche: <matrícula>, <marca> con carga: <carga>.
Lleva Coche: <matrícula>, <marca> con carga: <carga>
o bien

-Coche: <matrícula>, <marca> con carga: <carga>.
No lleva ningún coche.
Crea una página que:

Cree un array vacío.
Cree un coche con matrícula 1000, marca BMV, carga 30
Cree un coche con remolque y matrícula 1001, marca Renault, carga 30 y carga remolque 200
Cree un coche con matrícula 1002, marca Porche, carga 40
Cree un coche-grúa con matrícula 1003, marca Ford, carga 20
Carga el Porche en el coche-grúa
Crea otro coche con remolque: 1005, Nissan, 22, en el remolque 250
Crea otro coche grúa con matrícula 1007, Kia, carga 30
Carga el Nissan en la grúa
Crea un array
Mete en el array:
BMV
Renault
El coche grúa Ford
El coche grúa Kia
OJO! No metas el Porche, ya va en la grúa.
OJO! No metas el Nissan, ya va en la grúa
Utiliza array_walk para pintar en un div cada uno de los Coches

-en coche.php


<?php

class Coche {
    private $matricula;
    private $marca;
    private $carga;

    public function __construct(int $matricula, string $marca, int $carga) {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->carga = $carga;
    }

    public function pintarInformacion(){
        return "Coche: ".$this->matricula.", ".$this->marca." con carga ".$this->carga;
    }

    public function setMatricula(int $matricula) {
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula; 
    }

    public function setMarca(string $marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca; 
    }

    public function setCarga(int $carga) {
        $this->carga = $carga;
    }

    public function getCarga() {
        return $this->carga; 
    }
}




-en cochecargado.php

<?php

class CocheCargado extends Coche {
    private $cocheCargado;//true o false,se refiere al coche que carga encima y es un object de la clase coche

    public function __construct(int $matricula, string $marca, int $carga, $cocheCargado = null) {
        parent::__construct($matricula, $marca, $carga);
        $this->cocheCargado = $cocheCargado;
    }

    public function cargar(Coche $coche) {
        $this->cocheCargado = $coche;
    }

    public function descargar() {
        $this->cocheCargado = null;
    }

    public function pintarInformacion() {
        return (!is_null($this->cocheCargado))?parent::pintarInformacion()."<br>Lleva Coche: ".$this->cocheCargado->pintarInformacion():parent::pintarInformacion()."<br>No lleva ningún coche";
    }

}


-en cocheconremolque.php

<?php

class CocheConRemolque extends Coche {
    private $capacidadRemolque;

    public function __construct(int $matricula, string $marca, int $carga, int $capacidadRemolque) {
        parent::__construct($matricula, $marca, $carga);
        $this->capacidadRemolque = $capacidadRemolque;
    }

    public function setCapacidadRemolque($capacidadRemolque) {
        $this->capacidadRemolque = $capacidadRemolque;
    }

    public function getCapacidadRemolque() {
        return $this->capacidadRemolque;
    }

    public function pintarInformacion() {
        return parent::pintarInformacion()." y remolque de ".$this->capacidadRemolque;
    }
}


-en main.php

<?php
    require('./clases/Coche.php');
    require('./clases/CocheCargado.php');
    require('./clases/CocheConRemolque.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases y objetos php</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
        <h2>Coche</h2>
        <h3>Coche Con Remolque</h3>
        <?php
           $bmw = new Coche(1000, 'BMW', 30);
            $renault = new CocheConRemolque(1001, 'Renault', 30, 200);
            $porche = new Coche(1002, 'Porche', 40);
            $renaultGrua = new CocheCargado(1003, 'Ford', 20, $porche);
            $cocheRemolque= new CocheConRemolque (1005,'nissan',22, 250);
	$kiaGrua= new CocheCargado (1007,'kia',30,$cocheRemolque);
            $coches = [
                $bmw,
                $renault,
                $renaultGrua,
	$kiaGrua
            ];
            
            array_walk($coches, function ($coche) {
                echo $coche->pintarInformacion()."<br>";
            });

        ?>
    </body>
</html>
⦁	EN CARPETA
Usuarios deportivos
Para todos los ejercicios se debe describir la estructura de clases y definir sus métodos. Para no implementar la funcionalidad que representan en este punto escribiremos la acción que estamos realizando. Por ejemplo:

Si estamos implementando el método pagar() en la clase PayPal al llamar a este método de un objeto PayPal se escribirá "Pago con PayPal"
Si estamos implementando el método disparar en la clase Rifle se escribirá "Disparo con rifle"
Junto con la definición de clases tendrá que haber una o varias páginas de test donde se compruebe que la funcionalidad se corresponde con los requisitos.

Estamos desarrollando una aplicación para organizar partidos de varios deportes.

NOTA GENERAL: No es necesario crear la clase Partido NOTA GENERAL: No es necesario crear la clase Deporte

En nuestra aplicación tenemos usuarios que se deben representar por objetos de la clase Usuario. De estos usuarios se debe almacenar la información de: nombre, apellidos y deporte que practican. De estos usuarios se desea gestionar un nivel de juego, estos niveles irán desde el nivel 0 al nivel 6.

También se desea almacenar el histórico de partidos, todos sus resultados.

Todos los usuarios comenzarán en el nivel 0. Los niveles no se pueden modificar de forma directa.(no static) Cada vez que un jugador gane 6 partidos seguidos subirá de nivel, cuando el usuario pierda 6 partidos seguidos bajará. NOTA: Es 6 es una constante, no debe haber número mágicos en el código.

Dentro de las operaciones que podremos realizar con estos usuarios tenemos:

introducirResultado: Aceptará como valores victoria, derrota o empate.
NOTA: Deberá de tener en cuenta que puede subir/bajar de nivel.
NOTA2: Cuando esto ocurra se deberá escribir que el usuario ha subido/bajado de nivel.
NOTA3: Quizá tengas que usar alguna constante.
imprimirInformación: Escribirá un elemento párrafo con la información del usuario. Para diferenciar este párrafo del resto de elementos escritos, el párrafo tendrá un color azul claro.
NOTA: Tendrás que usar css
Dentro del párrafo aparecerá un ul con li y la información de sus resultas previos.
Para ganar dinero tenemos otro tipo de usuario: UsuarioPremium. Para estos usuarios solo hará falta ganar 3 partidos seguidos para subir nivel. Cuando se escriba información sobre este tipo de usuarios deberá aparecer junto al nombre entre paréntesis la palabra Premium (Premium)

También necesitamos tener otro tipo de usuario administrador, este usuario tendrá la posibilidad de crear partidos y además la forma que tiene de subir nivel es similar a los usuarios premium. Cuando se escriba el nombre de estos usuarios deberá aparece (Admin)

Estos usuarios tendrán la función crearPartido
Junto a la codificación de las clases crea 3 páginas que cree usuarios con distintos roles y vaya introduciendo resultados para verificar que la aplicación se comporta de la forma esperada.

Ejemplo de salida:

Usuario Jorge Creado.
Usuario Pepe Creado.
Usuario Jorge Gana Partido.
Usuario Pepe Pierde Partido.
...
Usuario Jorge Gana Partido.
Usuario Jorge sube a nivel X.
...
Imprimir Jorge
-> HTML con el párrafo azul claro y la información.


en resumen, hay clases: 
-usuario, 
-usuario premium(llama al parent::getNombre()."premium") y
-usuarioadmin (este puede crear partidos, y tiene que llamar al parent::getNombre()."admin")


⦁	Singleton
El patrón Singleton Es una patrón software para garantizar que solo existe un objeto instanciado de una clase en cualquier momento de la aplicación.
la clase crea un singleton.funcion estatica que la primera vez que la llamas crea un objeto y te  la devuelve y las siguientes veces te lo devuelve directamente

Útil para:

Objetos de configuración que deben ser accesibles en todo el sistema
Objetos que implementan funcionalidad de Logging
Elementos de acceso al sistema de ficheros y bases de datos
<?php
/** Example taken from http://www.webgeekly.com/tutorials/php/how-to-create-a-singleton-class-in-php/ **/
class Unico
{
    public $cosa;

    // Hold an instance of the class
    private static $instance;

    // The singleton method
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Unico();
        }
        return self::$instance;
    }

    private function __construct() {}

}
$user1 = Unico::singleton();
$user2 = Unico::singleton();
$user3 = Unico::singleton();
?>

si pones user1.cosa=33 se modifica en los tres users porque referencian al mismo objeto

⦁	Clases abstractas
Son clases que tienen minimo un método abstracto, al tener un método no definido no se pueden instanciar objetos de esta clase. es un metodo que se define pero no hace nada, las instrucciones se indican en los hijos a menos que sean abstractos tambien.sirve para especificar la funcionalidad de cada una

Una clase que sea descendiente de esta, deberá definir el/los métodos abstractos o de lo contrario también será abstracta.

<?php

abstract class Instrumento {
    private $tipo;

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    abstract public function tocar();
}

class Guitarra extends Instrumento {
    public function tocar() {
        echo "Pon acorde en mano izquierda<br/>";
        echo "Golpea cuerdas<br/>";
    }
}

class Saxofon extends Instrumento {
    public function tocar() {
        echo "Pon nota en pulsadores<br/>";
        echo "Sopla aire<br/>";
    }
}

?>




<?php
abstract class ClaseAbstracta
{
    // Forzar la extensión de clase para definir este método
    abstract protected function getValor();
    abstract protected function valorPrefijo($prefijo);

    // Método común
    public function imprimir() {
        print $this->getValor() . "\n";
    }
}

class ClaseConcreta1 extends ClaseAbstracta
{
    protected function getValor() {
        return "ClaseConcreta1";
    }

    public function valorPrefijo($prefijo) {
        return "{$prefijo}ClaseConcreta1";
    }
}

class ClaseConcreta2 extends ClaseAbstracta
{
    public function getValor() {
        return "ClaseConcreta2";
    }

    public function valorPrefijo($prefijo) {
        return "{$prefijo}ClaseConcreta2";
    }
}

$clase1 = new ClaseConcreta1;
$clase1->imprimir();
echo $clase1->valorPrefijo('FOO_') ."\n";

$clase2 = new ClaseConcreta2;
$clase2->imprimir();
echo $clase2->valorPrefijo('FOO_') ."\n";
?>
El resultado del ejemplo sería:

ClaseConcreta1
FOO_ClaseConcreta1
ClaseConcreta2
FOO_ClaseConcreta2


⦁	Interfaces
Las interfaces permiten especificar los métodos que debe implementar un objeto que cumpla con la interface.

Estas herramientas de la POO no especifican ninguna parte de la implementación. Indican solo el qué y no el cómo.

<?php

interface Ordenable
{
    public function estableceClave($k);
    public function obtieneClave();
    public function esMayor(Ordenable $o);
    public function esIgual(Ordenable $o);
    public function esMenor(Ordenable $o);
}

class Numero implements Ordenable
{
    private $clave;

    public function estableceClave($k)
    {
        $this->clave = k;
    }
    public function obtieneClave()
    {
        return $this->clave;
    }
    public function esMayor(Ordenable $o)
    {
        return $this->obtieneClave() > $o->obtieneClave();
    }
    public function esIgual(Ordenable $o)
    {
        return $this->obtieneClave() == $o->obtieneClave();
    }
    public function esMenor(Ordenable $o)
    {
        return $this->obtieneClave() < $o->obtieneClave();
    }
}

?>
⦁	Traits (Rasgos)
ej dos clases usan una posicion y una descripcion. estas dos son traits.Es una herramienta que permite reutilizar y agrupar código para tareas concretas y específicas.

Las funciones agrupadas se deben poder asociar a culaquier tipo de dato o deben estar autocontenidas (se puede añadir al objeto todas las propiedades y toda la funcionalidad).

Esta herrramienta añade funcionalidad de forma horizontal.

Ejemplos:


<?php

trait DiceHola
{
    public function hola()
    {
        echo "Hola mundo!<br/>";
    }
}

class Simple
{
    use DiceHola;

    private $var;

    public function otraCosa()
    {
        echo "Otra cosa";
    }
}

$o = new Simple();
$o->hola();
$o->otraCosa();

?>
<?php
trait Imprimeble
{
    public function imprime()
    {
        foreach (get_object_vars($this) as $propiedad => $valor) {
            echo "$propiedad $valor<br />";
        }
    }
}

class Persona
{
    use Imprimeble, DiceHola;

    public $nombre;
    public $apellido;
    public $edad;
}

$p = new Persona();
$p->nombre ="Jorge";
$p->apellido ="Dueñas";
$p->edad ="23";
$p->imprime();
?>
<?php
trait ArrayOrJson
{
    public function asArray() : array
    {
        return get_object_vars($this);
    }

    public function asJson() : string
    {
        return json_encode($this->asArray());
    }
}

?>
<?php

trait TieneNombre
{
    private $traitTieneNombrenombre;

    public function estableceNombre($nombre)
    {
        $this->traitTieneNombrenombre = $nombre;
    }

    public function diceNombre()
    {
        echo "Me llamo $this->traitTieneNombrenombre";
    }
}

class Perro
{
    use TieneNombre;

    public $raza;
}

$tobby = new Perro();
$tobby->estableceNombre("Tobby");
$tobby->diceNombre();

?>
Todo Junto

<?php
interface ICosa
{
    public function uno();
    public function dos();
}

abstract class Cosilla implements ICosa
{
    public function uno()
    {
        echo "Uno!<br/>";
    }

    abstract public function dos();
}

trait ImprimeNumeroMetodos
{
    function imprimeNumeroMetodos()
    {
        echo count(get_class_methods($this)) . "<br/>";
    }
}

class Cosaza extends Cosilla
{
    use ImprimeNumeroMetodos;
    public function dos()
    {
        echo "Dos!<br/>";
    }
}

class Cosota extends Cosaza
{
    public function medjaronUnTraitDeHerencia()
    {
        $this->imprimeNumeroMetodos();
    }
}

$o = new Cosaza();
$o->uno();
$o->dos();
$o->imprimeNumeroMetodos();

$on = new Cosota();
$on->medjaronUnTraitDeHerencia();
?>



⦁	Crea un objeto Config que implemente el patrón Singleton

Este objeto config puede almacenar la información del nombre de la aplicación.

getNombre, setNombre
Crea una página en la que accedas desde distintos puntos a ese objeto Singleton

NOTA: Debes observar cómo es el mismo objeto.

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
}


    <?php

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

⦁	Está creando un aplicación con pasarela bancaria, en el momento en el que estás solo tienes integración con el Banco: BancoMalvado. En el futuro del proyecto podrá integrarte con otras pasarelas de pago.

Para todos los pagos debemos(interfaz):

establecer conexión
comprobar seguridad
pagar(hay que poner de parametros la cuenta y la cantidad)
Para poder en el futuro hacer que tu aplicación funcione con otras pasarelas de pago has decidido crear una Interfaz.

interface PlataformaPago
{
    public function estableceConexión():bool;//lo que devuelve es un boolean
    public function compruebaSeguridad():bool;
    public function pagar(string cuenta, int cantidad);
}
Haz una implementación del pago con BancoMalvado. Simplemente escribe:

conexión BancoMalvado
conexión segura BancoMalvado
Pago realizado BancoMalvado
Realiza un página que cree una conexión con BancoMalvado y realice las 3 acciones.



⦁	Tu aplicación ha tenido mucho éxito y han decidido integrarse dos nuevas plataformas de pago.

Haz una implementación de estas dos plataformas:

BitCoinConan
BancoMaloMalísimo
Ahora modifica la página anterior para que de forma aleatoria se realice el pago con alguna de las plataformas.

NOTA: Debes utilizar Polimorfismo(llamas al mismo metodo y en funcion del objeto funciona de una forma o de otra)

-en objetosavanzados.php

<?php    require('./clases/PlataformaPago.php');
    require('./clases/BancoMalvado.php');
    require('./clases/BitCoinConan.php');
    require('./clases/BancoMaloMalisimo.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Avanzados</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
        <h2>Interfaces</h2>
    <h3>BancoMalvado</h3>
    <?php
    $bancoMalvado = new BancoMalvado();
    $bancoMalvado->estableceConexion();
    $bancoMalvado->compruebaSeguridad();
    $bancoMalvado->pagar('Jason', 10000);
    ?>

    <h3>Random entre entidades</h3>
    <?php
    $bancoBitCoin = new BitCoinConan();
    $bancoMalisimo = new BancoMaloMalisimo();

    $bancos = [$bancoMalvado, $bancoBitCoin, $bancoMalisimo];

    $bancos[mt_rand(0,2)]->pagar('Sandra', 10000);
    $bancos[mt_rand(0,2)]->pagar('Alex', 10000);
    $bancos[mt_rand(0,2)]->pagar('Marcos', 10000);
    ?>

    
    ?>
    
</body>
</html>

-en bancomalomalisimo.php

<?php

class BancoMaloMalisimo implements PlataformaPago {
    function __construct() {

    }

    function estableceConexion() : bool {
        echo "conexión BancoMaloMalísimo<br>";
        return true;
    }

    function compruebaSeguridad() : bool {
        echo "conexión segura BancoMaloMalísimo<br>";
        return true;
    }

    function pagar(string $cuenta, int $cantidad) {
        echo "pago realizado BancoMaloMalísimo<br>";
    }
}

-en bancomalvado.php

<?php

class BancoMalvado implements PlataformaPago {
    function __construct() {

    }

    function estableceConexion() : bool {
        echo "conexión BancoMalvado<br>";
        return true;
    }

    function compruebaSeguridad() : bool {
        echo "conexión segura BancoMalvado<br>";
        return true;
    }

    function pagar(string $cuenta, int $cantidad) {
        echo "pago realizado BancoMalvado<br>";
    }
}

-en bitcoinconan.php

<?php

class BitCoinConan implements PlataformaPago {
    function __construct() {

    }

    function estableceConexion() : bool {
        echo "conexión BitCoinConan<br>";
        return true;
    }

    function compruebaSeguridad() : bool {
        echo "conexión segura BitCoinConan<br>";
        return true;
    }

    function pagar(string $cuenta, int $cantidad) {
        echo "pago realizado BitCoinConan<br>";
    }
}


-en Plataformapago.php
<?php

interface PlataformaPago {
    public function estableceConexion():bool;
    public function compruebaSeguridad():bool;
    public function pagar(string $cuenta, int $cantidad);
}


⦁	Estás creando el juego de clases para un videojuego

En el futuro esperas que otros jugadores-programadores creen muchos tipos de personajes, así que decides crear un Intefaz personaje con los métosdos atacar y defender.

Vas a implementar un personaje Humano que escribirá "puñetazo" cuando ataque y "bloqueo" cuando defiende.

También vas a implemetnar un persnaje Mago. Todos los magos se dienden diciendo "hechizo protector" pero hay dos tipos de magos. Los personajes MagosBlancos que atacan escribiendo "ataque de luz", y los MagosOscuros que atacan escribiendo "ataque de sombra" (Mago es una clase abstracta)

Dentro del juego también tendrás un clase Edificio, que tiene una altura y un método para escribir la altura.

Dentro del juego también hay objetos que tienen un peso y una desrcipción.

Tanto los personajes(tanto mago como humano), los edificios y los objetos tienen una posición en el mapa: x y z. Estas posiciones tienen sus métodos getters y setters.

Tanto los edificios como los objetos tienen una descripción y un método setter y getter para ella.

-en objetosavanzados.php
<?php

    require('Posicion.php');
    require('Descripcion.php');
    require('Personaje.php');
    require('Humano.php');
    require('Mago.php');
    require('MagoBlanco.php');
    require('MagoOscuro.php');
    require('Edificio.php');
    require('Objeto.php');

    require('Config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Avanzados</title>
</head>
<body>
    <h2>Juego</h2>
    <?php
    $humano = new Humano();
    $humano->atacar();
    $humano->defender();
    $humano->setX(1);
    $humano->setY(2);
    $humano->setZ(3);
    echo $humano->getPosition()."<br>";
    echo "<br>";
    
    $magoBlanco = new MagoBlanco();
    $magoBlanco->atacar();
    $magoBlanco->defender();
    $magoBlanco->setX(2);
    $magoBlanco->setY(3);
    $magoBlanco->setZ(1);
    echo $magoBlanco->getPosition()."<br>";
    echo "<br>";
    
    $magoOscuro = new MagoOscuro();
    $magoOscuro->atacar();
    $magoOscuro->defender();
    $magoOscuro->setX(3);
    $magoOscuro->setY(1);
    $magoOscuro->setZ(2);
    echo $magoOscuro->getPosition()."<br>";
    echo "<br>";

    $edificio = new Edificio();
    $edificio->setAltura(15.3);
    echo $edificio->getAltura()."<br>";
    $edificio->setDescripcion('Edificio alto');
    echo $edificio->getDescripcion()."<br>";
    $edificio->setX(3);
    $edificio->setY(2);
    $edificio->setZ(1);
    echo $edificio->getPosition()."<br>";
    echo "<br>";

    $objeto = new Objeto();
    $objeto->setPeso(5.5);
    echo $objeto->getPeso()."<br>";
    $objeto->setDescripcion('Objeto pesado');
    echo $objeto->getDescripcion()."<br>";
    $objeto->setY(2);
    $objeto->setZ(1);
    $objeto->setX(3);
    echo $objeto->getPosition()."<br>";

    
    ?>
</body>
</html>



-en Personaje.php


<?php

interface Personaje {

    public function atacar();
    public function defender();

}

-en descripcion.php:


<?php

trait Descripcion {
    private $descripcion;

    function setDescripcion(string $descripcion) {
        $this->descripcion = $descripcion;
    }

    function getDescripcion() {
        return $this->descripcion;
    }
}

-en edificio.php:


<?php

class Edificio {

    use Descripcion;
    use Posicion;

    private $altura;

    function setAltura(float $altura) {
        $this->altura = $altura;
    }

    function getAltura() {
        return $this->altura;
    }
}


-en humano.php:


<?php

class Humano implements Personaje {

    use Posicion;

    function atacar() {
        echo "puñetazo<br>";
    }

    function defender() {
        echo "bloqueo<br>";
    }
}


-en mago.php:

<?php

abstract class Mago implements Personaje {

    use Posicion;

    function defender() {
        echo "hechizo protector<br>";
    }

    abstract function atacar();

}

-en magoblanco.php:

<?php

class MagoBlanco extends Mago {

    function atacar() {
        echo "ataque de luz<br>";
    }
}


-en magooscuro.php:

<?php

class MagoOscuro extends Mago {

    function atacar() {
        echo "ataque de sombra<br>";
    }
}

-en objeto.php:


<?php 

class Objeto {

    use Descripcion;
    use Posicion;

    private $peso;

    function setPeso(float $peso) {
        $this->peso = $peso;
    }

    function getPeso() {
        return $this->peso;
    }
}

-en Posicion.php:

<?php 

trait Posicion {
    private $x;
    private $y;
    private $z;

    function setX(float $x) {
        $this->x = $x;
    }

    function setY(float $y) {
        $this->y = $y;
    }

    function setZ(float $z) {
        $this->z = $z;
    }

    function getX() {
        return $this->x;
    }

    function getY() {
        return $this->y;
    }

    function getZ() {
        return $this->z;
    }

    function getPosition() {
        return "X: $this->x, Y: $this->y, Z: $this->z";
    }
}


⦁	Auto carga de clases
1.- Cada clase en un fichero
2.- Común hacer require de cada fichero
  Nos lleva a tener en el index un montón de require
  require 'File1.php';
  require 'File2.php';
  require 'File3.php';
3.- Si no existe ocurre un error
$product = new Product();
         |
         v
  ¿Product existe?
  Sí /        \ No
Creo el      ERROR
objeto
4.- Capturamos el error
$product = new Product();
         |
         v
  ¿Product existe?
  Sí /        \ No
Creo el      Ejecuta autoload
objeto        ¿Sabemos crearlo?
              Sí /      \ No
            creamos       ERROR

creamos index.php

<?php
spl_autoload_register(function ($class) {
    $classPath = "./";
    echo "Autoload llamado";
    // en nuestros proyectos
    // ../src/
    // o la ruta a la raíz del proyecto
    require("$classPath${class}.php");
});

$p = new Product();
echo $p->id;
?>
Error. No existe la clase

creamos Product.php
<?php
class Product
{
  public $id = 42;
}
?>
Todo ok

5.- Cuando el proyecto es muy grande se suelen meter las clases en espacios
de nombres. Similar a los paquetes Java ¿Cómo lo cargamos?

Estructura de ficheros
src/
  NS1
    Clase1
    Clase2
  NS2
    Clase1
    Clase2

CARPETA_AUTOLOAD/
  \- src
    \- App1
      \- Product.php
    \- App2
      \- User.php
  \- public
    index.php
Fichero en src/App1/Product.php

<?php
namespace App1;
class Product
{
    public $id = 42;
}
?>
Fichero en src/App2/User.php

<?php
namespace App2;
class User
{
    public $id = 17;
}
?>
Fichero en public/index.php

<?php
spl_autoload_register(function ($class) {
    $classPath = "../src/";
    $file = str_replace('\\', '/', $class);
    require("$classPath${file}.php");
});

$p = new App1\Product();
$u = new App2\User();
echo $p->id . "    " $u->id;

?>





⦁	a  partir de las clases anteriores crea las cargas automaticas
primero meto todas las clases en una carpeta que se llama juego dentro de la carpeta clases
-en objtosavanzados.php:
<?php

    // autolad (incluye los archivos de las clases que usa el programa)
    // spl_autoload_register( function ($class) {
    //     require("./clases/$class.php");
    // });
    spl_autoload_register( function ($class) {
        $class = str_replace('\\', '/',$class);
          require("./clases/$class.php");
    });


/*esto es lo que habia
<?php
spl_autoload_register(function ($class) { //
    $classPath = "../src/";//no se usa
    $file = str_replace('\\', '/', $class);
    require("$classPath${file}.php");
});

$p = new App1\Product();
$u = new App2\User();
echo $p->id . "    " $u->id;

?>
*/

    // // singleton
    // require('./clases/Config.php');
    // // bancos
    // require('./clases/PlataformaPago.php');
    // require('./clases/BancoMalvado.php');
    // require('./clases/BitCoinConan.php');
    // require('./clases/BancoMaloMalisimo.php');
    // // juego (ejercicio completo)
    // require('./clases/Posicion.php');
    // require('./clases/Descripcion.php');
    // require('./clases/Personaje.php');
    // require('./clases/Humano.php');
    // require('./clases/Mago.php');
    // require('./clases/MagoBlanco.php');
    // require('./clases/MagoOscuro.php');
    // require('./clases/Edificio.php');
    // require('./clases/Objeto.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Avanzados</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h2>Singleton</h2>
    <?php

    $config1 = Config::singleton();
    $config1->setNombre('Jason');
    // podemos comprobar que el nombre que tiene el primero objeto es 'Jason'
    echo $config1->getNombre()."<br>";
    
    $config2 = Config::singleton();
    $config2->setNombre('Mario');
    
    // al ser la misma instaciacion se quedan con el nombre que se ha definido por ultima vez
    echo $config1->getNombre()."<br>";
    echo $config2->getNombre()."<br>";
    ?>

    <h2>Interfaces</h2>
    <h3>BancoMalvado</h3>
    <?php
    $bancoMalvado = new BancoMalvado();
    $bancoMalvado->estableceConexion();
    $bancoMalvado->compruebaSeguridad();
    $bancoMalvado->pagar('Jason', 10000);
    ?>

    <h3>Random entre entidades</h3>
    <?php
    $bancoBitCoin = new BitCoinConan();
    $bancoMalisimo = new BancoMaloMalisimo();

    $bancos = [$bancoMalvado, $bancoBitCoin, $bancoMalisimo];

    $bancos[mt_rand(0,2)]->pagar('Jason', 10000);
    $bancos[mt_rand(0,2)]->pagar('Mario', 10000);
    $bancos[mt_rand(0,2)]->pagar('Daniel', 10000);
    ?>

    <h2>Juego</h2>
    <?php
    $humano = new Juego\Humano();
    $humano->atacar();
    $humano->defender();
    $humano->setX(1);
    $humano->setY(2);
    $humano->setZ(3);
    echo $humano->getPosition()."<br>";
    echo "<br>";
    
    $magoBlanco = new Juego\MagoBlanco();
    $magoBlanco->atacar();
    $magoBlanco->defender();
    $magoBlanco->setX(2);
    $magoBlanco->setY(3);
    $magoBlanco->setZ(1);
    echo $magoBlanco->getPosition()."<br>";
    echo "<br>";
    
    $magoOscuro = new Juego\MagoOscuro();
    $magoOscuro->atacar();
    $magoOscuro->defender();
    $magoOscuro->setX(3);
    $magoOscuro->setY(1);
    $magoOscuro->setZ(2);
    echo $magoOscuro->getPosition()."<br>";
    echo "<br>";

    $edificio = new Juego\Edificio();
    $edificio->setAltura(15.3);
    echo $edificio->getAltura()."<br>";
    $edificio->setDescripcion('Edificio alto');
    echo $edificio->getDescripcion()."<br>";
    $edificio->setX(3);
    $edificio->setY(2);
    $edificio->setZ(1);
    echo $edificio->getPosition()."<br>";
    echo "<br>";

    $objeto = new Juego\Objeto();
    $objeto->setPeso(5.5);
    echo $objeto->getPeso()."<br>";
    $objeto->setDescripcion('Objeto pesado');
    echo $objeto->getDescripcion()."<br>";
    $objeto->setY(2);
    $objeto->setZ(1);
    $objeto->setX(3);
    echo $objeto->getPosition()."<br>";

    ?>
    
</body>
</html>

-en descripcion.php
<?php
namespace Juego;

trait Descripcion {
    private $descripcion;

    function setDescripcion(string $descripcion) {
        $this->descripcion = $descripcion;
    }

    function getDescripcion() {
        return $this->descripcion;
    }
}
-en edificio.php
<?php
namespace Juego;

class Edificio {

    use Descripcion;
    use Posicion;

    private $altura;

    function setAltura(float $altura) {
        $this->altura = $altura;
    }

    function getAltura() {
        return $this->altura;
    }
}
-en humano.php
<?php
namespace Juego;

class Humano implements Personaje {

    use Posicion;

    function atacar() {
        echo "puñetazo<br>";
    }

    function defender() {
        echo "bloqueo<br>";
    }
}
-en mago.php
<?php
namespace Juego;

abstract class Mago implements Personaje {

    use Posicion;

    function defender() {
        echo "hechizo protector<br>";
    }

    abstract function atacar();

}
-en magoblanco.php
<?php
namespace Juego;

class MagoBlanco extends Mago {

    function atacar() {
        echo "ataque de luz<br>";
    }
}
-en magooscuro.php
<?php
namespace Juego;

class MagoOscuro extends Mago {

    function atacar() {
        echo "ataque de sombra<br>";
    }
}
-en objeto.php
<?php 
namespace Juego;

class Objeto {

    use Descripcion;
    use Posicion;

    private $peso;

    function setPeso(float $peso) {
        $this->peso = $peso;
    }

    function getPeso() {
        return $this->peso;
    }
}
-en personaje.php
<?php
namespace Juego;

interface Personaje {

    public function atacar();
    public function defender();

}
-en posicion.php

<?php 
namespace Juego;

trait Posicion {
    private $x;
    private $y;
    private $z;

    function setX(float $x) {
        $this->x = $x;
    }

    function setY(float $y) {
        $this->y = $y;
    }

    function setZ(float $z) {
        $this->z = $z;
    }

    function getX() {
        return $this->x;
    }

    function getY() {
        return $this->y;
    }

    function getZ() {
        return $this->z;
    }

    function getPosition() {
        return "X: $this->x, Y: $this->y, Z: $this->z";
    }
}







FORMULARIOS


 

 
 

 






si enviamos un formulario get apareceran los name y sus valores en la uri de la pagina que hayams puesto en action:
 


 
si lo ponemos en post no apareceran los datos en la uri
 

SI QUEREMOS QUE NOS APAREZCA LA PAGINA PUES EDITAMOS LA PAGINA INDICADA EN ACTION Y PONEMOS PRINT_R($_POST)

 
⦁	envia datos de un formulario
01 Dirección IP
Haz una página que diga cuál es el sistema operativo del cliente y desde qué dirección ip lo está haciendo.

02 Lenguaje
Modifica el ejercicio anterior para que escriba mensajes de bienvenida dependiendo del lenguaje de Navegador del usuario.

Lenguajes: Inglés, Español o Otro.

NOTA: Intenta que sean lenguajes difíciles.

Obteniendo información de la url. PETICIÓN GET
¿Cómo saber si estoy recibiendo información de un formulario? 1.- Escribe un formulario que envíe un dato con get 2.- Observa cómo cambia la url 3.- Crea una página procesador.php que obtenga ese valor del _GET 4.- Esta página escribirá: - Si nos llegan datos "Recibiendo formulario" - Si no escribirá un enlace al formulario

¿Cómo saber si un dato ha sido enviado?

Hay distintas formas en las que se comportan los distintos controles de un formulario. Para saber si nos están enviando datos o no, debemos preguntar por ellos con isset y comparándolo con los posibles valores.

5.- Modifica la página de procesador.php para que en caso de no recibir datos que escriba que hay un error en rojo

6.- Modifica la página procesado para en caso de no recibir datos reenvíe al navegador a la página del formulario Ver: header NOTA: Siempre hacer un die o exit tras redirect.

7.- Modifica el sistema para que aparezca un mensaje de error en rojo cuando no se ha enviado el dato

¿Cómo mantengo el valor entre peticiones? Ahora vamos a jugar con dos campos

Estructura general:

NOTA IMPORTANTE: Si en los formularios de examen se pierden los valores cuando hay error se considerará como muy grave.

<?php

$variableInput = "";

if(isset($_GET['BOTÓN_ENVÍA'])) {
    // Se está enviando el formulario
    $variableInput = (isset($_GET['variable_input']))?$_GET['variable_input']:"";
}
?>
<!--- Más abajo en el html --->
<input type="text" name="variable_input" value="<?=$variableInput?>" />
Obteniendo información de la entrada. PETICIÓN POST
Al procesar los datos del post tenemos la ventaja de que el tipo de petición cambia y podemos usarlo para saber si estamos recibiendo POST o GET

$variableInput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $variableInput = (isset($_POST['variable_input']))?$_POST['variable_input']:"";

//etc...
<?php 
print_r($_SERVER);
echo "<hr>";
print_r($_GET);
echo "<hr>";
print_r(($_POST));
echo "<hr>";
$nav=explode(" ",$_SERVER["HTTP_USER_AGENT"]);
$idioma=explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form  name="formulario "method="get" action="form1.php" >
        Nombre: <input type="text" name="nombre"><br>
        Sexo:<br> Mujer <input type="radio" name="sexo" value="M">
        Hombre <input type="radio" name="sexo" value="H">
        Otro:  <input type="radio" name="sexo" value="Otro">        <br>
        Color favorito: <input type="color" name="colorfavorito">
        <br>
        <input type="submit" value="enviar">

    </form>

    <h3>Estás utilizando <?=($_SERVER["HTTP_USER_AGENT"])?></h3>
    <h3>Estás utilizando <?=($nav[count($nav)-1])?> como navegador</h3>
    <h3>Tu idioma es <?=$idioma[0]?></h3>

    <?php
        if($idioma[0]=="en-US"){
            echo "This is in English";
        }elseif($idioma[0]=="es"){
            echo "Esto es españolo";
        }
    ?>
</body>
</html>









<?php

//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

$saludo = "Hola";
$ip = $_SERVER['HTTP_X_REAL_IP'];

$langs = explode(",", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
//echo "<pre>";
//print_r($langs);
//echo "</pre>";

if(!in_array("es",$langs)) {
    $saludo = "Hi";
}

$msg = "$saludo: $ip";
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?=$msg?></h1>
  </body>
</html>




 


⦁	EJERCICIO TEMAZOS
-EN LISTADO.PHP
<?php
$data = file_get_contents(
    "temazos.csv"
);

$lines = explode("\n", $data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Temazo</th>
            <th>Hora</th>
            <th>Minuto</th>
        </tr>
        </thead>
        <tbody>
                <?php 
                    foreach($lines as $line){
                        echo "<tr>";
                        $fields = explode(";", $line);
                        echo "<td>$fields[0]</td>";
                        echo "<td>$fields[1]</td>";
                        echo "<td>$fields[2]</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>
    <a href="nuevo.php">Añade otro</a>
</body>
</html>


-EN NUEVO.PHP
<?php 

$temazo="";
$hora=date("h");
$min=date("i");

$opcionesMinuto = [0,15,30,45];

$mayores = array_filter($opcionesMinuto,function($m){
    global $min;
    return $m > $min;
});

if(empty($mayores)) {
    $min = 0;
    $hora++;
} else {
    $min = array_shift($mayores);
}

$errores = [];

// Ver si el usuario envía la información
if(isset($_POST['enviar'])) {

    // Verificar errores
    if(isset($_POST['temazo']) && $_POST['temazo']  != ""){
        $temazo = $_POST['temazo'];
    } else {
        $errores['temazo'] = 'No puede estar vacío';
    }

    if(isset($_POST['hora']) && $_POST['hora']  != ""){
        $hora = $_POST['hora'];
    } else {
        $errores['hora'] = 'No puede estar vacío';
    }

    if(isset($_POST['min']) && $_POST['min']  != ""){
        $min = $_POST['min'];
    } else {
        $errores['min'] = 'No puede estar vacío';
    }

    if(count($errores) == 0) {
        // Guardo
        file_put_contents(
            "temazos.csv",
            "$temazo;$hora;$min\n",
            FILE_APPEND
        );
        // redirect
        header("Location: listado.php");
        exit();
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
    <style>
        .error {
            color: red;
            font-size: 0.7em;
            margin-bottom: 0.5em;
        }

        .error p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Never Ending Party</h1>
    <form action="" method="post">
        <label for="cancion">Temazo</label>
        <input type="text" name="temazo" id="cancion" value="<?=$temazo?>" placeholder="Pon tu temazo"><br>
        <?php 
            if(isset($errores['temazo'])){
                echo '<div class="error">';
                echo '<p>'.$errores['temazo'].'</p>';
                echo '</div>';
            }
        ?>
        <label for="hora">H</label>
        <input type="number" name="hora" value="<?=$hora?>" max="23" min="0" size="1" id="hora">
        <label for="min">mm</label>
        <select name="min" id="min">
            <?php 
                array_walk(
                    $opcionesMinuto,
                    function($op, $k, $d){
                        $sel = ($op==$d)?"selected":"";
                        echo "<option value='$op' $sel>$op</option>";
                    },
                    $min
                );
            ?>
        </select>
        <?php 
            if(isset($errores['hora'])){
                echo '<div class="error">';
                echo '<p>'.$errores['hora'].'</p>';
                echo '</div>';
            }
            if(isset($errores['min'])){
                echo '<div class="error">';
                echo '<p>'.$errores['min'].'</p>';
                echo '</div>';
            }
        ?>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>

-EN TEMAZOS.CSV
Estopa;09;45
Toma temazo;09;45
Toma temazo2;09;45
Vamos a la cama;10;0
No lo voy a subir;10;0



 



