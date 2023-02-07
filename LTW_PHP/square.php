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
<?php

$x = 0;
$y = 0;
$square = '';
$square2 = '';

for ($i = 1; $i <= 2; $i++) {
    $lop1 = '<div class="square1"></div>';
    $lop2 = '<div class="square2"></div>';

    while ($x < 5) {
        $square .= $lop1;
        $x += 1;
    }

    while ($y < 5) {
        $square2 .= $lop2;
        $y += 1;
    }
}


?>


<body id="hehe">
<!---->
<!--<div class="squares"> --><?php //echo $square ?><!--  </div>-->
<!--<br>-->
<!--<div class="squares"> --><?php //echo $square2 ?><!--  </div>-->
<!--<br>-->
<!--<div class="squares"> --><?php //echo $square ?><!--  </div>-->
<!--<br>-->
<!--<div class="squares"> --><?php //echo $square2 ?><!--  </div>-->

</body>

<script >
    for (let i = 0; i < 4; i++) {
        var a='';
        console.log('aaa');
        a+= '<div class="squares"> <?php echo $square ?>  </div>';
        a+='<br>';
        a+='<div class="squares"> <?php echo $square2 ?>  </div>'
        a+='<br>';
    }
    document.getElementById('hehe').innerHTML=a;
</script>
</html>
