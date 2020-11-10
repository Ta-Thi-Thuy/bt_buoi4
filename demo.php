<?php
class Human{
    private $name ;
    public $age;
    function __construct($name,$age)
    {
        //$this->name= $name;
        $this->age= $age;
        $this->setName($name);
    }

    function setName($new_name){
        $this->name=$new_name;
    }
    function getName (){
        return $this->name;
    }
    function getAge() {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}
$human2 = new Human("BO",19);
//echo $human2->name;




echo $human2->getName()."<br>";
echo $human2->getAge();
/*
$human = new Human();
$human->setName("thuy");
$human->setAge(20);
echo $human->getName();
echo $human->getAge();
*/