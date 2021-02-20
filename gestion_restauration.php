<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.5.1.js"></script>

    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th></th>
            <th>plat secondaire</th>
            <th>plat principale</th>
            <th>dessert
            </th>
        </thead>
        <tbody>
            <tr>
                <td>Dimanche</td>
            </tr>
            <tr>
                <td>Lundi</td>
            </tr>
            <tr>
                <td>Mardi</td>
            </tr>
            <tr>
                <td>Mercredi</td>
            </tr>
            <tr>
                <td>Jeudi</td>
                <td value="cringe"></td>
            </tr>
        </tbody>
    </table>
    <form action="./gestion_restauration.php" method="POST" onsubmit="addElem(event)">
        <select name="jour" id="jour">
            <option value="Dimanche">Dimanche</option>
            <option value="Lundi">Lundi</option>
            <option value="Mardi">Mardi</option>
            <option value="Mercredi">Mercredi</option>
            <option value="Jeudi">Jeudi</option>
        </select>
        <label for="plat_secondaire">plat secondaire</label>
        <input type="text" nom="plat_secondaire" id="plat_secondaire" required>

        <label for="plat_principale">plat principale</label>
        <input type="text" nom="plat_principale" id="plat_principale" required>

        <label for="dessert">dessert</label>
        <input type="text" nom="dessert" id="dessert" required />
        <button type="submit">add</button>
    </form>
    <script>
        const addElem = (e) => {
            e.preventDefault()
            $(document).ready(() => {
                $(`tr:contains(${e.target["jour"].value}):parent`).empty().append(`<td>${e.target["jour"].value}</td>`)
                $(`tr:contains(${e.target["jour"].value}):parent`).append(`<td>${e.target["plat_secondaire"].value}</td>`)
                $(`tr:contains(${e.target["jour"].value}):parent`).append(`<td>${e.target["plat_principale"].value}</td>`)
                $(`tr:contains(${e.target["jour"].value}):parent`).append(`<td>${e.target["dessert"].value}</td>`)
            })
        }
    </script>
</body>

</html>