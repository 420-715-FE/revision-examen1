<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>    
    <?php

    if (!isset($_GET['min']) || !isset($_GET['max']) || !isset($_GET['inc'])) {
        echo "<p>Erreur : Veuillez fournir les paramètres 'min', 'max' et 'inc'.</p>";
        echo "</body></html>";
        exit;
    }
    if (
        (int)$_GET['min'] != $_GET['min']
        || (int)$_GET['max'] != $_GET['max']
        || (int)$_GET['inc'] != $_GET['inc']
    ) {
        echo "<p>Erreur : Les paramètres 'min', 'max' et 'inc' doivent être des nombres entiers.</p>";
        echo "</body></html>";
        exit;
    }

    $min = (int)$_GET['min'];
    $max = (int)$_GET['max'];
    $inc = (int)$_GET['inc'];

    for ($i = $min; $i <= $max; $i += $inc) {
        echo "$i<br>";
    }

    ?>
</body>
</html>
