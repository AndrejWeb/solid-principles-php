<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * In this example, the Car class violates the Single Responsibility Principle by having multiple responsibilities. The class not only represents a car's features (startEngine() and drive()) but also calculates the tax based on the fuel type. This coupling of unrelated responsibilities can make the class harder to maintain and understand, especially if tax calculation logic becomes more complex.
 *
 * In summary, don't mistake that SRP => 1 class = 1 function. No, it's not like that. It means 1 class should perform jobs for 1 task, not for 2 tasks. For example for create / update / edit / delete user you can have these methods in 1 class, but if you want to print the user info, you can delegate this task to another class.
 *
 */

class Car {
    protected string $model;
    protected string $fuelType;

    public function __construct(string $model, string $fuelType) {
        $this->model = $model;
        $this->fuelType = $fuelType;
    }

    public function startEngine(): string {
        return "Starting the engine of {$this->model}";
    }

    public function drive(): string {
        return "{$this->model} is driving";
    }

    // Violating SRP by adding unrelated responsibility to the Car class
    public function calculateTax(): float {
        if ($this->fuelType === 'gasoline') {
            return 1000; // Tax calculation for gasoline cars
        } elseif ($this->fuelType === 'electric') {
            return 500; // Tax calculation for electric cars
        } else {
            return 0; // Default tax for other types
        }
    }
}

$car = new Car('BMW', 'gasoline');
echo $car->startEngine();
echo "<br />";
echo "The tax for the car is: " . $car->calculateTax();
