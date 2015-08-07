<?php

class Contact {
	
// properties
	
	Private $name;
    Private $phone;
    Private $address;


	function __construct($name, $phone, $address)
	{
    	$this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }


// getters and setters

    function getName() 
    {
        return $this->name;
    }

    function getPhone() 
    {
        return $this->phone;
    }

    function getAddress() 
    {
        return $this->address;
    }

    function setName($new_name) {
        $this->name = (string) $new_name;
    }

    function sePhone($new_phone) {
        $this->phone = (string) $new_phone;
    }

    function setAddress($new_name) {
        $this->address = (string) $new_address;
    }

// methods

    function save() 
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }
       
// static methods

	static function getAll() 
	{
        return $_SESSION['list_of_contacts'];
    }
        
    static function deleteAll() 
    {
        $_SESSION['list_of_contacts'] = array();
    }
    


}



?>