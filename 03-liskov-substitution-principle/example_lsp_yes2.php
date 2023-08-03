<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

// Interface representing a basic car
interface CarInterface {
    public function startEngine(): string;
    public function drive(): string;
}

// Electric car implementing the CarInterface
class ElectricCar implements CarInterface {
    protected string $model;

    public function __construct(string $model) {
        $this->model = $model;
    }

    public function startEngine(): string {
        return "Turning on electric power for {$this->model}";
    }

    public function drive(): string {
        return "{$this->model} is driving";
    }

    public function charge(): string {
        return "{$this->model} is charging";
    }
}

// Gasoline car implementing the CarInterface
class GasolineCar implements CarInterface {
    protected string $model;

    public function __construct(string $model) {
        $this->model = $model;
    }

    public function startEngine(): string {
        return "Igniting gasoline engine for {$this->model}";
    }

    public function drive(): string {
        return "{$this->model} is driving";
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
