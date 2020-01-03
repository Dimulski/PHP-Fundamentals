<?php
$englishSpeaking = ['USA', 'England'];
$spanishSpeaking = ['Spain', 'Argentina', 'Mexico'];
$country = readLine();
if (in_array($country, $englishSpeaking)) {
  echo 'English';
} else if (in_array($country, $spanishSpeaking)) {
  echo 'Spanish';
} else {
  echo 'unknown';
}