<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        console.log("a")
        const a = (k) => {
            let i = 1
            console.log(i)
            if (k) {

                console.log("true")
            } else {

                console.log("false");


            }
            i++
            console.log(i)
        }
        const precede = (a, b) => {
            if (+a[0] > +b[0] || (+a[0] == +b[0] && +a[1] >= +b[1])) {
                return true
            } else {
                return false
            }
        }
        let deb = [8, 1]
        let fin = [8, 10]

        console.log(precede(fin, deb))
    </script>
</body>

</html>