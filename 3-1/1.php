<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="post">
    <input type="text" name="text" id="text">
    <button type="submit">go</button>

    <?php 
        function ale123(array &$a){
            $counter = 0;
            foreach ($a as &$value) {
                $counter++;
                if ($counter % 2 == 0) {
                    $value = mb_strtoupper($value);
                }
            }
        }
        ?>
        <?php
        $a = explode(' ', $_POST['text']); 
        ale123($a);
        $output = implode(' ', $a);
        echo $output;
        ?>
</form>
</body>
</html>