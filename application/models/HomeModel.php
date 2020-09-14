<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {


	public function welcome()
	{
		return 'welcome model';
	}
	public function insertUser (){
		$user = array(
			"fullName"=>"juan",
			"city"=>"medellin",
			"identification"=>"2345678987",
			"email"=>"admin@gmail.com"
		);
		/*inset data into database*/
		$this->db->insert("users",$user);
		return 'user added successfuly';	
	}
}