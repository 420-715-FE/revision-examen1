<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
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

            while ($montantARemettre > 0) {
                if ($montantARemettre >= 100) {
                    echo "100\$<br>";
                    $montantARemettre -= 100;
                } else if ($montantARemettre >= 50) {
                    echo "50\$<br>";
                    $montantARemettre -= 50;
                } else if ($montantARemettre >= 20) {
                    echo "20\$<br>";
                    $montantARemettre -= 20;
                } else if ($montantARemettre >= 10) {
                    echo "10\$<br>";
                    $montantARemettre -= 10;
                } else if ($montantARemettre >= 5) {
                    echo "5\$<br>";
                    $montantARemettre -= 5;
                } else if ($montantARemettre >= 1) {
                    echo "1\$<br>";
                    $montantARemettre -= 1;
                }
                else if ($montantARemettre >= 0.25) {
                    echo "25¢<br>";
                    $montantARemettre -= 0.25;
                } else if ($montantARemettre >= 0.10) {
                    echo "10¢<br>";
                    $montantARemettre -= 0.1;
                } else if ($montantARemettre >= 0.05) {
                    echo "5¢<br>";
                    $montantARemettre -= 0.05;
                } else if ($montantARemettre >= 0.03) {
                    echo "5¢<br>";
                    $montantARemettre = 0;
                } else {
                    $montantARemettre = 0;
                }
            }
        }
    ?>
</body>
</html>
