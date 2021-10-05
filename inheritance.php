<?php
class bike{
    public $name;
    public $speed;
    public function __construct($name,$speed){
        $this->name=$name;
        $this->speed=$speed;
    }
    public function query()
    {
        echo " what is the name of the bike and its speed";
    }
}
class bullet extends bike{
    public function answer(){
        echo " bike name is $this->name and its speed is $this->speed";
    }
}
$bullet=new bullet('bullet','350CC');
$bullet->query();
$bullet->answer();
?>