<?php

function pairNotPair($num) {

    if ($num % 2 == 0) {
        return "Nombre pair";
    } else {
        return "Nombre impair" ;
    }

}

if ( isset( $_GET["submit"] )) {
    $number = $_GET["num"];
    echo pairNotPair($number);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="num">
        <input type="submit" name="submit" value="start">
    </form>
</body>
</html>
