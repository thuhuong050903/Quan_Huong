<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>
<?php
error_reporting(0);

$cd = $_GET['chieudai'];
$cr = $_GET['chieurong'];
$dt = $cd * $cr;
//
//if ($dt >=200){
//    $lk='nen xay biet thu';
//}elseif ($dt >= 100){
//    $lk='nen xay vila';
//}else{
//    $lk='nen xay cao tang';
//}
//

//switch ($dt) {
//    case $dt >= 200:
//        $lk = 'xay biet thu';
//        break;
//    case $dt >= 150:
//        $lk = 'xay villa';
//        break;
//    case $dt <150:
//        $lk = 'xay cao tang';
//        break;
//    default:
//        $lk = 'have a nice day at work';
//        break;
//}
?>

<form action='index.php' method='get'>

    <label for='cd'>Chieu dai</label>
    <input id='cd' type='text' name='chieudai' value="<?php echo $cd ?>">

    <label for='cr'>Chieu rong</label>
    <input id='cr' type='text' name='chieurong' value="<?php echo $cr ?>">

    <label for='dt'>dien tich</label>
    <input id='dt' type='text' value="<?php echo $dt ?>">

    <input type='submit' value='Submit'>
</form>

<p><?php echo $lk ?></p>

</body>
</html>