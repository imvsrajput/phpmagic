	
<?php 

class Student {
	public $gender; 
	public $name; 
	public $reg; 
	public function __construct($name="", $reg=30, $gender='Male') { 
		$this->name   = $name;
        $this->reg    =$reg;
        $this->gender = $gender;
    }
    public function __sleep() 
    {
        echo "It is called when the serialize() method is called outside the class.";
        $this->name = base64_encode($this->name);
        return array('name', 'reg'); // It must return a value of which the elements are the name of the properties returned.
    }
    public function __wakeup() 
    {
        echo "It is called when the unserialize() method is called outside the class.";
        $this->name = 2;
        $this->gender = 'Male';
    }
}
$obj= new Student('Ashok'); // Initially assigned.
var_dump(serialize($obj));
var_dump(unserialize(serialize($obj)));
?>