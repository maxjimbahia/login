<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $usuario = $_POST ["user"];
        $contrasenia = $_POST ["pass"];

        $ckuser = "admin";
        $ckpass = "123456";

        if ($usuario== $ckuser && $contrasenia == $ckpass) {
            header ( "location:https://www.potrerodigital.org/");
        } else {
            header ( "location:error.html");
        }

    ?>

</body>
</html>