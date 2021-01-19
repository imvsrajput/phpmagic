<?php 
class Sample { 
	function user_define() { 
		echo "This is user defined function "; 
	}
	 public static function __callStatic($fun, $arg) { echo "Method that does not exist：" . $fun . " "; echo "parameter list of method that does not exist:"; print_r($arg); } 
	 } 

	 $obj = new Sample(); 
	 $obj::run("Student"); // If the method does not exist is called within the object, then the __callStatic() method will be called automatically. $obj::eat("ashok", "orange"); $obj->user_define();
?>