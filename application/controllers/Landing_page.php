<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends MY_Controller {
    	
	public function index()
	{
		$data = array();
		
		$options = array(
			'page'			=>	'landing_page/index',
			'params'		=>	$data,
			'page_title'	=>	'Home',
			'main_page' 	=>	'Home'           
		);

		$this->render_landing_page($options);

	}

	public function features()
	{
		$data = array();
		
		$options = array(
			'page'			=>	'landing_page/features',
			'params'		=>	$data,
			'page_title'	=>	'Features',
			'main_page' 	=>	'Features'           
		);

		$this->render_landing_page($options);

	}

	public function about()
	{
		$data = array();
		
		$options = array(
			'page'			=>	'landing_page/about',
			'params'		=>	$data,
			'page_title'	=>	'About',
			'main_page' 	=>	'About'           
		);

		$this->render_landing_page($options);

	}

	public function contact()
	{
		$data = array();
		
		$options = array(
			'page'			=>	'landing_page/contact',
			'params'		=>	$data,
			'page_title'	=>	'Contact',
			'main_page' 	=>	'Contact'           
		);

		$this->render_landing_page($options);

	}

}