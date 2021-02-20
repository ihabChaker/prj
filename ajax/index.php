<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id="btn">yes</button>
    <input type="text" id="name">
    <script src="./jquery-3.5.1.js"></script>
    <script>
        $(document).ready(() => {
            $("#btn").click(() => {
                var name = $("#name").val()
                $.post("http://localhost/projet_web_v-0/ajax/server.php", {
                        name: name,
                        mike: {
                            sister: "ellie",
                            age: "to young"
                        }
                    },
                    (data, status) => {
                        console.log("data", JSON.parse(data))
                        console.log("status", status)
                    })
            })
        })
    </script>
</body>

</html>