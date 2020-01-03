<?php
$dateAsString = readLine();
$date = new DateTime($dateAsString);

echo $date->format('l') . PHP_EOL;
