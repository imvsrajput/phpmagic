<?php 

class Sample { 
  function user_define() { 
    echo "This is user defined function "; 
  } 
  function __call($fun, $arg) { 
        echo "function that not exists:<b>" . $fun."</b> "; 
        echo "parameter list of method that does not exist:<br>"; 
        print_r($arg); 
    } 
}

$obj = new Sample(); 
$obj->run("teacher"); // If the method which is not existed is called within the object, then the __call() method will be called automatically.
$obj->eat("ashok", "orange");             
$obj->user_define();
?>