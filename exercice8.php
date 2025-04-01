<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>

    <?php
    if (isset($_POST['prenom'])) {
        if (
            empty($_POST['prenom'])
            || empty($_POST['nom'])
            || empty($_POST['telephone'])
            || empty($_POST['email'])
            || empty($_POST['succursale'])
            || empty($_POST['message'])
            || empty($_POST['contact_pref'])
        ) {
            exit;
        }
        if (!in_array($_POST['succursale'], ['Gatineau', 'Montréal', 'Sherbrooke', 'Québec', 'Trois-Rivières'])) {
            exit;
        }
        if (!in_array($_POST['contact_pref'], ['Courriel', 'Téléphone'])) {
            exit;
        }

        $prenom = htmlspecialchars($_POST['prenom'] ?? '');
        $nom = htmlspecialchars($_POST['nom'] ?? '');
        $succursale = htmlspecialchars($_POST['succursale'] ?? '');

        echo "<p>Merci <strong>$prenom $nom</strong>, la succursale de <strong>$succursale</strong> vous contactera dans les plus brefs délais.</p>";
    } else {
        // Affichage du formulaire
        ?>
        <h1>Demande d'informations</h1>
        <form method="post" action="">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="telephone">Numéro de téléphone:</label>
            <input type="text" id="telephone" name="telephone" required><br>

            <label for="email">Adresse courriel:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="succursale">Succursale:</label>
            <select id="succursale" name="succursale" required>
                <option value="Gatineau">Gatineau</option>
                <option value="Montréal">Montréal</option>
                <option value="Sherbrooke">Sherbrooke</option>
                <option value="Québec">Québec</option>
                <option value="Trois-Rivières">Trois-Rivières</option>
            </select><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br>

            <p>Méthode de contact préférée:</p>
            <input type="radio" id="contact_email" name="contact_pref" value="Courriel" required>
            <label for="contact_email">Courriel</label><br>
            <input type="radio" id="contact_phone" name="contact_pref" value="Téléphone" required>
            <label for="contact_phone">Téléphone</label><br>

            <button type="submit">Envoyer</button>
        </form>
        <?php
    }
    ?>
</body>
</html>
