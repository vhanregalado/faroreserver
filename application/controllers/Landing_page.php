<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends MY_Controller {
    	
	public function index()
	{
		$data = array();
		$position_id = array();

		$this->load->model('Users');

		$position_id = $this->Users->get_position_id_by_users_id(1);

		// kprint($position_id);exit;

		$data['position'] = $position_id[0]['position_id'];

		$data['username'] = 'vhan';		

		$options = array(
			'page'		=> 'landing_page/index',
			'params'	=> $data,
			'page_title'=> 'Home'            
		);

		$this->render_landing_page($options);

	}
}