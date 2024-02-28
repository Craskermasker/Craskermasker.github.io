<!DOCTYPE html>
<html>
<h1> Form submitted </h1>
<a href="/">Back</a>

<?php
// $options = getopt("n::e::");
// $name = $options['n'];
// $email = $options['e'];

$name = $_POST["name"];
$partnername = $_POST["partnername"];
$childname = $_POST["childname"];
$email = $_POST["email"];
$diet = $_POST["diet"];
$partnerdiet = $_POST["partnerdiet"];
$childdiet = $_POST["childdiet"];
$braai = $_POST["braai"];
$breakfast = $_POST["breakfast"];
$message = $_POST["message"];
$submityes = $_POST["submityes"];
$submitno = $_POST["submitno"];
$keys = array($name,$partnername,$childname,$email,$diet,$partnerdiet,$childdiet,$braai,$breakfast,$message,$submityes,$submitno);
$fname = '/home/evan/data.csv'; //NAME OF THE FILE
$fcon = fopen($fname,'a');
fputcsv($fcon, $keys);
fclose($fcon);

print nl2br("\n\nForm submitted with: \nName: $name  \nPartner: $partnername  \nChildren: $childname \nEmail: $email \nDiet: $diet \n Partner diet: $partnerdiet \n Child diet: $childdiet \nAttending braai: $braai \nAttending breakfast: $breakfast \nMessage: $message \n$submityes \n$submitno");
exit();
?>

</html>
