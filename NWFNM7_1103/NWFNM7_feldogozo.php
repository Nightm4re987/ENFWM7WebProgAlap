<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>feldolgozo PHP</title>
</head>
<body>
    
<?php

if (isset($_POST)) {

echo "<h2>HTML űrlap</h2>"

$nev = $_POST["nev"];
$pin = $_POST["pin"];
$fav_fruit = $_POST["fav_fruit"];
$age = $_POST["age"];
$feet_size = $_POST["feet_size"];
$confidance = $_POST["confidance"];



echo "<p><strong>Név:</strong> " . $nev . "</p>";
echo "<p><strong>PIN Kód:</strong> " . $pin . "</p>";
echo "<p><strong>Kedvenc gyümölcs:</strong> " . $fav_fruit . "</p>";
echo "<p><strong>Életkor:</strong> " . $age . "</p>";
echo "<p><strong>lábméret:</strong> " . $feet_size . "</p>";
echo "<p><strong>Önbizalom:</strong> " . $confidance . "</p>";

} else {
    echo "<h2> Űrlap nem lett beküldve!</h2>";
}
?>

<a href="NWFNM7_urlap.html">Vissza az űrlapra.</a>
</body>
</html>