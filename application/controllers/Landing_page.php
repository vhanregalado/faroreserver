<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends MY_Controller {
    	
	public function index()
	{
		$this->load->view('landing_page/index');
	}
}
