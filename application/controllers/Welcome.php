<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function Sayhello()
	{
		echo "Hello";
	}

	public function Hello ()
	{
		$this->load->view('First');
	}
}
