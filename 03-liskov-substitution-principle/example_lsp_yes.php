<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * This example follows the Liskov Substitution Principle, as the base class and its subclasses maintain the expected behaviors, and objects of Car, ElectricCar, and GasolineCar can be used interchangeably without violating the correctness of the program.
 *
 * The method charge() is moved from Car to ElectricCar class, method refuel() is added to GasolineCar and this way the correctness of the program is kept.
 *
 * Check example_lsp_yes2.php for 2nd solution using interface
 *
 * There are other rules for subclasses and their methods, but as to not go too much into details check them out on the internet.
 *
 * Hint: it's about parameter types in a method of a subclass, the return type in a method of a subclass, a method in a subclass throwing exceptions which isn't supposed to throw, post-conditions, pre-conditions, invariants and not changing the values of private fields of the superclass (possible in some languages like Javascript and Python for example).
 *
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
}

class ElectricCar extends Car {
    public function __construct(string $model) {
        parent::__construct($model);
    }

    public function charge(): string {
        return "{$this->model} is charging";
    }
}

class GasolineCar extends Car {
    public function __construct(string $model) {
        parent::__construct($model);
    }

    public function refuel(): string {
        return "{$this->model} is refueling with gasoline";
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
echo $gasolineCar->refuel();
