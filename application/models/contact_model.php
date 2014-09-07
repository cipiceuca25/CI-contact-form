<?php

class Contact_model extends MY_Model{
    
    public function __construct(){
        parent::__construct();
    }
    // Set the validation rules.
    public $validation = array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim|xss_clean',
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|trim|xss_clean',
        ),
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required|trim|xss_clean',
        ),
        array(
            'field' => 'contents',
            'label' => 'Contents',
            'rules' => 'required|trim|sanitize|xss_clean',
        ),
    );
    public function insert(){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'title' => $this->input->post('title'),
            'contents' => $this->input->post('contents'),
        );
        parent::insert($data);
        
    }
   
}