<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * Here the ISP is violated because ElectricCar is forced to implement method refuel() which it does not use / need and GasolineCar is forced to implement method charge() which it does not use / need
 */

// Single large interface containing all car features
interface CarFeatures {
    public function startEngine(): string;
    public function drive(): string;
    public function charge(): string; // Charging feature specific to electric cars
    public function refuel(): string; // Refueling feature specific to gasoline cars
}

// Electric car implementing CarFeatures
class ElectricCar implements CarFeatures {
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

    public function refuel(): string {
        // This method is not applicable to ElectricCar,
        // but it is required to implement due to the large interface.
        throw new Exception("Electric cars don't refuel with gasoline.");
    }
}

// Gasoline car implementing CarFeatures
class GasolineCar implements CarFeatures {
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

    public function charge(): string {
        // This method is not applicable to GasolineCar,
        // but it is required to implement due to the large interface.
        throw new Exception("Gasoline cars don't charge.");
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
echo "<br />";
try {
    echo $electricCar->refuel();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<hr/>";
echo $gasolineCar->startEngine();
echo "<br />";
echo $gasolineCar->drive();
echo "<br />";
echo $gasolineCar->refuel();
echo "<br />";
try {
    echo $gasolineCar->charge();
} catch (Exception $e) {
    echo $e->getMessage();
}
