<?php

class Vegetables{
    private $name;
    private $price;

    private $orderCount = 0;

    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function getName() {
      return $this->name;
    }

    public function getTaxPrice() {
      return floor($this->price * 1.08);
    }

    public function setOrderCount($orderCount) {
      $this->orderCount = $orderCount;
    }

    public function getOrderCount() {
      return $this->orderCount;
    }

}


?>