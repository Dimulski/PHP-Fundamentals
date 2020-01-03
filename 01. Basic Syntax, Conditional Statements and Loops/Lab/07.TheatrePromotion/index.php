<?php
$youngPrice = [
  'Weekday' =>12,
  'Weekend' => 15,
  'Holiday' => 5
];
$middleAgedPrice = [
  'Weekday' =>18,
  'Weekend' => 20,
  'Holiday' => 12
];
$oldPrice = [
  'Weekday' =>12,
  'Weekend' => 15,
  'Holiday' => 10
];
$day = readline();
$age = readLine();
if ($age >= 0 && $age <= 18) {
  echo $youngPrice[$day] . '$';
} else if ($age > 18 && $age <= 64) {
  echo $middleAgedPrice[$day] . '$';
} else if ($age > 64 && $age <= 122) {
  echo $oldPrice[$day] . '$';
} else {
  echo 'Error!';
}