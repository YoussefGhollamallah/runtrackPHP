<?php


if( isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ( $username == "John" && $password == "Rambo") {
        echo "ce n'est pas ma guerre";
    } else {
        echo "votre pire cauchemar";
    }
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

        <form method="POST">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" name="submit" value="Valider">
        </form>
    </body>
</html>