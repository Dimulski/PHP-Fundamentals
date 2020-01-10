<?php

class Person {
  private $name;
  private $id;
  private $age;

  public function __construct($name, $id, $age)
  {
    $this->name = $name;
    $this->id = $id;
    $this->age = $age;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function __toString()
  {
    return "$this->name with ID: $this->id is $this->age years old." . PHP_EOL;
  }
}

$people = [];
$line = readLine();
while ($line != "End") {
  $lineParams = explode(" ", $line);
  $person = new Person($lineParams[0], $lineParams[1], $lineParams[2]);
  array_push($people, $person);
  $line = readLine();
}

function cmp(Person $a, Person $b)
{
  if ($a->getAge() == $b->getAge()) {
    return 0;
  }
  return ($a->getAge() < $b->getAge()) ? -1 : 1;
}

usort($people, 'cmp');
foreach ($people as $dude) {
  echo $dude;
}