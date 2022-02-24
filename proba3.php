<?php

    if (isset($_GET["nom"])) {
        $nom=$_GET["nom"];
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


<!--Alex Carrillo -->


    <form action="proba3.php" method="GET">
        <input type="text" name="nom">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>