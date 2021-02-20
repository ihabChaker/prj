<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body contextmenu="share">
    <menu type="context" id="share">
        <menu label="Partager">
            <menuitem label="Twitter" onclick="shareViaTwitter()">
            </menuitem>
            <menuitem label="Facebook" onclick="shareViaFacebook()">
            </menuitem>
        </menu>
    </menu>
    <ol>
        <li>
            Dans cet exemple, vous pouvez partager un lien vers
            cette page sur Facebook et/ou Twitter via le groupe Partager
            du menu contextuel
        </li>
        <li>Sur cette ligne : on peut partager la page sur Twitter ou Facebook grâce au menu Partager du menu contextuel.</li>
        <li>
            <pre contextmenu="changeFont" id="fontSizing">Sur cette ligne : on peut changer la taille de la police en utilisant les options "Augmenter/Réduire la taille de la police" du menu contextuel</pre>
        </li>
        <menu type="context" id="changeFont">
            <menuitem label="Augmenter la taille de la police" onclick="incFont()">
            </menuitem>
            <menuitem label="Réduire la taille de la police" onclick="decFont()">
            </menuitem>
        </menu>
        <li contextmenu="ChangeImage" id="changeImage">Sur cette ligne : on peut utiliser l'option "Changer l'image" du menu.</li><br />
        <img src="https://developer.mozilla.org/media/img/promote/promobutton_mdn5.png" contextmenu="ChangeImage" id="promoButton" />
        <menu type="context" id="ChangeImage">
            <menuitem label="Changer l'image" onclick="changeImage()">
            </menuitem>
        </menu>
    </ol>
    <script>
        function shareViaTwitter() {
            window.open("https://twitter.com/intent/tweet?text=" +
                "Je découvre ContextMenu avec MDN.");
        }

        function shareViaFacebook() {
            window.open("https://facebook.com/sharer/sharer.php?u=" +
                "https://developer.mozilla.org/fr/docs/Web/HTML/Attributs_universels/contextmenu");
        }

        function incFont() {
            document.getElementById("fontSizing").style.fontSize = "larger";
        }

        function decFont() {
            document.getElementById("fontSizing").style.fontSize = "smaller";
        }

        function changeImage() {
            var j = Math.ceil((Math.random() * 39) + 1);
            document.images[0].src = "https://developer.mozilla.org/media/img/promote/promobutton_mdn" + j + ".png";
        }
    </script>
</body>

</html>