<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * In this example ISP is good because the larger interface in example_isp_no.php is split into 3 smaller interfaces. Each class implements the interfaces it needs thus the methods of the interfaces and is not forced to implement methods it does not need.
 *
 * The trick with ISP is to design the interfaces in a good way as to prevent having too many interfaces because in theory you could have 1 interface = 1 method, and soon you can end up with 10s of interfaces instead of 4-5 for example. Finding the right balance is the key.
 */

// Interface for common car features
interface CarFeatures {
    public function startEngine(): string;
    public function drive(): string;
}

// Interface for electric cars with additional charging feature
interface ElectricCarFeatures extends CarFeatures {
    public function charge(): string;
}

// Interface for gasoline cars with additional refueling feature
interface GasolineCarFeatures extends CarFeatures {
    public function refuel(): string;
}

// Electric car implementing ElectricCarFeatures
class ElectricCar implements ElectricCarFeatures {
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

// Gasoline car implementing GasolineCarFeatures
class GasolineCar implements GasolineCarFeatures {
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
