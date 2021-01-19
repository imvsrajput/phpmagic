<?php 

class Student { 
    private $name; 
    private $reg; 
    public function __construct($name="", $reg=30) { 
        $this->name = $name;
        $this->reg = $reg;
    }
 
    public function __set($property, $value)
    {
        if ($property=="reg")
        {
            if ($value > 150 || $value < 0) {
                return; 
            } 
        }
        $this->$property = $value;
    }
 
    public function fun()
    {
        echo "My name is ".$this->name.",My registration number is ".$this->reg;
    }
}
 
$obj=new Student("Ashok", 40); //Note that the initial value will be changed by the code below.
$obj->name = "shma";     //The "name" property will be assigned successfully. If there is no __set() method, then the program will throw an exception.
$obj->reg = 30; //160 is an invalid value, so it fails to be assigned.
$obj->fun(); 
?>