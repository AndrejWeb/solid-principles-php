<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * In this example the LSP is violated because gasoline cars use the method charge() from parent class Car and this method is not applicable to gasoline cars but only to electric cars. LSP is also violated because ElectricCar adds its own method charge().
 */

class Car {
    protected string $model;

    public function __construct(string $model) {
        $this->model = $model;
    }

    public function startEngine(): string {
        return "Starting the engine of {$this->model}";
    }

    public function drive(): string {
        return "{$this->model} is driving";
    }

    public function charge(): string {
        return "{$this->model} is charging"; // This method is specific to ElectricCar only
    }
}

class ElectricCar extends Car {
    public function __construct(string $model) {
        parent::__construct($model);
    }

    // ElectricCar class violates Liskov Substitution Principle
    // by adding a charge() method that is specific to it only.
    public function charge(): string {
        return "{$this->model} is charging";
    }
}

class GasolineCar extends Car {
    public function __construct(string $model) {
        parent::__construct($model);
    }
}

$electricCar = new ElectricCar('Tesla');
$gasolineCar = new GasolineCar('BMW');

echo $electricCar->startEngine();
echo "<br />";
echo $electricCar->drive();
echo "<br />";
echo $electricCar->charge();
echo "<hr/>";
echo $gasolineCar->startEngine();
echo "<br />";
echo $gasolineCar->drive();
echo "<br />";
echo $gasolineCar->charge(); // gasoline cars do not do power charging
