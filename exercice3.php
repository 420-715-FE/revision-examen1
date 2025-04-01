<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>
    <main>
        <?php
        $heures = isset($_GET['heures']) && (int)$_GET['heures'] == $_GET['heures'] ? (int)$_GET['heures'] : 0;
        $minutes = isset($_GET['minutes']) && (int)$_GET['minutes'] == $_GET['minutes'] ? (int)$_GET['minutes'] : 0;
        $secondes = isset($_GET['secondes']) && (int)$_GET['secondes'] == $_GET['secondes'] ? (int)$_GET['secondes'] : 0;

        $heures = ($heures >= 0 && $heures < 24) ? $heures : 0;
        $minutes = ($minutes >= 0 && $minutes < 60) ? $minutes : 0;
        $secondes = ($secondes >= 0 && $secondes < 60) ? $secondes : 0;

        if ($secondes < 59) {
            $secondes++;
        } else {
            $secondes = 0;
            if ($minutes < 59) {
                $minutes++;
            } else {
                $minutes = 0;
                if ($heures < 23) {
                    $heures++;
                } else {
                    $heures = 0;
                }
            }
        }

        if ($heures < 10) {
            $heures = '0' . $heures;
        }
        if ($minutes < 10) {
            $minutes = '0' . $minutes;
        }
        if ($secondes < 10) {
            $secondes = '0' . $secondes;
        }

        echo "$heures:$minutes:$secondes";
        ?>
    </main>
</body>
</html>
