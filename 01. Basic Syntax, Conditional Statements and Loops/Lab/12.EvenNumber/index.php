<?php
$n = readLine();
while ($n % 2 != 0) {
  echo 'Please write an even number.' . PHP_EOL;
  $n = readline();
}
echo "The number is: " . abs($n);