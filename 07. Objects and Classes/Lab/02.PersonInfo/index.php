<?php
class Person
{
  private $firstName;
  private $lastName;
  private $age;

  public function __construct($firstName, $lastName, $age)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->age = $age;
  }

  public function __toString()
  {
    return "firstName: $this->firstName" . PHP_EOL . "lastName: $this->lastName" . PHP_EOL . "age: $this->age";
  }
}
$firstName = readLine();
$lastName = readLine();
$age = readLine();

$person = new Person($firstName, $lastName, $age);
echo $person;