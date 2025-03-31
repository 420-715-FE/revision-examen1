<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>    

    <?php
    $tableau1 = [9, 27, 15, 76];
    $tableau2 = [42, 19, 31];
    
    foreach ($tableau2 as $valeur) {
        $tableau1[] = $valeur;
    }
    
    echo "<ul>";
    foreach ($tableau1 as $valeur) {
        echo "<li>$valeur</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
