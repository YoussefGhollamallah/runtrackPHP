<?php
// Démarrer la session pour gérer le cookie
session_start();

// Initialiser ou incrémenter le compteur de visites
if (!isset($_COOKIE['nbVisites'])) {
    setcookie('nbVisites', 1, time() + 365*24*3600); // Cookie valide pour 1 an
    $nbVisites = 1;
} else {
    if (isset($_POST['reset'])) {
        setcookie('nbVisites', 1, time() + 365*24*3600); // Réinitialiser le cookie à 1
        $nbVisites = 1;
    } else {
        $nbVisites = ++$_COOKIE['nbVisites'];
        setcookie('nbVisites', $nbVisites, time() + 365*24*3600); // Incrémenter le cookie
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Nombre de visites : <?php echo $nbVisites; ?></h1>
    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
