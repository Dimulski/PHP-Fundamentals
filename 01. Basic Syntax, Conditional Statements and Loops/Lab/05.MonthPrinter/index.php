<?php
$month = readLine();
if ($month > 12 || $month < 1) {
  echo 'Error!';
} else {
  echo DateTime::createFromFormat('!m', $month)->format('F');
}
