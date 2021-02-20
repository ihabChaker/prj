<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th></th>
            <th>Nom Enseignant</th>
            <th>Prenom Enseignant</th>
        </thead>
        <tbody>
            <td id="1" onclick="yes(id)">hh</td>
        </tbody>
    </table>
    <form action="" onsubmit="fct()">
        <input type="text" name="nom">
        <input type="text" name="prenom">
    </form>
    <div class="gestion">

        <form action="" onsubmit="fct2(e)">
            <input type="number" name="heure_reception" />
            <select name="niveau" id="niveau">
                <option value="lycee">lycee</option>
                <option value="moyen">moyen</option>
                <option value="primaire">primaire</option>
            </select>
            <div id="annee">
                <select name="annee" id="annee">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div id="class">
                <input type="checkbox" name="class1" id="class1" value="class1">
                <input type="checkbox" name="class2" id="class2" value="class2">
                <input type="checkbox" name="class3" id="class3" value="class3">
                <input type="checkbox" name="class4" id="class4" value="class4">
                <input type="checkbox" name="class5" id="class5" value="class5">

            </div>
        </form>

    </div>

    <script>
        let id_ens = 0
        const yes = (id) => {
            alert(id)
        }
    </script>
</body>

</html>