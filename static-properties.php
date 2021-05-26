
<?php

class Beverage

{

    protected string $color;
    protected float $price;
    protected string $temperature = "cold";
    private static int $timesServed = 0;

    public function __construct(string $color, float $price, string $temperature = "cold")

    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        self::$timesServed++;
    }

    public function getInfo()

    {

        return "This beverage is " . $this->temperature . " and " . $this->color . " and costs " . $this->price . " euro";
    }

    public function setColor($color)

    {

        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getTotalServed()
    {
        return self::$timesServed;
    }


}

class Beer extends Beverage

{
    protected string $name;
    protected float $alcoholPercentage;

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
        return parent::getInfo() . " and has a " . $this->alcoholPercentage . "% alcoholpercentage" . " and I have a " . $this->getColor() . " color";
    }

    public function beerInfo()
    {
        return "Hi, I'm " . $this->name . " and I have an alcoholic percentage of " . $this->alcoholPercentage . "";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholpercentage();
echo "<br>";

$duvel->setColor('light');
echo $duvel->getInfo();
echo "<br>";
echo $duvel->beerInfo();


var_dump($duvel);

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
$rochefort = new Beer("brown", 5, "Rochefort", 11,5);
$chimay = new Beer("brown", 4.5, "Chimay", 8.5);

var_dump($rochefort);
var_dump($chimay);

echo $duvel->getTotalServed();



