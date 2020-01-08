<?php

class Student {
  private $firstName;
  private $lastName;
  private $age;
  private $hometown;

  public function __construct($firstName, $lastName, $age, $hometown)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->age = $age;
    $this->hometown = $hometown;
  }

  public function getHometown()
  {
    return $this->hometown;
  }

  public function __toString()
  {
    return "$this->firstName $this->lastName is $this->age years old." . PHP_EOL;
  }
}

$students = [];
do {
  $line = readLine();
  $lineParams = explode(" ", $line);
  $student = new Student($lineParams[0], $lineParams[1], $lineParams[2], $lineParams[3]);
  array_push($students, $student);
} while ($line != "end");

$city = readLine();
foreach ($students as $value) {
  if ($value->getHometown() == $city) {
    echo $value;
  }
}