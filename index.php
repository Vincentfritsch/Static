<?php
require "Speedometer.php";

$miles = Speedometer::convertKmToMiles(10);
echo $miles;
echo "<br>";
$km = Speedometer::convertMilesToKm(88);
echo $km;

