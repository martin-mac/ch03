<?php
class PropertyTest{    
	private $data = array();     
	protected $declared = 1; 
	#public $a;    
	private $hidden = 2;     
	public function __set($name, $value)    {        
      echo "set"."<br />"; 		
		echo "Setting '$name' to '$value'<br />\n";        
		$this->data[$name] = $value;   
	}     
	public function __get($name)    {        
      echo "get"."<br />";		
		echo "Getting '$name'<br />\n";        
		if (array_key_exists($name, $this->data)) {            
			return $this->data[$name];			        
		} /*        
		$trace = debug_backtrace();        
		trigger_error'Undefined property via __get(): '.$name.' in '.$trace[0]['file'].' on line '.$trace[0]['line'],E_USER_NOTICE);
	   return null;  */  
	}     
/**  As of PHP 5.1.0  */    
	public function __isset($name)    {   
	   echo "isset"."<br />";     
		echo "Is '$name' set?\n";        
		return isset($this->data[$name]);    
	}     
/**  As of PHP 5.1.0  */    
	public function __unset($name)    {        
		echo "Unsetting '$name'\n";        
		unset($this->data[$name]);    
	}     
/**  Not a magic method, just here for example.  */    
	public function getHidden()    {        
		return $this->hidden;    
	}
}
   $obj = new PropertyTest;
   $obj->declared = 9;
   echo $obj->declared;
?>