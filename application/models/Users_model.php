<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends MY_Model {

    function __construct() {
        parent::__construct();        
    }

    public function get_postion_id_by_users_id($user_id = 0){
        
        $record = array();
        $query_string = "
        SELECT 
            u.position_id as position_id
        FROM
            users u 
        WHERE 1 = 1
        AND u.username = '{$user_id}' 
        ";

        $query = $this->db->query($query_string);
        $record = $query->result_array();

        return $record;
        
    }
	
}
