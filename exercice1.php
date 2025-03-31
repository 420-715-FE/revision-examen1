<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <?php
    $valeurs = [15, 10, 17, 15, 11, 13, 12];
    
    $somme = 0;
    foreach ($valeurs as $valeur) {
        $somme += $valeur;
    }
    $moyenne = $somme / count($valeurs);
    
    echo "<p>La moyenne des valeurs est : $moyenne</p>";
    ?>
</body>
</html>
