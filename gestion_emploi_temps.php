<!DOCTYPE html>
<html lang="en">
<?php


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        th {
            width: 50px;
        }

        td {
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .seance {
            height: 120px;
            width: 120px;
            border: 1px solid black;

        }
    </style>
    <title>Document</title>
</head>

<body>
    <form action="./gestion_emploi_temps.php" method="POST">
        <label for="niveau">Choisir un niveau</label>
        <select id="niv" name="niv">
            <option value="Primaire">Primaire</option>
            <option value="Moyen">Moyen</option>
            <option value="Lycee">Lycee</option>
        </select>
        <select id="annee1" name="annee1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select id="annee2" name="annee2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <select id="annee3" name="annee3">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <select id="groupe" name="groupe">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" name="submit" value="Charger-emploi de temps">
    </form>
    <div></div>

    <form action="./gestion_emploi_temps.php" method="POST">
        <select name="jour" id="jour">
            <option value="Samedi">Samedi</option>
            <option value="Dimanche">Dimanche</option>
            <option value="Lundi">Lundi</option>
            <option value="Mardi">Mardi</option>
            <option value="Mercredi">Mercredi</option>
            <option value="Jeudi">Jeudi</option>
        </select>
        <input type="text" name="nom_seance" required />
        <input type="number" name="heure_deb" max="23" min="00" id="heure_deb" required>
        <input type="number" name="heure_fin" max="23" min="00" id="heure_fin" required>
        <input type="number" name="min_deb" max="23" min="00" id="heure_fin" required>
        <input type="submit" value="Ajouter" name="submit1">
    </form>
</body>

</html>