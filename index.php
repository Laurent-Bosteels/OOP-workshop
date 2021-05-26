
<?php
class Beverage
{

    private string $color;
    private float $price;
    private string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo()
    {
        return "This beverage is " . $this->temperature . " and " . $this->color . " and costs " . $this->price . " euro";
    }
}

$cola = new Beverage("black", 2);
echo $cola->getInfo();

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholPercentage . "% alcoholpercentage";
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getInfo()
    {
        return parent::getInfo() . " and has a " . $this->alcoholPercentage . "% alcoholpercentage";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholpercentage();
echo "<br>";
