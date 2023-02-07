<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>


<body id="hehe">
<?php
$x = 0;
$lop = '';
while ($x <= 4) {
    for ($i = 1; $i <= 5; $i++) {
        if ($x % 2 == 1) {
            echo '<div class="square1"></div>';
        } else {
            echo '<div class="square2"></div>';
        }
    
    } echo "<br>";
    $x++;
}
?>
</body>

</html>
