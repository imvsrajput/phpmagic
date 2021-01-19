<?php 

class Student {
    private $name; 
    private $reg; 
    function __construct($name="", $reg=1) { 
        $this->name = $name;
        $this->reg = $reg;
    }
 
    public function __get($propertyName)
    {   
        if ($propertyName == "reg") {
            if ($this->reg>30) {
                return $this->reg - 10;
            } else {
                return $this->$propertyName;
            }
        } else {
            return $this->$propertyName;
        }
    }
}
$obj = new Student("Ashok", 60);   // Instantiate the object with the Student class and assign initial values to the properties with the constructor.
echo "Name：" . $obj->name . "
";   // When the private property is accessed, the __get() method will be called automatically,so we can get the property value indirectly.
echo "reg：" . $obj->reg . "
";    // The __get() method is called automatically，and it returns different values according to the object itself.
?>