<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('about');
		$this->load->view('layouts/footer');
	}
	
}