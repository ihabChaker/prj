<!DOCTYPE html>
<html lang="en">
<?php
$con = "mysql:dbname=projet_web;host=127.0.0.1;";

try {
    $exec = new PDO($con, "root", "");
} catch (PDOException $e) {
    printf("error");
    exit();
}
$query = "CREATE TABLE IF NOT EXISTS articles (id INT PRIMARY KEY AUTO_INCREMENT , title VARCHAR (255) , content VARCHAR(255), img_path VARCHAR (255), categories VARCHAR(255));";

$stt =  $exec->prepare($query);
$stt->execute();

if (isset($_POST["submit"])) {
    $cats = "";
    if (isset($_POST['parents'])) {
        $cats .= " parents";
    }
    if (isset($_POST['enseignants'])) {
        $cats .= " enseignants";
    }
    if (isset($_POST['primaire'])) {
        $cats .= " primaire";
    }
    if (isset($_POST['moyen'])) {
        $cats .= " moyen";
    }
    if (isset($_POST['secondaire'])) {
        $cats .= " secondaire";
    }
    $file = $_FILES["img"];
    $arr = explode(".", $file["name"]);
    $file_ext = strtolower(end($arr));
    $types = array("jpg", "jpeg", "png");
    if (in_array($file_ext, $types)) {
        if ($file["error"] == 0) {
            if ($file["size"] < 1000000) {
                $file_new_name = uniqid('', true) . "." . $file_ext;
                $file_destination = 'uploads/' . $file_new_name;
                move_uploaded_file($file["tmp_name"], $file_destination);
                $query = "INSERT INTO  articles (title,content,img_path,categories )  values (?,?,?,?)";
                $stt = $exec->prepare($query);
                $stt->bindParam(1, $_POST["title"]);
                $stt->bindParam(2, $_POST["content"]);
                $stt->bindParam(3, $file_destination);
                $stt->bindParam(4, $cats);
                $stt->execute();
            } else {

                echo "image size too big";
            }
        } else {
            echo "Error occured while uploading your file";
        }
    } else {
        echo "unsupported file type";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./add_article.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" />
        <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="file" name="img" />
        <br>
        <h4>les categories destinées</h4>
        <input type="checkbox" id="tous" name="tous" value="tous" onclick="cntrlCheckbox(id)">
        <label for="tous"> tous</label><br>

        <input type="checkbox" id="enseignants" name="enseignants" value="enseignants" onclick="cntrlCheckbox(id)">
        <label for="enseignants"> enseignants</label><br>

        <input type="checkbox" id="parents" name="parents" value="parents" onclick="cntrlCheckbox(id)">
        <label for="parents"> parents</label><br>

        <input type="checkbox" id="primaire" name="primaire" value="primaire" onclick="cntrlCheckbox(id)">
        <label for="primaire">primaire</label><br>

        <input type="checkbox" id="moyen" name="moyen" value="moyen" onclick="cntrlCheckbox(id)">
        <label for="moyen">moyen</label><br>

        <input type="checkbox" id="secondaire" name="secondaire" value="secondaire" onclick="cntrlCheckbox(id)">
        <label for="secondaire">secondaire</label><br>
        <br>

        <input type="submit" name="submit" />
    </form>
    <script>
        const cntrlCheckbox = (id) => {
            const tous = document.getElementById("tous");

            if (id == "tous") {
                if (tous.checked == true) {
                    document.querySelectorAll("input[type = 'checkbox']").forEach(elem => {
                        elem.checked = true
                    })
                } else {
                    document.querySelectorAll("input[type = 'checkbox']").forEach(elem => {
                        elem.checked = false
                    })
                }
            } else {
                if (tous.checked == true) {
                    if (document.getElementById(id).checked == false) {
                        tous.checked = false
                    }
                }
            }


        }
    </script>
</body>

</html>