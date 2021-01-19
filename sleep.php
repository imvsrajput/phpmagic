<?php 
class Student { 
	public $gender; 
	public $name; 
	public $reg; 
	public function __construct($name="", $reg=25, $gender='Male') {
	    $this->name = $name;
        $this->reg= $reg;
        $this->gender = $gender;
    }
    public function __sleep()
    {
        echo "It is called when the serialize() method is called outside the class.";
        $this->name = base64_encode($this->name);
        return array('name', 'reg'); // It must return a value of which the elements are the name of the properties returned.
    }
}
 
$obj = new Student('Ashok'); // Initially assigned.
echo serialize($obj);
echo '';
?>