<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * On the surface it may seem like everything is fine with regard to Open-Closed Principle, but the thing is we add new property and new method in HybridCar that are specific only to hybrid cars and not to other cars. With this, CarFeatures is no longer a comprehensive contract for all car types, as the HybridCar class introduces new behavior that is not part of the original abstraction.
 *
 * To adhere to the Open-Closed Principle, we should follow the approach of using interfaces or abstractions and avoid modifying the existing classes directly when introducing new features. Instead, we can define separate interfaces for unique car features and let each car type implement the relevant interfaces, ensuring a more flexible and extensible design.
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

class HybridCar implements CarFeatures {
    protected string $model;

    // New feature specific to HybridCar (violates OCP)
    protected bool $isSelfCharging;

    public function __construct(string $model, bool $isSelfCharging) {
        $this->model = $model;
        $this->isSelfCharging = $isSelfCharging;
    }

    public function startEngine(): string {
        return "Starting the hybrid engine for {$this->model}";
    }

    public function drive(): string {
        return "{$this->model} is driving in hybrid mode";
    }

    // New method specific to HybridCar (violates OCP)
    public function isSelfCharging(): string {
        return $this->isSelfCharging ? 'Yes' : 'No';
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
echo "Is self-charging: " . $hybridCar->isSelfCharging();
