<?php 

$var = "bill gates";
$tipo = gettype($var);
echo "$var ($tipo) <br>";

if (is_string($var)) {
    echo "Isso é uma variável do tipo string";
} else{
    echo "Isso não é uma variável do tipo string";
}

echo "<br>";

$var2 = true;
if (is_bool($var2)) {
    echo "Isso é uma variável do tipo boolean";
} else{
    echo "Isso não é uma variável do tipo boolean";
}

echo "<br>";

$var3 = null;

if (is_null($var3)) {
    echo "Variavel \$var3 é nula/vazia! <br>";
} 
?>