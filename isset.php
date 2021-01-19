<?php
	
class Student {
	public $gender; 
	private $name; 
	private $reg; 
	public function __construct($name="", $reg=30, $gender='Male') { 
		$this->name = $name;
        $this->reg  = $reg;
        $this->gender  = $gender;
    }
 
    public function __isset($content)
    {
        echo "The {$content} property is private，the __isset() method is called automatically.";
        echo  isset($this->$content);
    }
}
 
$obj = new Student("Ashok", 30); // Initially assigned.
echo isset($obj->gender),"<br>";
echo isset($obj->name),"<br>";
echo isset($obj->reg),"<br>";
?>