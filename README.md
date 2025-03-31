# Exercices préparatoires à l'Examen 1

Après chaque exercice, comparez votre script avec celui du corrigé. En cas de doute sur la validité de votre solution, demandez la validation de l'enseignant.

## Exercice 1

Utilisez le fichier `exercice1.php` pour cet exercice.

Ajouter le code nécessaire pour:

* Créer un tableau contenant les valeurs suivantes :  
    `15 10 17 15 11 13 12`

* À l'aide d'une boucle, calculer la moyenne des valeurs du tableau.
* Afficher la moyenne à l'écran.

> **Astuce:** utilisez la calculatrice pour valider que vous arrivez au bon résultat.

## Exercice 2

Utilisez le fichier `exercice2.php` pour cet exercice.

Ajoutez le code nécessaire pour:

* Créer un tableau `tableau1` contenant les valeurs suivantes :  
    `9, 27, 15, 76`

* Créer un tableau `tableau2` contenant les valeurs suivantes :  
    `42, 19, 31`

* À l'aide d'une boucle, ajouter les éléments de `tableau2` à la fin de `tableau1`.

* Afficher les valeurs de `tableau1` à l'écran.

## Exercice 3

Utilisez le fichier `exercice3.php` pour cet exercice.

Ajoutez le code nécessaire pour:

* Recevoir par l’URL un nombre d’heures, de minutes et de secondes (en trois variables distinctes).  

  * Assumer une valeur de 0 pour les paramètres manquants ou invalides.  

* Afficher l’heure qu’il sera une seconde après l’heure reçue.  

  * **Exemples :**

    * `10:05:32` → `10:05:33`
    * `10:05:59` → `10:06:00`
    * `01:59:59` → `02:00:00`
    * `23:59:59` → `00:00:00`

> Attention à bien gérer les chiffres inférieurs à 10!

## Exercice 4

Utilisez le fichier `exercice4.php` pour cet exercice.

Ajoutez le code nécessaire pour:

* Recevoir trois variables par l'URL :

  * `min`
  * `max`
  * `inc`

* Valider que les variables ont bien été reçues et sont bien des nombres entiers. Si une variable est manquante, afficher un message d'erreur significatif.
* À l'aide d'une boucle `for`, afficher les nombres de `min` à `max` avec un incrément de `inc`. Ajoutez un saut de ligne entre chaque nombre.

Par exemple, avec min = 5, max = 20 et inc = 3, vous devriez obtenir le résultat suivant :

```
5
8
11
14
17
20
```

## Exercice 5

Utilisez le script `exercice5.php` pour cet exercice.

Ajoutez le code nécessaire pour:

* À l'aide d'une seule boucle For (PAS de boucle imbriquée) et d'une structure conditionnelle, afficher le motif suivant **en affichant une seule étoile par itération** :

```
* * * * *
* * * * *

* * * * *
* * * * *

* * * * *
* * * * *

* * * * *
* * * * *

* * * * *
* * * * *
```

## Exercice 6

Utilisez le script `exercice6.php` pour cet exercice.

Ajoutez le code nécessaire pour:

* Recevoir deux variables par l'URL :

    * `prix`
    * `montantPaye`

* Vérifier si les deux variables ont été reçues. S'il manque une variable, afficher un message d'erreur significatif.
* Si les deux variables sont égales, afficher « Montant exact. »
* Si `montantPaye` est inférieur à `prix`, afficher « Il manque X$. », en remplaçant `X` par la différence entre `prix` et `montantPaye`.
* Si `montantPaye` est plus grand que `prix` :

    * Afficher la différence (montant à remettre au client) à l'écran.
    * Utiliser une boucle `while` pour simuler la remise de la monnaie au client, en itérant tant que le montant restant à remettre est supérieur à zéro. À chaque itération :

        * Déterminer la plus grande coupure (100$, 50$, 20$, 10$, 5$, 2$, 1$, 25¢, 10¢ ou 5¢) qui est inférieure ou égale au montant restant à remettre.
        * Soustraire la valeur de cette coupure du montant restant à remettre.
        * Afficher la valeur de la coupure à l'écran.
        * S'il reste seulement 0,03$ ou 0,04$ à remettre, mettre le montant à 0 et afficher une coupure supplémentaire de 5¢.
        * S'il reste moins de 0,03$ à remettre, mettre le montant à 0 et ne pas afficher de coupure supplémentaire.

Exemple avec `prix` = 127,79$ et `montantPaye` = 200$:

```
Montant à remettre au client : 74.21$
50$
20$
2$
2$
10¢
10¢
```

## Exercice 7

Utilisez les fichiers `exerice7.php` et `fonction-exercice7.php` pour cet exercice.

Reprenez votre code de l'exercice 6. Déplacez votre code qui remet la monnaie vers une fonction `remettreMonnaie` que vous placerez dans le fichier `fonction-exercice7.php`. Cette fonction ne doit pas afficher la monnaie remise, elle doit plutôt retourner un tableau contenant les coupures. Ensuite, dans le fichier `exercice7.php`, faites une inclusion du fichier `fonction-exercice7.php`, puis utilisez votre nouvelle fonction pour reproduire le même comportement qu'à l'exercice 6.

## Exercice 8

Utilisez le fichier `exercice8.php` pour cet exercice.

Ajoutez du code qui affiche un formulaire si celui-ci n'a pas déjà été transmis. Le formulaire doit avoir pour titre (balise `h1`) « Demande d'informations » et contenir les champs suivants:

* **Prénom** (champ texte)
* **Nom** (champ texte)
* **Numéro de téléphone** (champ texte)
* **Adresse courriel** (champ texte)
* **Succursale** (liste déroulante) :
    * Gatineau
    * Montréal
    * Sherbrooke
    * Québec
    * Trois-Rivières
* **Message** (*textarea*)
* **Méthode de contact préférée** (boutons radio) :
    * Courriel
    * Téléphone

Si le formulaire a été envoyé, votre script doit afficher « Merci **Prénom Nom**, la succursale de **Succursale** vous contactera dans les plus brefs délais. » en remplaçant les termes en **gras** par les valeurs correspondantes.

Le script doit prendre toutes les précautions de sécurité vues en classe en lien avec les formulaires.
