<?php

  // Parent class
  class Vehicle
  {
      public $brand;

      public function __construct($brand)
      {
          $this->brand = $brand;
      }

      public function startEngine()
      {
          return "Engine started for " . $this->brand;
      }
  }

  // Child class inherits from Vehicle
  class Car extends Vehicle
  {
      public $model;

      public function __construct($brand, $model)
      {
          parent::__construct($brand);
          $this->model = $model;
      }

      public function display()
      {
          return $this->startEngine() . " " . $this->model;
      }
  }

  // Create an object of the Car class
  $myCar = new Car("Toyota", "Corolla");

  // Access the method
  echo $myCar->display();
  ?>