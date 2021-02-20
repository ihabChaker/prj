<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
            box-sizing: border-box;
        }

        .flex {
            display: flex;
            align-items: center;
        }

        .row {
            flex-direction: row;

        }

        .txt {
            text-align: center;
            height: 90px;
            width: 90px;
            border: 1px solid black;
        }

        .seance {
            height: 120px;
            width: 100px;
            border: 1px solid black;
            margin: 5px;
            text-align: center;
        }

        .line {
            width: 100%;
            padding: 5px;
            border: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="line">
        <div class="flex row" id="dimanche">
            <div class="txt">
                <p>Dimanche</p>
            </div>

            <div class="seance">
                <h3>Cringe</h3>
                <h5>8:00-9:00</h5>
            </div>
            <div class="seance">
                <h3>Anglais</h3>
                <h5>9:00-10:00</h5>
            </div>
        </div>

    </div>
    <div class="line">
        <div class="flex row" id="lundi">
            <div class="txt">
                <p>lundi</p>
            </div>

            <div class="seance">
                <h3>Anglais</h3>
                <h5>9:00-10:00</h5>
            </div>
        </div>

    </div>
    <div class="line">
        <div class="flex row" id="mardi">
            <div class="txt">
                <p>mardi</p>
            </div>

            <div class="seance">
                <h3>Anglais</h3>
                <h5>9:00-10:00</h5>
            </div>
        </div>

    </div>
    <div class="line">
        <div class="flex row" id="mercredi">
            <div class="txt">
                <p>Mercredi</p>
            </div>

            <div class="seance">
                <h3>Math</h3>
                <h5>9:00-10:00</h5>
            </div>
        </div>

    </div>
    <div class="line">
        <div class="flex row" id="jeudi">
            <div class="txt">
                <p>Jeudi</p>
            </div>

            <div class="seance">
                <h3>Anglais</h3>
                <h5>9:00-10:00</h5>
            </div>
        </div>

    </div>
    <form action="./flex_test.php" method="post" id="ajouter_seance_form" onsubmit="yes(event)">
        <label for="jour" style="margin-left: 10px;">jour</label>
        <select name="jour" id="jour">
            <option value="dimanche">dimanche</option>
            <option value="lundi">lundi</option>
            <option value="mardi">mardi</option>
            <option value="mercredi">mercredi</option>
            <option value="jeudi">jeudi</option>
        </select>
        <input type="text" name="name">
        <br>
        <label for="heure_deb">heure debut</label>
        <input type="number" max="17" min="8" name="heure_deb" required />

        <label for="min_deb">minute debut</label>
        <input type="number" max="59" min="0" name="min_deb" required />
        <br>
        <label for="heure_fin">heure fin</label>
        <input type="number" max="18" min="8" name="heure_fin" required />

        <label for="min_fin">minute fin</label>
        <input type="number" max="59" min="0" name="min_fin" required />



        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <script>
        const precède = (a, b) => {
            if (+a[0] > +b[0] || (+a[0] == +b[0] && +a[1] >= +b[1])) {
                return true
            } else {
                return false
            }
        }
        const index = (e) => {
            e.preventDefault()
            const jour = document.getElementById(e.target["jour"].value)
            const list = jour.children
            let i = 1
            let cont = true
            let heureDeb = e.target["heure_deb"].value
            let heureFin = e.target["heure_fin"].value

            let minDeb = e.target["min_deb"].value
            let minFin = e.target["min_fin"].value

            let tempDeb = [heureDeb, minDeb]
            let tempFin = [heureFin, minFin]
            while (i < list.length && cont) {
                let v1 = (list[i].getElementsByTagName("h5")[0].innerText)
                let v2 = v1.split("-")
                let v3 = v2.map(elem => {
                    return elem.split(":")
                })
                if (precède(v3[0], tempFin)) {
                    if (i == 1) {
                        return 0
                    } else {
                        if (precède(tempDeb, arr[1])) {
                            return i - 1
                        }
                    }
                }
                arr = v3
                i++
            }
            if (precède(arr[0], heureDeb)) {
                return list.length - 1
            } else {
                return -1
            }

        }
        const yes = (e) => {
            e.preventDefault()
            let heureDeb = e.target["heure_deb"].value
            let heureFin = e.target["heure_fin"].value
            let minDeb = e.target["min_deb"].value
            let minFin = e.target["min_fin"].value
            if (heureDeb - heureFin > 0) {
                alert("alert1")
            } else if (heureDeb === heureFin && minDeb >= minFin) {

                alert("invalid inputs 2")

            } else {
                const jour = document.getElementById(e.target["jour"].value)

                const seance = document.createElement("div")
                seance.classList = "seance"

                const nom = document.createElement("h3")
                nom.innerText = e.target["name"].value

                const temp = document.createElement("h5")
                let txt = e.target["heure_deb"].value + ":" + e.target["min_deb"].value + "-" + e.target["heure_fin"].value + ":" + e.target["min_fin"].value
                temp.innerText = txt

                seance.append(nom)
                seance.append(temp)
                jour.children[index(e)].after(seance)

            }
            console.log(index(e))
            document.getElementById("ajouter_seance_form").reset();
        }
        const oui = () => {
            console.log("oui")
        }
        const hey = () => {
            console.log("hey")
        }
    </script>
</body>

</html>