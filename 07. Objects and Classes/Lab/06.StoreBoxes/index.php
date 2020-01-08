<?php

class Item
{
  private $name;
  private $price;

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }
}

class Box
{
  private $serialNumber;
  private $item;
  private $itemQuantity;
  private $price;

  public function getPrice()
  {
    return $this->price;
  }

  public function getItem()
  {
    return $this->item;
  }

  public function __construct($serialNumber, Item $item, $itemQuantity, $price)
  {
    $this->serialNumber = $serialNumber;
    $this->item = $item;
    $this->itemQuantity = $itemQuantity;
    $this->price = $price;
  }

  public function __toString()
  {
    return "$this->serialNumber" . PHP_EOL .
      "-- " . $this->item->getName() . " - $" . number_format($this->getItem()->getPrice(), 2, '.', '') . ": " . $this->itemQuantity . PHP_EOL .
      "-- $" . number_format($this->price, 2, '.', '') . PHP_EOL;
  }
}

$boxes = [];
$line = readLine();
while ($line != "end") {
  $lineParams = explode(" ", $line);
  $item = new Item($lineParams[1], $lineParams[3]);
  $box = new Box($lineParams[0], $item, $lineParams[2], $item->getPrice() * $lineParams[2]);
  array_push($boxes, $box);
  $line = readLine();
}

function cmp(Box $a, Box $b)
{
  if ($a->getPrice() == $b->getPrice()) {
    return 0;
  }
  return ($a->getPrice() > $b->getPrice()) ? -1 : 1;
}

usort($boxes, "cmp");
foreach ($boxes as $box) {
  echo $box;
}
