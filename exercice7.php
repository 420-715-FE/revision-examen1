<?php

require("fonction-exercice7.php");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>
    <?php
        if (!isset($_GET['prix']) || !isset($_GET['montantPaye'])) {
            echo "<p>Erreur : Les variables 'prix' et 'montantPaye' doivent être fournies.</p>";
            exit;
        }

        $prix = floatval($_GET['prix']);
        $montantPaye = floatval($_GET['montantPaye']);

        if ($montantPaye == $prix) {
            echo "Montant exact.";
        } elseif ($montantPaye < $prix) {
            $manque = $prix - $montantPaye;
            echo "Il manque $manque\$.";
        } else {
            $montantARemettre = $montantPaye - $prix;
            echo "Montant à remettre au client: $montantARemettre\$<br>";

            $coupures = remettreMonnaie($montantARemettre);

            foreach ($coupures as $coupure) {
                echo "$coupure<br>";
            }
        }
    ?>
</body>
</html>
