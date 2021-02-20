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

$query = "CREATE TABLE IF NOT EXISTS presentations (id INT PRIMARY KEY AUTO_INCREMENT ,  content VARCHAR(255), img_path VARCHAR (255));";
$stt = $exec->prepare($query);
$stt->execute();
if (isset($_POST["submit"])) {
    $file_destination = "";
    if (isset($_POST["image"])) {
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
    $query = "INSERT INTO  presenations (content,img_path )  values (?,?,?,?)";
    $stt = $exec->prepare($query);
    $stt->bindParam(1, $_POST["content"]);
    $stt->bindParam(2, $file_destination);
    $stt->execute();
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="./gestion_presentation.php" method="POST" enctype="multipart/form-data">
        <textarea name="article" id="" cols="30" rows="10"></textarea>
        <input type="checkbox" name="image" id="check" onclick="mod()" />
        <input type="file" name="img">
        <input type="submit" name="submit" value="submit" id="">
    </form>
    <script>
        const mod = () => {

            const check = document.getElementById("check")
            const file = document.querySelector("input[type='file']")

            if (check.checked == true) {
                file.style.visibility = "hidden";
            } else {
                file.style.visibility = "visible";

            }
        }
    </script>
</body>

</html>