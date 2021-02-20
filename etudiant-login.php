<?php
if (isset($_POST["submit"])) {
    echo "cringe";
    $con = "mysql:dbname=projet_web;host=127.0.0.1;";

    try {
        $exec = new PDO($con, "root", "");
    } catch (PDOException $e) {
        printf("error");
        exit();
    }
    $query = "SELECT * FROM etudiant WHERE uname = ? ";

    $stt =  $exec->prepare($query);
    $stt->bindParam(1, $_POST["uname"]);
    $stt->execute();
    $res = $stt->fetchAll();
    echo  print_r($res);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./etudiant-login.php" method="POST">
        <input type="text" name="uname" placeholder="uname" id="">
        <input type="password" name="pwd" id="">
        <input type="submit" value="login" name="submit">
    </form>


</body>

</html>