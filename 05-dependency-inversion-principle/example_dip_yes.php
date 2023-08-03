<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

/**
 * In this example the high level class Car does not depend on low-level modules but on abstractions - EngineInterface and FuelInterface implemented by Engine and Fuel, respectively. The low-level modules Engine and Fuel also depend on abstractions.
 *
 * The take-home message is the point of Dependency Inversion Principle is to use loose coupling between classes. Instead of injecting concrete classes in the constructor of Car, we inject interfaces which are implemented by the classes Engine and Fuel.
 *
 *
 */

interface EngineInterface
{
    public function start();
}

interface FuelInterface
{
    public function getFuelType();
}

class Engine implements EngineInterface
{
    public function start(): string
    {
        return "The engine is running";
    }
}

class Fuel implements FuelInterface
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

    // class Car now depends on abstractions, not on concrete classes
    public function __construct(EngineInterface $engine, FuelInterface $fuel)
    {
        $this->engine = $engine;
        $this->fuel = $fuel;
    }

    public function startEngine(): string {
        return $this->engine->start();
    }

    public function getFuelType(): string
    {
        return "The car fuel type is: " . $this->fuel->getFuelType();
    }
}

$car = new Car(new Engine(), new Fuel('diesel'));
echo $car->startEngine();
echo "<br />";
echo $car->getFuelType();
