<?php 


class sample { 
	function __construct() {
	    echo "Constructor initialised"; 
	} 
	function user_def() {
	    echo "User defined function "; 
	} 
	function __destruct() {
	    echo "after user definition, object gets destroyed automatically"; 
	} 
} 
 
//check object is destroyed or not
$obj= new sample(); $obj->user_def();
echo is_object($obj)."";
?>