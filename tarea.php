<?php
// Declaración de Variables
$integerVar = 10;
$floatVar = 20.5;
$stringVar = "Hola,Mundo!";
$booleanVar = true;
$arrayVar = array("Manzana", "Banana", "Naranja", "Uva", "Mango");

// Operaciones Aritméticas
$suma = $integerVar + $floatVar;
$producto = $integerVar * $floatVar;

echo "La suma de $integerVar + $floatVar = $suma<br>";
echo "El producto de $integerVar + $floatVar = $producto<br>";

// Manipulación de Cadenas
$string1 = "Hola";
$string2 = "Mundo";
$concatenacion = $string1 . ", " . $string2 . "!";
$longitud = strlen($stringVar);

echo "Concatenación de cadenas: $concatenacion<br>";
echo "Longitud de la cadena '$stringVar' es: $longitud<br>";

// Uso de Condicionales
if ($booleanVar) {
    echo "La variable booleana es verdadera.<br>";
} else {
    echo "La variable booleana es falsa.<br>";
}

// Creación de un Array
echo "El tercer elemento del arreglo es: " . $arrayVar[2] . "<br>";
?>
