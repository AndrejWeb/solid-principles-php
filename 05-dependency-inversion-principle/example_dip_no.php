<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * The code below violates Dependency Inversion Princinple because class Car depends on the classes Engine and Fuel and not on abstraction. How can we solve this? By using abstractions (interfaces). Check example_dip_yes.php
*/

class Engine
{
    public function start(): string {
        return "The engine is running.";
    }
}

class Fuel
{
    public function __construct(public string $fuelType)
    {}
    public function getFuelType(): string
    {
        return $this->fuelType;
    }
}

class Car
{

    private $engine;
    private $fuel;

    // direct dependencies on classes Engine and Fuel
    public function __construct()
    {
        $this->engine = new Engine();
        $this->fuel = new Fuel('diesel');
    }


    public function startEngine(): string
    {
        return $this->engine->start();
    }

    public function getFuelType(): string
    {
        return "The car fuel type is: " . $this->fuel->getFuelType();
    }
}

$car = new Car();
echo $car->startEngine();
echo "<br />";
echo $car->getFuelType();

