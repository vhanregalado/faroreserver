<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();        
    }
    
    public function render_landing_page($options = array(), $data = array()){
        // $user_id = $this->session->userdata('user_id');
        // $position_id = $this->session->userdata('user_id');
        
        if(isset($options['params'])){
            $view_params = $options['params'];
        }
        else{
            $view_params = array();
        }

        if( isset($options['page_title']) ){
            $view_params['page_title'] = $options['page_title'];
        }
        
        if( isset($options['main_page']) ){
            $view_params['main_page'] = $options['main_page'];
        }
        
        if( isset($options['sub_page']) ){
            $view_params['sub_page'] = $options['sub_page'];
        }

        // $data['user_id'] = $user_id;

        $view_params['copyright'] = $this->auto_copyright();
        
        $data['content'] = $this->load->view($options['page'], $view_params,TRUE);
        
        $this->load->view('construct_landing/template',$data);       
           
    }

    public function render_page($options = array(), $data = array()){

        $user_id = $this->session->userdata('user_id');
        $position_id = $this->Users->get_position_by_user_id($user_id);

        if(isset($options['params'])) {
            $view_params = $options['params'];
        }
        else {
            $view_params = array();
        }
        
        if( isset($options['page_title']) ){
            $view_params['page_title'] = $options['page_title'];
        }
        
        if( isset($options['main_page']) ){
            $view_params['main_page'] = $options['main_page'];
        }
        
        if( isset($options['sub_page']) ){
            $view_params['sub_page'] = $options['sub_page'];
        }

        $data['user_id'] = $user_id;

        $view_params['copyright'] = $this->auto_copyright();
        
        $data['content'] = $this->load->view($options['page'], $view_params,TRUE);
        
        $this->load->view('construct/template',$data);

    }

    /**
    * This is used mostly in all pages except for login if user can access a specific page
    */
    
    public function _verify_user_authentication() {

        $user_id	= $this->session->userdata('user_id');
        
        if (isset($user_id) == FALSE || $user_id == '') {
            $this->session->set_flashdata('session_exp','Your session has expired. Please log in again.');
            $this->session->set_userdata('referrer', current_url());
            redirect(base_url());
        }

    }

    /**
    * This is for changing the copyright
    * @param 	string 	$year 	starting year/ if auto void.
    * @return 	string 			year
    */

    private function auto_copyright($year = 'auto') {
        
        if(intval($year) == 'auto'){
            return date('Y');
        }

        if(intval($year) == date('Y')){
            return intval($year);
        }

        if(intval($year) < date('Y')){
            return intval($year) . ' - ' . date('Y');
        }

        if(intval($year) > date('Y')){
            return date('Y');
        }
    }


	
}
