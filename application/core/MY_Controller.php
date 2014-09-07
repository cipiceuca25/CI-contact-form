<?php

class MY_Controller extends CI_Controller{
    public $data = array(); // cross/view data
    public function __construct() {
        parent::__construct();
    }
    
    public function load_view($subview){
        $this->data['subview'] = $subview;
        $this->load->view('layouts/layout',$this->data);
    }
}