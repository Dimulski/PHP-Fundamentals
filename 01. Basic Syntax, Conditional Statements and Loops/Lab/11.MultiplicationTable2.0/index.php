<?php
$x = readLine();
$y = readLine();
do {
  echo "$x X $y = " . $x * $y . PHP_EOL;
  $y++;
} while ($y <= 10);