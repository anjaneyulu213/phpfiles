<?php
class Fruit{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
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
$banana=new Fruit('banana','yellow');
echo $banana->getName();
echo "<br>";
echo $banana->getColor();
?>