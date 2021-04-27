<?php

//Write your custome class/methods here
namespace Apps;

use mysqli;

class Core extends Model
{


	/** @return exit  */
	public function __construct()
	{
		parent::__construct();
	}

public function RegisterMembers($fname,$lname,$email,$mobile,$dateofbirth,$password,$repeatpassword)
{
	mysqli_query($this->dbCon,"INSERT INTO sgroup_table($fname,$lname,$email,$mobile,$dateofbirth,$password,$repeatpassword) VALUES('$fname','$lname','$email','$mobile','$password','$repeatpassword')");
	return $this->getLastId;
}

public function Selectmember()
{
	$selected = mysqli_query($this->dbCon, "SELECT * sgroup_table");
	return $selected;
}
	
}
