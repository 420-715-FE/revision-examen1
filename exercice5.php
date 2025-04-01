<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
    <link rel="stylesheet" href="water.css">
    <style>
        nav {
            margin-bottom: 20px;
        }
        p {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>

    <p>
    <?php
        for ($i = 1; $i <= 60; $i++) {
            echo "* ";
            if ($i % 5 == 0) {
                echo "<br>";
                if ($i % 10 == 0) {
                    echo "<br>";
                }
            }
        }
    ?>
    </p>
</body>
</html>
