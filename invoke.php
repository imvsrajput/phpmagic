<?php
class Student { 
	public $gender; 
	public $name; 
	public $reg; 
	public function __construct($name="", $reg=30, $gender='Male') { 
		$this->name = $name;
        $this->reg  = $reg;
        $this->gender  = $gender;
    }
 
    public function __invoke() 
    {
        echo 'This is an object';
    }
 
}
 
$obj = new Student('Ashok'); // Initially assigned.
$obj();
?>