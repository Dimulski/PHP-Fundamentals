<?php
$n = intval(readline());
$threshold = floatval(readline());
$last = floatval(readline());
for ($i = 0; $i < $n - 1; $i++) {
  $c = floatval(readline());
  $div = ($c - $last) / $last;
  $isSignificantDifference = abs($div) >= $threshold;
  $to = "";

  if ($div == 0) {
    $to = "NO CHANGE: " . $c;
  } else if (!$isSignificantDifference) {
    $to = sprintf("MINOR CHANGE: %f to %f (%.2f%%)", $last, $c, $div * 100);
  } else if ($isSignificantDifference && ($div > 0)) {
    $to = sprintf("PRICE UP: %f to %f (%.2f%%)", $last, $c, $div * 100);
  } else if ($isSignificantDifference && ($div < 0))
    $to = sprintf("PRICE DOWN: %f to %f (%.2f%%)", $last, $c, $div * 100);
  echo $to . PHP_EOL;
  $last = $c;
}
// cba