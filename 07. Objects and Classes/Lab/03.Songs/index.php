<?php

class Song
{
  private $typeSong;
  private $name;
  private $time;

  public function __construct($typeSong, $name, $time)
  {
    $this->typeSong = $typeSong;
    $this->name = $name;
    $this->time = $time;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getTypeSong()
  {
    return $this->typeSong;
  }
}

$n = readLine();
$songs = [];
for ($i = 0; $i < $n; $i++) {
  $songParams = explode("_", readLine());
  $type = $songParams[0];
  $name = $songParams[1];
  $time = $songParams[2];
  $song = new Song($type, $name, $time);
  array_push($songs, $song);
}
$typeList = readLine();

if ($typeList == "all") {
  foreach ($songs as $value) {
    echo $value->getName() . PHP_EOL;
  }
} else {
  foreach ($songs as $value) {
    if ($value->getTypeSong() == $typeList) {
      echo $value->getName() . PHP_EOL;
    }
  }
}
