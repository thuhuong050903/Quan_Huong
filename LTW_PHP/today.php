<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>
<?php
error_reporting(0);

$td = $_GET['today'];

switch ($td) {
    case 'sunday':
        $lk = 'pray for us';
        break;
    case 'wednesday':
        $lk = 'take her';
        break;
    case 'satursday':
        $lk = 'take care as you go';
        break;
    default:
        $lk = 'have a nice day at work';
        break;
}
?>

<form action='today.php' method='get'>

    <label for='cd'>hom nay la thu may</label>
    <input id='cd' type='text' name="today" value="<?php echo $td ?>">
    <input type='submit' value='Submit'>

</form>

<p><?php echo $lk ?></p>

</body>
</html>