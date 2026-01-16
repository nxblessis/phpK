<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="21.php" method="GET">
    <input type="text" name="text" id="text">
    <button type="submit">go</button>
</body>
</html>


<?php
    $XVI="Иван Васильевич";
    $XVIII="Пётр Алексеевич";
    $XIX="Николай Павлович";
    if (isset($_GET["text"])){
        $vek = $_GET["text"];
        echo 'В ' . $vek . ' веке царствовал ' . $$vek;
    }
?>