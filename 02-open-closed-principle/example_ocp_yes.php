<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * In this example Open-Closed Principle is demonstrated because from interface CarFeatures we create 2 classes - ElectricCar and GasolineCar. CarFeatures is open for extension, but closed for modification. Let's say after a while the client wants to add a new car - hybrid one. Then we create HybridCar class for this by extending CarFeatures interface.
 *
 * So what is the main idea or point of OCP? HybridCar class was added, previous classes (ElectirCar and GasolineCar were not modified - closed for modification) and the program still worked as expected. A new method called chargeBattery was added in HybridCar but this didn't affect the correctness of the program and didn't violate OCP because it didn't cause cascading effect.
 *
 * Think about OCP in terms of seamless and smooth integration. Can you integrate the classes you have easily, or you need to modify them to fit your scenario? If the latter is the case, then closed for modification rule is violated and with it OCP.
 */

// Interface representing car features that can be extended
interface CarFeatures {
    public function startEngine(): string;
    public function drive(): string;
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
}

// Hybrid car extending CarFeatures
class HybridCar implements CarFeatures {
    protected string $model;

    public function __construct(string $model) {
        $this->model = $model;
    }

    public function startEngine(): string {
        return "Starting the hybrid engine for {$this->model}";
    }

    public function drive(): string {
        return "{$this->model} is driving in hybrid mode";
    }

    public function chargeBattery(): string {
        return "{$this->model} is charging the battery";
    }
}

$electricCar = new ElectricCar('Tesla');
$gasolineCar = new GasolineCar('BMW');
$hybridCar = new HybridCar('Honda Accord Hybrid', true);

echo $electricCar->startEngine();
echo "<br />";
echo $electricCar->drive();
echo "<hr/>";
echo $gasolineCar->startEngine();
echo "<br />";
echo $gasolineCar->drive();
echo "<hr/>";
echo $hybridCar->startEngine();
echo "<br />";
echo $hybridCar->drive();
echo "<br />";
echo $hybridCar->chargeBattery();
