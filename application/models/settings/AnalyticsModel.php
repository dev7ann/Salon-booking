<?php

defined('BASEPATH') || exit('Direct script access is prohibited.');

class AnalyticsModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get() {
        $res = $this->db
                    ->limit(1)
                    ->get('analytics-settings')
                    ->row_array();
        return $res['code'];
    }
    
    public function set($fields) {
        $this->db
             ->set($fields)
             ->where('id', 1)
             ->update('analytics-settings');
    }
}