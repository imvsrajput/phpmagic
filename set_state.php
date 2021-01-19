<?php 
class Student { 
	public $gender; 
	public $name; 
	public $reg; 
	public function __construct($name="", $reg=30, $gender='Male') { 
		$this->name = $name;
        $this->reg  = $reg;
        $this->gender = $gender;
    }
}
$obj = new Student('Ashok'); // Initially assigned.
var_export($obj);
?>