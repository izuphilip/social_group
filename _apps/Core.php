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

	public function password1tohash($password)
{
	return sha1(md5($password . encrypt_salt));
	
}

	public function UserLogin($email,$password)
	{
		$login = mysqli_query($this->dbCon, "SELECT * FROM sgroup_table WHERE email='$email' AND password='$password'");
		$row = mysqli_fetch_object($login);
		return $row;
	}

public function RegisterMembers($fname,$lname,$email,$mobile,$dateofbirth,$password)
{
	 $added =  mysqli_query($this->dbCon, "INSERT INTO `sgroup_table` (`id`, `fname`, `lname`, `email`, `mobile`, `date_of_birth`, `password`) VALUES (NULL, '$fname', '$lname', '$email', '$mobile', '$dateofbirth', '$password');");
	return $added;
}
 
public function Getregistered()
{
	$getmembers = mysqli_query($this->dbCon, "SELECT *  FROM sgroup_table ");
	return $getmembers;
}


}


