<?php
class Vehicles{
    public $name;
    public $color;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
}
$rangerover = new Vehicles();
$rangerover->setName('rangerover');
$rangerover->setColor('black');
echo "Name:". $rangerover->getName();
echo "<br>";
echo "color:".$rangerover->getColor();
?>