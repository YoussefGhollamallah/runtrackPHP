<?php 

$num1 = 2;
$num2 = 3;

function calcule(int $num1, string $op, int $num2)
{

// addition
if ($op == "+" ) {
    return $num1 + $num2;
} elseif ( $op == "*")  {
    return $num1 * $num2;
} elseif ( $op == "-" ){
    return $num1 - $num2;
} elseif ( $op == "/") {
    if ($num2 == 0) {
        return "On ne peux diviser par Zéro";
    } else {
        return $num1 / $num2;
    }
} elseif ($op == "**" ) {
    return $num1 ** $num2 ;
}

}


echo "Le resultat de l'addition $num1 + $num2 est : ",  calcule($num1 , "+" , $num2);
echo "<br>";
echo "Le resultat de la multiplication $num1 * $num2 est : ",  calcule($num1 , "*" , $num2);
echo "<br>";
echo "Le resultat de soustraction $num1 - $num2 est : ",  calcule($num1 , "-" , $num2);
echo "<br>";
echo "Le resultat de division $num1 / $num2 est : ",  calcule($num1 , "/" , $num2);
echo "<br>";
echo "Le resultat de la racine carré de $num1 est : ",  calcule($num1 , "**" , $num2);
?>