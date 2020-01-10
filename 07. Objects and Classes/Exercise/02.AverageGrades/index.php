<?php

class Student {
  private $name;
  private $grades;

  public function __construct($name, $grades)
  {
    $this->name = $name;
    $this->grades = $grades;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getAverageGrade()
  {
    return array_sum($this->grades)/count($this->grades);
  }

  public function __toString()
  {
    return "$this->name -> " . number_format($this->getAverageGrade(), 2, '.', '') . PHP_EOL;
  }
}

$n = readLine();
$students = [];
for ($i = 0; $i < $n; $i++) {
  $line = readLine();
  $studentParams = explode(" ", $line);
  $studentName = $studentParams[0];
  array_splice($studentParams,0,1);
  $student = new Student($studentName, $studentParams);
  array_push($students, $student);
}

function excellent(Student $student) {
  return $student->getAverageGrade() >= 5;
}

usort($students, function (Student $a, Student $b) use ($students) {
  if ($a->getName() == $b->getName()) {
    return $b->getAverageGrade() <=> $a->getAverageGrade();
  }
  return $a->getName() <=> $b->getName();
});

foreach (array_filter($students, "excellent") as $student) {
  echo $student;
}

