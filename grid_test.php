<!DOCTYPE html>
<html>

<head>
    <style>
        .area-8 {
            grid-area: area-8;
        }

        .area-9 {
            grid-area: area-9;
        }

        .area-10 {
            grid-area: area-10;
        }

        .area-11 {
            grid-area: area-11;
        }

        .area-12 {
            grid-area: area-12;
        }

        .area-13 {
            grid-area: area-13;
        }

        .area-14 {
            grid-area: area-14;
        }

        .area-15 {
            grid-area: area-15;
        }

        .area-16 {
            grid-area: area-16;
        }

        .area-17 {
            grid-area: area-17;
        }

        .area-18 {
            grid-area: area-18;
        }

        .flex {
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .item1 {
            grid-area: myArea;
            display: flex;
            flex-direction: row;
        }

        .txt {
            grid-area: txt;
            width: 120px;
        }

        .heure {
            display: grid;
            grid-template-areas: "area-1 area-2";
            grid-gap: 5px;
        }

        .grid-container {
            display: grid;
            grid-template-areas: "txt area-8 area-9 area-10 area-11 area-12 area-13 area-14 area-15 area-16 area-17 area-18";
            grid-gap: 10px;
            margin: 10px;
            border: 1px solid black;
            padding: 10px;
            height: 120px;
        }

        /* .grid-container>div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        } */



        .seance {
            text-align: center;
            font-size: 25px;
            height: 110px;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <div class="grid-container">
        <div class="txt">Horaires</div>
        <div class="area-8">8</div>
        <div class="area-9">9</div>
        <div class="area-10">10</div>
        <div class="area-11">11</div>
        <div class="area-12">12</div>
        <div class="area-13">13</div>
        <div class="area-14">14</div>
        <div class="area-15">15</div>
        <div class="area-16">16</div>
        <div class="area-17">17</div>
        <div class="area-18">18</div>
    </div>

    <div class="grid-container">
        <div class="txt">
            Samedi
        </div>
        <div class="area-8">
            <div class="seance">
                <p>Anglais</p>
                <p>8-9</p>
            </div>
        </div>

    </div>
    <div class="grid-container">
        <div class="txt">
            Dimanche
        </div>
        <div class="area-8 area-9">
            <div class="seance">
                <h4>Anglais</h4>
                <span>8-9</span>
            </div>
        </div>

    </div>


</body>

</html>