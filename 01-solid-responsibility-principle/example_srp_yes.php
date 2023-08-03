<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * In this example, we have separated the responsibilities. The Car class focuses solely on car features, such as starting the engine and driving. The tax calculation is moved to a separate TaxCalculator class, which is responsible for handling tax calculations based on the fuel type. Now, each class has a single responsibility, and the code is more organized and maintainable. It also allows us to add new car features or tax calculation methods without modifying existing code, following the Single Responsibility Principle.
 */

// Car class with single responsibility for car features
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

// TaxCalculator class with single responsibility for tax calculation
class TaxCalculator {
    public function calculateTax(string $fuelType): float {
        if ($fuelType === 'gasoline') {
            return 1000; // Tax calculation for gasoline cars
        } elseif ($fuelType === 'electric') {
            return 500; // Tax calculation for electric cars
        } else {
            return 0; // Default tax for other types
        }
    }
}

$car = new Car('BMW');
$tax = new TaxCalculator();
echo $car->startEngine();
echo "<br />";
echo $car->drive();
echo "<br />";
echo "The tax for gasoline cars is: " . $tax->calculateTax('gasoline');
echo "<br />";
echo "The tax for electric cars is: " . $tax->calculateTax('electric');
