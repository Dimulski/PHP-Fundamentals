<?php
$n = readLine();
$counter = 0;
$i = 1;
$oddNumbers = [];
while ($counter < $n) {
  if ($i % 2 != 0) {
    array_push($oddNumbers, $i);
    $counter++;
  }
  $i++;
}
echo join(PHP_EOL, $oddNumbers) . PHP_EOL;
echo 'Sum: ' . array_sum($oddNumbers);