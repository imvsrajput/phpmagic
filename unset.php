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
    public function __unset($content)
    {
        echo "It is called automatically when we use the unset() method outside the class.";
        echo  isset($this->$content);
    }
}
 
$obj = new Student("Ashok", 30); // Initially assigned.
unset($obj->gender);
unset($obj->name);
unset($obj->reg);
?>